<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Utilisateur;
use App\Entity\Franchises;
use App\Form\UtilisateurType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Service\FacePlusPlusService;

final class AdminUserController extends AbstractController
{
    #[Route('/admin/user', name: 'app_admin_user')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(Utilisateur::class)->findAll();

        return $this->render('admin_user/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/admin/user/{id}/edit-inline', name: 'app_admin_user_edit_inline', methods: ['POST'])]
    public function editInline(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['field']) && isset($data['value'])) {
            $field = $data['field'];
            $value = $data['value'];

            switch ($field) {
                case 'nom':
                    $utilisateur->setNom($value);
                    break;
                case 'prenom':
                    $utilisateur->setPrenom($value);
                    break;
                case 'email':
                    $utilisateur->setEmail($value);
                    break;
                case 'actif':
                    $utilisateur->setActif(filter_var($value, FILTER_VALIDATE_BOOLEAN));
                    if ($utilisateur->getIdFranchise()) {
                        $utilisateur->getIdFranchise()->setActif($utilisateur->getActif());
                    }
                    break;
            }

            $entityManager->flush();

            return $this->json(['success' => true, 'message' => 'Mise à jour réussie']);
        }

        return $this->json(['success' => false, 'message' => 'Données invalides'], 400);
    }

    #[Route('/admin/user/{id}/delete', name: 'app_admin_user_delete', methods: ['DELETE'])]
    public function delete(Utilisateur $utilisateur, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\JsonResponse
    {
        try {
            // Detach user from franchise (don't delete the franchise, it has other data)
            $utilisateur->setId_franchise(null);
            $entityManager->remove($utilisateur);
            $entityManager->flush();

            return $this->json(['success' => true]);
        } catch (\Exception $e) {
            return $this->json(['success' => false, 'message' => 'Erreur lors de la suppression: ' . $e->getMessage()], 500);
        }
    }

    #[Route('/admin/user/new', name: 'app_admin_user_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer, FacePlusPlusService $faceppService): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Server-side validation
        $errors = [];

        // Validate nom (letters and spaces only)
        if (empty($data['nom']) || !preg_match('/^[a-zA-ZÀ-ÿ\s\-]+$/', $data['nom'])) {
            $errors[] = 'Le nom ne doit contenir que des lettres.';
        }

        // Validate prenom (letters and spaces only)
        if (empty($data['prenom']) || !preg_match('/^[a-zA-ZÀ-ÿ\s\-]+$/', $data['prenom'])) {
            $errors[] = 'Le prénom ne doit contenir que des lettres.';
        }

        // Validate email
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'L\'adresse email n\'est pas valide.';
        } else {
            // Check if email already exists
            $existingUser = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $data['email']]);
            if ($existingUser) {
                $errors[] = 'Cette adresse email est déjà utilisée.';
            }
        }

        // Validate telephone (exactly 8 digits)
        if (empty($data['telephone']) || !preg_match('/^\d{8}$/', $data['telephone'])) {
            $errors[] = 'Le téléphone doit contenir exactement 8 chiffres.';
        }

        // Validate entreprise nom
        if (empty($data['entreprise_nom']) || !preg_match('/^[a-zA-ZÀ-ÿ0-9\s\-\'\.]+$/', $data['entreprise_nom'])) {
            $errors[] = 'Le nom de l\'entreprise n\'est pas valide.';
        }

        // Validate adresse
        if (empty($data['adresse'])) {
            $errors[] = 'L\'adresse est obligatoire.';
        }

        // Validate solde
        if (!isset($data['solde']) || !is_numeric($data['solde']) || floatval($data['solde']) < 0) {
            $errors[] = 'Le solde doit être un nombre positif.';
        }

        if (!empty($errors)) {
            return $this->json(['success' => false, 'errors' => $errors], 400);
        }

        // Create Franchise
        $franchise = new Franchises();
        $franchise->setNom($data['entreprise_nom']);
        $franchise->setEmail($data['email']);
        $franchise->setTelephone($data['telephone']);
        $franchise->setAdresse($data['adresse']);
        $franchise->setSolde_actuel(floatval($data['solde']));
        $franchise->setActif(true);
        $franchise->setDate_creation(new \DateTime());

        // Create User
        $utilisateur = new Utilisateur();
        $utilisateur->setNom($data['nom']);
        $utilisateur->setPrenom($data['prenom']);
        $utilisateur->setEmail($data['email']);
        $utilisateur->setRole('ROLE_FRANCHISE');
        $utilisateur->setActif(true);
        $utilisateur->setDate_creation(new \DateTime());
        $utilisateur->setId_franchise($franchise);

        // Handle Face Biometrics with Face++
        try {
            if (!empty($data['face_image'])) {
                $faceToken = $faceppService->detectFace($data['face_image']);
                if ($faceToken) {
                    // ALWAYS save the token to the database first
                    $utilisateur->setFace_token($faceToken);
                    // Wait 2s to respect Face++ free tier 1 QPS limit
                    sleep(2);
                    // Then try to add to FaceSet (for search during login)
                    $faceppService->addFaceToFaceSet($faceToken);
                }
            }
        } catch (\Exception $e) {
            error_log('Biometric enrollment failed: ' . $e->getMessage());
        }

        // Generate password (8 chars, readable)
        $characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ';
        $randomPassword = '';
        for ($i = 0; $i < 8; $i++) {
            $randomPassword .= $characters[random_int(0, strlen($characters) - 1)];
        }

        // Send Email
        try {
            $email = (new TemplatedEmail())
                ->from('no-reply@boussole.tn')
                ->to($utilisateur->getEmail())
                ->subject('Bienvenue chez Boussole !')
                ->htmlTemplate('emails/user_created.html.twig')
                ->context([
                    'prenom' => $utilisateur->getPrenom(),
                    'user_email' => $utilisateur->getEmail(),
                    'password' => $randomPassword,
                    'login_url' => $this->generateUrl('app_login', [], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL),
                ]);

            $mailer->send($email);
        } catch (\Exception $e) {
            // Include error message in response for debugging
            return $this->json([
                'success' => false, 
                'errors' => ['L\'envoi de l\'email a échoué : ' . $e->getMessage()],
                'mailer_debug' => true
            ], 500);
        }

        // Hash and set password
        $hashedPassword = $passwordHasher->hashPassword($utilisateur, $randomPassword);
        $utilisateur->setMot_de_passe($hashedPassword);

        try {
            $entityManager->persist($franchise);
            $entityManager->persist($utilisateur);
            $entityManager->flush();
        } catch (\Exception $e) {
            $msg = "Une erreur est survenue lors de l'enregistrement.";
            if (str_contains($e->getMessage(), 'Duplicate entry') && str_contains($e->getMessage(), 'email')) {
                $msg = "Cette adresse email est déjà utilisée.";
            }
            return $this->json(['success' => false, 'errors' => [$msg, $e->getMessage()]], 500);
        }

        return $this->json([
            'success' => true,
            'user' => [
                'id' => $utilisateur->getId_user(),
                'nom' => $utilisateur->getNom(),
                'prenom' => $utilisateur->getPrenom(),
                'email' => $utilisateur->getEmail(),
                'role' => 'Entreprise',
                'actif' => true,
                'temp_password' => $randomPassword // Passed back so they can see it even if the local email failed
            ]
        ]);
    }
}

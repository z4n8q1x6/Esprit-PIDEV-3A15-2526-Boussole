<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Entity\Utilisateur;

final class SecurityController extends AbstractController
{
    #[Route(path: '/', name: 'app_home')]
    public function home(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return $this->redirectToRoute('app_admin_user');
        }

        return $this->redirectToRoute('app_front_home');
    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            $user = $this->getUser();
            if (in_array('ROLE_ADMIN', $user->getRoles())) {
                return $this->redirectToRoute('app_admin_user');
            }
            return $this->redirectToRoute('app_front_home');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/forgot-password', name: 'app_forgot_password', methods: ['GET', 'POST'])]
    public function forgotPassword(
        Request $request, 
        EntityManagerInterface $entityManager, 
        UserPasswordHasherInterface $passwordHasher, 
        MailerInterface $mailer
    ): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);

            if ($user) {
                // Generate random password
                $characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ';
                $newPassword = '';
                for ($i = 0; $i < 10; $i++) {
                    $newPassword .= $characters[random_int(0, strlen($characters) - 1)];
                }

                // Hash and Save
                $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
                $user->setMot_de_passe($hashedPassword);
                $entityManager->flush();

                // Send Email
                try {
                    $templatedEmail = (new TemplatedEmail())
                        ->from('no-reply@boussole.tn')
                        ->to($user->getEmail())
                        ->subject('Réinitialisation de votre mot de passe - Boussole')
                        ->htmlTemplate('emails/password_reset.html.twig')
                        ->context([
                            'prenom' => $user->getPrenom(),
                            'password' => $newPassword,
                            'login_url' => $this->generateUrl('app_login', [], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL),
                        ]);

                    $mailer->send($templatedEmail);
                    $this->addFlash('success', 'Un nouveau mot de passe a été envoyé à votre adresse email.');
                } catch (\Exception $e) {
                    $this->addFlash('error', "L'envoi de l'email a échoué, mais votre mot de passe a été réinitialisé. Veuillez contacter le support.");
                }

                return $this->redirectToRoute('app_login');
            }

            $this->addFlash('error', 'Aucun compte associé à cette adresse email.');
        }

        return $this->render('login/forgot_password.html.twig');
    }
}

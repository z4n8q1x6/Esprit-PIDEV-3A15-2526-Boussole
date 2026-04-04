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

final class AdminUserController extends AbstractController
{
    #[Route('/admin/user', name: 'app_admin_user')]
    public function index(): Response
    {
        return $this->render('admin_user/index.html.twig', [
            'controller_name' => 'AdminUserController',
        ]);
    }

    #[Route('/admin/user/new', name: 'app_admin_user_new')]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $utilisateur = new Utilisateur();
        $franchise = new Franchises();
        
        // Auto default initialization to prevent null constraint errors
        $franchise->setDate_creation(new \DateTime());
        $utilisateur->setDate_creation(new \DateTime());
        $utilisateur->setActif(true);
        $utilisateur->setRole('ROLE_FRANCHISE');
        
        $utilisateur->setId_franchise($franchise);

        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if (empty($franchise->getEmail())) {
                $franchise->setEmail($utilisateur->getEmail());
            }

            // Secure generated random password
            $randomPassword = bin2hex(random_bytes(8));
            $hashedPassword = $passwordHasher->hashPassword(
                $utilisateur,
                $randomPassword
            );
            $utilisateur->setMot_de_passe($hashedPassword);

            // Persist the related entity first since it's required by the User constraints
            $entityManager->persist($franchise);
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_user');
        }

        return $this->render('admin_user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

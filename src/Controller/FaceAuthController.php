<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FaceAuthController extends AbstractController
{
    /**
     * This route is just a placeholder for the authenticator to intercept.
     * The capture is now done during user creation in AdminUserController.
     */
    #[Route('/login/face', name: 'app_login_face', methods: ['POST'])]
    public function login(): void
    {
        // Intercepted by FaceAuthenticator
    }
}

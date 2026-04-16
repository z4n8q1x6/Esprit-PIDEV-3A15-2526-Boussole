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
    public function login(): JsonResponse
    {
        // This is normally intercepted by FaceAuthenticator.
        // If it reaches here, it means authentication was not triggered or failed.
        return new JsonResponse(['success' => false, 'error' => 'Authentication not handled by security layer.'], 401);
    }
}

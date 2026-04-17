<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FacePlusPlusService;

class FaceAuthController extends AbstractController
{
    /**
     * This route is just a placeholder for the authenticator to intercept.
     * The capture is now done during user creation in AdminUserController.
     */
    #[Route('/login/face', name: 'app_login_face', methods: ['POST'])]
    public function login(): JsonResponse
    {
        return new JsonResponse(['success' => false, 'error' => 'Authentication not handled by security layer.'], 401);
    }

    #[Route('/face-sync', name: 'app_face_sync')]
    public function sync(EntityManagerInterface $em, FacePlusPlusService $facepp): JsonResponse
    {
        $users = $em->getRepository(Utilisateur::class)->createQueryBuilder('u')
            ->where('u.face_token IS NOT NULL')
            ->getQuery()
            ->getResult();
            
        $total = 0;
        foreach ($users as $user) {
            $facepp->addFaceToFaceSet($user->getFace_token());
            $total++;
            // Small pause to respect Face++ free tier
            if ($total % 2 === 0) usleep(500000); 
        }
        return new JsonResponse(['success' => true, 'synced' => $total]);
    }
}

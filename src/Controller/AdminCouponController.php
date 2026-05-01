<?php

namespace App\Controller;

use App\Entity\Coupon;
use App\Repository\CouponRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/coupon')]
class AdminCouponController extends AbstractController
{
    #[Route('/', name: 'app_admin_coupon_index', methods: ['GET'])]
    public function index(CouponRepository $couponRepository): Response
    {
        return $this->render('admin_coupon/index.html.twig', [
            'coupons' => $couponRepository->findAll(),
        ]);
    }

    #[Route('/generate', name: 'app_admin_coupon_generate', methods: ['POST'])]
    public function generate(EntityManagerInterface $entityManager): Response
    {
        $coupon = new Coupon();
        $code = strtoupper(substr(bin2hex(random_bytes(4)), 0, 6));
        
        $coupon->setCode($code);
        $coupon->setValeur(10.0); // Valeur fixe de 10 DT
        $coupon->setIsUsed(false);
        $coupon->setDateCreation(new \DateTime());

        $entityManager->persist($coupon);
        $entityManager->flush();

        $this->addFlash('success', 'Nouveau coupon généré : ' . $code);

        return $this->redirectToRoute('app_admin_coupon_index');
    }
}

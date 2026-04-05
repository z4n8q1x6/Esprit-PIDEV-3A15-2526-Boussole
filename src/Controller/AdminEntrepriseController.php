<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Franchises;

class AdminEntrepriseController extends AbstractController
{
    #[Route('/admin/entreprise', name: 'app_admin_entreprise')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $entreprises = $entityManager->getRepository(Franchises::class)->findAll();

        return $this->render('admin_entreprise/index.html.twig', [
            'entreprises' => $entreprises,
        ]);
    }

    #[Route('/admin/entreprise/{id}/edit-inline', name: 'app_admin_entreprise_edit_inline', methods: ['POST'])]
    public function editInline(Request $request, Franchises $entreprise, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['field']) && isset($data['value'])) {
            $field = $data['field'];
            $value = $data['value'];

            switch ($field) {
                case 'nom':
                    $entreprise->setNom($value);
                    break;
                case 'email':
                    $entreprise->setEmail($value);
                    break;
                case 'telephone':
                    $entreprise->setTelephone($value);
                    break;
                case 'adresse':
                    $entreprise->setAdresse($value);
                    break;
                case 'solde_actuel':
                    $entreprise->setSolde_actuel(floatval($value));
                    break;
                case 'actif':
                    $entreprise->setActif(filter_var($value, FILTER_VALIDATE_BOOLEAN));
                    foreach($entreprise->getUtilisateurs() as $u) {
                        $u->setActif($entreprise->getActif());
                    }
                    break;
            }

            $entityManager->flush();
            return $this->json(['success' => true]);
        }

        return $this->json(['success' => false], 400);
    }

    #[Route('/admin/entreprise/{id}/delete', name: 'app_admin_entreprise_delete', methods: ['DELETE'])]
    public function delete(Franchises $entreprise, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\JsonResponse
    {
        foreach($entreprise->getUtilisateurs() as $u) {
            $entityManager->remove($u);
        }
        $entityManager->remove($entreprise);
        $entityManager->flush();

        return $this->json(['success' => true]);
    }
}

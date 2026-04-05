<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Entity\Franchises;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
final class AfficherBackFournisseurController extends AbstractController
{
    #[Route('/afficher_back_fournisseur', name: 'app_afficher_back_fournisseur')]
    public function index(EntityManagerInterface $em): Response
    {
        $repository = $em->getRepository(Fournisseur::class);

        // Récupération des fournisseurs sous forme de tableau associatif
        // Jointure avec Franchises pour avoir le nom de la franchise
        $fournisseurs = $repository->createQueryBuilder('f')
            ->leftJoin('f.franchise_id', 'fr')
            ->addSelect('fr')
            ->getQuery()
            ->getArrayResult();

        // Récupérer la liste des franchises pour le select
        $franchises = $em->getRepository(Franchises::class)->findAll();

        $totalFournisseurs = count($fournisseurs);

        return $this->render('afficher_back_fournisseur/index.html.twig', [
            'fournisseurs' => $fournisseurs,
            'total_fournisseurs' => $totalFournisseurs,
            'franchises' => $franchises,
        ]);
    }

    #[Route('/afficher_back_fournisseur/edit/{id}', name: 'app_afficher_back_fournisseur_edit', methods: ['POST'])]
    public function edit(Fournisseur $fournisseur, Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data || !isset($data['field']) || !isset($data['value'])) {
            return new JsonResponse(['success' => false, 'message' => 'Données invalides'], 400);
        }

        $field = $data['field'];
        $value = $data['value'];

        // CONTROLE DE SAISIE (Mêmes règles que FournisseurType)
        switch ($field) {
            case 'nom':
                if (!preg_match('/^[a-zA-Z\s]+$/', $value)) {
                    return new JsonResponse(['success' => false, 'message' => 'Le nom doit contenir uniquement des lettres'], 400);
                }
                $fournisseur->setNom($value);
                break;
            case 'matricule_fiscal':
                if (!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9]).+$/', $value)) {
                    return new JsonResponse(['success' => false, 'message' => 'Le matricule doit inclure des lettres ET des chiffres'], 400);
                }
                $fournisseur->setMatriculeFiscal($value);
                break;
            case 'telephone':
                if (!preg_match('/^[0-9]+$/', $value)) {
                    return new JsonResponse(['success' => false, 'message' => 'Le téléphone doit contenir uniquement des chiffres'], 400);
                }
                $fournisseur->setTelephone($value);
                break;
            case 'franchise_id':
                $franchise = $em->getRepository(Franchises::class)->find((int) $value);
                if ($franchise) {
                    $fournisseur->setFranchiseId($franchise);
                } else {
                    return new JsonResponse(['success' => false, 'message' => 'Franchise introuvable'], 400);
                }
                break;
            default:
                return new JsonResponse(['success' => false, 'message' => 'Champ non modifiable'], 400);
        }

        $em->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/afficher_back_fournisseur/delete/{id}', name: 'app_afficher_back_fournisseur_delete', methods: ['DELETE'])]
    public function delete(Fournisseur $fournisseur, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($fournisseur);
        $em->flush();

        return new JsonResponse(['success' => true]);
    }
}

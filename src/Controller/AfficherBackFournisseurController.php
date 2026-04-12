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
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

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

    #[Route('/afficher_back_fournisseur/mail', name: 'app_afficher_back_fournisseur_mail')]
    public function sendEmailReport(EntityManagerInterface $em, MailerInterface $mailer): Response
    {
        $repository = $em->getRepository(Fournisseur::class);
        $fournisseurs = $repository->createQueryBuilder('f')
            ->leftJoin('f.franchise_id', 'fr')
            ->addSelect('fr')
            ->getQuery()
            ->getArrayResult();

        $htmlContent = $this->generateFournisseursEmailHtml($fournisseurs);

        $recipient = $_ENV['MAILER_TO'] ?? 'waellpbt@gmail.com';

        $email = (new Email())
            ->from($recipient)
            ->to($recipient)
            ->subject('Répertoire Complet des Fournisseurs - Boutique Boussole')
            ->html($htmlContent);

        try {
            $mailer->send($email);
            $this->addFlash('success', 'La liste des fournisseurs a été envoyée avec succès à ' . $recipient);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'envoi du mail : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_afficher_back_fournisseur');
    }

    private function generateFournisseursEmailHtml(array $fournisseurs): string
    {
        $rows = "";
        foreach ($fournisseurs as $f) {
            $franchiseName = $f['franchise_id']['nom'] ?? 'N/A';
            $rows .= "<tr>
                <td style='padding: 12px; border-bottom: 1px solid #ddd;'><strong>{$f['nom']}</strong></td>
                <td style='padding: 12px; border-bottom: 1px solid #ddd;'><span style='background: #eee; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 13px;'>{$f['matricule_fiscal']}</span></td>
                <td style='padding: 12px; border-bottom: 1px solid #ddd; color: #4e73df; font-weight: 500;'>{$f['telephone']}</td>
                <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$franchiseName}</td>
            </tr>";
        }

        $year = date('Y');
        $count = count($fournisseurs);

        return "
        <!DOCTYPE html>
        <html>
        <body style=\"font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; background-color: #f4f7f6;\">
            <div style=\"max-width: 800px; margin: 20px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
                <div style=\"background: #1cc88a; color: #fff; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;\">
                    <h1 style=\"margin: 0; font-size: 24px;\">Répertoire des Fournisseurs</h1>
                </div>
                <div style=\"padding: 20px;\">
                    <p>Bonjour,</p>
                    <p>Voici la liste actuelle des fournisseurs référencés dans votre plateforme <strong>Boussole</strong>.</p>
                    <table style=\"width: 100%; border-collapse: collapse; margin-top: 20px;\">
                        <thead>
                            <tr style=\"background-color: #f8f9fc; color: #1cc88a;\">
                                <th style=\"padding: 12px; text-align: left; border-bottom: 2px solid #e3e6f0;\">Nom du Fournisseur</th>
                                <th style=\"padding: 12px; text-align: left; border-bottom: 2px solid #e3e6f0;\">Matricule Fiscal</th>
                                <th style=\"padding: 12px; text-align: left; border-bottom: 2px solid #e3e6f0;\">Téléphone</th>
                                <th style=\"padding: 12px; text-align: left; border-bottom: 2px solid #e3e6f0;\">Franchise</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$rows}
                        </tbody>
                    </table>
                    <p style=\"margin-top: 20px;\"><strong>Total enregistré :</strong> {$count} fournisseurs</p>
                </div>
                <div style=\"padding: 20px; text-align: center; font-size: 12px; color: #777; border-top: 1px solid #eee; margin-top: 20px;\">
                    <p>&copy; {$year} Boussole - Gestion de Franchise. Tous droits réservés.</p>
                </div>
            </div>
        </body>
        </html>";
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

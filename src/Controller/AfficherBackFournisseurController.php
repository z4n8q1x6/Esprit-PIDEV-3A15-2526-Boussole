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
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;

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

        $logoPath = $this->getParameter('kernel.project_dir') . '/public/assets/images/logoboussole.png';
        if (file_exists($logoPath)) {
            $email->addPart((new DataPart(new File($logoPath), 'logo_boussole', 'image/png'))->asInline());
        }

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
                <td style='padding: 12px; border-bottom: 1px solid #eee;'><strong>{$f['nom']}</strong></td>
                <td style='padding: 12px; border-bottom: 1px solid #eee;'><span style='background: #f8f9fc; padding: 4px 8px; border-radius: 4px; font-family: monospace; font-size: 13px; color: #1d3b53; border: 1px solid #e3e6f0;'>{$f['matricule_fiscal']}</span></td>
                <td style='padding: 12px; border-bottom: 1px solid #eee; color: #4e73df; font-weight: bold;'>{$f['telephone']}</td>
                <td style='padding: 12px; border-bottom: 1px solid #eee;'>{$franchiseName}</td>
            </tr>";
        }

        $year = date('Y');
        $count = count($fournisseurs);

        return "
        <!DOCTYPE html>
        <html>
        <body style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; background-color: #f0f2f5;\">
            <div style=\"max-width: 800px; margin: 30px auto; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.05);\">
                <div style=\"background: #1d3b53; padding: 40px 20px; text-align: center; color: #fff;\">
                    <img src=\"cid:logo_boussole\" alt=\"Boussole Logo\" style=\"height: 70px; margin-bottom: 20px;\">
                    <h1 style=\"margin: 0; font-size: 26px; text-transform: uppercase; letter-spacing: 2px;\">Répertoire Fournisseurs</h1>
                    <p style=\"margin: 10px 0 0; opacity: 0.8; font-size: 14px;\">Rapport Officiel - Plateforme Boussole</p>
                </div>
                <div style=\"padding: 40px;\">
                    <p style=\"font-size: 16px;\">Bonjour,</p>
                    <p style=\"font-size: 16px;\">Veuillez trouver ci-dessous l'état actuel des fournisseurs référencés dans votre gestion de franchise.</p>
                    
                    <table style=\"width: 100%; border-collapse: collapse; margin-top: 30px;\">
                        <thead>
                            <tr style=\"background-color: #f8f9fc; color: #1d3b53;\">
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Entreprise</th>
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Matricule</th>
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Téléphone</th>
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Franchise</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$rows}
                        </tbody>
                    </table>
                    
                    <div style=\"margin-top: 35px; padding: 20px; background: #f8f9fc; border-radius: 8px; border-left: 5px solid #1d3b53;\">
                        <p style=\"margin: 0; font-size: 15px; color: #1d3b53;\">
                            <strong>Statistiques :</strong> Un total de <strong>{$count}</strong> fournisseurs sont actuellement actifs dans le système.
                        </p>
                    </div>
                </div>
                <div style=\"padding: 30px; text-align: center; font-size: 12px; color: #adb5bd; background: #fafafa; border-top: 1px solid #f0f0f0;\">
                    <p style=\"margin-bottom: 5px;\">&copy; {$year} <strong>Boussole</strong> - Écosystème de Gestion Intégré.</p>
                    <p style=\"margin-top: 0;\">Ceci est un message automatique, merci de ne pas y répondre.</p>
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

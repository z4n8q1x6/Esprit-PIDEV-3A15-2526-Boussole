<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Dompdf\Dompdf;
use Dompdf\Options;

final class CommandeController extends AbstractController
{
    #[Route('/mes-commandes', name: 'app_user_commandes')]
    public function mesCommandes(CommandeRepository $commandeRepository): Response
    {
        $user = $this->getUser();
        if (!$user || !$user->getIdFranchise()) {
            $this->addFlash('error', 'Vous devez être connecté et rattaché à une franchise pour voir vos commandes.');
            return $this->redirectToRoute('app_marketplace');
        }

        $commandes = $commandeRepository->findBy(
            ['franchise_id' => $user->getIdFranchise()],
            ['date_creation' => 'DESC']
        );

        return $this->render('commande/mes_commandes.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/admin/commandes', name: 'app_admin_commande')]
    public function adminIndex(CommandeRepository $commandeRepository): Response
    {
        $commandes = $commandeRepository->findBy([], ['date_creation' => 'DESC']);

        return $this->render('commande/admin_index.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/admin/commandes/{id}/status', name: 'app_admin_commande_status', methods: ['POST'])]
    public function updateStatus(Request $request, Commande $commande, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $status = $request->request->get('status');
        $currentStatus = $commande->getStatut();
        if (in_array($status, ['Validée', 'Refusée']) && $currentStatus !== $status) {
            $commande->setStatut($status);

            // If refused, we should restore stock
            if ($status === 'Refusée') {
                foreach ($commande->getLigne_commandes() as $ligne) {
                    $produit = $ligne->getProduit_id();
                    if ($produit) {
                        $produit->setStockDispo($produit->getStockDispo() + $ligne->getQuantite());
                        $entityManager->persist($produit);
                    }
                }

                $franchise = $commande->getFranchise_id();
                if ($franchise) {
                    $current_points = $franchise->getPointsFidelite();
                    $points_utilises = $commande->getPointsUtilises();
                    $points_gagnes = $commande->getPointsGagnes();
                    
                    $franchise->setPointsFidelite(max(0, $current_points + $points_utilises - $points_gagnes));
                    $entityManager->persist($franchise);
                }
            }

            $entityManager->flush();
            
            // Envoi de l'email à la franchise
            $franchiseMail = $commande->getFranchise_id() ? $commande->getFranchise_id()->getEmail() : null;
            $franchiseNom = $commande->getFranchise_id() ? $commande->getFranchise_id()->getNom() : 'Franchise';
            
            if ($franchiseMail) {
                $subject = $status === 'Validée' 
                    ? 'Votre commande n°' . $commande->getId() . ' a été validée'
                    : 'Information concernant votre commande n°' . $commande->getId();
                    
                $htmlBody = $status === 'Validée'
                    ? '<p>Bonjour <strong>' . $franchiseNom . '</strong>,</p><p>Nous avons le plaisir de vous informer que votre commande n°<strong>' . $commande->getId() . '</strong> a été <strong>validée</strong> par notre équipe.</p><p>Merci pour votre confiance !</p>'
                    : '<p>Bonjour <strong>' . $franchiseNom . '</strong>,</p><p>Nous vous informons que votre commande n°<strong>' . $commande->getId() . '</strong> a été <strong>refusée</strong>.</p><p>Les points de fidélité utilisés ainsi que les stocks des produits ont été restaurés. Pour plus d\'informations, n\'hésitez pas à nous contacter.</p>';

                $email = (new Email())
                    ->from('no-reply@boussole.tn')
                    ->to($franchiseMail)
                    ->subject($subject)
                    ->html($htmlBody);

                try {
                    $mailer->send($email);
                    $this->addFlash('success', 'Statut de la commande mis à jour et email envoyé avec succès à ' . $franchiseMail . '.');
                } catch (\Exception $e) {
                    $this->addFlash('warning', 'Le statut a été mis à jour mais l\'envoi de l\'email a échoué (Vérifiez la configuration MAILER_DSN).');
                }
            } else {
                $this->addFlash('success', 'Statut de la commande mis à jour (Aucun email n\'a été envoyé car la franchise n\'a pas d\'adresse).');
            }
        }

        return $this->redirectToRoute('app_admin_commande');
    }

    #[Route('/admin/commandes/{id}/pdf', name: 'app_admin_commande_pdf')]
    public function generatePdf(Commande $commande): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($pdfOptions);

        // On passe les données à la vue Twig
        $html = $this->renderView('commande/pdf.html.twig', [
            'commande' => $commande
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="facture_commande_' . $commande->getId() . '.pdf"'
            ]
        );
    }
}

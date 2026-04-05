<?php

namespace App\Controller;

use App\Entity\Alerteias;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AlerteiasRepository;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/admin')]
final class AdminAlerteIAController extends AbstractController
{
    private EntityManagerInterface $em;
    private AlerteiasRepository $repo;

    public function __construct(EntityManagerInterface $em, AlerteiasRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/alertes', name: 'admin_alerte_index')]
    public function index(): Response
    {
        $alertes = $this->repo->findAll();
        return $this->render('admin_alerte_ia/index.html.twig', [
            'alertes' => $alertes,
        ]);
    }
    #[Route('/{id}/delete', name: 'admin_alerte_delete')]
    public function delete(Request $request, Alerteias $alerte): Response
    {
        $token = $request->getPayload()->get('token');
        if ($this->isCsrfTokenValid('delete-item', $token)) {
            $this->em->remove($alerte);
            $this->em->flush();
        }
        return $this->redirectToRoute('admin_alerte_index');
    }
    #[Route('/pdf', name: 'admin_alerte_pdf')]
    public function pdf(): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('dpi', 120);
        $options->set('isPhpEnabled', false);

        $dompdf = new Dompdf($options);
        $alertes = $this->repo->findAll();
        $html = $this->renderView('admin_alerte_ia/pdf.html.twig', [
            'alertes' => $alertes,
        ]);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream();
        return $this->redirectToRoute('admin_alerte_index');
    }
}

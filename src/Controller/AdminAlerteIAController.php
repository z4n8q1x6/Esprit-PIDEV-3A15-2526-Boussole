<?php

namespace App\Controller;

use App\Entity\Alerteias;
use App\Entity\AlertReport;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AlerteiasRepository;
use App\Repository\AlertReportRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;
use Gemini;
use App\Service\UploaderService;

#[Route('/admin/alertes')]
final class AdminAlerteIAController extends AbstractController
{
    private EntityManagerInterface $em;
    private AlerteiasRepository $repo;

    public function __construct(EntityManagerInterface $em, AlerteiasRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/', name: 'admin_alerte_index')]
    public function index(Request $request): Response
    {
        $search = $request->query->get('q', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'DESC');

        if (!in_array($sort, ['type_alerte', 'message', 'score_gravite', 'date_detection'])) {
            $sort = 'id';
        }
        $alertes = $this->repo->searchAndSort($search, $sort, $direction);
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
    public function pdf(UploaderService $uploader): Response
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

        //  Get the PDF binary and save to a temporary file
        $pdfOutput = $dompdf->output();
        $tempFile = tempnam(sys_get_temp_dir(), 'pdf_');
        file_put_contents($tempFile, $pdfOutput);
        try {
            // Upload to Cloudinary
            $cloudinaryUrl = $uploader->uploadPdf($tempFile);
            $report = new AlertReport();
            $report->setUrl($cloudinaryUrl);
            $report->setGeneratedAt(new \DateTimeImmutable());
            $report->setAlertCount(count($alertes));
            $this->em->persist($report);
            $this->em->flush();
            $this->addFlash('success', 'The global report has been generated and saved to the cloud.');
        } finally {
            unlink($tempFile);
        }

        /* $dompdf->stream();  Output the generated PDF to Browser  */
        return $this->redirectToRoute('admin_alerte_index');
    }

    #[Route('/escalation-advisor', name: 'admin_alerte_escalation', methods: ['POST'])]
    public function escalationAdvisor(Request $request): Response
    {
        $token = $request->getPayload()->get('token');
        if (!$this->isCsrfTokenValid('escalation-item', $token)) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Invalid CSRF token',
            ], 403);
        }

        $alertes = $this->repo->findAll();

        if (empty($alertes)) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Aucune alerte à analyser.',
            ]);
        }

        $alertSummary = "Voici toutes les alertes actuelles pour toutes les franchises :\n\n";

        foreach ($alertes as $alerte) {
            $franchiseName = "Unknown";
            try {
                $franchise = $alerte->getFranchise_id();
                if ($franchise) {
                    $franchiseName = $franchise->getNom();
                }
            } catch (\Exception $e) {
                // Keep franchise name as "Unknown"
            }

            $alertSummary .= sprintf(
                "- Franchise %s | Type: %s | Severity: %.1f/10\n  Message: %s\n\n",
                $franchiseName,
                $alerte->getType_alerte(),
                $alerte->getScore_gravite(),
                $alerte->getMessage()
            );
        }

        $prompt = <<<PROMPT
            $alertSummary

            Vous êtes un conseiller expert en gestion de crise. Analysez ces alertes et identifiez les 3 plus critiques.

            RÈGLES STRICTES :
            - Sélectionnez UNIQUEMENT les 3 alertes les plus urgentes
            - Basez-vous sur le score de gravité ET le type de risque
            - Soyez ultra-concis, chaque action max 1 ligne
            - Aucun texte supplémentaire en dehors du format demandé

            FORMAT OBLIGATOIRE (respectez exactement) :

            🚨 TOP 3 ALERTES CRITIQUES
            ━━━━━━━━━━━━━━━━━━━━━━━━

            🔴 #1 — [TYPE ALERTE] (Gravité [X]/10)
            ├─ Franchise : [nom]
            └─ Action : [action immédiate et précise]

            🟡 #2 — [TYPE ALERTE] (Gravité [X]/10)
            ├─ Franchise : [nom]
            └─ Action : [action cette semaine]

            🟢 #3 — [TYPE ALERTE] (Gravité [X]/10)
            ├─ Franchise : [nom]
            └─ Action : [action ce mois]

            ━━━━━━━━━━━━━━━━━━━━━━━━
            PROMPT;

        try {
            $apiKey = getenv('GOOGLE_API_KEY');
            $client = Gemini::client($apiKey);
            $result = $client->generativeModel(model: 'gemini-2.5-flash-lite')->generateContent($prompt);
            $analysisText = $result->text();

            return new JsonResponse([
                'success' => true,
                'analysis' => $analysisText,
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Erreur lors de la génération du rapport d\'escalade.',
            ]);
        }
    }

    #[Route('/rapports', name: 'admin_alerte_rapports')]
    public function listReports(AlertReportRepository $reportRepo): Response
    {
        return $this->render('admin_alerte_ia/rapports.html.twig', [
            'reports' => $reportRepo->findBy([], ['generatedAt' => 'DESC']),
        ]);
    }
}

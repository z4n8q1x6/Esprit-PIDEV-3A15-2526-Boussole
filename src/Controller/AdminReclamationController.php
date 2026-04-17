<?php

namespace App\Controller;

use App\Entity\Reclamations;
use App\Repository\ReclamationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Gemini;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/admin/reclamations')]
final class AdminReclamationController extends AbstractController
{
    private EntityManagerInterface $em;
    private ReclamationsRepository $repo;
    public function __construct(EntityManagerInterface $em, ReclamationsRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/', name: 'admin_reclamation_index')]
    public function index(Request $request): Response
    {
        $search = $request->query->get('q', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'DESC');

        if (!in_array($sort, ['sujet', 'description', 'statut', 'date_creation'])) {
            $sort = 'id';
        }
        $reclamations = $this->repo->searchAndSort($search, $sort, $direction);
        return $this->render('admin_reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }


    #[Route('/{id}/delete', name: 'admin_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamations $reclamation): Response
    {
        $token = $request->getPayload()->get('token');
        if ($this->isCsrfTokenValid('delete-item', $token)) {
            $this->em->remove($reclamation);
            $this->em->flush();
            $this->addFlash('success', 'Reclamation deleted successfully.');
        }
        return $this->redirectToRoute('admin_reclamation_index');
    }

    #[Route('/{id}/edit', name: 'admin_reclamation_edit', methods: ['POST'])]
    public function edit(Request $request, Reclamations $reclamation): Response
    {

        $statut = $request->getPayload()->get('statut');
        $statusValid
            = $statut === 'EN_ATTENTE' || $statut === 'EN_COURS' || $statut === 'RESOLU';
        $token = $request->getPayload()->get('token');
        if ($this->isCsrfTokenValid('edit-item', $token) && $statusValid) {
            $reclamation->setStatut($statut);
            $this->em->flush();
            $this->addFlash('success', 'Reclamation edited successfully.');
        }
        return $this->redirectToRoute('admin_reclamation_index');
    }

    #[Route('/{id}/analyse', name: 'admin_reclamation_analyse', methods: ['POST'])]
    public function analyse(Request $request, Reclamations $reclamation): JsonResponse
    {
        $token = $request->getPayload()->get('token');
        if (!$this->isCsrfTokenValid('analyse-item', $token)) {
            return new JsonResponse(['success' => false, 'error' => 'Invalid CSRF token'], 403);
        }

        try {
            $apiKey = $_ENV['GOOGLE_API_KEY'] ?? getenv('GOOGLE_API_KEY');

            if (!$apiKey) {
                return new JsonResponse(['success' => false, 'error' => 'API key not configured'], 500);
            }

            $client = Gemini::client($apiKey);
            $sujet = $reclamation->getSujet();
            $description = $reclamation->getDescription();

            $prompt = <<<PROMPT
                    Tu es un expert en gestion de la relation client. Analyse la réclamation suivante...
                    Sujet : $sujet
                    Description : $description
                    FORMAT DE RÉPONSE :
                    Gravité : [Critique | Élevée | Moyenne | Faible]
                    Justification : [1-2 phrases maximum]
                    Action : [en attente | en cours | résolue]
                PROMPT;

            $result = $client->generativeModel(model: 'gemini-1.5-flash')->generateContent($prompt);
            $analysisText = $result->text();

            return new JsonResponse([
                'success' => true,
                'analysis' => $analysisText,
                'reclamation_id' => $reclamation->getId(),
                'sujet' => $reclamation->getSujet(),
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

}

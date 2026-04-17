<?php

namespace App\Controller;

use App\Entity\Alerteias;
use App\Entity\Franchises;
use App\Repository\AlerteiasRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Gemini;
use Gemini\Data\GenerationConfig;
use Gemini\Data\Schema;
use Gemini\Enums\DataType;
use Gemini\Enums\ResponseMimeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/alertes')]
final class AlerteIAController extends AbstractController
{
    private EntityManagerInterface $em;
    private AlerteiasRepository $repo;

    public function __construct(EntityManagerInterface $em, AlerteiasRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    private function getFranchiseId()
    {
        /** @var Utilisateur $user */
        $user = $this->getUser();

        // non admin
        if (!$user || !$user->getIdFranchise()) {
            return null;
        }

        return  $user->getIdFranchise();
    }

    #[Route('/', name: 'alerte_index')]
    public function index(Request $request): Response
    {
        $franchise_id = $this->getFranchiseId();
        $search = $request->query->get('q', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'DESC');

        if (!in_array($sort, ['type_alerte', 'message', 'score_gravite', 'date_detection'])) {
            $sort = 'id';
        }
        if ($franchise_id != null) {
            $alertes = $this->repo->searchAndSort($search, $sort, $direction, 13);
        } else {
            $alertes = [];
            $this->addFlash('error', 'Aucune franchise associée.');
        }
        return $this->render('alerte_ia/index.html.twig', [
            'alertes' => $alertes,
        ]);
    }

    #[Route('/{id}/delete', name: 'alerte_delete', methods: ['POST'])]
    public function delete(Request $request, Alerteias $alerte): Response
    {
        $token = $request->getPayload()->get('token');
        if ($this->isCsrfTokenValid('delete-item', $token)) {
            $this->em->remove($alerte);
            $this->em->flush();
            $this->addFlash('success', 'Alerte supprimée avec succès.');
        }
        return $this->redirectToRoute('alerte_index');
    }

    #[Route('/new', name: 'alerte_new', methods: ['POST'])]
    public function new(Request $request, SerializerInterface $serializer): Response
    {
        $token = $request->getPayload()->get('token');
        if (!$this->isCsrfTokenValid('generate-alerte', $token)) {
            return new JsonResponse(['success' => false, 'error' => 'Invalid CSRF token'], 403);
        }

        try {
            $apiKey = getenv('GOOGLE_API_KEY');
            $client = Gemini::client($apiKey);


            $financialData = $this->repo->getFinancialData($this->getFranchiseId(), date('n'), date('Y'));

            /* return new JsonResponse(['success' => false, 'error' => 'debug']); */
            $prompt = $this->buildPrompt($financialData, date('n'), date('Y'));


            $result = $client
                ->generativeModel(model: 'gemini-3-flash-preview')
                ->withGenerationConfig(
                    generationConfig: new GenerationConfig(
                        responseMimeType: ResponseMimeType::APPLICATION_JSON,
                        responseSchema: new Schema(
                            type: DataType::OBJECT,
                            properties: [
                                'type_alerte' => new Schema(type: DataType::STRING, maxLength: 35),
                                'message' => new Schema(type: DataType::STRING, minLength: 100, maxLength: 1000),
                                'score_gravite' => new Schema(type: DataType::NUMBER, minimum: 0.0, maximum: 10.0),
                            ],
                            required: ['type_alerte', 'message', 'score_gravite'],
                        )
                    )
                )
                ->generateContent($prompt);

            $data = (array) $result->json();
            $data['score_gravite'] = (float) $data['score_gravite'];

            $alerte = $serializer->denormalize($data, Alerteias::class);

            $franchise = $this->em->getRepository(Franchises::class)->find($this->getFranchiseId());
            $alerte->setFranchise_id($franchise);

            $this->em->persist($alerte);
            $this->em->flush();

            return new JsonResponse(['success' => true]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Erreur technique: ' . $e->getMessage(),
            ], 500);
        }
    }

    private function buildPrompt(array $financialData, int $month, int $year): string
    {
        return sprintf(
            "Analyse les données financières pour %d/%d:\n\n"
            . "RÉSULTATS FINANCIERS:\n"
            . "- Chiffre d'affaires: %.2f TND\n"
            . "- Charges opérationnelles: %.2f TND\n"
            . "- Charges financières: %.2f TND\n"
            . "- Charges exceptionnelles: %.2f TND\n"
            . "- Résultat net: %.2f TND\n"
            . "- Solde actuel: %.2f TND\n\n"
            . "STATUT DES CHARGES:\n"
            . "- Charges en attente: %d\n"
            . "- Charges rejetées: %d\n\n"
            . "ACTIVITÉ:\n"
            . "- Transactions ce mois: %d\n\n"
            . "Détecte les anomalies et risques financiers. Formule une alerte basée sur ces données.\n\n",
            $month,
            $year,
            $financialData['totalRecettes'],
            $financialData['totalChargesExploitation'],
            $financialData['totalChargesFinanciere'],
            $financialData['totalChargesExceptionnelle'],
            $financialData['resultatNet'],
            $financialData['soldeActuel'],
            $financialData['pendingChargesCount'],
            $financialData['rejectedChargesCount'],
            $financialData['transactionCount']
        );
    }
}

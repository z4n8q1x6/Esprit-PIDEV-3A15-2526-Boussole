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

final class AlerteIAController extends AbstractController
{
    private EntityManagerInterface $em;
    private AlerteiasRepository $repo;
    private int $franchise_id = 2;

    public function __construct(EntityManagerInterface $em, AlerteiasRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/alertes', name: 'alerte_index')]
    public function index(): Response
    {
        $alertes = $this->repo->findBy(['franchise_id' => $this->franchise_id]);
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
            $this->addFlash('success', 'Reclamation deleted successfully.');
        }
        return $this->redirectToRoute('alerte_index');
    }

    #[Route('/new', name: 'alerte_new')]
    public function new(SerializerInterface $serializer): Response
    {
        $yourApiKey = getenv('GOOGLE_API_KEY');
        $client = Gemini::client($yourApiKey);
        $prompt = <<<TEXT
            Génère une alerte de sécurité avec ces champs:
            - type_alerte: Une catégorie courte
            - message: Une description détaillée
            - score_gravite: Score de sévérité
            TEXT;
        $request = $client
            ->generativeModel(model: 'gemini-2.5-flash')
            ->withGenerationConfig(
                generationConfig: new GenerationConfig(
                    responseMimeType: ResponseMimeType::APPLICATION_JSON,
                    responseSchema: new Schema(
                        type: DataType::ARRAY,
                        items: new Schema(
                            type: DataType::OBJECT,
                            properties: [
                                'type_alerte' => new Schema(type: DataType::STRING),
                                'message' => new Schema(type: DataType::STRING),
                                'score_gravite' => new Schema(type: DataType::NUMBER),
                            ],
                            required: ['type_alerte', 'message', 'score_gravite'],
                        )
                    )
                )
            )
            ->generateContent($prompt);
        $data = $request->json();
        $alerte = $serializer->denormalize(
            $data[0],
            Alerteias::class,
        );
        $franchise = $this->em->getRepository(Franchises::class)->find($this->franchise_id);
        $alerte->setFranchise_id($franchise);
        $this->em->persist($alerte);
        $this->em->flush();
        return $this->redirectToRoute('alerte_index');
    }
}

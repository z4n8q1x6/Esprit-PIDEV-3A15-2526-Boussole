<?php

namespace App\Controller;

use App\Entity\Reclamations;
use App\Repository\ReclamationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
final class AdminReclamationController extends AbstractController
{
    private EntityManagerInterface $em;
    private ReclamationsRepository $repo;
    public function __construct(EntityManagerInterface $em, ReclamationsRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/reclamations', name: 'admin_reclamation_index')]
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

}

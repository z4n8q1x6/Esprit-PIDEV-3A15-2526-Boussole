<?php

namespace App\Controller;

use App\Entity\Reclamations;
use App\Entity\Franchises;
use App\Form\ReclamationsType;
use App\Repository\ReclamationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reclamations')]
final class ReclamationController extends AbstractController
{
    private EntityManagerInterface $em;
    private ReclamationsRepository $repo;

    public function __construct(EntityManagerInterface $em, ReclamationsRepository $repo)
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

        return $user->getIdFranchise();
    }

    #[Route('/', name: 'reclamation_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $franchise_id = $this->getFranchiseId();


        $search = $request->query->get('q', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'DESC');

        if (!in_array($sort, ['sujet', 'description', 'statut', 'date_creation'])) {
            $sort = 'id';
        }
        if ($franchise_id != null) {
            $reclamations = $this->repo->searchAndSort($search, $sort, $direction, $franchise_id);
        } else {
            $reclamations = [];
            $this->addFlash('error', 'Aucune franchise associée.');
        }
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $reclamation = new Reclamations();
        $form = $this->createForm(ReclamationsType::class, $reclamation);
        $form->handleRequest($request);
        $franchise = $this->em->getRepository(Franchises::class)->find($this->getFranchiseId());
        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setFranchise_id($franchise);
            $this->em->persist($reclamation);
            $this->em->flush();
            $this->addFlash('success', 'Réclamation ajoutée avec succès.');
            return $this->redirectToRoute('reclamation_index');
        }
        return $this->render('reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamations $reclamation): Response
    {
        $submitedToken = $request->getPayload()->get('token');
        if ($this->isCsrfTokenValid('delete-item', $submitedToken)) {
            $this->em->remove($reclamation);
            $this->em->flush();
            $this->addFlash('success', 'Réclamation supprimée avec succès.');
        }
        return $this->redirectToRoute('reclamation_index');
    }
}

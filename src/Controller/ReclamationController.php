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
    private int $franchise_id = 2;

    public function __construct(EntityManagerInterface $em, ReclamationsRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/', name: 'reclamation_index', methods: ['GET'])]
    public function index(): Response
    {
        $reclamations = $this->repo->findBy(['franchise_id' => $this->franchise_id]);
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
        $franchise = $this->em->getRepository(Franchises::class)->find($this->franchise_id);
        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setFranchise_id($franchise);
            $this->em->persist($reclamation);
            $this->em->flush();
            $this->addFlash('success', 'Reclamation added successfully.');
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
            dd($submitedToken);
            $this->em->remove($reclamation);
            $this->em->flush();
            $this->addFlash('success', 'Reclamation deleted successfully.');
        }
        return $this->redirectToRoute('reclamation_index');
    }
}

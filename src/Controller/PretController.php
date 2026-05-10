<?php

namespace App\Controller;

use App\Entity\Pret;
use App\Form\PretType;
use App\Repository\PretRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/pret')]
final class PretController extends AbstractController
{
    private EntityManagerInterface $em;
    private PretRepository $repo;

    public function __construct(EntityManagerInterface $em, PretRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/', name: 'app_pret_index', methods: ['GET'])]
    public function index(): Response
    {
        $prets = $this->repo->findAll();

        return $this->render('pret/index.html.twig', [
            'prets' => $prets,
        ]);
    }

    #[Route('/new', name: 'app_pret_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $pret = new Pret();
        $form = $this->createForm(PretType::class, $pret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($pret);
            $this->em->flush();

            $this->addFlash('success', 'Prêt créé avec succès.');

            return $this->redirectToRoute('app_pret_index');
        }

        return $this->render('pret/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_pret_show', methods: ['GET'])]
    public function show(Pret $pret): Response
    {
        return $this->render('pret/show.html.twig', [
            'pret' => $pret,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pret_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pret $pret): Response
    {
        $form = $this->createForm(PretType::class, $pret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Prêt mis à jour avec succès.');

            return $this->redirectToRoute('app_pret_index');
        }

        return $this->render('pret/edit.html.twig', [
            'form' => $form->createView(),
            'pret' => $pret,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_pret_delete', methods: ['POST'])]
    public function delete(Request $request, Pret $pret): Response
    {
        $token = $request->getPayload()->get('token') ?? $request->request->get('_token');

        if ($this->isCsrfTokenValid('delete' . $pret->getId(), $token)) {
            $this->em->remove($pret);
            $this->em->flush();
            $this->addFlash('success', 'Prêt supprimé avec succès.');
        }

        return $this->redirectToRoute('app_pret_index');
    }
}

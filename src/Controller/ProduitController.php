<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/produits')]
class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $produits = $em->getRepository(Produit::class)->findAll();
        
        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
            
            // Contrainte : image obligatoire à l'ajout
            if (!$imageFile) {
                $this->addFlash('danger', 'L\'image est obligatoire');
                return $this->render('produit/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
            
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/produits/';
            $imageFile->move($uploadDir, $newFilename);
            $produit->setImage('/uploads/produits/' . $newFilename);
            
            $em->persist($produit);
            $em->flush();

            $this->addFlash('success', 'Produit créé avec succès');
            return $this->redirectToRoute('app_produit_index');
        }

        return $this->render('produit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
            
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/produits/';
                $imageFile->move($uploadDir, $newFilename);
                $produit->setImage('/uploads/produits/' . $newFilename);
            }
            // Si pas d'image, on garde l'ancienne (ne rien faire)
            
            $em->flush();

            $this->addFlash('success', 'Produit modifié avec succès');
            return $this->redirectToRoute('app_produit_index');
        }

        return $this->render('produit/edit.html.twig', [
            'form' => $form->createView(),
            'produit' => $produit,
        ]);
    }

    

    #[Route('/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
            $em->remove($produit);
            $em->flush();
            $this->addFlash('success', 'Produit supprimé avec succès');
        }

        return $this->redirectToRoute('app_produit_index');
    }
}
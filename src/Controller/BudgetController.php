<?php
namespace App\Controller;

use App\Entity\Budget_previsionnel;
use App\Form\BudgetPrevisionnelType;
use App\Repository\Budget_previsionnelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/admin/budget')]
final class BudgetController extends AbstractController
{
    #[Route('/', name: 'app_budget_index', methods: ['GET', 'POST'])]
    public function index(Request $request, Budget_previsionnelRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $budget = new Budget_previsionnel();
        $form = $this->createForm(BudgetPrevisionnelType::class, $budget);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($budget);
            $entityManager->flush();

            $this->addFlash('success', 'Le budget a été créé avec succès.');
            return $this->redirectToRoute('app_budget_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('budget/budget.html.twig', [
            'budgets' => $repository->findAll(),
            'form' => $form->createView(),
            'is_edit' => false,
        ]);
    }

    #[Route('/{id}/edit-ajax', name: 'app_budget_edit_ajax', methods: ['POST'])]
    public function editAjax(Request $request, Budget_previsionnel $budget, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            if (!is_array($data)) {
                return new JsonResponse(['success' => false, 'message' => 'Requête invalide.'], 400);
            }

            $errorMessages = [];
            foreach (['mois', 'annee', 'montant_cible', 'type_budget', 'categorie'] as $field) {
                if (isset($data[$field])) {
                    $setter = 'set' . str_replace('_', '', ucwords($field, '_'));
                    if (method_exists($budget, $setter)) {
                        $val = $data[$field];
                        if ($field === 'montant_cible') $val = (float) $val;  
                        if (in_array($field, ['mois', 'annee'])) $val = (int) $val;

                        $budget->$setter($val);

                        $errors = $validator->validateProperty($budget, $field);
                        foreach ($errors as $error) {
                            $errorMessages[$field] = $error->getMessage();    
                        }
                    }
                }
            }

            if (!empty($errorMessages)) {
                return new JsonResponse(['success' => false, 'errors' => $errorMessages], 400);
            }

            $entityManager->flush();
            return new JsonResponse(['success' => true, 'message' => 'Mise à jour réussie']);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    #[Route('/{id}/delete-ajax', name: 'app_budget_delete_ajax', methods: ['POST'])]
    public function deleteAjax(Budget_previsionnel $budget, EntityManagerInterface $entityManager): JsonResponse
    {
        $entityManager->remove($budget);
        $entityManager->flush();
        return new JsonResponse(['success' => true, 'message' => 'Budget supprimé']);
    }
}
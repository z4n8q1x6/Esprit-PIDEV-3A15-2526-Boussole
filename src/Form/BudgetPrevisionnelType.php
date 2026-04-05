<?php
namespace App\Form;

use App\Entity\Budget_previsionnel;
use App\Entity\Franchises;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BudgetPrevisionnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mois', ChoiceType::class, [
                'label' => 'Mois',
                'choices' => array_combine(range(1, 12), range(1, 12)),       
                'attr' => ['class' => 'form-select bg-dark text-light border-secondary', 'required' => 'required']
            ])
            ->add('annee', ChoiceType::class, [
                'label' => 'Année',
                'choices' => array_combine(range(2024, 2030), range(2024, 2030)),
                'attr' => ['class' => 'form-select bg-dark text-light border-secondary', 'required' => 'required']
            ])
            ->add('type_budget', ChoiceType::class, [
                'label' => 'Type de budget',
                'choices'  => [
                    'Limite de dépense' => 'LIMITE_DEPENSE',
                    'Objectif de revenu' => 'OBJECTIF_REVENU',
                ],
                'attr' => ['class' => 'form-select bg-dark text-light border-secondary', 'required' => 'required']
            ])
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'CHARGES_EXPLOITATIONS' => 'CHARGES_EXPLOITATIONS',       
                    'CHARGES_FINANCIERES' => 'CHARGES_FINANCIERES',
                    'CHARGES_EXCEPTIONNELLES' => 'CHARGES_EXCEPTIONNELLES'    
                ],
                'label' => 'Catégorie',
                'attr' => ['class' => 'form-select bg-dark text-light border-secondary', 'required' => 'required']
            ])
            ->add('montant_cible', NumberType::class, [
                'label' => 'Montant Cible (TND)',
                'html5' => false,
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary', 'placeholder' => '0.00', 'min' => '0', 'step' => '0.01', 'required' => 'required']
            ])
            ->add('franchise_id', EntityType::class, [
                'class' => Franchises::class,
                'choice_label' => 'nom',
                'label' => 'Franchise',
                'placeholder' => 'Tout le réseau',
                'required' => false,
                'attr' => ['class' => 'form-select bg-dark text-light border-secondary']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Budget_previsionnel::class,
        ]);
    }
}
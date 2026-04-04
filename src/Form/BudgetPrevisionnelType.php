<?php

namespace App\Form;

use App\Entity\Budget_previsionnel;
use App\Entity\Franchises;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BudgetPrevisionnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mois', IntegerType::class, [
                'label' => 'Mois',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary']
            ])
            ->add('annee', IntegerType::class, [
                'label' => 'Année',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary']
            ])
            ->add('montant_cible', NumberType::class, [
                'label' => 'Montant Cible (TND)',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary', 'placeholder' => '0.00']
            ])
            ->add('type_budget', ChoiceType::class, [
                'label' => 'Type de budget',
                'choices'  => [
                    'Limite de dépense' => 'LIMITE_DEPENSE',
                    'Objectif de revenu' => 'OBJECTIF_REVENU',
                ],
                'attr' => ['class' => 'form-select bg-dark text-light border-secondary']
            ])
            ->add('categorie', TextType::class, [
                'label' => 'Catégorie',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary']
            ])
            ->add('franchise_id', EntityType::class, [
                'class' => Franchises::class,
                'choice_label' => 'id',
                'label' => 'Franchise',
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

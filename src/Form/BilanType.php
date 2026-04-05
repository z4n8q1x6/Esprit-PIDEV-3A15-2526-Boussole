<?php

namespace App\Form;

use App\Entity\Bilan;
use App\Entity\Franchises;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BilanType extends AbstractType
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
            ->add('total_recettes', NumberType::class, [
                'label' => 'Total Recettes (TND)',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary', 'placeholder' => '0.00']
            ])
            ->add('total_charges', NumberType::class, [
                'label' => 'Total Charges (TND)',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary', 'placeholder' => '0.00']
            ])
            ->add('resultat_net', NumberType::class, [
                'label' => 'Résultat Net (TND)',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary', 'placeholder' => '0.00']
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
            'data_class' => Bilan::class,
        ]);
    }
}

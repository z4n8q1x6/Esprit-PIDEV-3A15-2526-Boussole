<?php

namespace App\Form;

use App\Entity\Transaction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary']
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant (TND)',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary', 'placeholder' => '0.00']
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'empty_data' => '',
                'attr' => [
                    'class' => 'form-control bg-dark text-light border-secondary',
                    'placeholder' => 'Ex: Vente du jour',
                    'pattern' => '^[A-Za-zÀ-ÿ\s]+$',
                    'title' => 'Uniquement des lettres et des espaces'
                ]
            ]);
            // On n'ajoute pas le "type" ni la "franchise" ici, on va les forcer dans le Controller !
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transaction::class,
        ]);
    }
}
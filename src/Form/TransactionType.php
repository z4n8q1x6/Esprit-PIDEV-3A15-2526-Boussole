<?php

namespace App\Form;

use App\Entity\Franchises;
use App\Entity\Transaction;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', null, [
                'widget' => 'single_text',
                'label' => 'Date',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary']
            ])
            ->add('montant', null, [
                'label' => 'Montant (TND)',
                'invalid_message' => 'Veuillez entrer un nombre valide.',
                'attr' => ['class' => 'form-control bg-dark text-light border-secondary', 'placeholder' => '0.00']
            ])
            ->add('description', null, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control bg-dark text-light border-secondary',
                    'placeholder' => 'Ex: Vente du jour'
                ]
            ])
        ;
        // On supprime explicitement 'type' et 'franchise_id' car ils sont gérés par le Controller
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transaction::class,
        ]);
    }
}

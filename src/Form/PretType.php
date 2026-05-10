<?php

namespace App\Form;

use App\Entity\Franchises;
use App\Entity\Pret;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class PretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant_demande', NumberType::class, [
                'label' => 'Montant demandé (TND)',
                'constraints' => [
                    new NotBlank(message: 'Le montant est obligatoire'),
                    new Positive(message: 'Le montant doit être supérieur à zéro'),
                ],
                'scale' => 2,
            ])
            ->add('duree_mois', IntegerType::class, [
                'label' => 'Durée (mois)',
                'constraints' => [
                    new NotBlank(message: 'La durée est obligatoire'),
                    new Positive(message: 'La durée doit être supérieure à zéro'),
                ],
            ])
            ->add('taux', NumberType::class, [
                'label' => 'Taux annuel (%)',
                'constraints' => [
                    new NotBlank(message: 'Le taux est obligatoire'),
                    new Positive(message: 'Le taux doit être supérieur à zéro'),
                ],
                'scale' => 2,
            ])
            ->add('motif', TextType::class, [
                'label' => 'Motif du prêt',
                'constraints' => [
                    new NotBlank(message: 'Le motif est obligatoire'),
                ],
            ])
            ->add('date_demande', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de demande',
                'constraints' => [
                    new NotBlank(message: 'La date de demande est obligatoire'),
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'EN_ATTENTE',
                    'Accordé' => 'ACCORDE',
                    'Refusé' => 'REFUSE',
                ],
            ])
            ->add('franchise_id', EntityType::class, [
                'class' => Franchises::class,
                'choice_label' => 'nom',
                'label' => 'Franchise',
                'placeholder' => 'Sélectionnez une franchise',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pret::class,
        ]);
    }
}

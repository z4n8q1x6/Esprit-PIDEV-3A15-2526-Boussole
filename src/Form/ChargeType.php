<?php

namespace App\Form;

use App\Entity\Charge;
use App\Entity\Franchises;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Regex;

class ChargeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre de la charge',
                'constraints' => [
                    new NotBlank(message: 'Le titre est obligatoire'),
                    new Regex(
                        pattern: '/^[a-zA-ZÀ-ÿ\s]+$/',
                        message: 'Le titre ne doit contenir que des lettres'
                    ),
                ],
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant (TND)',
                'constraints' => [
                    new NotBlank(message: 'Le montant est obligatoire'),
                    new Positive(message: 'Le montant doit être supérieur à zéro'),
                ],
            ])
            ->add('date_charge', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de facturation',
                'constraints' => [
                    new NotBlank(message: 'La date est obligatoire'),
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices'  => [
                    'Exploitation' => 'CHARGES_EXPLOITATIONS',
                    'Financière' => 'CHARGES_FINANCIERES',
                    'Exceptionnelle' => 'CHARGES_EXCEPTIONNELLES',
                ],
                'constraints' => [
                    new NotBlank(message: 'La catégorie est obligatoire'),
                ],
            ])
            ->add('preuve_image', TextType::class, [
                'label' => 'Justificatif (URL/Nom)',
                'constraints' => [
                    new NotBlank(message: 'Le justificatif est obligatoire'),
                ],
            ])
            ->add('franchise_id', EntityType::class, [
                'class' => Franchises::class,
                'choice_label' => 'nom',
                'label' => 'Franchise concernée',
                'placeholder' => 'Sélectionnez une franchise',
                'constraints' => [
                    new NotBlank(message: 'La franchise est obligatoire'),
                ],
            ])
            ->add('status_validation', ChoiceType::class, [
                'label' => 'Statut de Validation',
                'choices'  => [
                    'En attente' => 'En attente',
                    'Validé' => 'Validé',
                    'Refusé' => 'Refusé',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le statut est obligatoire'),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Charge::class,
        ]);
    }
}
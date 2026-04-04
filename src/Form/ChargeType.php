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

class ChargeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre de la charge'
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant (TND)'
            ])
            ->add('date_charge', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de facturation',
                // Plus besoin de property_path car l'entité a maintenant getDateCharge()
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices'  => [
                    'Exploitation' => 'CHARGES_EXPLOITATIONS',
                    'Financière' => 'CHARGES_FINANCIERES',
                    'Exceptionnelle' => 'CHARGES_EXCEPTIONNELLES',
                ],
            ])
            ->add('preuve_image', TextType::class, [
                'label' => 'Justificatif (URL/Nom)',
                'required' => false,
                // Plus besoin de property_path car l'entité a maintenant getPreuveImage()
            ])
            ->add('franchise_id', EntityType::class, [
                'class' => Franchises::class,
                'choice_label' => 'nom',
                'label' => 'Franchise concernée',
                'placeholder' => 'Sélectionnez une franchise',
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
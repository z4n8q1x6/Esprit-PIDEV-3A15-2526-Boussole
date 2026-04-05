<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Franchises;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank(message: 'Le nom est obligatoire'),
                    new Regex(
                        pattern: '/^[a-zA-Z\s]+$/',
                        message: 'Le nom doit contenir uniquement des lettres'
                    )
                ]
            ])
            ->add('matricule_fiscal', TextType::class, [
                'constraints' => [
                    new NotBlank(message: 'Le matricule est obligatoire'),
                    new Regex(
                        pattern: '/^(?=.*[a-zA-Z])(?=.*[0-9]).+$/',
                        message: 'Le matricule doit inclure des lettres ET des chiffres'
                    )
                ]
            ])
            ->add('telephone', TextType::class, [
                'constraints' => [
                    new NotBlank(message: 'Le téléphone est obligatoire'),
                    new Regex(
                        pattern: '/^[0-9]+$/',
                        message: 'Le téléphone doit contenir uniquement des chiffres'
                    )
                ]
            ])
            ->add('franchise_id', EntityType::class, [
                'class' => Franchises::class,
                'choice_label' => 'nom',
                'placeholder' => 'Choisir une franchise',
                'constraints' => [
                    new NotBlank(message: 'Veuillez sélectionner une franchise'),
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
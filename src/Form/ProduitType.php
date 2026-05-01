<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du Produit',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Ordinateur Portable']
            ])
            ->add('reference', TextType::class, [
                'label' => 'Référence',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: REF-123']
            ])
            ->add('prix_achat', NumberType::class, [
                'label' => 'Prix d\'Achat (DT)',
                'attr' => ['class' => 'form-control', 'min' => 0.01, 'step' => 0.01]
            ])
            ->add('stock_dispo', IntegerType::class, [
                'label' => 'Stock Disponible',
                'attr' => ['class' => 'form-control', 'min' => 0]
            ])
            ->add('pourcentage_reduction', ChoiceType::class, [
                'label' => 'Réduction (%)',
                'choices' => [
                    'Aucune (0%)' => 0,
                    '- 5%' => 5,
                    '- 10%' => 10,
                    '- 20%' => 20,
                    '- 30%' => 30,
                    '- 40%' => 40,
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (JPG, PNG)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'accept' => 'image/*'],
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, WEBP)',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}

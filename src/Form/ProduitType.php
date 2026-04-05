<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom du produit']
            ])
            ->add('reference', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Référence unique']
            ])
            ->add('prix_achat', NumberType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => '0.00', 'step' => '0.01']
            ])
            ->add('stock_dispo', NumberType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => '0']
            ])
            ->add('imageFile', FileType::class, [
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'accept' => 'image/*'],
                'label' => 'Image du produit'
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
<?php

namespace App\Form;

use App\Entity\Franchises;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FranchisesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => false,
                'required' => true,
            ])
            ->add('telephone', TextType::class, [
                'label' => false,
                'required' => true,
            ])
            ->add('solde_actuel', NumberType::class, [
                'label' => false,
                'required' => true,
            ])
            ->add('adresse', TextType::class, [
                'label' => false,
                'required' => true,
            ])
            ->add('email', EmailType::class, [
                // We add an email field since the DB requires it for Franchise,
                // even though the mockup might not have explicitly separated it.
                'label' => false,
                'required' => true,
            ])
            ->add('actif', CheckboxType::class, [
                'label' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Franchises::class,
        ]);
    }
}

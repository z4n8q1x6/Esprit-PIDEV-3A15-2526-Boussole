<?php

namespace App\Form;

use App\Entity\Simulation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class SimulationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomSimulation', TextType::class, [
                'label' => 'Nom de la simulation',
                'constraints' => [new NotBlank(message: 'Le nom de la simulation est requis.')],
            ])
            ->add('capital', NumberType::class, [
                'label' => 'Capital (USD)',
                'scale' => 2,
                'constraints' => [
                    new NotBlank(message: 'Le capital est requis.'),
                    new Positive(message: 'Le capital doit être supérieur à zéro.'),
                ],
            ])
            ->add('tauxAnnuel', NumberType::class, [
                'label' => 'Taux annuel (%)',
                'scale' => 2,
                'constraints' => [
                    new NotBlank(message: 'Le taux est requis.'),
                    new Positive(message: 'Le taux doit être supérieur à zéro.'),
                ],
            ])
            ->add('dureeMois', IntegerType::class, [
                'label' => 'Durée (mois)',
                'constraints' => [
                    new NotBlank(message: 'La durée est requise.'),
                    new Positive(message: 'La durée doit être supérieure à zéro.'),
                ],
            ])
            ->add('revenuMensuel', NumberType::class, [
                'label' => 'Revenu mensuel (USD)',
                'scale' => 2,
                'required' => false,
                'attr' => ['placeholder' => 'Optionnel - pour l\'analyse de risque'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Simulation::class,
        ]);
    }
}

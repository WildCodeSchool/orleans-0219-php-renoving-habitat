<?php

namespace App\Form;

use App\Entity\Facade;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FacadeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('smear')
            ->add('peelingOff')
            ->add('humidification')
            ->add('cracksFrom', ChoiceType::class, [
                'choices'  => [
                    '+ de 10 ans' => null,
                    '- de 10 ans' => null,
                ],
                'expanded' => true,
                'required' => null,
                'label' => false,
                'placeholder' => false
            ])
            ->add('cracksSize', ChoiceType::class, [
                'choices'  => [
                    '+ de 1 cm' => null,
                    '- de 5 cm' => null,
                ],
                'expanded' => true,
                'required' => null,
                'label' => false,
                'placeholder' => false
            ]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Facade::class,
        ]);
    }
}

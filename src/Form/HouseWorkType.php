<?php

namespace App\Form;

use App\Entity\HouseWork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HouseWorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('renovation')
            ->add('blackSpots')
            ->add('paperPeelingOff')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HouseWork::class,
        ]);
    }
}

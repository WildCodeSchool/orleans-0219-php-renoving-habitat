<?php

namespace App\Form;

use App\Entity\EarthWork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EarthWorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('disabledConcrete')
            ->add('concreteSlab')
            ->add('floorTiles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EarthWork::class,
        ]);
    }
}

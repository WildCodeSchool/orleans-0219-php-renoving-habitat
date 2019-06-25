<?php

namespace App\Form;

use App\Entity\Bathroom;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BathroomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('italianShower')
            ->add('showerCabin')
            ->add('earthenware')
            ->add('floorTiles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bathroom::class,
        ]);
    }
}

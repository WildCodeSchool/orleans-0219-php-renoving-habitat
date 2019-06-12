<?php

namespace App\Form;

use App\Entity\Recruitment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecruitmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class)
            ->add('firstname', TextType::class)
            ->add('telephone', TextType::class)
            ->add('email', TextType::class)
            ->add('streetNumber', TextType::class)
            ->add('streetName', TextType::class)
            ->add('city', TextType::class)
            ->add('postCode', TextType::class)
            ->add('message', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recruitment::class,
        ]);
    }
}

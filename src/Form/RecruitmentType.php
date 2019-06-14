<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\View\ChoiceListView;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecruitmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class,[ 'attr' => ['placeholder' => 'Nom']])
            ->add('firstname', TextType::class,[ 'attr' => ['placeholder' => 'Prénom']])
            ->add('telephone', TextType::class,[ 'attr' => ['placeholder'=> 'Téléphone']])
            ->add('email', TextType::class,[ 'attr' => ['placeholder'=> 'Email']])
            ->add('streetNumber', TextType::class,[ 'attr' => ['placeholder'=> 'Numéro']])
            ->add('streetName', TextType::class,[ 'attr' => ['placeholder'=> 'Rue']])
            ->add('city', TextType::class,[ 'attr' => ['placeholder'=> 'Ville']])
            ->add('postCode', TextType::class,[ 'attr' => ['placeholder'=> 'Code postal']])
            ->add('occupation', ChoiceType::class,['choices'=>[
                    'Poseur menuiserie'=>'Poseur menuiserie',
                    'Poseur ravalement'=>'Poseur ravalement',
                'Technico commercial'=>'Technico commercial'
                ]
            ])
            ->add('area', ChoiceType::class,['choices'=>[
                'Centre Val de Loire'=>'Centre Val de Loire',
                'Ile de France'=>'Ile de France',
                'Bourgogne Franche-Comté'=>'Bourgogne Franche-Comté'
            ]
            ])
            ->add('message', TextareaType::class)
           ->add('cv',FileType::class,['label'=>'télécharger votre cv'])
        ;
    }

}

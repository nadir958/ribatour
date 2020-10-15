<?php

namespace App\Form;


use App\Entity\Excursion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,['required' => false,'translation_domain' => 'search','label' => 'properties.nom.label'])
            ->add('ville', TextType::class,['required' => false,'translation_domain' => 'search','label' => 'properties.ville.label'])
            ->add('chercher',SubmitType::class,['translation_domain' => 'search','label' => 'properties.chercher.label',
                'attr'=>[
                    'class'=>'thm-btn tour-search-one__btn',
                    'style'=>'margin-top:15px;'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=> Excursion::class,
        ]);
    }
}

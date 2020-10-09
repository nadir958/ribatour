<?php

namespace App\Form;


use App\Entity\Excursion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,['required' => false,])
            ->add('ville', TextType::class,['required' => false,])
            ->add('chercher',SubmitType::class,[
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

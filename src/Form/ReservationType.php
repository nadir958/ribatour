<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',texttype::class,['translation_domain' => 'messages'])
            ->add('prenom',texttype::class,['translation_domain' => 'messages'])
            ->add('Tel')
            ->add('email',EmailType::class,['translation_domain' => 'messages'])
            ->add('nombreAdulte',NumberType::class,['translation_domain' => 'messages'])
            ->add('NombreEnfant',NumberType::class,['translation_domain' => 'messages'])
            ->add('DateDebut', DateType::class, ['translation_domain' => 'messages',
                'widget' => 'single_text', 'html5' => false, 'format' => 'dd/MM/yyyy','invalid_message' => 'entrer une date',
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                ],'constraints'=>[new GreaterThanOrEqual("today"),],'data' => new \DateTime(),
            ])
            ->add('DateFin', DateType::class,
                ['translation_domain' => 'messages','widget' => 'single_text','html5' => false,  'format' => 'dd/MM/yyyy',
                'placeholder' => ['year' => 'Année', 'month' => 'Mois', 'day' => 'Jour', ],'constraints'=>[new GreaterThanOrEqual(['propertyPath' => 'parent.all[DateDebut].data']),]
                    ,'data' => new \DateTime(),
                ]
            )
            ->add('message',TextareaType::class,['translation_domain' => 'messages'])
            ->add('envoyer',SubmitType::class,['translation_domain' => 'messages'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

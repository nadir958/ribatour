<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('Tel')
            ->add('email',EmailType::class,['invalid_message' => 'entrer un email : exemple@google.com',])
            ->add('nombreAdulte',NumberType::class,['invalid_message' => 'entrer un nombre',])
            ->add('NombreEnfant',NumberType::class,['invalid_message' => 'entrer un nombre',])
            ->add('DateDebut', DateType::class, [
                'widget' => 'single_text', 'html5' => false, 'format' => 'dd/MM/yyyy','invalid_message' => 'entrer une date',
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                ],'constraints'=>[new GreaterThanOrEqual("today"),],'data' => new \DateTime(),
            ])
            ->add('DateFin', DateType::class,
                ['widget' => 'single_text','html5' => false,  'format' => 'dd/MM/yyyy','invalid_message' => 'entrer une date',
                'placeholder' => ['year' => 'Année', 'month' => 'Mois', 'day' => 'Jour', ],'constraints'=>[new GreaterThanOrEqual(['propertyPath' => 'parent.all[DateDebut].data']),]
                    ,'data' => new \DateTime(),
                ]
            )
            ->add('message',TextareaType::class)
            ->add('envoyer',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

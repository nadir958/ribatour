<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',texttype::class,['translation_domain' => 'properties','label' => 'properties.nom.label'])
            ->add('prenom',texttype::class,['translation_domain' => 'properties','label' => 'properties.prenom.label'])
            ->add('email',EmailType::class,['translation_domain' => 'properties','label' => 'properties.email.label'])
            ->add('message',TextareaType::class,['translation_domain' => 'properties','label' => 'properties.message.label'])
            ->add('envoyer',SubmitType::class,['translation_domain' => 'properties','label' => 'properties.envoyer.label'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

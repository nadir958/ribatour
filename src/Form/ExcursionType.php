<?php

namespace App\Form;

use App\Entity\Excursion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('ville')
            ->add('prixadulte',NumberType::class,['invalid_message' => 'entrer un nombre',])
            ->add('prixenfant',NumberType::class,['invalid_message' => 'entrer un nombre',])
            ->add('imagesFile',FileType::class,['required'=>false])
            ->add('presentation',TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Excursion::class,
        ]);
    }
}

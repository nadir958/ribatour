<?php

namespace App\Form;

use App\Entity\Excursion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
            ->add('nom',TextareaType::class,['label'=>'Francais'])
            ->add('nomes',TextareaType::class,['label'=>'Espagnol'])
            ->add('nomen',TextareaType::class,['label'=>'Englais'])
            ->add('ville',TextareaType::class,['label'=>'Francais'])
            ->add('villees',TextareaType::class,['label'=>'Espagnol'])
            ->add('villeen',TextareaType::class,['label'=>'Englais'])
            ->add('prixadulte',NumberType::class,['invalid_message' => 'entrer un nombre',])
            ->add('prixenfant',NumberType::class,['invalid_message' => 'entrer un nombre',])
            ->add('imagesFile',FileType::class,['required'=>false])
            ->add('presentation',TextareaType::class,['label'=>'Francais'])
            ->add('presentationes',TextareaType::class,['label'=>'Espagnol'])
            ->add('presentationen',TextareaType::class,['label'=>'Englais'])
            ->add('envedette',CheckboxType::class, [
                'label'    => 'afficher en vedette ?',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Excursion::class,
        ]);
    }
}

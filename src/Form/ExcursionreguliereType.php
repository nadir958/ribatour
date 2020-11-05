<?php

namespace App\Form;

use App\Entity\Excursionreguliere;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcursionreguliereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomfr',TextareaType::class,['label'=>'Nom en Francais'])
            ->add('nomes',TextareaType::class,['label'=>'Nom en Espagnole'])
            ->add('nomen',TextareaType::class,['label'=>'Nom en Englais'])
            ->add('presentationfr',CKEditorType::class,['label'=>'Presentation en Francais'])
            ->add('presentationes',CKEditorType::class,['label'=>'Presentation en Espagnol'])
            ->add('presentationen',CKEditorType::class,['label'=>'Presentation en Englais'])
            ->add('imagesFile',FileType::class,['required'=>false])
            ->add('envedette',CheckboxType::class, [
                'label'    => 'afficher en vedette ?',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Excursionreguliere::class,
        ]);
    }
}

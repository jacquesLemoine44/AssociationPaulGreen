<?php

namespace App\Form;

use App\Entity\Fieldtripphotos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FieldtripphotosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('filefieldtripphoto', TextType::class, [
                'label' => 'Photo : ', 
                'required'=> false,
                'disabled'=>true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('altfieldtripphoto', TextType::class, [
                'label' => 'Texte Alternatif : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            // ->add('fieldstripsorigin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fieldtripphotos::class,
        ]);
    }
}

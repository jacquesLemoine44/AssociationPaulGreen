<?php

namespace App\Form;

use App\Entity\Functions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class FunctionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mission', TextType::class, [
                'label' => 'Fonction : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('descriptionFunction', TextareaType::class, [
                'label' => 'Description : ',
                'required'   => false,
                'empty_data' => 'Contenu vide',
            ])
            ->add('levelFunction', IntegerType::class, [
                'label' => 'Niveau Hiérachie : ',
                'required'=> false,
                'attr' => array('style' => 'width: 100px')
            ])  
            // {'attr': {'size': '50'}}) }}          
            // ->add('users')
            // ->add('nom', 'text', array('attr' => array('size' => '10')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Functions::class,
        ]);
    }
}

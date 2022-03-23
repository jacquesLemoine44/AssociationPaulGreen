<?php

namespace App\Form;

use App\Entity\Fieldtrips;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FieldtripsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titlefieldtrip', TextType::class, [
                'label' => 'Titre : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('shorttextfieldtrip', TextareaType::class, [
                'label' => 'Texte de présentation court : ',
                'required'=> false,
                'attr' => [
                    'rows' => '10',
                    'maxlength' => '1000'
                ],
            ])

            ->add('datefieldtrip',DateType::class, [
                'label' => 'Date de la sortie : ',
                'widget' => 'single_text',
            ])

            ->add('picturefieldtrip', FileType::class, [
                'label' => 'Photo : ',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                    ])
                ],
            ])

            ->add('altpicturefieldtrip', TextType::class, [
                'label' => 'Texte alternatif de la Photo : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])

            ->add('textfieldtrip', CKEditorType::class, [
                'label' => 'Texte long : ',
            ])

            ->add('connectfieldtrip', FileType::class,[
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fieldtrips::class,
        ]);
    }
}

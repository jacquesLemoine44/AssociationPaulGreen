<?php

namespace App\Form;

use App\Entity\Internships;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InternshipsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titleinternship', TextType::class, [
                'label' => 'Titre du stage : ', 
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('shorttextinternship', TextareaType::class, [
                'label' => 'Texte de présentation court : ',
                'required'=> false,
                'attr' => [
                    'rows' => '10',
                    'maxlength' => '1000'
                ],
            ])
            ->add('offerinternship', CKEditorType::class, [
                'label' => "L'Offre : ",
            ])
            ->add('placeintership', TextType::class, [
                'label' => 'Emplacement : ', 
                'required'=> false,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('startinternship',DateType::class, [
                'label' => 'Début de stage : ',
                'widget' => 'single_text',
                'required'=> false,
            ])
            ->add('endinternship',DateType::class, [
                'label' => 'Fin de stage : ',
                'widget' => 'single_text',
                'required'=> false,
            ])
            ->add('linkinternship', TextType::class, [
                'label' => "Lien vers l'annonce : ", 
                'required'=> false,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Internships::class,
        ]);
    }
}

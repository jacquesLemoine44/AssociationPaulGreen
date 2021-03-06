<?php

namespace App\Form;

use App\Entity\News;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('titleNew', TextType::class, [
                'label' => 'Titre : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ],
            ])
            ->add('shorttextnew', TextareaType::class, [
                'label' => 'Texte de présentation court : ',
                'required'=> false,
                'attr' => [
                    'rows' => '10',
                    'maxlength' => '1000'
                ],
            ])
            ->add('pictureNew', FileType::class, [
                'label' => 'Photo : ',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Veuillez entrer un format de document valide !',
                    ])
                ],
            ])  
            ->add('altpictureNew', TextType::class, [
                'label' => 'Texte Alternatif Photo / sous-titre : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ],
            ])

            ->add('dateNew',DateType::class, [
                'label' => 'Dernière mise à jour du site : ',
                'widget' => 'single_text',
            ])

            ->add('textNew', CKEditorType::class, [
                'label' => 'Texte long : ',
            ])

    //  Voir https://nouvelle-techno.fr/articles/live-coding-upload-dimages-multiples-avec-symfony-4-et-5
            // On ajoute le champ "images" dans le formulaire
            // Il n'est pas lié à la base de données (mapped à false)
            ->add('newsPhotosNews', FileType::class,[
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
            'data_class' => News::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Themes;
use App\Entity\ActionsMasters;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
// ====

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ActionsMastersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // ->add('ActionsUsers')

            ->add('titleactionsmaster', TextType::class, [
                'label' => 'Titre : ', 
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ],
            ])
            ->add('shorttextactionsmaster', TextareaType::class, [
                'label' => 'Texte de présentation court : ',
                'required'=> false,
                'attr' => [
                    'rows' => '10',
                    'maxlength' => '1000'
                ],
            ])

            ->add('pictureactionsmaster', FileType::class, [
                'label' => 'Photo de présentation :',
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
            ->add('altpictureactionsmaster', TextType::class, [
                'label' => 'Texte alternatif Photo / sous-Titre : ', 
                'required'=> false,
                'attr' => [
                    'maxlength' => '250'
                ],
            ])

            ->add('textactionsmaster', CKEditorType::class, [
                'label' => 'Texte long : ',
            ])

            ->add('startactionsmaster',DateType::class, [
                'label' => 'Date de début : ',
                'widget' => 'single_text',
                'required' => false,
            ])

            ->add('endactionsmaster',DateType::class, [
                'label' => 'Date de Fin : ',
                'widget' => 'single_text',
                'required' => false,
                ])
                
            ->add('titlelinkactionsmaster', TextType::class, [
                'label' => 'Titre du lien ci-dessous : ',
                'label_attr' => [
                    'class' => 'fst-italic text-decoration-underline'
                ],
                'required'=> false,
                'attr' => [
                    'maxlength' => '250'
                ],
            ])
                // 'attr' => [
                //     'class' => 'form-control'
                // ]
            ->add('linkactionsmaster', TextType::class, [
                'label' => 'Lien : ',
                'label_attr' => [
                    'class' => 'fst-italic'
                ],
                'required'=> false
            ])

            ->add('ActionsThemes', EntityType::class,[
                'label' => "Theme de l'action:",
                'class' => Themes::class,
                'choice_label' => 'nameTheme',
                'multiple' => True,
                'expanded' => true,
            ])            

            ->add('PhotosActions', FileType::class,[
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                ]) 

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ActionsMasters::class,
        ]);
    }
}

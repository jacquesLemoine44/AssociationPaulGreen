<?php

namespace App\Form;

use App\Entity\Themes;
use App\Entity\ActionsAssos;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ActionsAssosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('titleactionsasso', TextType::class, ['label' => 'Titre : ', 'required'=> true])

            ->add('pictureactionsasso', FileType::class, [
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
            ->add('altPictureActionsAssos', TextType::class, ['label' => 'Texte alternatif Photo / sous-Titre : ', 'required'=> false])

            ->add('textactionsasso', CKEditorType::class, [
                'label' => 'Texte long : ',
            ])

            ->add('startactionsasso',DateType::class, [
                'label' => 'Date de début : ',
                'widget' => 'single_text',
                'required' => false,
            ])

            ->add('endactionsasso',DateType::class, [
                'label' => 'Date de Fin : ',
                'widget' => 'single_text',
                'required' => false,
                ])
                
            ->add('titlelinkactionsasso', TextType::class, [
                'label' => 'Titre du lien ci-dessous : ',
                'label_attr' => [
                    'class' => 'fst-italic text-decoration-underline'
                ],
                'required'=> false])
                // 'attr' => [
                //     'class' => 'form-control'
                // ]
            ->add('linkactionsasso', TextType::class, [
                'label' => 'Lien : ',
                'label_attr' => [
                    'class' => 'fst-italic'
                ],
                'required'=> false])

            ->add('actionsassostheme', EntityType::class,[
                'label' => "Theme de l'action:",
                'class' => Themes::class,
                'choice_label' => 'nameTheme',
                'multiple' => True,
                'expanded' => true,
                ])            

            ->add('actionsassosphoto', FileType::class,[
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                ]) 

            // ->add('actionsassosuser')


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ActionsAssos::class,
        ]);
    }
}

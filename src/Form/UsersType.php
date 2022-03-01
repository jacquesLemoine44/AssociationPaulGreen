<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Functions;
use Webmozart\Assert\Assert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Regex;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, ['label' => 'Mail : ', 'required'=> true])
            // ->add('roles')
            // ->add('password')
            ->add('nameUser', TextType::class, ['label' => 'Nom : ', 'required'=> true])
            ->add('firstNameUser', TextType::class, ['label' => 'Prénom : ', 'required'=> true])
            ->add('address1User', TextType::class, ['label' => 'Adresse 1 : ', 'required'=> true])
            ->add('address2User', TextType::class, ['label' => 'Adressse 2 : ', 'required'=> false])
            ->add('cpUser', TextType::class, ['label' => 'Code Postal : ', 'required'=> true])
            ->add('townUser', TextType::class, ['label' => 'Ville : ', 'required'=> true])


            ->add('phoneUser', TelType::class, [
                'label' => 'Téléphone : ',
                 'required'=> true,
            ])
            
        //     'constraints' => [
        //         new Regex([
        //             'pattern' => '/^\+33\(0\)[0-9]*$',
        //             'message' => 'Please use only positive numbers.'
        //         ])
        //    ], 

// ======
            // ->add('field_name', 'integer', array(
            //     'label' => 'Your label here', 
            //     'data' => 0, //default value
            //     'precision' => 0, //disallow floats
            //     'constraints' => array(
            //         new Assert\NotBlank(), 
            //         new Assert\Type('integer'), 
            //         new Assert\Regex(array(
            //             'pattern' => '/^[0-9]\d*$/',
            //             'message' => 'Please use only positive numbers.'
            //             )
            //         ),
            //         new Assert\Length(array('max' => 2))
            //     )
            // ))
// ======

            ->add('photoUser', FileType::class, [
                'label' => 'Photo',
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

            ->add('studyUser', TextType::class, ['label' => 'Etudiant : ', 'required'=> true])
            ->add('yearMenbershipUser', IntegerType::class, ['label' => 'Année : ', 'required'=> true])
            ->add('newslettersNewsUser')
            ->add('newsletterIntershipUser')
            ->add('newsletterAssosUser')
            ->add('contactinfoUser')

            ->add('functionUser', EntityType::class,[
                'class' => Functions::class,
                'choice_label' => 'mission',
                'multiple' => True,
                'expanded' => true,
                'required'   => false,
                'is_granted' => 'ROLE_ADMIN',
                ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}

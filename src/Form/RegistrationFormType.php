<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


    // ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Your email address'),
    //     'constraints' => array(
    //         new NotBlank(array("message" => "Please provide a valid email")),
    //         new Email(array("message" => "Your email doesn't seems to be valid")
    //          ),
    //     )
    // ))
    // ->add('message', TextareaType::class, array('attr' => array('placeholder' => 'Votre message ici'),
    //     'constraints' => array(
    //         new NotBlank(array("message" => "Veuillez laisser un message ici !")),
    //     )
    // ))


    // ->add('date', DateType::class, ['required' => true, 'widget' => 'single_text','format' => 'yyyy-MM-dd',])



            ->add('nameUser', TextType::class, [
                'label' => 'Votre Nom* : ',
                'attr' => [
                    'placeholder' => 'Votre nom...',
                ],
                'constraints' => [
                    new NotBlank(array("message" => "Entrez votre nom !")),
                ]                
            ])

            ->add('firstnameUser', TextType::class, [
                'label' => 'Prénom* : ',
                'attr' => [
                    'placeholder' => 'Votre prénom...',
                ],
                'constraints' => [
                    new NotBlank(array("message" => "Entrez votre prénom !")),
                ]                
            ])

            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques !!!!',
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répétez le mot de passe !'],
                // =====
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères !',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],

                )) 

            // ->add('plainPassword', PasswordType::class, [
            //     // instead of being set onto the object directly,
            //     // this is read and encoded in the controller
            //     'mapped' => false,
            //     'attr' => ['autocomplete' => 'new-password'],
            //     'constraints' => [
            //         new NotBlank([
            //             'message' => 'Veuillez entrer un mot de passe',
            //         ]),
            //         new Length([
            //             'min' => 6,
            //             'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères !',
            //             // max length allowed by Symfony for security reasons
            //             'max' => 4096,
            //         ]),
            //     ],
            // ])

            // {{ form_widget(form.email, {'attr': {'pattern': '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$'}}) }}

            ->add('email', EmailType::class, [
                'required' => true,
                'label' => 'Votre mail* :',
                'attr' => [
                    'placeholder' => 'Your email address',
                ],
                'constraints' => [
                    new NotBlank(["message" => "Veuillez fournir un email valide !"]),
                    new Email(["message" => "Votre email ne semble pas valide !"]),
                ],
            ])        

            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => "Accepter les conditions",
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions.',
                    ]),
                ],
            ])            
            ->add('address1User', TextType::class, [
                'label' => 'Adresse : ',
                'required' => false,
            ])
            ->add('address2User', TextType::class, [
                'label' => "Complément d'adresse : ",
                'required' => false,
            ])
            ->add('cpUser', TextType::class, [
                'label' => 'Code Postal : ',
                'required' => false,
            ])
            ->add('townUser', TextType::class, [
                'label' => 'Ville : ',
                'required' => false,
            ])
            ->add('phoneUser', TelType::class, [
                'label' => 'Téléphone : ',
                'required' => false,
            ])
            // ->add('photoUser', TextType::class, [
            //     'label' => 'Photo : '
            // ])
            ->add('studyUser', TextType::class, [
                'label' => 'Etudiant : ',
                'required' => false,
            ])
            ->add('yearmenbershipUser', IntegerType::class, [
                'label' => '1ère année : ',
                'required' => false,
            ])
            ->add('newslettersNewsUser', HiddenType::class, [
                'label'    => 'Newletter des infos Assos : ',
                'required' => false,
                // 'data' => false,
                'empty_data' => false,
            ])
            ->add('newsletterIntershipUser', HiddenType::class, [
                'label'    => 'Newletter ... : ',
                'required' => false,
                'empty_data' => false,                
            ])
            ->add('newsletterAssosUser', HiddenType::class, [
                'label'    => 'Newletter des infos Assos : ',
                'required' => false,
                'empty_data' => false,                
            ])
            ->add('contactInfoUser', HiddenType::class, [
                'label'    => 'contact : ',
                'required' => false,
                'empty_data' => false,                
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

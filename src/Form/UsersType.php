<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Functions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;



class UsersType extends AbstractType
{

    private $security;


    public function __construct(Security $security) {
        $this->security = $security;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        // On vérifie si l'utilisateur est admin
        // if($this->security->isGranted('ROLE_ADMIN')) return true;

        // if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            
// dump($this->security->isGranted('ROLE_USER'));
// die;   

        // if($this->security->isGranted('ROLE_USER')){

        $user = $this->security->getUser()->getRoles();
        // ->getSingleScalarResult();
        // dump(in_array("ROLE_Ascas",$user,true));
        // die;
        // if ($user->hasRole('ROLE_ADMIN')){
        
// if (in_array("ROLE_ADMIN",$user,true)=true){

    if ($user[0]=='ROLE_ADMIN'){  
        
        $builder

        // ->add('email', EmailType::class,[
        //     'constraints' => [
        //         new NotBlank([
        //             'message' => 'Merci d\'entrer un e-mail',
        //         ]),
        //     ],
        //     'required' => true,
        //     'attr' => ['class' =>'form-control'],
        // ])
            ->add('email', EmailType::class, ['label' => 'Mail : ', 'required'=> true])
            // ->add('roles')
               //         $builder->add($builder->create('roles','choice',array(
    //             'multiple'=>true,
    //            'expanded'=>true,
    //             'choices' => array( 'ROLE_ADMIN' => 'Administrateur', 'ROLE_CONTRIB'=>'Contributeur)//les index du tableau sont les valeurs qui seront inséré via la méthode setRoles() de l'entité
    //   ))
    // $builder->add(' { nom du champ pour le role dans l'objet utilisateur }', 'choice', array(
    //     'choices' => array('ROLE_ADMIN' => 'ROLE_ADMIN', 'ROLE_CONTRIB' => 'ROLE_CONTRIB')
    // ));

            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Autre Master' => 'ROLE_OTHER',
                    'Master GE' => 'ROLE_GE',                    
                    'Administrateur' => 'ROLE_ADMIN'
                ],
                'expanded' => false,
                'multiple' => false,
                'required' => true,
                'label' => 'Rôles' 
            ])

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
            
            // 'constraints' => [
            //     new Regex([
            //         'pattern' => '/^\+33\(0\)[0-9]*$',
            //         'message' => 'Please use only positive numbers.'
            //     ])
            // ],

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

            // ->add('newslettersNewsUser')
            ->add('newslettersNewsUser', CheckboxType::class, [
                'label'    => 'New Letters',
                'required' => false,
            ])

            // ->add('newsletterIntershipUser')
            ->add('newsletterIntershipUser', CheckboxType::class, [
                'label'    => 'Nouveau stage proposé',
                'required' => false,
            ])

            // ->add('newsletterAssosUser')
            ->add('newsletterAssosUser', CheckboxType::class, [
                'label'    => 'Newsletter des nouvelles actions Association',
                'required' => false,
            ])

            // ->add('contactinfoUser')
            ->add('contactinfoUser', CheckboxType::class, [
                'label'    => 'Info nouveau contact',
                'required' => false,
            ])

            ->add('functionUser', EntityType::class,[
                'class' => Functions::class,
                'choice_label' => 'mission',
                'multiple' => True,
                'expanded' => true,
                'required'   => false,
                // 'is_granted' => 'ROLE_ADMIN',
                ]) 
        ;
            }
            else
            {

                $builder

                    ->add('email', EmailType::class, ['label' => 'Mail : ', 'required'=> true])
        
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
        
                    // ->add('newslettersNewsUser', CheckboxType::class, [
                    //     'label'    => 'New Letters',
                    //     'required' => false,
                    // ])
        
                    // ->add('newsletterIntershipUser', CheckboxType::class, [
                    //     'label'    => 'Nouveau stage proposé',
                    //     'required' => false,
                    // ])
        
                    // ->add('newsletterAssosUser', CheckboxType::class, [
                    //     'label'    => 'Newsletter des nouvelles actions Association',
                    //     'required' => false,
                    // ])
        
                    // ->add('contactinfoUser', CheckboxType::class, [
                    //     'label'    => 'Info nouveau contact',
                    //     'required' => false,
                    // ])
        
                    // ->add('functionUser', EntityType::class,[
                    //     'class' => Functions::class,
                    //     'choice_label' => 'mission',
                    //     'multiple' => True,
                    //     'expanded' => true,
                    //     'required'   => false,
                    //     ]) 
            ;

            };

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}

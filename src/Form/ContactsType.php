<?php

namespace App\Form;

use App\Entity\Contacts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        // 'attr' => array(
        //     'autofocus' => true),

            ->add('nameContact', TextType::class, [
                'label' => 'Votre Nom : ', 
                'required'=> true 
            ])
            ->add('emailContact', EmailType::class, [
                'label' => 'Mail : ', 
                'required'=> true
            ])        
            ->add('subjetContact', TextType::class, [
                'label' => 'Sujet : ',
                'required'=> true
            ])
            ->add('contentContact', TextareaType::class, [
                'label' => 'Contenu : ',
                'required'   => true,
                'empty_data' => 'Contenu vide',
                'attr' => ['rows' => 6],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                // 'label' => "Accepter nos conditions !",
                'label_attr' => array('style'=>'display:none;'),
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions.',
                    ]),
                ],
            ]) 

            // ->add('dateContact')            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Internships;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InternshipsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titleinternship', TextType::class, [
                'label' => 'Titre du stage : ', 
                'required'=> true
            ])
            ->add('offerinternship', CKEditorType::class, [
                'label' => "L'Offre : ",
            ])
            ->add('placeintership', TextType::class, [
                'label' => 'Emplacement : ', 
                'required'=> false,
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

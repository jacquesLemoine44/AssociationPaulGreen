<?php

namespace App\Form;

use App\Entity\Params;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ParamsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titleParam', TextType::class, ['label' => 'Titre : ', 'required'=> true])
            ->add('emailParam', TextType::class, ['label' => 'Mail : ', 'required'=> true])
            ->add('textParam', CKEditorType::class)
            ->add('logoParam')
            ->add('photoParam')
            ->add('address1Param', TextType::class, ['label' => 'Adresse : ', 'required'=> true])
            ->add('address2Param', TextType::class, ['label' => 'Complément : ', 'required'=> false])
            ->add('cpParam', TextType::class, ['label' => 'Code Postal : ', 'required'=> true])
            ->add('townParam', TextType::class, ['label' => 'Ville : ', 'required'=> true])
            ->add('updateParam',DateType::class, [
                'label' => 'Dernière mise à jour du site : ',
                'widget' => 'single_text',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Params::class,
        ]);
    }
}

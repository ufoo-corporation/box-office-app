<?php 

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\User;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $defaults = [
            'nom' => 'defaut',
            'prenom' => 'defaut',
        ];

        $builder
            ->add('nom', TextType::class, [
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Nom'
                )
                ])
            ->add('prenom', TextType::class, [
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Prénom'
                )
                ])
            ->add('mail', EmailType::class, [
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Email'
                )
                ])
            ->add('mdp', PasswordType::class, [
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Mot de passe'
                )
                ])
            ->add('Inscription', SubmitType::class,[
                'attr' => [
                    'class' => 'form-btn'
                ]
                    
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
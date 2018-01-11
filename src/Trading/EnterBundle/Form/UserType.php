<?php

namespace Trading\EnterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('username', TextType::class, array(
            'attr' => array(
                'class' => 'form-control form-control-solid placeholder-no-fix',
                'autocomplete' => 'off',
                'placeholder' => 'Username'),
            'label_attr' => array(
                'class' => 'control-label visible-ie8 visible-ie9')))

        ->add('mail', EmailType::class, array(
            'attr' => array(
                'class' => 'form-control form-control-solid placeholder-no-fix',
                'autocomplete' => 'off',
                'placeholder' => 'Email'),
            'label_attr' => array(
                'class' => 'control-label visible-ie8 visible-ie9')))

        ->add('plainPassword', RepeatedType::class, array(
            'type' => PasswordType::class,
            'first_options' => array(
                'attr' => array(
                    'class' => 'form-control form-control-solid placeholder-no-fix',
                    'placeholder' => 'Password'),
                'label_attr' => array(
                    'class' => 'control-label visible-ie8 visible-ie9')),
            'second_options' => array(
                'attr' => array(
                    'class' => 'form-control form-control-solid placeholder-no-fix',
                    'placeholder' => 'Repeat password'),
                'label_attr' => array(
                    'class' => 'control-label visible-ie8 visible-ie9')),

        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Trading\DiaryBundle\Entity\User'
        ));
    }

}

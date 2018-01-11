<?php

namespace Trading\EnterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class LoginType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('username', TextType::class, array('attr' => array('class' => 'form-control form-control-solid placeholder-no-fix',
                                                                 'autocomplete' => 'off',
                                                                 'placeholder' => 'Username'),
                                                 'label_attr' => array('class' => 'control-label visible-ie8 visible-ie9')))



        ->add('password', PasswordType::class, array('attr' => array('class' => 'form-control form-control-solid placeholder-no-fix',
                                                                 'autocomplete' => 'off',
                                                                 'placeholder' => 'Password'),
                                                     'label_attr' => array('class' => 'control-label visible-ie8 visible-ie9')))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Trading\DiaryBundle\Entity\User',
            'attr' => ['class' => 'login-form'],
        ));
    }

}

<?php

namespace Trading\DiaryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Trading\DiaryBundle\Entity\Broker;

class AccountType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('number', TextType::class, array('attr' => array('class' => 'form-control form-control-solid placeholder-no-fix',
                                                               'autocomplete' => 'off',
                                                               'placeholder' => 'Account number')))
        ->add('pwd', TextType::class, array('attr' => array('class' => 'form-control form-control-solid placeholder-no-fix',
                                                               'autocomplete' => 'off',
                                                               'placeholder' => 'Account password')))
        ->add('apikey', TextType::class, array('attr' => array('class' => 'form-control form-control-solid placeholder-no-fix',
                                                               'autocomplete' => 'off',
                                                               'placeholder' => 'Account apikey')))
        ->add('broker', EntityType::class, array(
            'class' => Broker::class,
            'placeholder' => 'Choose an option',
            'choice_label' => 'name',
            'attr' => array('class' => 'form-control form-control-solid placeholder-no-fix')
        ))
        ->add('add', SubmitType::class, array('attr' => array('class' => 'btn green uppercase')))
        // ->add('test', SubmitType::class, array('attr' => array('class' => 'btn green uppercase')))

        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Trading\DiaryBundle\Entity\Account',
            'required' => false,
            'attr' => array('id' => 'sendTest'),
        ));
    }

}

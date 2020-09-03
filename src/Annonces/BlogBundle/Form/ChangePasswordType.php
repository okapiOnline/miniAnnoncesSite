<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 17/03/2017
 * Time: 21:53
 */

namespace Annonces\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ChangePasswordType extends  AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('password', 'password')
                ->add('plainPassword', 'repeated', array(
            'type' => 'password',
            'invalid_message' => 'The password fields must match.',
            'required' => true,
            'first_options'  => array('label' => 'Password'),
            'second_options' => array('label' => 'Repeat Password'),
        ));
        //->add('ChangePassword', 'submit');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Annonces\BackendBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'annonces_backendbundle_user';
    }
} 
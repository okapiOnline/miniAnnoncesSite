<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 17/03/2017
 * Time: 10:48
 */

namespace Annonces\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class EnquiryType extends AbstractType{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('name', TextType::class)
        ->add('email', EmailType::class)
        ->add('subject')
        ->add('body', 'textarea');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Annonces\BlogBundle\Entity\Enquiry'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'annonces_blogbundle_enquiry';
    }
}
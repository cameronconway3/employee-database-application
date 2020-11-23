<?php

namespace App\Form;

use App\Entity\Employee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EmployeeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-styles',
                ),
                'required' => false
            ))
            ->add('last_name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-styles',
                ),
                'required' => false
            ))
            ->add('dob', DateType::class, array(
                'attr' => array(
                    'class' => 'form-styles',
                    'placeholder' => 'DD/MM/YY',
                ),
                'required' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'html5' => false,
            ))
            ->add('email_address', TextType::class, array(
                'attr' => array(
                    'class' => 'form-styles',
                ),
                'required' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class
        ]);
    }
}


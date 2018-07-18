<?php
/**
 * Created by PhpStorm.
 * User: freud
 * Date: 7/16/2018
 * Time: 6:49 PM
 */

namespace AppBundle\Forms\UsuarioForm;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UsuarioForms extends AbstractType
{
    public function createForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add('contrasena', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Las contraseñas no concuerdan.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' =>true,
                'first_options' => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Repetir Contraseña')
            ))
            ->add('tipo_Usuario', ChoiceType::class, array(
                'choices'  => array(
                    'Técnico' => 'tecnico',
                    'Normal' => 'normal'
                )
            ))
            ->add('save', SubmitType::class, array('label' => 'Crear Usuario'))
        ;
    }
}


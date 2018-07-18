<?php
/**
 * Created by PhpStorm.
 * User: freud
 * Date: 7/16/2018
 * Time: 8:21 PM
 */

namespace AppBundle\Forms\TicketForm;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Usuario;


class TicketForms extends AbstractType
{
    public function createForm(FormBuilderInterface $builder, array $options)
    {

        $query = $entityManager->createQuery(
            'SELECT p
              FROM AppBundle:Usuario uc
              WHERE uc.tipo = :tipo
              ORDER BY uc.nombre ASC'
            )->setParameter('tipo', 'tecnico')
        ;
        $usuarioc = $query->getResult();

        var_dump($usuarioc);die;


        $builder
            ->add('usuario', TextType::class)
            ->add('descripcion', TextType::class)
            ->add('fecha_creado', TextType::class)
            ->add('usuario_asignado', ChoiceType::class, array(
                'choices'  => array(
                    'Técnico' => 'tecnico',
                    'Normal' => 'normal'
                )
            ))
            ->add('save', SubmitType::class, array('label' => 'Generar Ticket'))
        ;
    }
}

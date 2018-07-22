<?php
/**
 * Created by PhpStorm.
 * User: freud
 * Date: 7/15/2018
 * Time: 12:09 PM
 */

namespace AppBundle\Controller\Ticket;

use AppBundle\Entity\Ticket;
use AppBundle\Entity\Usuario;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class TicketC extends Controller {
	/**
	 * @Route("/tickets", name="lista_tickets")
	 */
	public function indexTicket() {
        $ticket = $this->getDoctrine()
            ->getRepository(Ticket::class)
            ->findAll();
//        var_dump($ticket);
		return $this->render('@App/Ticket/lista_tickets.html.twig', ["ticket" => $ticket]
		);
	}

    /**
     * @Route("/tickets/{id}/ver", name="ticket_info")
     * Method("GET")
     * @param Ticket $ticket
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexTicketInfo(Ticket $ticket, Request $request)
    {
//var_dump($request);
//        var_dump($ticket);
//        var_dump($ticket->getUsuarioAsignadoId());

        $em = $this->getDoctrine()->getManager();
        $usuarioid = $ticket->getUsuario();
        $usuarioasignaid = $ticket->getUsuarioAsignadoId();
        $usuario = $em->getRepository(Usuario::class)->find($usuarioid);
        $usuariocrea = $usuario->getNombre();
        $usuario = $em->getRepository(Usuario::class)->find($usuarioasignaid);
        $usuarioasignado = $usuario->getNombre();

//        $ticket->add('usuariocrea', TextType::class);
//        $ticket->setUsuariocrea($usuariocrea);

//        var_dump($ticket);
        //        $conn = $em->getConnection();

//        $stmt = $conn->prepare($sql);
//        $stmt->execute();
//        $ticket = $stmt->fetchAll();
//        $ticket = $em->getRepository(Ticket::class)->find($id);
//        $ticket = $ticket[0];
//        var_dump($ticket);die;
//        $ticketinfo = array(
//            'id'=> $ticket['id'],
//            'usuario'=> $ticket['creado'],
//            'asignado'=> $ticket['asignado'],
//            'descripcion'=> $ticket['descripcion'],
//            'creado'=> $ticket['fecha_creado'],
//            'cerrado'=> $ticket['fecha_completado'],
//            'estado'=> $ticket['estado']
//        );
//var_dump($ticket);
        return $this->render('@App/Ticket/index.html.twig', array(
                "ticket" => $ticket,
                "usuariocrea" => $usuariocrea,
                "usuarioasigna" => $usuarioasignado
        ));
//        return $this->render('@App/Ticket/index.html.twig', array(
//            'form' => $form->createView(),
//        ));
    }


    /**
     * @Route("/ticket/nuevo", name="crear_ticket")
     */
    public function nuevoTicket(Request $request)
    {
//        $entityManager = $this->getDoctrine()->getManager();
        $entityManager = $this->getDoctrine()->getRepository(Usuario::class);
        $usuariot = $entityManager->findBy(
            ['tipoUsuario' => 'tecnico']
        );
        $entityManager = $this->getDoctrine()->getRepository(Usuario::class);
        $usuarioc = $entityManager->findBy(
            ['tipoUsuario' => 'normal']
        );
//                $query = $entityManager->createQuery(
//            'SELECT uc.nombre, uc.id
//              FROM AppBundle:Usuario uc
//              WHERE uc.tipoUsuario = :tipo
//              ORDER BY uc.nombre ASC'
//        )->setParameter('tipo', 'tecnico')
//        ;
//        $usuarioc = $query->getResult();

        $tecnico = array();
        foreach ($usuariot as $usuariot) {
            $aid = $usuariot->getId();
            $anombre = $usuariot->getNombre();
            $tecnico[$anombre]=$aid;
        }
        $normal = array();
        foreach ($usuarioc as $usuarioc) {
            $aid = $usuarioc->getId();
            $anombre = $usuarioc->getNombre();
            $normal[$anombre]=$aid;
        }

        $ticket = new Ticket();
        $ticket->setFechaCreado(new \DateTime());
        $ticket->setEstado("PENDIENTE");
        $form = $this->createFormBuilder($ticket)
            ->add('usuario', ChoiceType::class, array(
                'choices' => $normal
            ))
            ->add('descripcion', TextType::class)
//            ->add('fecha_creado', TextType::class)
            ->add('usuarioAsignadoId', ChoiceType::class, array(
                'choices'  => $tecnico
            ))
            ->add('save', SubmitType::class, array('label' => 'Generar Ticket'))
            ->getForm();
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nuevoticket = $form->getData();
//            $id = $usuario->getId();
//            var_dump($nuevoticket);die;
            $em = $this->getDoctrine()->getManager();
            $em->persist($nuevoticket);
            $em->flush();

            return $this->redirectToRoute('lista_tickets');
        }

        return $this->render('@App/Ticket/nuevo_ticket.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
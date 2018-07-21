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

		$sql = '
		SELECT t.*, uc.nombre as creado, ua.nombre as asignado FROM ticket t
		JOIN usuario as uc on uc.id = t.usuario_id
		JOIN usuario as ua on ua.id = t.usuario_asignado_id;
		';
		$em = $this->getDoctrine()->getManager();
		$conn = $em->getConnection();

		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$ticket = $stmt->fetchAll();

//		var_dump($ticket);die;
		return $this->render('@App/Ticket/lista_tickets.html.twig', ["ticket" => $ticket]
		);
	}

    /**
     * @Route("/tickets/{id}/ver", name="ticket_info")
     * Method("GET")
     * @param Ticket $ticket
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexTicketInfo(Ticket $ticket)
    {

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
    public function nuevoTicket()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT uc.nombre, uc.id
              FROM AppBundle:Usuario uc
              WHERE uc.tipoUsuario = :tipo
              ORDER BY uc.nombre ASC'
        )->setParameter('tipo', 'tecnico')
        ;
        $usuarioc = $query->getResult();

//        var_dump($usuarioc);die;
        $ticket = new Ticket();

        $form = $this->createFormBuilder($ticket)
            ->add('usuario', TextType::class)
            ->add('descripcion', TextType::class)
            ->add('fecha_creado', TextType::class)
            ->add('usuario_asignado', ChoiceType::class, array(
                'choices'  => $usuarioc ))
            ->add('save', SubmitType::class, array('label' => 'Generar Ticket'))
        ;
        return $this->render('@App/Ticket/nuevo_ticket.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
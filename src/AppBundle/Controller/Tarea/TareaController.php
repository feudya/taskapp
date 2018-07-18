<?php

namespace AppBundle\Controller\Tarea;

use AppBundle\Entity\Tarea;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TareaController extends Controller {
	/**
	 * @Route("/tareas", name="lista_tareas") ///no puede teener el mismo name que otro
	 */
	public function indexTarea() {

		$sql = '
		SELECT t.*, uc.nombre as creada, ua.nombre as asignada FROM tarea t
		JOIN usuario as uc on uc.id = t.createdby
		JOIN usuario as ua on ua.id = t.asignedto;
		';
		$em = $this->getDoctrine()->getManager();
		$conn = $em->getConnection();

		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$tareas = $stmt->fetchAll();

		return $this->render('@App/Ticket/lista_tickets.html.twig', ["tickets" => $tickets]
		);
	}

	/**
	 * @Route("/tareas/{idTarea}", name="taskinfo")
	 */
	public function indexTareaInfo($idTarea) {
		return $this->render('@App/Tarea/index.html.twig', ["idTarea" => $idTarea]
		);
	}

}
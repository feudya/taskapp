<?php
/**
 * Created by PhpStorm.
 * User: freud
 * Date: 7/22/2018
 * Time: 11:49 AM
 */

namespace AppBundle\Controller\Notas;


use AppBundle\Entity\Notas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NotasController extends Controller
{
    /**
     * @Route("/rest/nota", name="agregar_nota")
     * @Method("POST")
     * @param Request $request
     */
    public function restAgregarNota(Request $request)
    {

        $data = $request->getContent();
        $data = json_decode($data);

        foreach ($data as $value)
        {
//            var_dump($value);
            $array[] = $value;
        }
//        $em = $this->getDoctrine()->getManager();
        $nuevanota = new Notas();
        $nuevanota->setTicketid($array[0]);
        $nuevanota->setUsuarioid($array[1]);
        $nuevanota->setComentario($array[2]);
        $nuevanota->setFecha(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($nuevanota);
        $em->flush();

        return $this->redirectToRoute('lista_tickets');
    }

    /**
     * @Route("/rest/nota/{id}", name="elimina_nota")
     * @Method("DELETE")
     * @param Notas $notas
     */
    public function restDeleteNota(Notas $notas) {

        $em = $this->getDoctrine()->getManager();

        $em->remove($notas);
        $em->flush();

        return $this->redirectToRoute('lista_tickets');
    }

}
<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotasRepository")
 */
class Notas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ticket", inversedBy="notas")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\Column(name="ticket", type="integer")
     */
    private $ticketid;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="notas")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="usuario", referencedColumnName="id")})
     * @ORM\Column(name="usuario", type="integer")
     */
//    private $usuario;
    private $usuarioid;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255)
     */
    private $comentario;







    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Notas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set ticketid
     *
     * @param integer $ticketid
     *
     * @return Notas
     */
    public function setTicketid($ticketid)
    {
        $this->ticketid = $ticketid;

        return $this;
    }

    /**
     * Get ticketid
     *
     * @return int
     */
    public function getTicketid()
    {
        return $this->ticketid;
    }

    /**
     * Set usuarioid
     *
     * @param integer $usuarioid
     *
     * @return Notas
     */
    public function setUsuarioid($usuarioid)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return int
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Notas
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }
}


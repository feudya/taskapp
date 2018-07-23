<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @ORM\Column(name="fecha_completado", type="datetime",nullable=true)
     */
    private $fechaCompletado;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creado", type="datetime",options={"default"="CURRENT_TIMESTAMP"},nullable=true)
     */
    private $fechaCreado;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=11)
     */
    private $estado;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_asignado_id", type="integer")
     */
    private $usuarioAsignadoId;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="tickets")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\Column(name="usuario", type="integer")
     */
    private $usuario;


    /**
     * @var $notas
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Notas", mappedBy="ticket")
     */
    private $notas;

    public function __construct()
    {
        $this->notas = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed notas
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;
    }

    /**
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Usuario
     */

    public function addUsuarioCrea(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }














    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getFechaCompletado()
    {
        return $this->fechaCompletado;
    }

    /**
     * @param \DateTime $fechaCompletado
     */
    public function setFechaCompletado($fechaCompletado)
    {
        $this->fechaCompletado = $fechaCompletado;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return \DateTime
     */
    public function getFechaCreado()
    {
        return $this->fechaCreado;
    }

    /**
     * @param \DateTime $fechaCreado
     */
    public function setFechaCreado($fechaCreado)
    {
        $this->fechaCreado = $fechaCreado;
    }

    /**
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * Set usuarioAsignadoId
     *
     * @param integer $usuarioAsignadoId
     *
     * @return Ticket
     */
    public function setUsuarioAsignadoId($usuarioAsignadoId)
    {
        $this->usuarioAsignadoId = $usuarioAsignadoId;

        return $this;
    }

    /**
     * Get usuarioAsignadoId
     *
     * @return int
     */
    public function getUsuarioAsignadoId()
    {
        return $this->usuarioAsignadoId;
    }

    /**
     * @return int
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param int $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Add nota
     *
     * @param \AppBundle\Entity\Notas $nota
     *
     * @return Ticket
     */
    public function addNotas(\AppBundle\Entity\Notas $nota)
    {
        $this->notas[] = $nota;

        return $this;
    }

    /**
     * Remove nota
     *
     * @param \AppBundle\Entity\Notas $nota
     */
    public function removeTicket(\AppBundle\Entity\Notas $nota)
    {
        $this->notas->removeElement($nota);
    }



}


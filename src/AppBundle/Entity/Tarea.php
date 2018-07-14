<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="tarea")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TareaRepository")
 */
class Tarea
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
     * @var int
     *
     * @ORM\Column(name="tareaid", type="integer", unique=true)
     */
    private $tareaid;

    /**
     * @var int
     *
     * @ORM\Column(name="createdby", type="integer")
     */
    private $createdby;

    /**
     * @var int
     *
     * @ORM\Column(name="asignedto", type="integer", nullable=true)
     */
    private $asignedto;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * Set tareaid
     *
     * @param integer $tareaid
     *
     * @return Tarea
     */
    public function setTareaid($tareaid)
    {
        $this->tareaid = $tareaid;

        return $this;
    }

    /**
     * Get tareaid
     *
     * @return int
     */
    public function getTareaid()
    {
        return $this->tareaid;
    }

    /**
     * Set createdby
     *
     * @param integer $createdby
     *
     * @return Tarea
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return int
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set asignedto
     *
     * @param integer $asignedto
     *
     * @return Tarea
     */
    public function setAsignedto($asignedto)
    {
        $this->asignedto = $asignedto;

        return $this;
    }

    /**
     * Get asignedto
     *
     * @return int
     */
    public function getAsignedto()
    {
        return $this->asignedto;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Tarea
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Tarea
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}


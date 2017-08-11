<?php

namespace BackendBundle\Entity;

/**
 * Conferencias
 */
class Conferencias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $duracion;

    /**
     * @var \BackendBundle\Entity\Tematicas
     */
    private $tematicas;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Conferencias
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Conferencias
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Conferencias
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Conferencias
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set tematicas
     *
     * @param \BackendBundle\Entity\Tematicas $tematicas
     *
     * @return Conferencias
     */
    public function setTematicas(\BackendBundle\Entity\Tematicas $tematicas = null)
    {
        $this->tematicas = $tematicas;

        return $this;
    }

    /**
     * Get tematicas
     *
     * @return \BackendBundle\Entity\Tematicas
     */
    public function getTematicas()
    {
        return $this->tematicas;
    }
}


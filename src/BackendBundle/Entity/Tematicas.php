<?php

namespace BackendBundle\Entity;

/**
 * Tematicas
 */
class Tematicas
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
     * @var integer
     */
    private $horasDia;

    /**
     * @var integer
     */
    private $almuerzo;

    /**
     * @var integer
     */
    private $horasTarde;

    /**
     * @var \DateTime
     */
    private $horaInicio;

    /**
     * @var \DateTime
     */
    private $horaFin;


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
     * @return Tematicas
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
     * Set horasDia
     *
     * @param integer $horasDia
     *
     * @return Tematicas
     */
    public function setHorasDia($horasDia)
    {
        $this->horasDia = $horasDia;

        return $this;
    }

    /**
     * Get horasDia
     *
     * @return integer
     */
    public function getHorasDia()
    {
        return $this->horasDia;
    }

    /**
     * Set almuerzo
     *
     * @param integer $almuerzo
     *
     * @return Tematicas
     */
    public function setAlmuerzo($almuerzo)
    {
        $this->almuerzo = $almuerzo;

        return $this;
    }

    /**
     * Get almuerzo
     *
     * @return integer
     */
    public function getAlmuerzo()
    {
        return $this->almuerzo;
    }

    /**
     * Set horasTarde
     *
     * @param integer $horasTarde
     *
     * @return Tematicas
     */
    public function setHorasTarde($horasTarde)
    {
        $this->horasTarde = $horasTarde;

        return $this;
    }

    /**
     * Get horasTarde
     *
     * @return integer
     */
    public function gethorasTarde()
    {
        return $this->horasTarde;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     *
     * @return Tematicas
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     *
     * @return Tematicas
     */
    public function setHoraF($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }


    public function __toString(){
        return $this->nombre;
    }
}

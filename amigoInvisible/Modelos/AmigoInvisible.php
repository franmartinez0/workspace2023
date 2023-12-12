<?php

namespace amigoInvisible\Modelos;

class AmigoInvisible
{

    private $id;
    private $nombre;
    private $estado;
    private $maximoDinero;
    private $fechaTope;
    private $lugar;
    private $observaciones;
    private $emoji;
    private $participantes;

    //Creamos el constructor con todos los parámetros con valor por defecto
    public function __construct($id = "", $nombre = "", $maximoDinero = "", $fechaTope = "", $lugar = "", $observaciones = "", $emoji = "", $estado = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->maximoDinero = $maximoDinero;
        $this->fechaTope = $fechaTope;
        $this->lugar = $lugar;
        $this->observaciones = $observaciones;
        $this->emoji = $emoji;
        $this->participantes = array();
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of maximoDinero
     */
    public function getMaximoDinero()
    {
        return $this->maximoDinero;
    }

    /**
     * Set the value of maximoDinero
     */
    public function setMaximoDinero($maximoDinero): self
    {
        $this->maximoDinero = $maximoDinero;

        return $this;
    }

    /**
     * Get the value of fechaTope
     */
    public function getFechaTope()
    {
        return $this->fechaTope;
    }

    /**
     * Set the value of fechaTope
     */
    public function setFechaTope($fechaTope): self
    {
        $this->fechaTope = $fechaTope;

        return $this;
    }

    /**
     * Get the value of lugar
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set the value of lugar
     */
    public function setLugar($lugar): self
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get the value of observaciones
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set the value of observaciones
     */
    public function setObservaciones($observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get the value of emoji
     */
    public function getEmoji()
    {
        return $this->emoji;
    }

    /**
     * Set the value of emoji
     */
    public function setEmoji($emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * Get the value of participantes
     */
    public function getParticipantes()
    {
        return $this->participantes;
    }

    /**
     * Set the value of participantes
     */
    public function setParticipantes($participantes): self
    {
        $this->participantes = $participantes;

        return $this;
    }
}

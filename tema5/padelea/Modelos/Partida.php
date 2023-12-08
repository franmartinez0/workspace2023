<?php

namespace Padel\Modelos;

class Partida{
    private $id;
    private $fecha;
    private $hora;
    private $ciudad;
    private $lugar;
    private $cubierto;
    private $estado;

    private $jugadores;

    

    public function __construct($id="",$fecha="",$hora="",$ciudad="",$lugar="",$cubierto="",$estado=""){
        $this->id=$id;
        $this->fecha=$fecha;
        $this->hora=$hora;
        $this->ciudad=$ciudad;
        $this->lugar=$lugar;
        $this->cubierto=$cubierto;
        $this->estado=$estado;


        //Aqui metemos los jugadores que estaran dentro de la partida
        $this->jugadores=array();
        
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
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */
    public function setFecha($fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of hora
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set the value of hora
     */
    public function setHora($hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get the value of ciudad
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     */
    public function setCiudad($ciudad): self
    {
        $this->ciudad = $ciudad;

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
     * Get the value of cubierto
     */
    public function getCubierto()
    {
        return $this->cubierto;
    }

    /**
     * Set the value of cubierto
     */
    public function setCubierto($cubierto): self
    {
        $this->cubierto = $cubierto;

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
     * Get the value of jugadores
     */
    public function getJugadores()
    {
        return $this->jugadores;
    }

    /**
     * Set the value of jugadores
     */
    public function setJugadores($jugadores): self
    {
        $this->jugadores = $jugadores;

        return $this;
    }
}
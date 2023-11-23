<?php
namespace incidencias\modelos;


class incidencia{
    private $id;
    private $latitud;
    private $longitud;
    private $ciudad;
    private $direccion;
    private $descripcion;
    private $solucion;
    private $idCliente;
    private $estado;

    public function __construct($id="",$latitud="",$longitud="",$ciudad="",$direccion="",$descripcion="",$solucion="",$idCliente="",$estado=""){
        $this->id = $id;
        $this->latitud=$latitud;
        $this->longitud=$longitud;
        $this->ciudad=$ciudad;
        $this->direccion=$direccion;
        $this->descripcion=$descripcion;
        $this->solucion=$solucion;
        $this->idCliente=$idCliente;
        $this->estado=$estado;
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
     * Get the value of latitud
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set the value of latitud
     */
    public function setLatitud($latitud): self
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get the value of longitud
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set the value of longitud
     */
    public function setLongitud($longitud): self
    {
        $this->longitud = $longitud;

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
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */
    public function setDireccion($direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of solucion
     */
    public function getSolucion()
    {
        return $this->solucion;
    }

    /**
     * Set the value of solucion
     */
    public function setSolucion($solucion): self
    {
        $this->solucion = $solucion;

        return $this;
    }

    /**
     * Get the value of idCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     */
    public function setIdCliente($idCliente): self
    {
        $this->idCliente = $idCliente;

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
}




?>
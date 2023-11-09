<?php
namespace DeepRacer\controladores;

class Resultado{
    private $id;
    private $modelo;
    private $pista;
    private $tiempoVuelta;
    private $numeroColisiones;
//creamos una clase pollo en este caso con todos los campos vacios, y cada vez que añadamos un resultado se añadiran los datos de la bbdd en esta clase y.

public function __construct($id="",$modelo="",$pista="",$tiempoVuelta="",$numeroColisiones=""){
    $this->id=$id;
    $this->modelo=$modelo;
    $this->pista=$pista;
    $this->tiempoVuelta=$tiempoVuelta;
    $this->numeroColisiones=$numeroColisiones;
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
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of pista
     */
    public function getPista()
    {
        return $this->pista;
    }

    /**
     * Set the value of pista
     */
    public function setPista($pista): self
    {
        $this->pista = $pista;

        return $this;
    }

    /**
     * Get the value of tiempoVuelta
     */
    public function getTiempoVuelta()
    {
        return $this->tiempoVuelta;
    }

    /**
     * Set the value of tiempoVuelta
     */
    public function setTiempoVuelta($tiempoVuelta): self
    {
        $this->tiempoVuelta = $tiempoVuelta;

        return $this;
    }

    /**
     * Get the value of numeroColisiones
     */
    public function getNumeroColisiones()
    {
        return $this->numeroColisiones;
    }

    /**
     * Set the value of numeroColisiones
     */
    public function setNumeroColisiones($numeroColisiones): self
    {
        $this->numeroColisiones = $numeroColisiones;

        return $this;
    }
}
?>
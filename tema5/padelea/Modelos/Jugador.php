<?php

namespace Padel\Modelos;

class Jugador{
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $nivel;

    public function __construct($id="",$nombre="",$email="",$password="",$nivel=""){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->email=$email;
        $this->password=$password; 
        $this->nivel=$nivel;
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of nivel
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     */
    public function setNivel($nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }
}
<?php
namespace regalos\modelos;

class link{


private $id;
private $url;
private $nombreUrl;
private $idRegalo;

public function __construct($id="",$url="",$nombreUrl="",$idRegalo=""){
$this->id=$id;
$this->url=$url;
$this->nombreUrl=$nombreUrl;
$this->idRegalo=$idRegalo;
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
 * Get the value of url
 */
public function getUrl()
{
return $this->url;
}

/**
 * Set the value of url
 */
public function setUrl($url): self
{
$this->url = $url;

return $this;
}

/**
 * Get the value of nombreUrl
 */
public function getNombreUrl()
{
return $this->nombreUrl;
}

/**
 * Set the value of nombreUrl
 */
public function setNombreUrl($nombreUrl): self
{
$this->nombreUrl = $nombreUrl;

return $this;
}

/**
 * Get the value of idRegalo
 */
public function getIdRegalo()
{
return $this->idRegalo;
}

/**
 * Set the value of idRegalo
 */
public function setIdRegalo($idRegalo): self
{
$this->idRegalo = $idRegalo;

return $this;
}
}









?>
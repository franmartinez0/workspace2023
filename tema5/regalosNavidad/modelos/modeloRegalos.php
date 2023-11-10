<?php
namespace RegalosNavidad\modelos;

use RegalosNavidad\vistas\VistaRegalos;
use RegalosNavidad\modelos\ConexionBaseDeDatos;
use RegalosNavidad\modelos\regalo;
use \PDO;


class modeloRegalos{

public static function mostrarRegalos($idUsuario){

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM regalos WHERE idUsuario=?");
        $consulta->bindValue(1, 4);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\regalo'); //Nombre de la clase
        $consulta->execute();

        $regalos = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $regalos;
    
}

}







?>
<?php


namespace RegalosNavidad\modelos;

use RegalosNavidad\modelos\ConexionBaseDeDatos;
use \PDO;


class ModeloResultados{
public static function mostrarTodos(){
    $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM regalos");
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\regalo'); //Nombre de la clase
            $consulta->execute();
    
            $regalos = $consulta->fetchAll();

            $conexionObject->cerrarConexion();

            return $regalos;
        }
}



?>
<?php
namespace regalos\modelos;
use \PDO;


class modeloLinks{

    public static function visualizarLinks ($id) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM enlaces WHERE idRegalo = ?");
        $consulta -> bindValue(1,$id);
        $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalos\modelos\link'); //Nombre de la clase
        $consulta -> execute();

        $enlaces = $consulta->fetchAll();

        $conexionObject -> cerrarConexion();

        return $enlaces;
    }

    
    public static function insertarLink($link) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO enlaces (url,nombreUrl,idRegalo) values (?,?,?)");
        $consulta -> bindValue(1,$link->getUrl());
        $consulta -> bindValue(2,$link->getNombreUrl());
        $consulta -> bindValue(3,$link->getIdRegalo());
        $consulta -> execute();

        $conexionObject -> cerrarConexion();
    }
    public static function eliminarLink($id) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM enlaces WHERE id = ?");
        $consulta -> bindValue(1,$id);
        $consulta -> execute();

        $conexionObject -> cerrarConexion();
    }
    
}






<?php
namespace regalos\modelos;
use \PDO;


class modeloRegalos{
    public static function mostrarRegalos($idUsuario){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM regalos WHERE idUsuario=?");
        $consulta->bindValue(1, $idUsuario);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalos\modelos\regalo'); //Nombre de la clase
        $consulta->execute();

        $regalos = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $regalos;
    }




    public static function insertarRegalo(regalo $regalo){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO regalos (nombre,idUsuario,precio,estado,year) VALUES (?,?,?,?,?)");
        $consulta -> bindValue(1,$regalo->getNombre());
        $consulta -> bindValue(2,$regalo->getIdUsuario());
        $consulta -> bindValue(3,$regalo->getPrecio());
        $consulta -> bindValue(4,$regalo->getEstado());
        $consulta -> bindValue(5,$regalo->getYear());
        $consulta -> execute();

        $conexionObject -> cerrarConexion();
    }




    public static function eliminarRegalo($id) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM regalos WHERE id=:id");
        $consulta->bindValue(":id", $id);
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }



    
    public static function infoRegalo($id) {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM regalos WHERE id=:id");
        $consulta->bindValue(":id",$id);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalos\modelos\regalo'); //Nombre de la clase
        $consulta->execute();

        $resultados = $consulta->fetch();
        $conexionObject->cerrarConexion();

        return $resultados;
    }



    
    public static function modificarRegalo($regalo) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("UPDATE regalos SET nombre = ?, idUsuario = ?, precio = ?, estado = ?, year = ? WHERE id = ? ");
        $consulta -> bindValue(1,$regalo->getNombre());
        $consulta -> bindValue(2,$regalo->getIdUsuario());
        $consulta -> bindValue(3,$regalo->getPrecio());
        $consulta -> bindValue(4,$regalo->getEstado());
        $consulta -> bindValue(5,$regalo->getYear());
        $consulta -> bindValue(6,$regalo->getId());
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }



}





?>
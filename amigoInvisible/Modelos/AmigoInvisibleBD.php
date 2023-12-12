<?php

namespace amigoInvisible\Modelos;

use amigoInvisible\Modelos\AmigoInvisible;
use \PDO;
use amigoInvisible\Modelos\ConexionBaseDeDatos;

class amigoinvisibleBD
{


    public static function getAmigosInvisibles()
    {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM amigosInvisibles WHERE fechaTope >= CURDATE() ORDER BY fechaTope ASC");

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $amigosInvisibles = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'amigoInvisible\Modelos\AmigoInvisible');
        $conexionObject->cerrarConexion();




        return $amigosInvisibles;
    }


    public static function insertarAmigoInvisible($amigoInvisible)
    {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO amigosInvisibles (nombre,estado,maximoDinero,fechaTope,lugar,observaciones) VALUES (?,?,?,?,?,?)");
        $consulta->bindValue(1, $amigoInvisible->getNombre());
        $consulta->bindValue(2, $amigoInvisible->getEstado());
        $consulta->bindValue(3, $amigoInvisible->getMaximoDinero());
        $consulta->bindValue(4, $amigoInvisible->getFechaTope());
        $consulta->bindValue(5, $amigoInvisible->getLugar());
        $consulta->bindValue(6, $amigoInvisible->getObservaciones());

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }




    public static function infoAmigoInvisible($id)
    {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM amigosInvisibles WHERE id=:id");
        $consulta->bindValue(":id", $id);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'amigoInvisible\Modelos\AmigoInvisible'); //Nombre de la clase
        $consulta->execute();

        $resultados = $consulta->fetch();
        $conexionObject->cerrarConexion();

        return $resultados;
    }




    public static function modificarAmigoInvisible($amigoInvisible)
    {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("UPDATE amigosInvisibles SET nombre = ?, estado = ?, maximoDinero = ?, fechaTope = ?, lugar = ?, observaciones=? WHERE id = ? ");
        $consulta->bindValue(1, $amigoInvisible->getNombre());
        $consulta->bindValue(2, $amigoInvisible->getEstado());
        $consulta->bindValue(3, $amigoInvisible->getMaximoDinero());
        $consulta->bindValue(4, $amigoInvisible->getFechaTope());
        $consulta->bindValue(5, $amigoInvisible->getLugar());
        $consulta->bindValue(6, $amigoInvisible->getObservaciones());
        $consulta->bindValue(7, $amigoInvisible->getId());
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    public static function eliminarAmigoInvisible($id)
    {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM amigosInvisibles WHERE id=:id");
        $consulta->bindValue(":id", $id);
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }
    public static function mostrarParticipantes($id)
    {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM participantes WHERE idAmigoInvisible = ?");
        $consulta->bindValue(1, $id);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'amigoInvisible\Modelos\Participante'); //Nombre de la clase
        $consulta->execute();

        $participantes = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $participantes;
    }
}

<?php
namespace Padel\Modelos;


use Padel\Modelos\ConexionBaseDeDatos;
use Padel\Modelos\Jugador;
use \PDO;


class ModeloJugadores{

    public static function checkLogin($email, $password) {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM jugadores WHERE email=? and password=?");
        $consulta->bindValue(1,$email);
        $consulta->bindValue(2,$password);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'padalea\modelos\jugador'); //Nombre de la clase
        $consulta->execute();

        $resultado = $consulta->fetch();

        $conexionObject->cerrarConexion();

        return $resultado;

    }



}


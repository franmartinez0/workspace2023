<?php
namespace incidencias\modelos;
use incidencias\modelos\incidencia;
use \PDO;


class modeloIncidencias{
    public static function mostrarIncidencias() {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM incidencia");
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'incidencias\modelos\incidencia'); //Nombre de la clase
        $consulta->execute();

        $resultados = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $resultados;
    }

    public static function eliminarIncidencia($id) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM incidencia WHERE id=:id");
        $consulta->bindValue(":id", $id);
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    public static function infoIncidencia($id) {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM incidencia WHERE id=:id");
        $consulta->bindValue(":id",$id);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'incidencias\modelos\incidencia'); //Nombre de la clase
        $consulta->execute();

        $resultados = $consulta->fetch();
        $conexionObject->cerrarConexion();

        return $resultados;
    }



    public static function modificarIncidencia($incidencia) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("UPDATE incidencia SET latitud=?, longitud=?, ciudad=?, direccion=?, descripcion=?,solucion=?,idCliente=?,estado=? WHERE id=?");
        $consulta->bindValue(1,$incidencia->getLatitud());
        $consulta->bindValue(2,$incidencia->getLongitud());
        $consulta->bindValue(3,$incidencia->getCiudad());
        $consulta->bindValue(4,$incidencia->getDireccion());
        $consulta->bindValue(5,$incidencia->getDescripcion());
        $consulta->bindValue(6,$incidencia->getSolucion());
        $consulta->bindValue(7,$incidencia->getIdCliente());
        $consulta->bindValue(8,$incidencia->getEstado());
        $consulta->bindValue(9,$incidencia->getId());

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }
    
    public static function insertarIncidencia(incidencia $incidencia) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO incidencia (latitud, longitud, ciudad, direccion, descripcion, solucion, idCliente, estado) VALUES (?,?,?,?,?,?,?,?)");
        $consulta->bindValue(2,$incidencia->getLatitud());
        $consulta->bindValue(3,$incidencia->getLongitud());
        $consulta->bindValue(4,$incidencia->getCiudad());
        $consulta->bindValue(5,$incidencia->getDireccion());
        $consulta->bindValue(6,$incidencia->getDescripcion());
        $consulta->bindValue(7,$incidencia->getSolucion());
        $consulta->bindValue(8,$incidencia->getIdCliente());
        $consulta->bindValue(9,$incidencia->getEstado());
       
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    


}

?>
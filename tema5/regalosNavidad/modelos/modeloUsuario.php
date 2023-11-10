<?php
namespace RegalosNavidad\modelos;
use \PDO;
use RegalosNavidad\vistas;

class ModeloUsuario{

    public static function iniciarSesion($email,$password){


        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();


        $consulta= $conexion->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ?");
        $consulta->bindValue(1, $email);
        $consulta->bindValue(2, $password);

        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\usuario'); //Nombre de la clase
        $consulta->execute();

    
        VistaResultados::Render();

        $conexionObject->cerrarConexion();
        
    }




}






?>
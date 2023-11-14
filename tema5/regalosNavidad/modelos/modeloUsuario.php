<?php
namespace RegalosNavidad\modelos;
use \PDO;

class ModeloUsuario{

    public static function iniciarSesion($email,$password){


        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();


        $consulta= $conexion->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ?");
        $consulta->bindValue(1, $email);
        $consulta->bindValue(2, $password);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\usuario'); //Nombre de la clase
        $consulta->execute();
        $usuario =$consulta->fetch(PDO::FETCH_ASSOC);
        


        
            $filas = $consulta->rowCount();

            //Si no me devuelve ninguna fila el password es incorrecto
            if ($filas == 0) {

                echo"<script>window.location='index.php?accion=error';</script>";

            } else {
                
                //Usuario existe y password correcto 
               // $_SESSION['usuario']=array("email"=>$email,"password"=>$password);
                $_SESSION['id']=$usuario['id'];
                $_SESSION['email']=$usuario['email'];
               
                $conexionObject->cerrarConexion();
                return 1;
                //echo"<script>window.location='index.php?accion=mostrarRegalos';</script>";
                header("Location: index.php?accion=mostrarRegalos") ;           
            }
        
    }




}






?>
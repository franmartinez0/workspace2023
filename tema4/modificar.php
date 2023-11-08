<?php
 $dbh = null;

 define('DB_NAME', 'regalosNavidad');
 define('DB_USER', 'root');
 define('DB_PASSWORD', 'toor');
 define('DB_HOST', 'mariadb'); //La IP del contenedor Mysql, y el puerto interno del contenedor , no tiene nada que ver con el puerto que toma el contenedor para conectarse al exterior

 try {
     $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 } catch (PDOException $e){
     echo $e->getMessage();
 }





 //modificar usuario

 $consulta=$dbh->prepare("UPDATE usuarios SET email=?,password=? WHERE idusuarios=?");
 $consulta->bindValue(1,"juanitomodificado@gmail.com");
 $consulta->bindValue(2,"passcambiada");
 $consulta->bindValue(3,2);

 $consulta->execute();
 echo"modificado";

 ?>
<?php
 $dbh = null;

 define('DB_NAME', 'regalosNavidad');
 define('DB_USER', 'root');
 define('DB_PASSWORD', 'toor');
 define('DB_HOST', 'mariadb'); //La IP del contenedor Mysql, y el puerto interno del contenedor , no tiene nada que ver con el puerto que toma el contenedor para conectarse al exterior
 //al tener el contenedor con poner el nombre del contenedor de base de datos en el host es suficiente

 try {
     $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 } catch (PDOException $e){
     echo $e->getMessage();
 }





 //insertar usuario

 $consulta=$dbh->prepare("INSERT INTO usuarios (nombre,email,password)VALUES (?,?,?)");
 $consulta->bindValue(1,"juanito");
 $consulta->bindValue(2,"juanito@gmail.com");
 $consulta->bindValue(3,"1234566");

 $consulta->execute();
 echo"insertado";

 ?>

<?php
 $dbh = null;

 define('DB_NAME', 'php');
 define('DB_USER', 'root');
 define('DB_PASSWORD', 'toor');
 define('DB_HOST', '172.17.0.2:3306'); //La IP del contenedor Mysql, y el puerto interno del contenedor , no tiene nada que ver con el puerto que toma el contenedor para conectarse al exterior

 try {
     $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 } catch (PDOException $e){
     echo $e->getMessage();
 }

//preparamos la consulta -> llamada a metodos
 $stmt = $dbh->prepare("SELECT * FROM usuarios ");
 // Especificamos el fetch mode antes de llamar a fetch()
 //con fetch aasoc devuelve los datos en un array asociativo
 $stmt->setFetchMode(PDO::FETCH_ASSOC);
 // Ejecutamos
 $stmt->execute();


 //cada vez que llamamos a fetch nos devuelve una fila

 //las claves del array asociativo son las columnas de la tabla
 
 while($row = $stmt->fetch()){
     echo "Nombre: " . $row['nombre'] . "<br>";
     echo "Email: " . $row['email'] . "<br>";

 }


?>
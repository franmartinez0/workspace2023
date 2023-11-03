<?php
//iniciamos session
session_start();
// hay que crear un array de cartas

if(!isset($_SESSION['baraja'])){
    $_SESSION['baraja']=array(
        'c1','c2','c3','c4','c5','c6','c7','c11','c12','c13',
        'd1','d2','d3','d4','d5','d6','d7','d11','d12','d13',
        'p1','p2','p3','p4','p5','p6','p7','p11','p12','p13',
        't1','t2','t3','t4','t5','t6','t7','t11','t12','t13');


        //usamos el array shufle para mezclarlas
        shuffle($_SESSION['baraja']);
       //aqui van las cartas que vayan saliendo
        $_SESSION['jugada']=array(); 
        //numero de cartas sacadas   
        $_SESSION['cartasSacadas']=0;    
}






 //funcion para saber cual es el valor de cada carta con un foreach lo recorres y con un substring sacas el valor y el if decide cual es su valor dentro de la jugada
 
 
function valorCartas($cartas){
    $jugada=0;
    foreach ($cartas as $carta) {
        $numero=intval(substr($carta,1));
        //si el numero de la carta es mayor de 7  es decir los reyes , o si es el as el valor solo es 0,5
        if($numero>7 || $numero==1){
            $jugada +=0.5;
        }else{
            $jugada += $numero;
        }


    }
    return $jugada;
}

    

//sacar carta
if(isset($_POST['sacar'])){

        $carta= array_shift($_SESSION['baraja']);
        $_SESSION['jugada'][]=$carta;
        $_SESSION['cartasSacadas']++;

        $total=valorCartas($_SESSION['jugada']);

        if($total>7.5){
            $_SESSION['resultado']= 'has perdido , te has pasado de puntuacion';
        }elseif($total==7.5){
            $_SESSION['resultado']='has ganado';
        }


        


}


   


    // reiniciamos 
if (isset ($_POST['reiniciar'])){
        session_destroy();
        header("Location:index.php");
        die();
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juego de cartas</title>
</head>





<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./cartas/1.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      juego del 7 y medio
    </a>
  </div>
</nav>
<body>
    

<div class="card" style="width: 10rem;">
  <img src="./cartas/dorso-rojo.svg" class="card-img-top" alt="...">
  <div class="card-body"><form action="" method="post">

<button class="btn btn-primary" type="submit
" name="sacar">sacar carta</button>
  </form>
  
    
  </div>
</div>
<table class="table-primary">
  
  <tbody>
    <tr>
      <th scope="row">jugada</th>
      <td>
            <?php foreach ($_SESSION["jugada"] as $carta): ?>
                <td>
                <div class="card" style="width: 10rem;">
                <img src="./cartas/<?php echo $carta; ?>.svg" class="card-img-top" alt="...">
                <div class="card-body">
                </div>
                </div>
                </td>
                

            <?php endforeach; ?>
        </td>
    </tr>
    
  </tbody>
</table>






<form method="post"> <button type="submit" name="reiniciar" class="btn btn-secondary">Reiniciar</button></form>
   


<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Número de cartas sacadas: <?php echo $_SESSION['cartasSacadas']?></li>
    <li class="list-group-item">Puntuación: <?php echo valorCartas($_SESSION["jugada"])?> </li>
    
  </ul>
</div>


<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Resultado: <?php isset( $_SESSION['resultado'])?></li>
    
    <?php if (valorCartas($_SESSION['jugada']) > 7): ?>


        <li class="list-group-item">Resultado: <?php echo isset($_SESSION['resultado']) ? $_SESSION['resultado'] : "" ?></li> 
    <?php endif; ?>
  </ul>
</div>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</html>
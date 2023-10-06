<?php

include "cabecera.php";
?>
<?php
    
    //Productos de una tienda
    $productos = array(
            array(
                    "nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte"
                    
            ),
            array(
                    "nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas", "descripcion" => "Las mejores para correr"
                    
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
                    
            ),
            array(
                    "nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal"
                    
            ),
            array(
                    "nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte"
            ),   
            array(
                    "nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas", "descripcion" => "Las mejores para correr"
                    
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
                    
            ),
            array(
                    "nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal"
                   
            ),
            array(
                    "nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte"
                   
            ),
            array(
                    "nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas", "descripcion" => "Las mejores para correr"
                   
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal"
            ),
            array(
                    "nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte"
            ),
            array(
                    "nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas guay", "descripcion" => "Las mejores para correr"
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal"
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal"
            ),
            array(
                    "nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte"
            ),
            array(
                    "nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas guay", "descripcion" => "Las mejores para correr"
            ),
            array(
                "nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                "categoria" => "zapatillas guay", "descripcion" => "Las mejores para correr"
            ),
        
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal"
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            ),
            array(
                    "nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta"
            )
            );
    function pintarPorCategoria($productos, $categoria) {
        echo "<h3>".strtoupper($categoria)."</h3>";
        $cont=0;
        foreach($productos as $valor) {

            if ($valor['categoria'] == $categoria) {

                if ($cont == 4)
                    break;
                $cont++;
                    
                echo "<div class='card mb-5' style='width: 16rem;'>
                        <img src='".$valor["imagen"]."' class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>".$valor["nombre"]."</h5>
                            <p class='card-text'>".$valor['descripcion']."</p>";

                //Pintar las tres imágenes
                echo "<table class='table table-bordered blue-500'>";
                echo "<tr>";
                
                echo "</tr>";
                echo "</table>";

                echo "
                            <p class='card-text'><small class='text-secondary'>".$valor["precio"]." €</small></p>

                            <a href='#' class='btn btn-primary'>Comprar</a>
                        </div>
                    </div>";    
            } 
        }

    }



    

    echo "<div class='container'>";
    echo "<div class='row'>";

    //Me quedo con los valores de la columna categoría, y los valores los meto en un array
    $categorias = array_column($productos, "categoria");
    //Quito repetidos
    $categorias = array_unique($categorias);

    foreach($categorias as $categoria)      
        pintarPorCategoria($productos, $categoria);

            


    echo "</div>";
    echo "</div>";


?>

</div>

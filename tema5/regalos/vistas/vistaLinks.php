<?php

    namespace regalos\vistas;
    
    class vistaLinks  {

        public static function render($links,$id) {

            include("cabeceraPrincipal.php");

            
            echo "<div class='container'>";

            echo '
            <main class="d-flex flex-wrap">
            <p>
                <a href="index.php?accion=mostrarFormNuevoLink&id=' . $id . '" class="nav-link px-2 link-secondary"><button class="btn btn-primary">Nuevo enlace</button></a>
                
            </p>
            </main>';
            
            echo "
            
            <table class='table table-dark'>
                <thead>
                    <tr>
                     
                        <th>url</th>
                        <th>Nombre</th>
                       
                    </tr>
                </thead>
                <tbody>";
    
            //$resultado ahora es un objeto
            foreach($links as $link) {
                echo "<tr>";
                
                echo " <td>".$link->getNombreUrl()."</td>";
                echo " <td>".$link->getUrl()."</td>";
                
                echo "<td>";
                echo "<a href='index.php?accion=eliminarLink&id=".$link->getId()."&idRegalo=".$id."'><button class='btn btn-danger'>X</button>";
                
                echo "</td>";
                echo "</tr>";
            }
           
            echo "</tbody>
            </table>";

            echo "</div>";

            include "piePrincipal.php";

        }





        

    }


?>
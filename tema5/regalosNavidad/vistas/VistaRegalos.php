<?php

    namespace RegalosNavidad\vistas;
    
    class VistaRegalo  {

        public static function render($regalos) {

            include("cabecera.php");

            
            echo "<div class='container'>";

            echo '
            <main class="d-flex flex-wrap">
            <p>
                <a href="index.php?accion=mostrarFormNuevoResultado" class="nav-link px-2 link-secondary"><button class="btn btn-primary">Nuevo Resultado</button></a>
            </p>
            </main>';
            
            echo "
            
            <table class='table table-dark'>
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Pista</th>
                        <th>Tiempo</th>
                        <th>Colisiones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>";
    
            //$resultado ahora es un objeto
            foreach($regalos as $regalo) {
                echo "<tr>";
                echo " <td>".$regalo->getNombre()."</td>";
                echo " <td>".$regalo->getPrecio()."</td>";
                echo " <td>".$regalo->getEstado()."</td>";
                echo " <td>".$regalo->getYear()."</td>";
                echo "<td>";
                echo "<a href='index.php?accion=eliminarResultado&id=".$regalo->getId()."'><button class='btn btn-danger'>X</button>";
                echo "<a href='index.php?accion=modificarResultadoForm&id=".$regalo->getId()."'><button class='btn btn-warning ms-1'>@</button>";
                echo "<a href='index.php?accion=verIntentos&id=".$regalo->getId()."'><button class='btn btn-success ms-1'>Intentos</button>";
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
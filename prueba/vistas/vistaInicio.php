<?php

    namespace incidencias\vistas;
    
    class VistaInicio  {

        public static function render($incidencias) {

            include("cabecera.php");
            echo "<div class='container'>";

            echo '
            <main class="d-flex flex-wrap">
            <p>
                <a href="index.php?accion=mostrarFormNuevoRegalo" class="nav-link px-2 link-secondary"><button class="btn btn-primary">Nuevo Resultado</button></a>
            </p>
            </main>';
            
            echo "
            
            <table class='table table-dark'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>LATITUD</th>
                        <th>LONGITUD</th>
                        <th>CIUDAD</th>
                        <th>DIRECCION</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <tbody>";
               
            //$resultado ahora es un objeto
            foreach($incidencias as $incidencia) {
                echo "<tr>";
                echo " <td>".$incidencia->getId()."</td>";
                echo " <td>".$incidencia->getLatitud()."</td>";
                echo " <td>".$incidencia->getLongitud()."</td>";
                echo " <td>".$incidencia->getCiudad()."</td>";
                echo " <td>".$incidencia->getDireccion()."</td>";
                echo " <td>".$incidencia->getEstado()."</td>";
                echo "<td>";
                echo "<a href='index.php?accion=eliminarIncidencia&id=".$incidencia->getId()."'><button class='btn btn-danger'>X</button>";
                echo "<a href='index.php?accion=modificarIncidencia&id=".$incidencia->getId()."'><button class='btn btn-warning ms-1'>@</button>";
                
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>
            </table>";

            echo "</div>";

           

        }


        

    }


?>
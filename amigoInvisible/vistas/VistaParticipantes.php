<?php

namespace amigoInvisible\Vistas;

class VistaParticipantes
{

    public static function render($participantes)
    {

        include("cabeceraPrincipal.php");


        echo "<div class='container'>";

        echo '
            <main class="d-flex flex-wrap">
            <p>
                <a href="index.php?accion=mostrarFormNuevoAmigoInvisible" class="nav-link px-2 link-secondary"><button class="btn btn-primary">Nuevo Participante</button></a>
            </p>
            </main>';

        echo "
            
            <table class='table table-dark'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>";

        //$resultado ahora es un objeto

        echo "<tr>";
        echo " <td>" . $participantes->getNombre() . "</td>";
        echo " <td>" . $participantes->getTelefono() . "</td>";
        echo " <td>" . $participantes->getEmail() . "</td>";
        echo "<td>";

        echo "</td>";
        echo "</tr>";


        echo "</tbody>
            </table>";

        echo "</div>";





        include "piePrincipal.php";
    }
}

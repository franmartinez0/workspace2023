<?php

namespace amigoInvisible\Vistas;

class VistaAmigosInvisibles
{

    public static function render($amigosInvisibles)
    {

        include("cabeceraPrincipal.php");


        echo "<div class='container'>";

        echo '
            <main class="d-flex flex-wrap">
            <p>
                <a href="index.php?accion=mostrarFormNuevoAmigoInvisible" class="nav-link px-2 link-secondary"><button class="btn btn-primary">Nuevo Resultado</button></a>
            </p>
            </main>';

        echo "
            
            <table class='table table-dark'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Fecha maxima</th>
                        <th>Lugar</th>
                        <th>DineroMaximo</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>";

        //$resultado ahora es un objeto
        foreach ($amigosInvisibles as $partida) {
            echo "<tr>";
            echo " <td>" . $partida->getNombre() . "</td>";
            echo " <td>" . $partida->getEstado() . "</td>";
            echo " <td>" . $partida->getFechaTope() . "</td>";
            echo " <td>" . $partida->getLugar() . "</td>";
            echo " <td>" . $partida->getMaximoDinero() . "</td>";
            echo " <td>" . $partida->getObservaciones() . "</td>";
            echo "<td>";
            echo "<a href='index.php?accion=borrarAmigoInvisible&id=" . $partida->getId() . "'><button class='btn btn-danger'>X</button>";
            echo "<a href='index.php?accion=modificarAmigoInvisible&id=" . $partida->getId() . "'><button class='btn btn-warning ms-1'>@</button>";
            echo "<a href='index.php?accion=verAmigoInvisible&id=" . $partida->getId() . "'><button class='btn btn-success ms-1'>Links</button>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>
            </table>";

        echo "</div>";

        include "piePrincipal.php";
    }
}

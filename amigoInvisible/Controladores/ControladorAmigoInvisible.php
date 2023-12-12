<?php

namespace amigoInvisible\Controladores;

use \PDO;

use amigoInvisible\Modelos\amigoInvisibleBD;
use amigoInvisible\Vistas\VistaAmigosInvisibles;
use amigoInvisible\Vistas\vistaFormModificarAmigoInvisible;
use amigoInvisible\Vistas\vistaFormNuevoAmigoInvisible;
use amigoInvisible\Vistas\VistaInicio;
use amigoInvisible\Vistas\vistaFormNuevoRegalo;
use amigoInvisible\Vistas\VistaParticipantes;


class ControladorAmigoInvisible
{

    public static function mostrarInicio()
    {
        VistaInicio::render();
    }
    public static function mostrarTodos()
    {
        $amigoInvisible = AmigoInvisibleBD::getAmigosInvisibles();
        VistaAmigosInvisibles::render($amigoInvisible);
    }
    public static function nuevoAmigoInvisible()
    {
        vistaFormNuevoAmigoInvisible::render();
    }

    public static function insertarNuevoAmigoInvisible($amigoInvisible)
    {
        amigoInvisibleBD::insertarAmigoInvisible($amigoInvisible);
        ControladorAmigoInvisible::mostrarInicio();
    }

    public static function modificarAmigoInvisible($id)
    {

        $amigoInvisible = AmigoInvisibleBD::infoAmigoInvisible($id);

        vistaFormModificarAmigoInvisible::render($amigoInvisible);
    }

    public static function insertarAmigoInvisibleModificado($amigoInvisible)
    {
        amigoInvisibleBD::modificarAmigoInvisible($amigoInvisible);
        $amigoInvisibles = AmigoInvisibleBD::getAmigosInvisibles();
        VistaAmigosInvisibles::render($amigoInvisibles);
    }

    public static function borrarAmigoInvisible($id)
    {
        amigoInvisibleBD::eliminarAmigoInvisible($id);
        $amigoInvisibles = AmigoInvisibleBD::getAmigosInvisibles();
        VistaAmigosInvisibles::render($amigoInvisibles);
    }

    public static function visualizarAmigoInvisible($id)
    {
        $amigoInvisible = AmigoInvisibleBD::mostrarParticipantes($id);
        VistaParticipantes::render($amigoInvisible);
    }
}

<?php

include_once 'plantilla/documento-declaracion.inc.php';
include_once 'plantilla/navbar.inc.php';
include_once 'plantilla/panel-control-declaracion.inc.php';

//activar el gestor actual
switch($gestor_actual){
    case '':
    include_once 'plantilla/gestor_generico.inc.php';
    break;
    case 'entradas':
    include_once 'plantilla/gestor_entradas.inc.php';
    break;
    case 'comentarios':
    include_once 'plantilla/gestor_comentarios.inc.php';
    break;
    case 'favoritos':
    include_once 'plantilla/gestor_favoritos.inc.php';
    break;
}

include_once 'plantilla/panel_control_cierre.inc.php';
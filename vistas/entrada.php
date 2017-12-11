<?php

include_once 'app/config.inc.php';
include_once  'app/Conexion.inc.php';

include_once  'app/Usuario.inc.php';
include_once  'app/Entrada.inc.php';
include_once  'app/Comentario.inc.php';

include_once  'app/RepositorioComentario.inc.php';
include_once  'app/RepositorioEntrada.inc.php';
include_once  'app/RepositorioUsuario.inc.php';

$titulo = $entrada -> obtener_titulo();

include_once 'plantilla/documento-declaracion.inc.php';
include_once 'plantilla/navbar.inc.php';

?>

    <div class="container contenido-articulos">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $entrada -> obtener_titulo();?></h1>
            </div>
        </div>
        <br>
         <div class="row">
            <div class="col-md-12">
                <p>
                    Por
                    <a href="#">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $autor -> obtenerNombre();?>
                    </a>  
                    el
                    <?php echo $entrada -> obtener_fecha();?>
                </p>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-12">
                <article class="text-justify">
                    <?php echo nl2br($entrada -> obtener_texto());?>
                </article>

            </div>
         </div>
         <?php
            include_once 'plantilla/entrada_al_azar.inc.php'
         ?>
         <br>
    <?php
        if(count($comentarios)>0){
            include_once 'plantilla/comentarios_entrada.inc.php';
        }else{
            echo '<p>¡Todavía no hay comentarios!</p>';
        }
    ?>
    </div>

<?php

include_once 'plantilla/documento-cierre.inc.php';
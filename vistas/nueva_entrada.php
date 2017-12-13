<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = "Nueva entrada del blog";

include_once 'plantilla/documento-declaracion.inc.php';
include_once 'plantilla/navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Nueva entrada</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-nueva-entrada">
                <div class="form-group">
                    <label form="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo">
                </div>
                <div class="form-group">
                    <label form="contenido">Contenido</label>
                    <textarea class="form-control" rows="5" id="contenido"></textarea>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="pública">Marca para públicar.</label>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Entrada</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once 'plantilla/documento-cierre.inc.php';
?>

<?php
    include_once 'app/Conexion.inc.php';
    include_once 'app/RepositorioUsuario.inc.php';   

    $titulo = 'Blog de Maicol';
    include_once 'plantilla/documento-declaracion.inc.php';
    include_once 'plantilla/navbar.inc.php'
?>
    

    <div class="container">
        <div class="jumbotron">
            <h1>Blog de Maicol</h1>
            <p>
                Blog dedicado para programacion y para desarrollo
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <input type="search" class="form-control" placeholder="¿Que buscas?" name="" id="">
                                </div>
                                <button id="form-button" class="form-control">
                                    Buscar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">                            
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                                </div>
                                <div class="panel-body">  

                                </div>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">                            
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendario
                                    </div>
                                    <div class="panel-body">  
    
                                    </div>                            
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Útimas entradas
                    </div>
                    <div class="panel-body">
                        Todavía no hay entradas que mostrar
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    include_once 'plantilla/documento-cierre.inc.php';
?>
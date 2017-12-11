<?php
include_once 'app/config.inc.php';
    include_once 'app/Conexion.inc.php';
    include_once 'app/Usuario.inc.php';
    include_once 'app/RepositorioUsuario.inc.php';   
    include_once 'app/ValidadorRegistro.inc.php';
    include_once 'app/Redireccion.inc.php';

    if(isset($_POST['enviar'])){

        Conexion :: abrir_conexion();

        $validador  = new ValidadorRegistro($_POST['nombre'],$_POST['email'],$_POST['clave1'],$_POST['clave2'],Conexion :: obtener_conexion());

        if($validador -> registro_valido()){
            $usuario = new Usuario('',$validador -> obtener_nombre(),
                                      $validador -> obtener_email(),
                                      password_hash($validador -> obtener_clave(),PASSWORD_DEFAULT), //PARA ENCRYPTAR PASSWORD
                                      '',
                                      '');
            $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion::obtener_conexion(),$usuario);
            
            if($usuario_insertado){
                //Redirigir a registro-correcto
                Redireccion::redirigir(RUTA_REGISTRO_CORRECTO. '/' . $usuario -> obtenerNombre());
            }
                        Conexion :: cerrar_conexion();
        }   
    }

    $titulo = 'Registro';
    include_once 'plantilla/documento-declaracion.inc.php';
    include_once 'plantilla/navbar.inc.php'
?>

 <div class="container"> 
    <div class="jumbotron">
        <h1 class="text-center">Formulario de Registro</h1>
    </div>
 </div>

 <div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Instrucciones</h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        Para unirte al blog de Maicol, introduce un nombre de usuario, tu email y una contraseña.
                    </p>
                    <br>                     
                       <a href=#>¿Ya tienes cuenta?</a>                     
                   <br>     
                   <br>              
                       <a href=#>¿Olvidaste tu contraseña?</a>                    
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Introduce tus datos</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo RUTA_REGISTRO?>">
                       <?php
                        if(isset($_POST['enviar'])){
                            include_once 'plantilla/registro_validado.inc.php';
                        }else{
                            include_once 'plantilla/registro_vacio.inc.php';
                        }
                       ?>
                    </form> 
                </div>
            </div>
        </div> 
    </div>
 </div>

<?php 
    include_once 'plantilla/documento-cierre.inc.php';
?>
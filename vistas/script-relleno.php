<?php

    include_once 'app/config.inc.php';
    include_once  'app/Conexion.inc.php';

    include_once  'app/Usuario.inc.php';
    include_once  'app/Entrada.inc.php';
    include_once  'app/Comentario.inc.php';

    include_once  'app/RepositorioComentario.inc.php';
    include_once  'app/RepositorioEntrada.inc.php';
    include_once  'app/RepositorioUsuario.inc.php';

    Conexion::abrir_conexion();

    for ($usuarios = 0; $usuarios < 100; $usuarios++){
        $nombre = sa(10);
        $email= sa(5).'@'.sa(3).'.com';
        $password = password_hash('123456',PASSWORD_DEFAULT);

        $usuario = new Usuario('',$nombre,$email,$password,'','');
        RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(),$usuario);
    }

    for ($entradas = 0; $entradas< 100;$entradas++){
        $titulo = sa(10);
        $url = $titulo;
        $texto = lorem();
        $autor = rand(1,100);

        $entrada = new Entrada('',$autor,$url,$titulo,$texto,'','');
        RepositorioEntrada::insertar_entrada(Conexion::obtener_conexion(),$entrada);
    }

    for ($comentarios = 0; $comentarios< 100;$comentarios++){
        $titulo = sa(10);
        $texto = lorem();
        $autor = rand(1,100);
        $entrada = rand(1,100);

        $comentario = new Comentario('',$autor,$entrada,$titulo,$texto,'');
        RepositorioComentario::insertar_comentario(Conexion::obtener_conexion(),$comentario);
    }

    function sa($longitud){
        $caracteres = '0123456789abcdefghijklmnopqrstuvxyzABCDEFGHIJKLMNOPQRSTUVXYZ';
        $numero_caracteres = strlen($caracteres);
        $string_aleatorio = '';

        for ($i = 0;$i < $longitud; $i++){
            $string_aleatorio .=$caracteres[rand(0,$numero_caracteres - 1)];
        }

        return $string_aleatorio;
    }

    function lorem(){
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec nunc fringilla, luctus enim quis, luctus quam. Vivamus tristique justo in ante finibus, dapibus tempor odio aliquam. Nulla vel lorem lectus. Donec at mauris orci. Donec vitae mattis massa. Praesent lobortis, ipsum sit amet sollicitudin condimentum, felis urna eleifend orci, at aliquam nunc ipsum nec mi. Duis nec augue in justo porttitor faucibus ut non nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec rhoncus sagittis arcu et maximus. Ut euismod nibh vitae massa dignissim, suscipit bibendum turpis mattis. Aliquam quis dapibus quam, id sollicitudin est. Nunc vehicula quis nisl ut commodo. Duis id suscipit nibh, a cursus dolor. Curabitur aliquam augue eu bibendum ornare.

Donec elit arcu, imperdiet non nisl ut, feugiat congue dolor. Vivamus mi ex, vehicula a euismod non, semper et neque. Vestibulum tempor vitae augue et semper. Aenean commodo porttitor dignissim. Donec consectetur dapibus quam, pellentesque luctus tortor rutrum in. Quisque vel justo efficitur magna vulputate ultrices tincidunt sit amet neque. Donec efficitur neque vitae elit fringilla malesuada.

Nulla semper lorem in tincidunt euismod. Donec congue maximus nulla, vitae vulputate nisi sodales id. In ut suscipit ligula, at eleifend odio. Integer vel accumsan orci, vitae ornare enim. Integer sit amet arcu at nibh finibus feugiat. Vestibulum a lobortis ipsum, vitae ultricies leo. Mauris arcu dui, tincidunt nec molestie eu, consequat eu ligula. In hac habitasse platea dictumst. Curabitur eu erat in quam iaculis mattis non id nunc. Duis condimentum leo lacus, vel malesuada tellus vehicula ut. Praesent auctor a risus luctus venenatis. Sed maximus quis ex in convallis. Aliquam erat volutpat.

Proin orci sem, hendrerit non nibh eu, tempor bibendum neque. Nullam ut ligula eu tellus eleifend eleifend. Suspendisse in justo vel erat placerat porta. Integer ut eros pretium massa semper tempus et at libero. Quisque varius suscipit enim a pharetra. Nam hendrerit nec urna ac facilisis. Curabitur vehicula interdum nibh, et cursus elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla eu sapien justo.

Morbi sodales eu nisl ac interdum. Nam iaculis non turpis sed vestibulum. Nullam vitae urna venenatis massa suscipit ullamcorper eu et nulla. Ut a blandit metus. Duis mollis ullamcorper fermentum. Ut vitae purus vitae tellus sodales facilisis. Pellentesque finibus nibh tristique ultricies euismod. Nulla erat lectus, viverra euismod ligula sed, semper pulvinar mauris.';

        return $lorem;
    }
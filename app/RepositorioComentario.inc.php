<?php

        include_once  'app/config.inc.php';
        include_once  'app/Conexion.inc.php';
        include_once  'app/Entrada.inc.php';

class RepositorioComentario{

    public static function insertar_comentario($conexion, $comentario){
        $comentario_insertado = false;

        if(isset($conexion)){
            try{
                $sql = "INSERT INTO comentarios(autor_id,entrada_id,titulo,texto,fecha) VALUES(:autor_id,:entrada_id,:titulo,:texto,NOW())";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':autor_id',$comentario -> getAutorId(), PDO::PARAM_STR);
                $sentencia -> bindParam(':entrada_id',$comentario -> getEntradaId(), PDO::PARAM_STR);
                $sentencia -> bindParam(':titulo',$comentario -> getTitulo(), PDO::PARAM_STR);
                $sentencia -> bindParam(':texto',$comentario -> getTexto(), PDO::PARAM_STR);

                $comentario_insertado = $sentencia -> execute();
            }catch(PDOException $ex){
                print 'ERROR' . $ex -> getMessage();
            }
        }
        return $comentario_insertado;
    }
}

<?php

    include_once  'app/config.inc.php';
    include_once  'app/Conexion.inc.php';
    include_once  'app/Entrada.inc.php';

    class RepositorioEntrada{

        public static function insertar_entrada($conexion,$entrada){
            $entrada_insertado = false;

            if(isset($conexion)){
                try{
                    $sql = "INSERT INTO entradas(autor_id,url,titulo,texto,fecha,activa) VALUES(:autor_id,:url,:titulo,:texto,NOW(),0)";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> bindParam(':autor_id',$entrada -> obtener_autor_id(), PDO::PARAM_STR);
                    $sentencia -> bindParam(':url',$entrada -> obtener_url(), PDO::PARAM_STR);
                    $sentencia -> bindParam(':titulo',$entrada -> obtener_titulo(), PDO::PARAM_STR);
                    $sentencia -> bindParam(':texto',$entrada -> obtener_texto(), PDO::PARAM_STR);

                    $entrada_insertado = $sentencia -> execute();
                }catch(PDOException $ex){
                    print 'ERROR' . $ex -> getMessage();
                }
            }
            return $entrada_insertado;
        }

        public static function obtener_todas_por_fecha_descendiente($conexion){
            $entradas = [];

            if(isset($conexion)){
                try{
                    $sql = "SELECT * FROM entradas ORDER BY fecha DESC";

                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> execute();

                    $resultado = $sentencia -> fetchAll();
                    if(count($resultado)){
                        foreach ($resultado as $fila){
                            $entradas[] = new Entrada(
                                $fila['id'],
                                $fila['autor_id'],
                                $fila['url'],
                                $fila['titulo'],
                                $fila['texto'],
                                $fila['fecha'],
                                $fila['activa']
                            );
                        }

                          foreach ($entradas as $entrada){

                          }
                    }
                }catch (PDOException $ex){
                    print 'ERROR :'. $ex -> getMessage();
                }
            }

            return $entradas;
        }

        public static function obtener_entradas_por_url($conexion,$url){
            $entrada = null;
            if(isset($conexion)){
                try{
                    $sql = "SELECT * FROM entradas WHERE url LIKE :url";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> bindParam(':url',$url,PDO::PARAM_STR);
                    $sentencia -> execute();
                    $resultado = $sentencia -> fetch();

                    if(!empty($resultado)){
                        $entrada = new Entrada(
                            $resultado['id'],$resultado['autor_id'],$resultado['url'],
                            $resultado['titulo'],$resultado['texto'],$resultado['fecha'],
                            $resultado['activa']
                        );
                    }
                }catch(PDOException $ex){
                    print 'ERROR' . $ex -> getMessage();
                }
            }
            return $entrada;
        }

        public static function obtener_entradas_al_azar($conexion,$limite){
            $entradas = [];
            if(isset($conexion)){
                try{
                    $sql = "SELECT * FROM entradas ORDER BY RAND() LIMIT $limite";

                    $sentencia =  $conexion -> prepare($sql);
                    $sentencia -> execute();
                    $resultado = $sentencia -> fetchAll();

                    if(count($resultado)){
                        foreach($resultado as $fila){
                            $entradas[] = new Entrada(
                                $fila['id'],$fila['autor_id'],$fila['url'],
                                $fila['titulo'],$fila['texto'],$fila['fecha'],
                                $fila['activa']
                            );
                        }
                    }
                }catch(PDOException $ex){
                    print 'ERROR'.$ex -> getMessage();
                }
            }
            return $entradas;
        }
    }

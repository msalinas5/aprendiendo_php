<?php

    include_once 'app/Conexion.inc.php';
    include_once 'app/RepositorioEntrada.inc.php';
    include_once  'app/Entrada.inc.php';

    class EscritorEntradas{
        public static function escribir_entradas(){
            $entradas = RepositorioEntrada::obtener_todas_por_fecha_descendiente(Conexion::obtener_conexion());

            if(count($entradas)){
                foreach ($entradas as $entrada){
                    self::escribir_entrada($entrada);
                }
            }
        }

        public static function escribir_entrada($entrada){
            if(!isset($entrada)){
                return;
            }
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <?php
                            echo $entrada -> obtener_titulo();
                            ?>
                            ?>
                        </div>
                        <div class="panel-body">
                            <p>
                                <strong>
                                    <?php
                                    echo $entrada->obtener_fecha();
                                    ?>
                                </strong>
                                <br>
                                <strong>
                                    <?php
                                    echo $entrada->obtener_id();
                                    ?>
                                </strong>
                            </p>
                            <div class="text-justify">
                                <?php
                                echo nl2br(self::resumir_texto($entrada->obtener_texto()));
                                ?>
                            </div>
                            <br>
                            <div class="text-right">
                                <a class="btn btn-primary" href="<?php echo RUTA_ENTRADA . '/' . $entrada ->obtener_url()?>" role="buttton">Seguir leyendo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        public static function resumir_texto($texto){
            $longitud_maxima = 400;

            $resultado = '';

            if(strlen($texto) >= $longitud_maxima){
                /*for ($i = 0; $i <$longitud_maxima; $i++){
                    $resultado .= substr($texto,$i,1);
                }*/

                $resultado = substr($texto,0,$longitud_maxima);

                $resultado .= '...';
            }else{
                $resultado = $texto;
            }

            return $resultado;
        }
    }
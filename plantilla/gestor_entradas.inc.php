<div class="row parte-gestor-entradas">
   <div class="col-md-12">
        <h2>Gestión de la Entradas</h2>
       <br>
       <a href="<?php echo RUTA_NUEVA_ENTRADA?>" class="btn btn-lg btn-primary" id="boton-nueva-entrada">Crear entrada</a>
       <br>
       <br>
    </div>
</div>
<div class="row parte-gestor-entradas">
    <div class="col-md-12">
        <?php
            if(!count($array_entradas)>0){
         ?>
                <h3 class="text-center">Todavía no has escrito ninguna entrada</h3>
                <br>
                <br>
        <?php
            }else{
        ?>
                <table class="table table-striped">
                    <thead>
                    <th>Fecha</th>
                    <th>Título</th>
                    <th>Estado</th>
                    <th>Comentarios</th>
                    <th>Acciones</th>
                    </thead>
                    <tbody>
                    <?php
                    for($i= 0;$i < count($array_entradas);$i++){
                        $entrada_actual  = $array_entradas[$i][0];
                        $comentario_entrada_actual  = $array_entradas[$i][1];
                        ?>
                        <tr>
                            <td><?php echo $entrada_actual->obtener_fecha();?></td>
                            <td><?php echo $entrada_actual->obtener_titulo();?></td>
                            <td><?php echo $entrada_actual->obtener_activa();?></td>
                            <td><?php echo $comentario_entrada_actual;?></td>
                            <td>
                                <button type="button" class="btn btn-default btn-xs">Editar</button>
                                <button type="button" class="btn btn-default btn-xs">Borrar</button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>
        <?php
            }
        ?>
    </div>
</div >
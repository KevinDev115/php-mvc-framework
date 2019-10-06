
<h2>Notas: </h2>

<div class="container">
    <div class="row">
        <h2>Notas</h2>
    </div>

    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Texto</th>
                        <th>Fecha Creacion</th>
                        <th>
                            <span>Opciones</span>
                        </th>
                        <th class="text-center">
                            <button class="btn btn-success">ADD</button>
                        </th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach($data['notas'] as $key => $value ): ?>
                    <tr style="background: <?=$value->color?>;">
                        <td><?=$value->id?></td>
                        <td><?=$value->contenido?></td>
                        <td><?=$value->fecha_creacion?></td>
                        <td class="text-center" colspan="2">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <button class="btn btn-secondary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php

var_dump($data);
?>


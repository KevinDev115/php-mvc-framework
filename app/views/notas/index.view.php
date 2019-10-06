<div class="container mt-5">
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
                            <a href="<?=APP_URL?>/nota/create" class="btn btn-success">Nueva Nota</a>
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
                            <div class="btn-group btn-group-toggle">
                                <a href="<?=APP_URL?>/nota/edit/<?=$value->id?>" class="btn btn-secondary">Editar</a>
                                <a href="<?=APP_URL?>/nota/destroy/<?=$value->id?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
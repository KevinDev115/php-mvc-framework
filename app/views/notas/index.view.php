<div class="container-app mb-5">
    <!-- TITULO -->
    <div class="row">
        <div class="col-6">
            <h3 class="text-white">Notas</h3>
        </div>
        <div class="col-6 text-right">
            <a href="<?=APP_URL?>/nota/create" class="btn btn-dark-app">Nueva Nota</a>
        </div>
    </div>

    <!-- TABLE -->
    <table class="table-app">
        <thead>
            <tr>
                <th>#</th>
                <th>Texto</th>
                <th>Fecha Creacion</th>
                <th>Opciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($data['notas'] as $key => $value ): ?>
                <tr class="p-5">
                    <td><?=$value->id?></td>
                    <td><?=$value->contenido?></td>
                    <td><?=$value->fecha_creacion?></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-toggle">
                            <a href="<?=APP_URL?>/nota/edit/<?=$value->id?>" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="<?=APP_URL?>/nota/destroy/<?=$value->id?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
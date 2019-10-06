<div class="container mt-5">
    <h2>Actualizar Nota</h2>
    <form method="POST" action="<?=APP_URL?>/nota/update" class="border p-5 bg-white">
        <input type="hidden" value="<?=$data['nota']->id?>">
        <div class="form-group row">
            <label for="color" class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-10">
                <input type="color" class="form-control" id="color" name="color" value="<?=$data['nota']->color?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="contenido" class="col-sm-2 col-form-label">Contenido</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="contenido" id="contenido" ><?=$data['nota']->contenido?></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success float-right">Actualizar</button>
    </form>
</div>
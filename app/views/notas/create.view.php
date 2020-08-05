<div class="container-app">
    <h2 class="text-white">Crear una Nota</h2>
    <form method="POST" action="<?=APP_URL?>/nota/store" class="py-5 text-white">
        <div class="form-group row">
            <label for="color" class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-10">
                <input type="color" class="form-control" id="color" name="color" value="<?=isset($_POST['color']) ? $_POST['color'] : null;?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="contenido" class="col-sm-2 col-form-label">Contenido</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="contenido" id="contenido" ><?=isset($_POST['contenido']) ? $_POST['contenido'] : null;?></textarea>
            </div>
        </div>
        <span class="text-danger"><?=!empty($data['error']) ? $data['error'] : $data['error']?></span>
        <button type="submit" class="btn btn-success float-right">Crear</button>
    </form>
</div>
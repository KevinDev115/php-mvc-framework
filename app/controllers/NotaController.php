<?php
/**
 * 
 * 
 * 
 */
class Nota extends Controller
{
    protected $notaModel;

    /**
     * 
     */
    public function __construct()
    {
        #Realizamos la instancia al modelo.
        $this->notaModel = $this->model('notas');
    }

    /**
     * @author Kevin Galindo
     * 
     */
    public function index()
    {
        $res = $this->notaModel->all();

        #Gurdamos los datos que se van a visualizar en la vista 
        $data = [
            'notas' => $res
        ];

        #llamamos a la vista
        require_once '../app/views/layouts/header.php';
        $this->view('notas/index',$data);
        require_once '../app/views/layouts/footer.php';
    }

    /**
     * @author Kevin Galindo
     * 
     * Muestra la vista para ingresar una nueva nota. 
     */
    public function create($errors = null)
    {
        #llamamos a la vista
        require_once '../app/views/layouts/header.php';
        $this->view('notas/create', [
            'error' => $errors
        ]);
        require_once '../app/views/layouts/footer.php';
    }

    /**
     * @author Kevin Galindo
     * 
     */
    public function store()
    {
        $contenido = trim($_POST['contenido']);
        $color = trim($_POST['color']);
        $errors = '';

        if (empty($contenido)) {
            $errors = 'El campo "contenido" es obligatorio <br>';
        }

        if (empty($errors)) {
            $res = $this->notaModel->create($_POST);
            if ($res) {
                header('Location: '.APP_URL.'/nota');
            }else{
                $this->create('Error al crear. <br>');
            }
        }else{
            $this->create($errors);
        }
    }

    /**
     * @author Kevin Galindo
     * 
     * Traer la informacion de un registro y mostrarla para editarla.
     */
    public function edit($id)
    {
        #traemos la informacion del registro
        $nota = $this->notaModel->find($id);

        #llamamos a la vista
        require_once '../app/views/layouts/header.php';
        $this->view('notas/edit', [
            'nota' => $nota
        ]);
        require_once '../app/views/layouts/footer.php';
    }

    /**
     * @author Kevin Galindo
     * @param integer $id
     * Actualizar un registro segun su id
     */
    public function update()
    {
        $contenido = trim($_POST['contenido']);
        $color = trim($_POST['color']);
        $errors = '';

        if (empty($contenido)) {
            $errors = 'El campo "contenido" es obligatorio <br>';
        }

        if (empty($errors)) {
            $res = $this->notaModel->update($_POST);
            if ($res) {
                header('Location: '.APP_URL.'/nota');
            }else{
                die('Error al crear. <br>');
            }
        }else{
            die($errors);
        }
    }

    /**
     * @author Kevin Galindo
     * 
     * Elimina un registro segun su id.
     */
    public function destroy($id)
    {
        $res = $this->notaModel->delete($id);
        if ($res) {
            header('Location: '.APP_URL.'/nota');
        }else{
            die('Error al crear. <br>');
        }
    }
}

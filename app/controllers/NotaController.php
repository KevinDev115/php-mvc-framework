<?php

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
     */
    public function store()
    {
        if (isset($_POST['contenido'])) {
            
        }else{
            
        }
        $data = [
            'notas' => $res
        ];

        #llamamos a la vista
        require_once '../app/views/layouts/header.php';
        $this->view('notas/index',$data);
        require_once '../app/views/layouts/footer.php';
    }
}

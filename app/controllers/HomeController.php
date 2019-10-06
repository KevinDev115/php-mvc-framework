<?php

class Home extends Controller
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
        #llamamos a la vista
        require_once '../app/views/layouts/header.php';
        $this->view('home/index');
        require_once '../app/views/layouts/footer.php';
    }
}

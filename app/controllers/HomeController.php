<?php

class Home extends Controller
{
    /**
     * 
     */
    public function __construct()
    {
        
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

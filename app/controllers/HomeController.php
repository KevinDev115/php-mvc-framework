<?php

class Home extends Controller
{
    protected $model;
    public function __construct()
    {
        $this->model = $this->model('notas');
    }
    public function index()
    {
        $res = $this->model->tets();
        $this->view('notas/index', ['notas' => $res]);
    }
}

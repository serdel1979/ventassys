<?php

namespace App\Controllers;
use App\Models\UnidadesModel;

class Unidades extends BaseController
{

    protected $unidades;


    public function __construct(){
        $this->unidades = new UnidadesModel();
    }
    public function index($activo = 1)
    {
        $unidades = $this->unidades->getActivos();
        
        $data = ['titulo'=>'Unidades','datos'=>$unidades];
        $this->loadPage('unidades', $data);
    }



    public function loadPage($page, $data = null){
        echo view('includes/header');
        echo view($page,$data);
        echo view('includes/footer');
    }




}


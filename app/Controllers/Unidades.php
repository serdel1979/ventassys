<?php

namespace App\Controllers;
use App\Models\UnidadesModel;

class Unidades extends BaseController
{

    protected $unidades;


    public function __construct(){
        $this->unidades = new UnidadesModel();
    }


    public function index()
    {
        $unidades = $this->unidades->getUnidadesActivas();
        
        $data = ['titulo'=>'Unidades','datos'=>$unidades];
        $this->loadPage('unidades/unidades', $data);
    }
    

    public function nuevo(){
        $this->loadPage('unidades/nuevo');
    }


    public function loadPage($page, $data = []){
        echo view('includes/header');
        echo view($page,$data);
        echo view('includes/footer');
    }





}


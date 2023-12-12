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

    public function inactivas()
    {
        $unidades = $this->unidades->getUnidadesInactivas();
        
        $data = ['titulo'=>'Unidades','datos'=>$unidades];
        $this->loadPage('unidades/unidades', $data);
    }
    

    public function nuevo(){
        $this->loadPage('unidades/nuevo');
    }

    public function insertar(){
        
        $this->unidades->insert(['nombre'=> $this->request->getPost('nombre'),
        'nombre_corto'=>$this->request->getPost('nombre_corto')]);

        return redirect()->to(base_url('unidades'));
    }

    public function edita($id){
        $unidad = $this->unidades->find($id);
        $data = ['titulo'=>'Unidad','dato'=>$unidad];
        
        $this->loadPage('unidades/editar',$data);
    }


    public function eliminar($id){
       
        $this->unidades->update($id,['activo'=> 0]);
        return redirect()->to(base_url('unidades'));
    }

    public function restaurar($id){
       
        $this->unidades->update($id,['activo'=> 1]);
        return redirect()->to(base_url('unidades'));
    }


    public function modificar(){
       
       
        $this->unidades->update($this->request->getPost('id'),['nombre'=> $this->request->getPost('nombre'),
            'nombre_corto'=>$this->request->getPost('nombre_corto')]);

 
        return redirect()->to(base_url('unidades'));
    }




    public function loadPage($page, $data = []){
        echo view('includes/header');
        echo view($page,$data);
        echo view('includes/footer');
    }





}


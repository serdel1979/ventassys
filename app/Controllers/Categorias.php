<?php

namespace App\Controllers;
use App\Models\CategoriasModel;

class Categorias extends BaseController
{

    protected $categorias;


    public function __construct(){
        $this->categorias = new CategoriasModel();
    }


    public function index()
    {
        $categorias = $this->categorias->getCategoriasActivas();
        
        $data = ['titulo'=>'Cetegorías','datos'=>$categorias];
        $this->loadPage('categorias/categorias', $data);
    }

    public function inactivas()
    {
        $categorias = $this->categorias->getCategoriasInactivas();
        
        $data = ['titulo'=>'Cetegorías','datos'=>$categorias];
        $this->loadPage('categorias/categorias', $data);
    }
    

    public function nuevo(){
        $this->loadPage('categorias/nuevo');
    }

    public function insertar(){
        
        $this->categorias->insert(['nombre'=> $this->request->getPost('nombre')]);

        return redirect()->to(base_url('categorias'));
    }

    public function edita($id){
        $unidad = $this->categorias->find($id);
        $data = ['titulo'=>'Categoria','dato'=>$unidad];
        
        $this->loadPage('categorias/editar',$data);
    }


    public function eliminar($id){
       
        $this->categorias->update($id,['activo'=> 0]);
        return redirect()->to(base_url('categorias'));
    }

    public function restaurar($id){
       
        $this->categorias->update($id,['activo'=> 1]);
        return redirect()->to(base_url('categorias'));
    }


    public function modificar(){
       
       
        $this->categorias->update($this->request->getPost('id'),['nombre'=> $this->request->getPost('nombre')]);

        return redirect()->to(base_url('categorias'));
    }




    public function loadPage($page, $data = []){
        echo view('includes/header');
        echo view($page,$data);
        echo view('includes/footer');
    }

}
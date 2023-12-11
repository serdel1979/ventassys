<?php

    namespace App\Models;

    use CodeIgniter\Model;


    class UnidadesModel extends Model{


        protected $table = 'unidades';
        protected $primaryKey = 'id';
        protected $primaryKey = 'id';
        protected $returnTyoe = 'array';
        protected $useSoftDeletes = false;


        protected $allowedFields = ['id','nombre','nombre_corto','activo'];

        protected $useTimestamps = true;
        protected $createdField = 'fecha_alta';
        protected $updatedField = 'fecha_edit';
        protected $validationRules = [];
        protected $validationMessages = [];
        protected $skipValidation = false;
       
       
       
           public function getUnidades(){
               return $this->findAll();
           }
       
       
           public function add($dato){
              return $this->save($dato);
           }
       
           public function getUnidad($id){
               return $this->find($id);
           }
       
           public function deletUnidad($id){
               return $this->delete($id);
           }




    }
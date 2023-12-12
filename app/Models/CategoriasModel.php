<?php

    namespace App\Models;

    use CodeIgniter\Model;


    class CategoriasModel extends Model{


        protected $table = 'categorias';
        protected $primaryKey = 'id';
        protected $returnTyoe = 'array';
        protected $useSoftDeletes = false;


        protected $allowedFields = ['id','nombre','activo','fecha_alta','fecha_edit'];

        protected $useTimestamps = true;
        protected $createdField = 'fecha_alta';
        protected $updatedField = 'fecha_edit';
        protected $validationRules = [];
        protected $validationMessages = [];
        protected $skipValidation = false;

        
        public function getCategoriasActivas(){
            return $this->where('activo',1)->findAll();
        }

        public function getCategoriasInactivas(){
            return $this->where('activo',0)->findAll();
        }
          
            
    
       
    


    }
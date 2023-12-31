<?php

    namespace App\Models;

    use CodeIgniter\Model;


    class UnidadesModel extends Model{


        protected $table = 'unidades';
        protected $primaryKey = 'id';
        protected $returnTyoe = 'array';
        protected $useSoftDeletes = false;


        protected $allowedFields = ['id','nombre','nombre_corto','activo','fecha_alta','fecha_edit'];

        protected $useTimestamps = true;
        protected $createdField = 'fecha_alta';
        protected $updatedField = 'fecha_edit';
        protected $validationRules = [];
        protected $validationMessages = [];
        protected $skipValidation = false;

        
        public function getUnidadesActivas(){
            return $this->where('activo',1)->findAll();
        }

        public function getUnidadesInactivas(){
            return $this->where('activo',0)->findAll();
        }
          
            
    
       
    


    }
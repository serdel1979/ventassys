<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->loadPage('index');
    }



    public function loadPage($page){
        echo view('includes/header');
        echo view($page);
        echo view('includes/footer');
    }




}



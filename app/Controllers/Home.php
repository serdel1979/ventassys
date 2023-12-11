<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('includes/header');
        echo view('page');
        echo view('includes/footer');
    }
}

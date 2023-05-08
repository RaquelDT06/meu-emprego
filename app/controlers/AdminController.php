<?php

namespace App\controlers;

use App\Controlers\AuthController;
use Core\controller\Action;

// use Core\model\Container;

class AdminController extends Action
{



    public function index()
    {

        AuthController::validaAutenticacao();
        $this->render("index", "template_admin");
    }

    
    
}
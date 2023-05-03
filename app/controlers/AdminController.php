<?php

namespace App\controlers;

use Core\controller\Action;

// use Core\model\Container;

class AdminController extends Action
{



    public function index()
    {

        $this->render("index", "template_admin");
    }

    
    
}
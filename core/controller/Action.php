<?php

namespace Core\controller;

use stdClass;

abstract class Action
{

    protected $view;

    public function __construct()
    {
        $this->view = new stdClass;
    }

    protected function render($view, $layout)
    {
        $this->view->page = $view;

        if (file_exists("../app/view/layout/" . $layout . ".phtml")) {

            require_once("../app/view/layout/" . $layout . ".phtml");
        } else {

            // require_once("../app/view/layout/template_admin.phtml");
            $this->content();
        }
    }


    public function content()
    {
        $classeAtual =  get_class($this);
        $classeAtual = str_replace('App\\controlers\\', '', $classeAtual);

        $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));
        require_once('../app/view/' . $classeAtual . '/' . $this->view->page . '.phtml');
    }
}

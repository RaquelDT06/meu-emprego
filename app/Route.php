<?php

namespace App;

use Core\init\Bootstrap;

class Route extends Bootstrap
{


    protected function initRoutes()
    {

        //indexcontroller rotas
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'

        );

        $routes['contato'] = array(
            'route' => '/contato',
            'controller' => 'IndexController',
            'action' => 'contato'

        );

        $routes['login'] = array(
            'route' => '/login',
            'controller' => 'IndexController',
            'action' => 'login'

        );

        //errorcontroller rotas
        //authcontroller rotas

        $routes['autenticar'] = array(
            'route' => '/autenticar',
            'controller' => 'AuthController',
            'action' => 'autenticar'
        );














        $this->setRoutes($routes);
    }
}
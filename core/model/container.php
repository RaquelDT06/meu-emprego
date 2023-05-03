<?php

namespace Core\model;
use App\database\Connection;

class Container {
    public static function getModel($model){

        //caminho do model para se localizar e unir com o modelo
        $class = "App\\models\\" . ucFirst($model). "Model";

        $conn =Connection::getDB();

        return new $class($conn);
        
    }
}
?>
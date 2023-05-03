<?php

namespace App\database;


use PDO;
use PDOException;

class Connection
{

    public static function getDB()
    {

        $host = "localhost";
        $usuario = "root";
        $senha = "sucesso";
        $db_name = "emprego_m49";
        $db_driver = "mysql";
        $charset = "utf8";


        $nome_sistema = "MVC DA TURMA 3M49";
        $email = "raqueldetonicruz@gmail.com";


        // try {

            $conn = new PDO ($db_driver . ':host=' . $host . ';dbname=' . $db_name . ';charset=' . $charset , $usuario , $senha);     
            
            return $conn;

        // } catch (PDOException $error) {

        //     die("Connection Error: " . $error->getMessage());
            
        // }

        }
    }



?>


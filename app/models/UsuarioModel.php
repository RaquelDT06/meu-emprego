<?php

namespace App\Models;

use Core\Model\Model;
use PDO;

class UsuarioModel extends Model {
    private $id;
    private $nome;
    private $sobrenome;
    private $mail;
    private $email;
    private $senha;
    private $nivel;
    private $ativo;
    private $imagem;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __get($atributo) {
        return $this-> $atributo;
    }

    public function __set($atributo, $valor) {
         $this-> $atributo = $valor;
    }

    public function autenticar() {
        $query = "select id_usuario, nome, sobrenome, email, nivel, imagem, ativo from usuario where email = :email and senha = :senha and ativo = 1";

        // dd ($this);

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":email", $this->__get("email"));
        $stmt->bindValue(":senha", $this->__get("senha"));
        $stmt->execute();


        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        dd($usuario);

        if ($usuario['id_usuario'] != '' && $usuario['nome']){
            $this->__set('id_usuario', $usuario['id_usuario']);
            $this->__set('nome', $usuario['nome']);
            $this->__set('sobrenome', $usuario['sobrenome']);
            $this->__set('nivel', $usuario['nivel']);
            $this->__set('email', $usuario['email']);
            $this->__set('ativo', $usuario['ativo']);
            $this->__set('imagem', $usuario['imagem']);
    

        return $this;
    }
}
}



?>
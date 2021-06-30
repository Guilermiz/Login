<?php

require_once "conexao.php";

class Registro extends DBconexao{

    private $pdo;
    private $stm;
    private $table = 't_cadastro';
    private $resultado;
    private $nome;
    private $email;
    private $senha;

    public function getNome(){ return $this->nome;}
    public function setNome($nome){ $this->nome = $nome; }
    public function getEmail(){ return $this->email;}
    public function setEmail($email) { $this->email = $email;  }
    public function getSenha(){   return $this->senha;  }
    public function setSenha($senha){   $this->senha = SHA1($senha);}

    public function inserirRegistro(){

        $sql = "INSERT INTO " . $this->table . " (nome, email, senha) VALUES (?, ?, ?)";

        try{
            $this->pdo = $this->conectar();
            $this->stm =  $this->pdo->prepare($sql);
            $this->stm->execute([$this->nome, $this->email, $this->senha]);

            $this->resultado = true;
        }catch(Exception $e){
            echo  $e->getMessage();
        }

        return $this->resultado;
    }
}

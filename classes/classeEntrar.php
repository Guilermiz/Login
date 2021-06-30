<?php

require_once "conexao.php";

class Login extends DBconexao{

    private $pdo;
    private $stm;
    private $resultado;

    public function getResultado()
    {
        return $this->resultado;
    }

    public function conferir($email, $senha){

        $sql = "SELECT * FROM t_cadastro WHERE email = ? AND senha = ?";

        try{
            $this->pdo = $this->conectar();
            $this->stm =  $this->pdo->prepare($sql);
            $this->stm->execute([$email, SHA1($senha)]);

            $this->resultado = $this->stm->fetch(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            $this->resultado = $e->getMessage();
        }

        return $this->resultado;
    }
}

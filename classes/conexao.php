<?php

require_once "confg.php";

class DBconexao{

    private $dbcon;

    public function __construct()
    {
        $this->dbcon = $this->conectar();
    }

    public function conectar()
    {
        try{
            $this->dbcon = new PDO(SERVIDOR, USUARIO, SENHA);
            //echo "conectado";
        }catch (PDOException $e){
            echo "erro " . $e->getMessage();
        }
        return $this->dbcon;
    }

}

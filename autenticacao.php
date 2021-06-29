<?php

require_once "classes/classeRegistro.php";
require_once "classes/classeEntrar.php";

session_start();

if(isset($_POST['btnCadastrar'])){
    $novoCadastro = new Registro();
    $novoCadastro->setNome($_POST['cadastrarNome']);
    $novoCadastro->setEmail($_POST['cadastrarEmail']);
    $novoCadastro->setSenha(SHA1($_POST['cadastrarSenha']));
    $novoCadastro->inserirRegistro();
    header("location:index.php");
}
else if(isset($_POST['btnLogin'])){
    $login = new Login();
    $login->conferir($_POST['inputEmail'], $_POST['inputSenha']);
    if($login->getResultado()){

        $_SESSION['name'] = $login->getResultado()['nome'];
        $_SESSION['email'] = $login->getResultado()['email'];

        header("location:areaRestrita.php");
    }else{

        header("location:index.php?erro");
    }
}else if(isset($_GET['sair'])){
    $_SESSION['name'] = null;
    $_SESSION['email'] = null;
    header("location:index.php");
}


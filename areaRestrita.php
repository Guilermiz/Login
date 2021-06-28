<?php

require_once "restricao.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Opa! voce chegou até aqui!</h1>
        <p><?= $_SESSION['name']; ?></p>
        <p><?= $_SESSION['email']; ?></p>
        <a href="autenticacao.php?sair" name="sair" class="btn btn-danger">Sair</a>
    </div>
</body>
</html>
<?php

if(isset($_GET['erro'])){
    $erro = 'erro';
    // var_dump($erro);
}else{
    $erro = '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

    <style>
        .container{
            margin-top: 15%;
        }
        .aviso{
            margin-bottom: 10px;
            color: red;
        }
    </style>

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="POST" action="autenticacao.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="email" name="inputEmail" placeholder="Seu email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="senha" name="inputSenha" placeholder="Senha" required>
                    </div>
                    <div class="aviso">
                        <small id="incorreto" hidden>Usuario ou Senha incorretos</small><br>
                    </div>
                    <button type="submit" name="btnLogin" class="btn btn-primary">Enviar</button>
                </form><br>
                <p>Não tem Registro? <a href="cadastrar.php">Cadastre-se</a></p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script type="text/javascript">
        var usuSenIncorreto = '<?php echo $erro ?>';
        window.onload = function(){
            if(usuSenIncorreto === 'erro'){
                document.getElementById('incorreto').removeAttribute('hidden');
            }
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Cadastro</title>

    <style>
        .container{
            margin-top: 10%;
        }
    </style>

</head>
<body>
    <div class="container">
            <form method="POST" action="autenticacao.php">

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="nome" name="cadastrarNome">
                        </div><br>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="cadastrarEmail">
                        </div><br>
                        <div class="form-group">
                            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="cadastrarSenha" placeholder="Senha">
                        </div><br>
                        <div style="text-align: center;">
                            <a href="index.php" class="btn btn-danger">Voltar</a>
                            <button  type="submit" class="btn btn-primary" name="btnCadastrar">Enviar</button>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
        </form>
    </div>
</body>
</html>

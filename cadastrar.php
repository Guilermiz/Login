<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Cadastro</title>

    <style>
        .container{
            margin-top: 15%;
        }
    </style>

</head>
<body>
    <div class="container">
            <form method="POST" action="autenticacao.php">
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" placeholder="nome" name="cadastrarNome">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="cadastrarEmail">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="senha" name="cadastrarSenha" placeholder="Senha">
                    </div>
                </div><br>
                <div style="text-align: center;">
                    <a href="index.php" class="btn btn-danger">Voltar</a>
                    <button  type="submit" class="btn btn-primary" name="btnCadastrar">Enviar</button>
                </div>
        </form>
    </div>
</body>
</html>
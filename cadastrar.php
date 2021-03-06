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
                            <input type="text" class="form-control" id="nome" placeholder="nome" name="cadastrarNome" required>
                        </div><br>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="cadastrarEmail" required>
                        </div><br>
                        <div class="form-group">
                            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="cadastrarSenha" placeholder="Senha" required>
                        </div><br>
                        <div style="text-align: center;">
                            <a href="index.php" class="btn btn-danger">Voltar</a>
                            <button  type="submit" class="btn btn-primary" id="btnCadastrar" name="btnCadastrar">Enviar</button>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
        </form>
    </div>
    
<script type="text/javascript">
    document.getElementById('btnCadastrar').addEventListener('click', alertar);
    function alertar(){
        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var senha = document.getElementById('senha').value;
        if((nome !== "" && email !== "" && senha !== "") && email.match('@')){
            alert('Usu??rio cadastrado com sucesso');
        }
    }
</script>
    
</body>
</html>

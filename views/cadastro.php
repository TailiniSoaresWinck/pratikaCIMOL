<?php
include_once('../config.php');
include_once('../settings.php');
include_once(''.TEMPLATE_PATH.'/msg.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo URL_CSS?>/login.css">
    <title>Cadastro</title>
</head>
<body>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Empresa</h3>
                    <form action="<?php echo URL_PROCESS?>/empresa.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control"  name="nome" placeholder="Nome" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  name="email" placeholder="Email" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" placeholder="Senha *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="type" value="cadastrar_emp">
                            <input type="submit" class="btnSubmit" value="Cadastrar-se" required/>
                        </div>
                        <div class="form-group">
                            <a href="<?php echo URL_VIEWS?>/login.php" class="SRegistro">Já tem cadastro?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Aluno</h3>
                    <form action="<?php echo URL_PROCESS?>/aluno.php" method="POST">
                    <div class="form-group">
                            <input type="text" class="form-control"  name="nome" placeholder="Nome e sobrenome" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="matricula" placeholder="N° Matrícula" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" placeholder="Senha *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="type" value="cadastrar_aluno">  
                            <input type="submit" class="btnSubmit" value="Cadastrar-se" required/>
                        </div>
                        <div class="form-group">
                            <a href="<?php echo URL_VIEWS?>/login.php" class="SRegistro" value="Login">Já tem cadastro?</a>
                        </div>
                    </form>
                </div>
                <div class='outro'>
                <a id='link-outro' href="<?php echo URL_VIEWS?>/loginAdmin.php">Outro</a>
                </div>
            </div>
        </div>
</body>
</html>
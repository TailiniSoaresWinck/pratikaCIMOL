<?php
include_once('../config.php');
include_once('../settings.php');
include_once(''.TEMPLATE_PATH.'/cabecalhoAdmin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_CSS?>/busca.css">
</head>
<body>
    <div class="busca">
    <h5>Início</h5>
    </div>
    <div class="info-extra">
        <h3>Tenha o controle sobre quem está cadastrado no site!</h3>
        <div class="info-img">
        <img src="<?php echo URL_IMG?>/inicioAdmin.jpg" alt="" srcset="">
        </div>
        <p>Tenha acesso as empresas cadastradas e alunos, além de adicionar matrículas para alunos puderem se cadastrar!</p>
    </div>
</body>
</html>
<?php
include_once(''.TEMPLATE_PATH.'/footer.php');
<?php
    include_once('../config.php');
    include_once('../settings.php');
    include_once('../process/vaga.php');
    
    if(empty($_SESSION['empresa_id'])){
        header('Location:'.URL_VIEWS.'/unset.php');
    }
    include_once(''.TEMPLATE_PATH.'/cabecalhoEmp.php');
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_CSS?>/listaVaga.css">
</head>
<body>
    <div class="lista">
        <h5>Suas Vagas</h5>
    </div>
    <?php
    if(count($vagas)){
    ?>
    <div class="lista-vagas" >
        <table id='tabela' class="table table-sm table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Cargo</th>
            <th scope="col">Ativo</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody style=" background: #383838;">
        <?php
        foreach($vagas as $vaga){
            if($vaga['finalizado']==1){
                $vaga['finalizado']='Não';
            }
            else{
                $vaga['finalizado']='Sim';
            }?>
            <tr>
            <td style="color:#FFF;"scope="row"><?=$vaga['id'];?></td>
            <td style="color:#FFF;"><?=$vaga['titulo'];?></td>
            <td style="color:#FFF;"><?=$vaga['cargo'];?></td>
            <td style="color:#FFF;"><?=$vaga['finalizado'];?></td>
            <td style="color:#FFF;"><a href='<?php echo URL_VIEWS?>/detalhesVaga.php?id=<?=$vaga['id']?>'><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="12" cy="12" r="2"></circle>
   <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
</svg></a></td>
            </tr>
            <?php
            }?>
        </tbody>
        </table>
    </div>
    <?php
    }
    else{?>
    <div class="sem-vagas">
            <p for="">Não há vagas ainda!</p>
    </div>
    <?php
    }
    ?>
</body>
</html>

<?php

include_once(''.TEMPLATE_PATH.'/footer.php');

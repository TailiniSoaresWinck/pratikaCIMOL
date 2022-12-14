<?php
include_once('../config.php');
include_once('../settings.php');
if(empty($_POST['titulo_vaga'])){
    header('Location:'.URL_VIEWS.'/buscaVaga.php');
    exit;
}

$titulo="%".trim($_POST['titulo_vaga'])."%";
$query=$conn->prepare("SELECT v.id, v.titulo, v.cargo,v.finalizado, e.nome FROM projeto.vaga as v
inner join projeto.empresa as e
on e.id=v.empresa_id
WHERE titulo LIKE :titulo");
$query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
$query->execute();
$resultados=$query->fetchAll(PDO::FETCH_ASSOC);


include_once(''.TEMPLATE_PATH.'/cabecalhoAluno.php');
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_CSS?>/resultado.css">
    </head>
<body id='body'>
    <div class="resultado">
        <h5>Resultado da Busca</h5>
    </div>
    <?php
        if(count($resultados)){?>
    <div class="lista-curriculos">
        <table id='tabela' class="table table-sm table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Empresa</th>
            <th scope="col">Ativo</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody style=" background: #383838;">
        <?php
        foreach($resultados as $resultado){
            if($resultado['finalizado']==1){
                $resultado['finalizado']='Não';?>
                <tr style='display:none;'>
                <td style="color:#FFF;"scope="row"><?=$resultado['id']?></td>
                <td style="color:#FFF;"><?=$resultado['titulo']?></td>
                <td style="color:#FFF;"><?=$resultado['nome']?></td>
                <td style="color:#FFF;"><?=$resultado['finalizado']?></td>
                <td><a href='.<?php echo URL_VIEWS?>/vaga.php?id=<?=$resultado['id']?>'><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="2"></circle>
                <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                </svg></a></td>
                </tr>
            <?php
            }
            else{
                $resultado['finalizado']='Sim';
            ?><tr>
            <td style="color:#FFF;"scope="row"><?=$resultado['id']?></td>
            <td style="color:#FFF;"><?=$resultado['titulo']?></td>
            <td style="color:#FFF;"><?=$resultado['nome']?></td>
            <td style="color:#FFF;"><?=$resultado['finalizado']?></td>
            <td><a href='../views/vaga.php?id=<?=$resultado['id']?>'><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="12" r="2"></circle>
            <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
            </svg></a></td>
            </tr>
            <?php
            }}?>
        </tbody>
        </table>
        <?php
        }else{
        ?>
        <div class="sem-resultado">
                <p for="">Não foi possível encontrar uma vaga!</p>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
<?php
include_once(''.TEMPLATE_PATH.'/footer.php');
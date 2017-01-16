<?php
    $nome_tela = "Arquivos";
    require_once '../../config.php';
    require_once ROOT . "cabecalho.php";
    require_once ROOT . 'View/navbar.php';
    require_once ROOT . "Funcoes/Arquivo/basicas.php";
    //require_once (ROOT . "Classes/BD.class.php");
    include ROOT . "Classes/init.php";
    BD::conn();

 ?>
<div id="alert">
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>

<?php if ($user->tipo == "professor"): ?>
    <?php

    $disc = disciplina($user->getId());
    $row = prof_turma($disc["disciplina_id"]);

    if($row == 0)
    {
    ?>

    <div class="col-xs-12">
        <h3>Desculpe, não encontramos turmas relacionadas ao Usuario <?php echo $_SESSION["usuario_logado"];?></h3>
        <h4>Contate o Administrador do sistema, o mais rapido possivel</h4>
    </div>

    <?php
    }
else
{

    require_once ROOT . 'Funcoes/Arquivo/arquivo.func.php';
?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View/Arquivos/Professor/prof.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View/Chat/barra-lateral.php"; ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php endif; ?>

<?php if ($user->tipo == "aluno"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View/Arquivos/Aluno/aluno.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View/Chat/barra-lateral.php"; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php require ROOT . 'rodape.php'; ?>
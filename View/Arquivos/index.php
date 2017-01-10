<?php
    $nome_tela = "Arquivos";
    require_once '../../config.php';
    require_once ROOT . "cabecalho.php";
    verificaUsuario();
    require_once ROOT . 'View/navbar.php';
    require_once ROOT . "Funcoes/Arquivo/basicas.php";
    require_once (ROOT . "Classes/BD.class.php");
    include ROOT . "Classes/init.php";
    BD::conn();

    $op = @ $_REQUEST['op'];

    $nome = @ $_REQUEST['nome'];
    $desc = @ $_REQUEST['desc'];

    $agro1a = @ $_REQUEST['AGROPECUARIA1A'];
    $agro1b = @ $_REQUEST['AGROPECUARIA1B'];
    $agro2a = @ $_REQUEST['AGROPECUARIA2A'];
    $agro2b = @ $_REQUEST['AGROPECUARIA2B'];
    $agro3a = @ $_REQUEST['AGROPECUARIA3A'];
    $agro3b = @ $_REQUEST['AGROPECUARIA3B'];

    $info1 = @ $_REQUEST['INFORMATICA1C'];
    $info2 = @ $_REQUEST['INFORMATICA2C'];
    $info3 = @ $_REQUEST['INFORMATICA3C'];

    $meio1 = @ $_REQUEST['MEIOAMBIENTE1D'];
    $meio2 = @ $_REQUEST['MEIOAMBIENTE2D'];
    $meio3 = @ $_REQUEST['MEIOAMBIENTE3D'];

    $alim1 = @ $_REQUEST['ALIMENTOS1E'];
    $alim2 = @ $_REQUEST['ALIMENTOS2E'];
    $alim3 = @ $_REQUEST['ALIMENTOS3E'];

    echo $desc;

    if (!isset($op)) {
        $op = 0;
    }

    if (!isset($up)) {
        $up = 0;
    }

//     if ($op == 1) {
//         require_once (ROOT. "Funcoes/Arquivo/upload.php");
//         $up = upload($nome, $desc;
//     }
// ?>
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
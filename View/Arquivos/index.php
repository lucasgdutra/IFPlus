<?php
    $nome_tela = "Arquivos";
    require_once '../../config.php';
    require_once ROOT . "cabecalho.php";
    verificaUsuario();
    require_once ROOT . 'View' . DS . 'navbar.php';

    $op = @ $_REQUEST['op'];
    $primeiroa = @ $_REQUEST['primA'];
    $primeirob = @ $_REQUEST['primB'];
    $primeiroc = @ $_POST['primC'];
    $primeirod = @ $_REQUEST['primD'];
    $primeiroe = @ $_REQUEST['primE'];

    if (!isset($op)) {
        $op = 0;
    }

    if (!isset($up)) {
        $up = 0;
    }

    if ($op == 1) {
        include "funcoes_arquivo.php";
        $up = upload();
    }
?>
<div id="alert">
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>

<?php if (usuarioTipo() == "professor"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Arquivos" . DS . "prof.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View" . DS . "Chat" . DS . 'barra-lateral.php'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (usuarioTipo() == "aluno"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Arquivos" . DS . "aluno.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View" . DS . "Chat" . DS . "barra-lateral.php"; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php require ROOT . 'rodape.php'; ?>
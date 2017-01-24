<?php
$nome_tela = "Agenda";
require_once '../../config.php';
require_once './insert_db.php';
require_once ROOT . "cabecalho.php";
//require_once 'insert_db.php';
verificaUsuario();
require_once ROOT . 'Views' . DS . 'navbar.php';

/* Objetos $user e $turma */
include ROOT . "Classes/init.php";
?>
<div id="alert">
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>
<?php if ($user->tipo == "professor"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "Views" . DS . "Agenda" . DS . "prof.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "Views" . DS . "Chat" . DS . 'barra-lateral.php'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($user->tipo == "aluno"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "Views" . DS . "Agenda" . DS . "aluno.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "Views" . DS . "Chat" . DS . "barra-lateral.php"; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php require ROOT . 'rodape.php'; ?>
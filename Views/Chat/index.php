<?php
$nome_tela = "Chat";
require_once '../../config.php';
require_once ROOT . "cabecalho.php";
require_once ROOT . 'Views' . DS . 'navbar.php';
?>
<div id="alert">
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>


<div id="main" class="container-fluid">
    <div class="row">

        <div class = "col-xs-12 no-padding">
            <?php require_once ROOT . "Views" . DS . "Chat" . DS . 'barra-lateral.php'; ?>
            <?php require_once ROOT . "bibliotecas" . DS . "js" . DS . 'functions.js'; ?>
        </div>
    </div>
</div>

<?php require ROOT . 'rodape.php'; ?>


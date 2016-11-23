<?php
$nome_tela = "Chat";
require_once '../../cabecalho.php';
verificaUsuario();
require_once ROOT . 'View' . DS . 'navbar.php';
?>
<div>
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>


<div id="main" class="container-fluid">
    <div class="row">

        <div class = "col-xs-12 no-padding">
            <?php require_once ROOT . "View" . DS . "Chat" . DS . 'barra-lateral.php'; ?>
        </div>
    </div>
</div>

<?php require ROOT . 'rodape.php'; ?>


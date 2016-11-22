<?php
$nome_tela = "Caderno";
require_once '../../cabecalho.php';
verificaUsuario();
require_once ROOT . 'View' . DS . 'navbar.php';
?>

<?php if (usuarioTipo() == "professor"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Caderno" . DS . "prof.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php include '../Chat/barra-lateral.php'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (usuarioTipo() == "aluno"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Caderno" . DS . "aluno.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php include '../Chat/barra-lateral.php'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php require ROOT . 'rodape.php'; ?>

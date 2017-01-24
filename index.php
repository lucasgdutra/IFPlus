
<?php require_once 'config.php'; ?>
<?php require_once ROOT . "cabecalho.php"; ?>
<?php require_once ROOT . '/Funcoes/funcaomobile.php'; ?>

<h1>Bem vindo!</h1>

<?php
if (usuarioEstaLogado()) {
    header('Location:' . BASEURL . 'Views/Agenda/index.php');
} else {
    $mobile = mobile();
    if ($mobile) {
        header('Location:' . BASEURL . 'Views/login-smartphone.php');
    } else {
        header('Location:' . BASEURL . 'Views/login-desktop.php');
    }
}
?>
<?php
require_once("rodape.php");
?>

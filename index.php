
<?php require_once 'config.php'; ?>
<?php require_once ROOT . "cabecalho.php"; ?>
<?php require_once ROOT . '/Funcoes/funcaomobile.php'; ?>

<h1>Bem vindo!</h1>

<?php
if (usuarioEstaLogado()) {
    header('Location:' . BASEURL . 'View/Agenda/index.php');
} else {
    $mobile = mobile();
    if ($mobile) {
        header('Location:' . BASEURL . 'View/login-smartphone.php');
    } else {
        header('Location:' . BASEURL . 'View/login-desktop.php');
    }
}
?>
<?php
require_once("rodape.php");
echo "O que que houve";
?>

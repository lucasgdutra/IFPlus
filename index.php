<?php
require_once("cabecalho.php");
require_once ROOT . '/Funcoes/funcaomobile.php';
?>

<h1>Bem vindo!</h1>

<?php
if (usuarioEstaLogado()) {
    header("Location: /View/Agenda/index.php");
} else {
    $mobile = mobile();
    if ($mobile) {
        header("Location: /View/login-smartphone.php");
    } else {
        header("Location: /View/login-desktop.php");
    }
}
?>
<?php require_once("rodape.php"); ?>

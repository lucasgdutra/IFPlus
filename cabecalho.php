<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        define('DS', DIRECTORY_SEPARATOR);
        define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS);
        require_once ROOT . 'Funcoes' . DS . 'Login' . DS . 'logica-usuario.php';
        ?>
        <title>IFPLUS <?php echo $nome_tela ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 min-scale=1.0 max-scale=10.0">
        <link type="text/css" rel="stylesheet" href="/View/bibliotecas/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/View/bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="/View/bibliotecas/css/style.css">
        <link type="text/css" rel="stylesheet" href="/View/bibliotecas/css/chat.css">
        <?php if ($nome_tela == "Login Desktop"): ?>
            <link type="text/css" rel="stylesheet" href="/View/bibliotecas/css/login-desk.css">
        <?php endif; ?>
        <?php if ($nome_tela == "Login Mobile"): ?>
            <link type="text/css" rel="stylesheet" href="/View/bibliotecas/css/login-smart.css">
        <?php endif; ?>
        <?php if ($nome_tela == "Arquivos"): ?>
            <link type="text/css" rel="stylesheet" href="/View/bibliotecas/css/arquivo-prof.css">
        <?php endif; ?>
        <script src="/View/bibliotecas/js/jquery.js"></script>
        <script src="/View/bibliotecas/bootstrap/js/bootstrap.js"></script>
    </head>
    <body>

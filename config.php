<?php

error_reporting(E_ALL ^ E_NOTICE);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS);

require_once ROOT . "mostra-alerta.php";
require_once ROOT . 'Funcoes' . DS . 'Login' . DS . 'logica-usuario.php';
require_once ROOT .'Funcoes' . DS . 'conecta.php';
function carregaClasse($nomeDaClasse) {
    require_once("Classes/" . $nomeDaClasse . ".php");
}

spl_autoload_register("carregaClasse");
?>
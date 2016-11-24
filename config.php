<?php
error_reporting(E_ALL ^ E_NOTICE);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS);

require_once ROOT . "mostra-alerta.php";
require_once ROOT . 'Funcoes' . DS . 'Login' . DS . 'logica-usuario.php';
?>
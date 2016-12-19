<?php

error_reporting(E_ALL ^ E_NOTICE);
define('DS', DIRECTORY_SEPARATOR);
/** caminho absoluto para a pasta do sistema * */
if (!defined('ROOT')) {
    define('ROOT', __DIR__ . DS);
}

/** caminho no server para o sistema * */
if (!defined('BASEURL')) {
    //define('BASEURL', '/antigo/ifplus/');
    define('BASEURL', '/ifplus/');
}
require_once ROOT . "Funcoes" . DS . "conecta.php";
require_once ROOT . "mostra-alerta.php";
require_once ROOT . 'Funcoes' . DS . 'Login' . DS . 'logica-usuario.php';

function carregaClasse($nomeDaClasse) {
    require_once("Classes/" . $nomeDaClasse . ".php");
}

spl_autoload_register("carregaClasse");
?>

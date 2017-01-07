<?php

error_reporting(E_ALL ^ E_NOTICE);
if (!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);

/** caminho absoluto para a pasta do sistema * */
if (!defined('ROOT'))
    define('ROOT', dirname(__FILE__) . '/');

/** caminho no server para o sistema * */
if (!defined('BASEURL'))
{
	define('BASEURL', '/IFPlus/');
}

/** caminho do arquivo de banco de dados * */
if (!defined('DBAPI'))
    define('DBAPI', ROOT . 'Funcoes/Caderno/database.php');

/** caminhos dos templates de header e footer * */
define('HEADER_TEMPLATE', ROOT . 'cabecalho.php');
define('FOOTER_TEMPLATE', ROOT . 'rodape.php');

require_once ROOT . "Funcoes" . DS . "conecta.php";
require_once ROOT . "mostra-alerta.php";
require_once ROOT . 'Funcoes' . DS . 'Login' . DS . 'logica-usuario.php';

function carregaClasse($nomeDaClasse) {
    require_once("Classes/" . $nomeDaClasse . ".php");
}

spl_autoload_register("carregaClasse");
?>

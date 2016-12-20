<?php

require_once '../../config.php';
require_once("../../Classes/Aula.php");
require_once '../../Funcoes/Caderno/banco-aula.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$numero = $_POST['numero'];
$conteudo = $_POST['conteudo'];
$Disciplina = $_POST['id_disciplina'];



if (alteraAula($conexao,$id, $titulo, $numero, $conteudo)) {

    $_SESSION['success'] = 'A aula ' . $titulo . ' foi alterada.';
} else {
    $msg = mysqli_error($conexao);

    $_SESSION['danger'] = 'A aula ' . $titulo . ' não foi alterada:' . $msg;
} header('Location:' . BASEURL . 'View/Caderno/index.php');
?>


<?php
require_once '../../config.php';
require_once("../../Classes/Aula.php");
require_once '../../Funcoes/Caderno/banco-aula.php';


$titulo = $_POST['aula[titulo]'];
$numero = $_POST['aula[numero]'];
$conteudo = $_POST['aula[conteudo]'];
$Disciplina = $_POST['aula[id_disciplina]'];



if (insereAula($conexao, $titulo, $numero, $conteudo, $Disciplina)) {
    ?>
    <p class="text-success">A aula <?= $aula->getTitulo() ?>, foi adicionado.</p>
    <?php
} else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">A aula<?= $aula->getTitulo() ?> não foi adicionada: <?= $msg ?></p>
    <?php
}
?>


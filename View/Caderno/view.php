<?php
require_once '../../Funcoes/Caderno/banco-aula.php';
$id = $_GET['id'];
$aula = mostraAula($conexao, $id);
if ($aula == null) {
    ?>
    <div class = "bg-danger text-center">>

        <p>Não foi possível mostrar a aula</p>
    </div>
    <?php
} else {
    foreach ($aula as $aula) :
        ?>

        <h4>Aula nº <?= $aula->getNumero() ?> - <?= $aula->getTitulo() ?></h4>

        <div>
            <?= utf8_encode($aula->getConteudo()); ?>
        </div>
        <?php
    endforeach;
}
?>




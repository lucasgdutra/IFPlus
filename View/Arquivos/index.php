<?php $nome_tela = "Arquivos"; ?>
<?php include_once '../../cabecalho.php'; ?>
<?php verificaUsuario(); ?>
<?php require ROOT . 'View' . DS . 'navbar.php'; ?>

<div style="margin: 50px;" class="container">
    <a href="prof.php">professor</a>
    <a href="aluno.php">Aluno</a>
</div>
<?php require ROOT . 'rodape.php'; ?>

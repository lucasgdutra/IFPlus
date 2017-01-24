<div class="container-fluid">
    <?php
    $escolha = $_REQUEST['escolha'];
    if (isset($escolha) && $escolha == 1) {

        require_once './aluno-aula.php';
    } else {
        require_once './aluno-disciplina.php';
    }
    ?>
</div>
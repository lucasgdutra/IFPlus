<script type="text/javascript">
    $(function () {

        $(".caixa-pesquisa-disciplina").keyup(function () {
            var texto = $(this).val();

            $(".pesquisa-disciplina").each(function () {
                var resultado = $(this).text().toUpperCase().indexOf(' ' + texto.toUpperCase());

                if (resultado < 0) {
                    $(this).fadeOut();
                } else {
                    $(this).fadeIn();
                }
            });

        });

    });
</script>

<input  name="pesquisa" class="form-control caixa-pesquisa-disciplina" style="margin: 10px 0 10px" type="text" placeholder="Pesquisar Disciplinas">
<div class="list-group" >
    <?php
    $turma = alunoTurma();

    $disciplinas = listaDisciplinas($conexao, $turma);
    foreach ($disciplinas as $disciplina) :
        ?>
        <form class = "pesquisa-disciplina" method = "post" action = "#" id = "EnviaDisciplina">
            <input name = "escolha" value = "1" type = "hidden">
            <input name = "id" value = "<?= $disciplina->getId() ?>" type = "hidden">
            <input name = "disciplina" value = "<?= $disciplina->getNome() ?>" type = "hidden">
            <input name = "ano" value = "<?= $disciplina->getAno() ?>" type = "hidden">
            <button class = "list-group-item"><?= $disciplina->getNome() ?></button>

        </form>
        <?php
    endforeach;
    ?>

</div>


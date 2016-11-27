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
    <form class="pesquisa-disciplina" method="post" action="/View/Caderno/index.php" id="EnviaDisciplina">
        <input  name="escolha" value="1" type="hidden">
        <input  name="disciplina" value="matematica" type="hidden">
        <input  name="ano" value="1" type="hidden">
        <button class="list-group-item">Matematica</button>
    </form>
    <form class="pesquisa-disciplina" method="post" action="/View/Caderno/index.php" id="EnviaDisciplina">
        <input  name="escolha" value="2" type="hidden">
        <button class="list-group-item">Infraestrutura de redes</button>
    </form>
    <form class="pesquisa-disciplina" method="post" action="/View/Caderno/index.php" id="EnviaDisciplina">
        <input  name="escolha" value="2" type="hidden">
        <button class="list-group-item">Desenvolvimento de Projetos em TI</button>
    </form>
</div>


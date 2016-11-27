<script type="text/javascript">
    $(function () {

        $(".caixa-pesquisa-aula").keyup(function () {
            var texto = $(this).val();

            $(".pesquisa-aula").each(function () {
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

<a href="index.php" class="btn btn-block btn-default" >Voltar para seleção de disciplinas</a>

<input  name="pesquisa" class="form-control caixa-pesquisa-aula" style="margin: 10px 0 10px" type="text" placeholder="Pesquisar Disciplinas">
<script>
    function AbreModal() {
        $('#modalAula').modal('show');
    }
</script>
<div class="list-group">
    <?php
    for ($i = 0; $i < 30; $i++):
        ?>
        <button  onclick="AbreModal(id)" class="list-group-item pesquisa-aula">
            <h4 class="list-group-item-heading">Matematica</h4>
            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
        </button>
        <?php
    endfor;
    ?>
</div>

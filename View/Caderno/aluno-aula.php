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
<script>
    function AbreModal() {
        $('#modalAula').modal('show');
    }
</script>
<hr>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <div class="panel-title row">
                <div class="col-sm-6 ">
                    <h4>
                        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                            Matematica 1º Ano
                        </a>
                    </h4>
                </div>
                <div class="col-sm-6 ">
                    <a href="index.php" class="btn btn-default btn-block pull-right col-sm-6">Voltar para seleção de disciplinas</a>
                </div>
            </div>

        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">

                <input  name="pesquisaaula" class="form-control caixa-pesquisa-aula" id="pesquisaaula" type="text" placeholder="Pesquisar Aulas">

                <div class="table-responsive pre-scrollable">
                    <div class="list-group">
                        <button  onclick="AbreModal(id)" class="list-group-item pesquisa-aula">

                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </button>
                        <button  onclick="AbreModal(id)" class="list-group-item pesquisa-aula">
                            <p class="list-group-item-text">Aula 2 | Funções de segundo grau</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


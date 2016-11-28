<div class="modal fade" id="modalAula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Aula 2 - História do Brasil - Período Joanino e o processo de independência do Brasil</h4>
            </div>
            <div class="modal-body" id="conteudo-aula">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<?php
$disciplina_id = $_REQUEST['id'];
$disciplina_nome = $_REQUEST['disciplina'];
$disciplina_ano = $_REQUEST['ano'];
$mostraaula = $_REQUEST['mostraaula'];
if (isset($mostraaula) && $mostraaula == 1) {
    ?>

    <script type = "text/javascript">
        $(".modal-title").load("newhtml.html");
        $(".modal-body").load("newhtml.html");
        $('#modalAula').modal('show');

    </script>
<?php }
?>
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

<hr>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <div class="panel-title row">
                <div class="col-sm-6 ">
                    <h4>
                        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                            <?= $disciplina_nome . " " . $disciplina_ano . "º Ano" ?>
                        </a
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

                <div class="pre-scrollable">
                    <div class="list-group">
                        <?php
                        $aulas = listaAulas($conexao, $disciplina_id);
                        foreach ($aulas as $aula) :
                            ?>
                            <form class = "pesquisa-aula" method = "post" action = "#" id = "EnviaDisciplina">
                                <input name = "escolha" value = "1" type = "hidden">
                                <input name = "mostraaula" value = "1" type = "hidden">
                                <input name = "id" value = "<?= $aula->getId() ?>" type = "hidden">
                                <input name = "aula" value = "<?= $aula->getTitulo() ?>" type = "hidden">
                                <input name = "aula" value = "<?= $aula->getNumero() ?>" type = "hidden">
                                <button class = "list-group-item"><?= utf8_encode($aula->getTitulo()) ?></button>

                            </form>
                            <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





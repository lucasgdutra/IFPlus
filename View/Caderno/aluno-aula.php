
<?php
//Capturando variáveis
$disciplina_id = $_REQUEST['id'];
$disciplina_nome = $_REQUEST['disciplina'];
$disciplina_ano = $_REQUEST['ano'];
$mostraaula = $_REQUEST['mostraaula'];
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

                <div class="pre-scrollable">
                    <div class="list-group">
                        <?php
                        $aulas = listaAulas($conexao, $disciplina_id);
                        if ($aulas == null) {
                            ?>
                            <div class = "bg-danger text-center">
                                <p>Sem aulas para listar, houve algum erro de conexão com o banco ou o professor da disciplina não adicionou nenhuma aula</p>
                            </div>
                            <?php
                        } else {
                            foreach ($aulas as $aula) :
                                ?>
                                <div class = "pesquisa-aula"   action = "#" id = "EnviaDisciplina">
                                    <a href="#" class = "list-group-item" data-toggle="modal" data-target="#view-modal" data-customer="<?php echo $aula->getID(); ?>">
                                        <?= utf8_encode($aula->getTitulo()) ?>
                                    </a>
                                </div>
                                <?php
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'modal.php';
?>
<script src="main.js"></script>



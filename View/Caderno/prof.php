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
<?php
if (isset($idaula) && $idaula != null) {
    $idaula = $_GET['id'];
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
            <tr class="pesquisa-aula">
                <td><?= $aula->getTitulo() ?></td>
                <td><?= $aula->getNumero() ?></td>
            <div>
                <?= $aula->getConteudo(); ?>
            </div>
            </tr>
            <?php
        endforeach;
    }
}else {
    ?>

    <div class="container-fluid">
        <hr>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
            $disciplinas = listaDisciplinasprofessor($conexao, idProfessor());
            if ($disciplinas != 0) {
                foreach ($disciplinas as $disciplina) :
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <div class="panel-title row">
                                <div class="col-sm-6 ">
                                    <h4>
                                        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                            <?= $disciplina->getNome() ?> <?= $disciplina->getAno() ?>º Ano
                                        </a>
                                    </h4>
                                </div>
                                <div class="col-sm-6 ">
                                    <form>
                                        <input type="hidden" name="id" value="<?= $disciplina->getId() ?>">
                                        <button type="submit" class="btn btn-default btn-block pull-right col-sm-6">Nova Aula</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">

                                <input  name="pesquisaaula" class="form-control caixa-pesquisa-aula" id="pesquisaaula" type="text" placeholder="Pesquisar Aulas">

                                <div class="table-responsive pre-scrollable">
                                    <table id="tabelaaula" class="table table-striped" cellspacing="0" cellpadding="0">
                                        <thead>
                                            <tr>
                                                <th width="80%"><strong>Título</strong></th>
                                                <th><strong>Nº</strong></th>
                                                <th class="actions"><strong>Ações</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $aulas = listaAulas($conexao, $disciplina->getId());
                                            if ($aulas == null) {
                                                ?>

                                                <tr class = "bg-danger text-center">>
                                                    <td colspan="3">
                                                        Sem aulas para listar, houve algum erro de conexão com o banco ou o professor da disciplina não adicionou nenhuma aula
                                                    </td>
                                                </tr>

                                                <?php
                                            } else {
                                                foreach ($aulas as $aula) :
                                                    ?>
                                                    <tr class="pesquisa-aula">
                                                        <td><?= $aula->getTitulo() ?></td>
                                                        <td><?= $aula->getNumero() ?></td>
                                                        <td class="actions">
                                                            <a class="btn btn-success btn-xs" href="#?id=<?= $aula->getId() ?>">Visualizar</a>
                                                            <a class="btn btn-warning btn-xs" href="#?id=<?= $aula->getId() ?>" data-toggle="modal" data-target="#edita-aula-modal">Editar</a>
                                                            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            } else {
                print_r($disciplinas);
            }
            ?>
        </div>

    </div>

<?php } ?>
<!--Modal -->
<div class = "modal fade" id = "delete-modal" tabindex = "-1" role = "dialog" aria-labelledby = "modalLabel">
    <div class = "modal-dialog" role = "document">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Fechar"><span aria-hidden = "true">&times;
                    </span></button>
                <h4 class = "modal-title" id = "modalLabel">Excluir Aula</h4>
            </div>
            <div class = "modal-body">
                Deseja realmente excluir esta aula?
            </div>
            <div class = "modal-footer">
                <button type = "button" class = "btn btn-success">Sim</button><button type = "button" class = "btn btn-danger" data-dismiss = "modal">N&atilde;                    o</button>
            </div>
        </div>
    </div>
</div>

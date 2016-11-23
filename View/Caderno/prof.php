<div class="container-fluid">
    <hr>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <div class="panel-title row">
                    <div class="col-xs-6 media-bottom">
                        <h4>
                            <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                História 1º Ano
                            </a>
                        </h4>
                    </div>
                    <div class="col-xs-6 media-bottom">
                        <a href="#" class="btn btn-default pull-right col-sm-6">Nova Aula</a>
                    </div>
                </div>

            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">

                    <input  name="pesquisaaula" class="form-control" id="pesquisaaula" type="text" placeholder="Pesquisar Aulas">

                    <div class="table-responsive pre-scrollable">
                        <table id="tabelaaula" class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th><strong>Título</strong></th>
                                    <th><strong>Nº</strong></th>
                                    <th class="actions"><strong>Ações</strong></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Lorem ipsum dolor</td>
                                    <td>1</td>
                                    <td class="actions">
                                        <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                                        <a class="btn btn-warning btn-xs" href="#">Editar</a>
                                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#apaga-aula-modal">Excluir</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Feijão</td>
                                    <td>2</td>
                                    <td class="actions">
                                        <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                                        <a class="btn btn-warning btn-xs" href="#">Editar</a>
                                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#apaga-aula-modal">Excluir</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="apaga-aula-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Aula</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir esta aula?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Sim</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <h2>Aulas</h2>
        </div>
        <div class="col-sm-8">
            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Aulas">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-sm-2">
            <a href="add.html" class="btn btn-default pull-right h2">Nova Aula</a>
        </div>
    </div> <!-- /#top -->

    <hr/>

    <div class="row">
        <div class="table-responsive col-xs-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Título</th>
                        <th>Disciplina</th>
                        <th>Ano</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Período Joanino e o processo de independência do Brasil</td>
                        <td>História</td>
                        <td>3º</td>
                        <td class="actions">
                            <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#apaga-aula-modal">Excluir</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div> <!-- /#list -->

    <div class="row">
        <div class="col-md-12">
            <ul class="pagination">
                <li class="disabled"><a>&lt; Anterior</a></li>
                <li class="disabled"><a>1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
            </ul><!-- /.pagination -->
        </div>
    </div> <!-- /#bottom -->
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

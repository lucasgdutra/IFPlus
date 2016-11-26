<div id="submenu" >
    <!-- Nav tabs -->
    <ul class="nav  nav-tabs row no-margin" role="tablist">
        <li role="presentation" class="active col-xs-6"><a href="#caderno-disc" aria-controls="caderno-disc" role="tab" data-toggle="tab">Disciplinas</a></li>
        <li role="presentation" class="col-xs-6"><a href="#caderno-aula" aria-controls="caderno-aula" role="tab" data-toggle="tab">Aulas</a></li>
    </ul>
</div>
<div style="padding: 10px" class="tab-content">
    <div role="tabpanel" class="tab-pane active " id="caderno-disc">
        <a href="#" aria-controls="caderno-aula" class="list-group-item ">
            <h4>Matematica</h4>
        </a>
    </div>
    <div role="tabpanel" class="tab-pane" id="caderno-aula">
        <script>
            function AbreModal() {
                $('#modalAula').modal('show');
            }
        </script>
        <div class="list-group">
            <?php
            for ($i = 0; $i < 30; $i++):
                ?>
                <button  onclick="AbreModal(id)" class="list-group-item ">
                    <h4 class="list-group-item-heading">Matematica</h4>
                    <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                </button>
                <?php
            endfor;
            ?>
        </div>

    </div>
</div>

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
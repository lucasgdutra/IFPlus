<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/style.css">
    </head>
    <body>
        <?php $nome_tela = "Caderno" ?>
        <?php require '../header.php'; ?>
        <div  class="container-fluid">
            <div id="submenu" class="row">
                <!-- Nav tabs -->
                <ul class="nav  nav-tabs " role="tablist">
                    <li role="presentation" class="active col-xs-6"><a href="#caderno-disc" aria-controls="caderno-disc" role="tab" data-toggle="tab">Disciplinas</a></li>
                    <li role="presentation" class="col-xs-6"><a href="#caderno-aula" aria-controls="caderno-aula" role="tab" data-toggle="tab">Aulas</a></li>
                </ul>
            </div>



            <div class="tab-content container">

                <div role="tabpanel" class="tab-pane active" id="caderno-disc">
                    <a href="#" aria-controls="caderno-aula" class="list-group-item ">
                        <h4>Matematica</h4>
                    </a>
                </div>

                <div role="tabpanel" class="tab-pane" id="caderno-aula">
                    <div class="list-group">
                        <a href="#" class="list-group-item " data-toggle="modal" data-target="#AulaModal">
                            <h4 class="list-group-item-heading">Matematica</h4>
                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h4 class="list-group-item-heading">Matematica</h4>
                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h4 class="list-group-item-heading">Matematica</h4>
                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h4 class="list-group-item-heading">Matematica</h4>
                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h4 class="list-group-item-heading">Matematica</h4>
                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h4 class="list-group-item-heading">Matematica</h4>
                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="AulaModal" tabindex="-1" role="dialog" aria-labelledby="AulaModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Aula 2 - História do Brasil - Período Joanino e o processo de independência do Brasil</h4>
                    </div>
                    <div class="modal-body">
                        <h1 class="titulo">Aula 2 - História do Brasil - Período Joanino e o processo de independência do Brasil</h1>
                <h2>Período Joanino(1808-1821)</h2>
                <h3>D. João VI e família real no brasil</h3>
                <ul>
                    <li>-Motivo:fugiram de Napoleão(Bloqueio Continental)</li>
                </ul>
                <h3>Medidas de D.João VI</h3>
                <ul>
                    <li>Abertura dos portos</li>
                    <li>-Consequência: fim do pacto colonial</li>
                </ul>
                <ul>
                    <li>Criação do Reino Unido de "Portugal, Brasil e Algarvis"</li>
                    <li>Consequência : autonomia política</li>
                </ul>
                <h3>Acordos de 1810</h3>
                <ul>
                    <li>D.João VI x Inglaterra</li>
                    <li>Inglaterra ganhou privilégios jurídicos e comercias no Brasil</li>
                </ul>
                <ul>
                    <li>- Foro privilegiado</li>
                    <li>- Liberdade religiosa</li>
                    <li>- Impostos mais baixos</li>
                    <li>15% Inglaterra</li>
                    <li>16% Portugal</li>
                    <li class="nivel1">24% Outros</li>
                </ul>
                <h2>Tarefa: Resumir a revolução liberal do porto de 1820</h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab panes -->

        <script src="../bibliotecas/js/jquery.js"></script>
        <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>

<header>
    <nav class="navbar navbar-static-top navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header col-md-6">
                    <div >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand visible-xs" href="#"><?php echo$nome_tela; ?></a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collapse navbar-collapse container " id="collapse-navbar" aria-expanded="false">

                        <ul id="ul" class="nav navbar-nav">
                            <li <?php
                            if ($nome_tela == 'Agenda') {
                                echo 'class="active"';
                            }
                            ?>>
                                <a href="../Agenda/">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    &nbsp;
                                    Agenda
                                </a>
                            </li>


                            <li <?php
                            if ($nome_tela == "Arquivos") {
                                echo 'class="active"';
                            }
                            ?>>
                                <a  href="../Arquivos/">
                                    <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                    &nbsp;
                                    Arquivos
                                </a>
                            </li>

                            <li
                            <?php
                            if ($nome_tela == 'Caderno') {
                                echo 'class="active"';
                            }
                            ?>>
                                <a  href="../Caderno/">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                    &nbsp;
                                    Caderno
                                </a>
                            </li>

                            <li class="visible-xs
                            <?php
                            if ($nome_tela == 'Chat') {
                                echo 'active';
                            }else{
                                echo '';
                            }
                            ?>">
                                <a  href="../Chat/">
                                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                    &nbsp;
                                    Chat
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#ConfigModal">
                                    <span class="glyphicon glyphicon-cog"></span>
                                    &nbsp;
                                    Configurações
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="modal fade" id="ConfigModal" tabindex="-1" role="dialog" aria-labelledby="ConfigModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
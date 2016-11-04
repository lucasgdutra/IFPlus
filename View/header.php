<header>
    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header col-md-7">
                    <div >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><?php echo"IFPlus"; ?></a>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="collapse navbar-collapse container " id="collapse-navbar" aria-expanded="false">

                        <ul class="nav navbar-nav">
                            <li <?php
                            if ($nome_tela == 'Agenda') {
                                echo 'class="active"';
                            }
                            ?>>
                                <a href="../Agenda/">Agenda</a>
                            </li>


                            <li <?php
                            if ($nome_tela == "Arquivos") {
                                echo 'class="active"';
                            }
                            ?>>
                                <a  href="../Arquivos/">Arquivos</a>
                            </li>

                            <li
                            <?php
                            if ($nome_tela == 'Caderno') {
                                echo 'class="active"';
                            }
                            ?>>
                                <a  href="../Caderno/">Caderno</a>
                            </li>

                            <li 
                            <?php
                            if ($nome_tela == 'Chat') {
                                echo 'class="active"';
                            }
                            ?>>
                                <a  href="../Chat/">Chat</a>
                            </li>
                            <li><a href="#">Configurações</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </nav>
</header>

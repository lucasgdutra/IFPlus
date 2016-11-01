<header>
    <!--teste-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid row">

            <div class="navbar-header col-md-2">
                <div >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="#"><?php echo $nome_tela; ?></a>
            </div>

            <div class="collapse navbar-collapse" id="collapse-navbar" aria-expanded="false">
                <div class="col-md-9">
                    <ul class="nav navbar-nav ">
                        <li><a data-target="#" data-toggle="pill" href="../Agenda/index.php">Agenda</a></li>
                        <li><a data-target="#" data-toggle="pill" href="../Caderno/index.php">Caderno</a></li>
                        <li><a data-target="#" data-toggle="pill" href="../Chat/index.php">Chat</a></li>
                        <li><a data-target="#" data-toggle="pill" href="../Compartilhador/index.php">Compartilhador de Arquivos</a></li>
                    </ul>
                </div>
                <div class="col-md-1">
                    <ul class="nav navbar-nav ">
                        <li><a href="#">Configurações</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script>
        /*menu handler*/
        $(function () {
            function stripTrailingSlash(str) {
                if (str.substr(-1) == '/') {
                    return str.substr(0, str.length - 1);
                }
                return str;
            }

            var url = window.location.pathname;
            var activePage = stripTrailingSlash(url);

            $('.nav li a').each(function () {
                var currentPage = stripTrailingSlash($(this).attr('href'));

                if (activePage == currentPage) {
                    $(this).parent().addClass('active');
                }
            });
        });</script>
</header>


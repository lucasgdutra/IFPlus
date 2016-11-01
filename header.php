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
                        <li class="active"><a href="../Agenda/">Agenda</a></li>
                        <li><a  href="../Caderno/">Caderno</a></li>
                        <li><a  href="../Chat/">Chat</a></li>
                        <li><a  href="../Compartilhador/">Compartilhador de Arquivos</a></li>
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
</header>

<script>
    $(function () {
        $(".nav li").click(function () {
            $(".nav li").removeClass('active');
            setTimeout(function () {
                var page = $.QueryString("page");
                $(".nav li:eq(" + page + ")").addClass("active");
            }, 300);

        });
    });
</script>
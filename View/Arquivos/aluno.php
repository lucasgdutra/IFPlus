<!DOCTYPE html>
<html>
    <head>
        <title>IFPlus - Arquivos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/reset.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/style.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/chat.css">
    </head>
    <body>
        <?php $nome_tela = "Arquivos" ?>
        <?php require '../header.php'; ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-md-10">
                    <div style="padding: 0" class="container-fluid">
                        <div class="row">
                            <div style="margin-top: 50px;" class="">
                                <div id="submenu">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active col-xs-12 col-lg-12 col-md-12 col-sm-12">
                                            <a class="disabled">Todos os Arquivos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div  class="container-fluid">
                                <div style="padding-left: 15px; padding-right: 15px;" class="row">
                                    <div class="input-group col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                        <input type="text" class="form-control" aria-label="Pesquisar" placeholder="Pesquisar Arquivo">
                                        <div class="input-group-btn">
                                            <botton type="button" class="btn btn-default" aria-label="Pesquisar">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </botton>
                                        </div>
                                    </div>
                                    <?php require 'past.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mensageiro" class="col-sm-3 col-md-2 hidden-xs">
                    <?php include '../Chat/barra-lateral.php'; ?>
                </div>
            </div>
        </div>

        <script src="../bibliotecas/js/jquery.js"></script>
        <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
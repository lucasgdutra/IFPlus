<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>IFPlus - Arquivos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/style.css">
    </head>
    <body>
        <?php $nome_tela="Arquivos"?>
        <?php require '../header.php';?>
        
        <div class="container-fluid">
            <div id="submenu" class="row">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active col-xs-12">
                        <a class="disabled">Todos os Arquivos</a>
                    </li>
                </ul>
            </div>
            <br>
            <div class="container">
                <div>
                    <div class="input-group">
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
        
        <script src="../bibliotecas/js/jquery.js"></script>
        <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
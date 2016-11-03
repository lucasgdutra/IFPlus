<!DOCTYPE html>
<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 -->
<html>
    <head>
        <title>IFPlus - Arquivos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/bootstrap/css/bootstrap.css">
        <style>
            
        </style>
    </head>
    <body>
        <?php $nome_tela="Arquivos"?>
        <?php require '../header.php';?>
        
        <div class="container-fluid">
            <div class="row">
                <ul class="nav nav-tabs">
                    <li class="active col-xs-6"><a href="#all" data-toggle="tab">Todos os Arquivos</a></li>
                    <li class="col-xs-6"><a href="#rec" data-toggle="tab">Recebidos</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="all">Conteudo TODOS</div>
                <div class="tab-pane" id="rec">Conteudos RECEBIDOS</div>
            </div>
        </div>
        <script src="../bibliotecas/js/jquery.js"></script>
        <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>


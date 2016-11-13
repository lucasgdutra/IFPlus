<?php
    include "funcoes_arquivo.php";
    
    $op = @ $_REQUEST['op'];
    
    if(!isset($op))
    {
        $op = 0;
    }
    
    if($op == 1)
    {
        $up = upload();
    }
?>

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
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/arquivo-prof.css">
    </head>
    <body>
        <?php $nome_tela="Arquivos"?>
        <?php require '../header.php'; ?>
        
         <div  class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-md-10">
                    <div style="padding: 0" class="container-fluid">
                        <div id="submenu" class="row">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="col-xs-4
                                    <?php 
                                        if($up == 0)
                                        {
                                            echo 'active';
                                        }
                                    ?>">
                                    <a href="#arquivos-send" aria-controls="arquivos-send" id="lnk-send" role="tab" data-toggle="tab">Enviados</a>
                                </li>
                                <li role="presentation" class="col-xs-4
                                    <?php 
                                        if($up == 1)
                                        {
                                            echo 'active';
                                        }
                                    ?>">
                                    <a href="#arquivos-new" aria-controls="arquivos-new" role="tab" data-toggle="tab">Novo</a>
                                </li>
                                <li role="presentation" class="col-xs-4">
                                    <a href="#arquivos-turm" aria-controls="arquivos-turm" role="tab" data-toggle="tab">Turmas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content container">
                            <div role="tabpanel" class="tab-pane 
                                 <?php
                                    if($up == 0)
                                    {
                                        echo "active";
                                    }
                                 ?>" id="arquivos-send">
                                <?php require 'enviados-prof.php';?>
                            </div>
                            <div role="tabpanel" class="tab-pane
                                 <?php
                                    if($up == 1)
                                    {
                                        echo "active";
                                    }
                                 ?>" id="arquivos-new">
                                <?php require 'novo-prof.php';?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="arquivos-turm">
                                <?php require 'turm-prof.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mensageiro" class="col-sm-3 col-md-2 hidden-xs">
                    <?php include '../Chat/barra-lateral.php'; ?>
                </div>
            </div>
        </div>
        <!-- Tab panes -->
        <script src="../bibliotecas/js/jquery.js"></script>
        <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>


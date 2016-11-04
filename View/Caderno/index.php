<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                        <a href="#" class="list-group-item ">
                            <h4 class="list-group-item-heading">Matematica</h4>
                            <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Tab panes -->

    <script src="../bibliotecas/js/jquery.js"></script>
    <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
</body>
</html>

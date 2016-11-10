<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>mensageiro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/reset.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/style.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/chat.css">
    </head>
    <body>
        <?php $nome_tela = "Chat" ?>
        <?php require '../header.php'; ?>

        <!--        <div id="principal">
                    div msg podera ser removida
                </div>
                Comentada por Lucas -> Desnecessária-->

        <div class="container-fluid">
            <div class="row">
                <div class="afix col-sm-3 col-sm-offset-9 col-md-2 col-md-offset-10 hidden-xs" id="mensageiro"><!--div msg podera ser removida-->
                    <aside id="users_online">
                        <div class="list-group">
                            <?php for ($i = 1; $i <= 35; $i++): ?>
                                <a href="#" class="list-group-item ">
                                    <div class="imgSmall">
                                        <img class="img-responsive img-circle" src="../bibliotecas/img/breno.png" border="0">
                                    </div>
                                    <p class="comecar">Breno Mendes</p>
                                    <span  class="status off"></span>
                                </a>
                            <?php endfor; ?>
                            </div>
                    </aside>
                </div>
                <aside id="chats">

                    <div class="window" id="janela_x">
                        <div class="header_window">
                            <a href="#" class="close">x</a>
                            <span class="name">breno mendes</span>
                            <span id="5" class="status on"></span>
                        </div>
                        <div class="body">

                            <div class="mensagens">
                                <ul>
                                    <li class="eu"><p> exemplo de msg</p></li>
                                    <li class=""><p> exemplo de msg q eu estou usando para reproduzir uma mensagem de verdde</p><div class="imgSmall">
                                            <img src="../bibliotecas/img/breno.png" border="0">
                                        </div></li>
                                    <!--<div class="imgSmall">-->
                                        <!--<img src="img/breno.png" border="0">
                                    </div>-->
                                </ul>

                            </div>
                            <div class ="send_message" id="3:5">
                                <input type="text" name="message" class="msg" id="3:5"/>
                            </div>

                        </div>
                    </div>

                </aside>

            </div>
        </div>
        <script src="../bibliotecas/js/jquery.js"></script>
        <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>

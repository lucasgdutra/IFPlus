<!--<div  class="affix" style=" margin-top: -50px; padding-top: 50px; height: 100vh; background-color: #ccc">
    <aside style="height: calc(100% - 50px); overflow: auto; padding: 10px; ">
        <div class="list-group" id="users_online">
<?php for ($i = 1; $i <= 70; $i++): ?>
                        <a href="#"  class="list-group-item" style="">
                            <div class="row no-margin">
                                <div class="col-xs-2 no-padding vertical-bottom">
                                    <img class="img img-responsive img-circle " src="<?= BASEURL ?>View/bibliotecas/img/breno.png" border="0">
                                </div>
                                <div class="col-xs-8 no-padding vertical-bottom">
                                    Breno Mendes
                                </div>
                                <div class="col-xs-2 no-padding vertical-bottom">
                                    <span  class="status off "></span>
                                </div>
                            </div>
                        </a>
<?php endfor; ?>
        </div>

    </aside>
*/-->


<div  class="affix" style=" margin-top: -50px; padding-top: 50px; height: 100vh; background-color: #ccc">


    <aside style="height: calc(100% - 50px); overflow: auto; padding: 10px; " id="users_online">
        <?php
        $query = "select * from 'usuario' where 'email'= ?";
        $resultado = mysqli_query($conexao, $query);
        print_r($resultado);
        ?>
        <ul>
            <?php for ($i = 1; $i <= 30; $i++): ?>
                <div><!--div msg podera ser removida-->
                    <li id="5">
                        <div class="imgSmall">
                            <img src="<?= BASEURL ?>View/bibliotecas/img/breno.png" border="0">
                        </div>
                        <a href="#" id="3:5" class="comecar">Breno mendes</a>
                        <span id="5" class="status off"></span>
                    </li>
                </div>
            <?php endfor; ?>
        </ul>
    </aside>

    <div style=" padding: 10px;">
        <div class="input-group">
            <input class="form-control" aria-label="Pesquisar" placeholder="Pesquisar Aluno" type="text">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default" aria-label="Pesquisar">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<aside id="chats" class="affix">
    <!--<div class="window" id="1" >
   <div class="header_window"><a href="#" class="close">x</a><span class="name">breno</span><span id="6" class="status on"></span></div>
   <div class="body"> <div class="mensagens"> <ul> </ul></div>
   <div class ="send_message" id="3"> <input type="text" name="menssage" class="msg" id="6"/> </div></div></div>-->




</aside>








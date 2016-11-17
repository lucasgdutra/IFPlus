
<!--        <div id="principal">
            div msg podera ser removida
        </div>
        Comentada por Lucas -> Desnecessária-->



<div  class="affix" style=" padding-top: 50px; height: 100vh; background-color: #ccc">
    <aside style="height: calc(100% - 50px); overflow: auto; padding: 10px; ">
        <div class="list-group">
            <?php for ($i = 1; $i <= 70; $i++): ?>
                <a href="#"  class="list-group-item" style="">
                    <div class="row no-margin">
                        <div class="col-xs-2 no-padding vertical-bottom">
                            <img class="img img-responsive img-circle " src="/View/bibliotecas/img/breno.png" border="0">
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
<!--<aside id="chats">
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
                    <div class="imgSmall">
                        <img src="img/breno.png" border="0">
                    </div>
                </ul>
            </div>
            <div class ="send_message" id="3:5">
                <input type="text" name="message" class="msg" id="3:5"/>
            </div>
        </div>
    </div>
</aside>-->

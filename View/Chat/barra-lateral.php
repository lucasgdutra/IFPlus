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

<?php
require_once (ROOT . "Classes/chat.php");
BD::conn();
?>
<div  class="affix" style=" margin-top: -50px; padding-top: 50px; height: 100vh; background-color: #ccc">


    <aside style="height: calc(100% - 50px); overflow: auto; padding: 10px; " id="users_online">
        <ul>
<<<<<<< HEAD
        <?php
=======
            <?php
>>>>>>> 83e09e16eb59a264870ea979c1499a69d95bc2c6
            $query = BD::conn()->prepare("SELECT * FROM `usuario` WHERE `email` != ?");
            $query->execute(array($_SESSION["usuario_logado"]));
            while ($row = $query->fetch()) {
                $foto = ($row['foto'] == '') ? 'default.jpg' : $row['foto'];
                $agora = date('Y-m-d H:i:s');
                $status = 'on';
                if ($agora >= $row['limite']) {
                    $status = 'off';
                }
                ?>
                <div><!--div msg podera ser removida-->
                    <li id="<?php echo $row['id'] ?>">
                        <div class="imgSmall">
                            <img src="<?php echo $foto; ?>" border="0">
                        </div>
                        <a href="#" id="<?php echo $_SESSION['id_user'] . ':' . $row['id']; ?>" class="comecar"><?php echo utf8_encode($row['nome']); ?></a>
                        <span id="<?php echo $row['id']; ?>" class="status <?php echo $status; ?>"></span>
                    </li>
                </div>
                <?php
            }
            ?>
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








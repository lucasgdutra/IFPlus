
<?php

BD::conn();
?>
<?php
$query = BD::conn()->prepare("SELECT * FROM `usuario` WHERE `email` = ?");
$query->execute(array($_SESSION["usuario_logado"]));
$dadosUser = $query->fetch();
?>

<div  class="affix" style=" margin-top: -50px; padding-top: 50px; height: 100vh; background-color: #ccc">

    <span  class="user_online" id="<?php echo $dadosUser['id']; ?>"></span>
    <aside style="height: calc(100% - 50px); overflow: auto; padding: 10px; " id="users_online">
        <ul>
            <?php
            $query = BD::conn()->prepare("SELECT * FROM `usuario` WHERE `email` != ?");
            $query->execute(array($_SESSION["usuario_logado"]));


            while ($row = $query->fetch()) {
                //$foto = ($row['foto'] == '') ? 'default.jpg' : $row['foto'];
                $agora = date('Y-m-d H:i:s');
                $status = 'of';
                if ($agora >= $row['limite']) {
                    $status = 'on';
                }
                ?>
                <div><!--div msg podera ser removida-->
                    <li id="<?php echo $row['id'] ?>">
                        <div class="imgSmall">
                            <img src="tt.jpgq" border="0">
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


</aside>








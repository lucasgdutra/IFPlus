<?php $nome_tela = "Login Mobile"; ?>
<?php
require_once '../config.php';
;
?>
    <?php require_once ROOT . "cabecalho.php"; ?>
<div>
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
<?php mostraAlerta("warning"); ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <form action="<?= BASEURL ?>Funcoes/Login/login.php" method="post" class="form-signin">
                <center>
                    <h2 class="form-signin-heading">Login</h2>
                </center>
                <label for="inputEmail" class="sr-only">Endereço de email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Me lembre
                    </label>
                </div>
                <button class="btn btn-lg btn-default btn-block" type="submit">Entrar</button>
            </form>
        </div>
    </div>
</div>
<?php require ROOT . 'rodape.php'; ?>
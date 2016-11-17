<?php $nome_tela = "Login Mobile"; ?>
<?php include_once '../cabecalho.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <form action="../View/Agenda/" class="form-signin">
                <center>
                    <h2 class="form-signin-heading">Login</h2>
                </center>
                <label for="inputEmail" class="sr-only">Endereço de email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
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
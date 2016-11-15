<?php
/* Alteração feita por Matheus Santiago */
/* fiz tal alteração de teste para que ao meu ver ficasse mais responsivo */
/* require './funcaomobile.php';

  $mobile = mobile();
  if ($mobile) {
  //header("Location: ./View/login-smartphone.php");
  include './View/login-smartphone.php';
  } else {
  //header("Location: ./View/login-desktop.php");
  include './View/login-desktop.php';
  }
  die(); */

/* Login do usuário */

include './Funcoes/funcoes_basicas.php';

$op = @ $_REQUEST['op'];

if (!isset($op)) {
    $op = 0;
}

if ($op == 1) {
    $email = @ $_REQUEST['email'];
    $senha = @ $_REQUEST['senha'];

    include './Funcoes/conecta.php';

    if (!mysqli_connect_errno()) {
        $query = "SELECT nome, id FROM Usuario WHERE email = '$email' AND senha = '$senha'";
        $select = mysqli_query($conexao, $query);
        $texto = $select;
        mostra_janela($texto);

        /* BUGUEI HAAARD AQUI.... SE ALGUÉM PUDER ME AJUDAR */
    } else {
        mostra_janela("Erro ao conectar com o Banco de Dados.\nTente novamente mais tarde!");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="./View/bibliotecas/css/reset.css">
        <link type="text/css" rel="stylesheet" href="./View/bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="./View/bibliotecas/css/style.css">
        <link type="text/css" rel="stylesheet" href="./View/bibliotecas/css/login-smart.css">
        <link type="text/css" rel="stylesheet" href="./View/bibliotecas/css/login-desk.css">
    </head>
    <body>
        <div class="visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2">
                        <form action="index.php" class="form-signin">
                            <center>
                                <h2 class="form-signin-heading">Login</h2>
                            </center>
                            <label for="inputEmail" class="sr-only">Endereço de email</label>
                            <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputPassword" class="sr-only">Senha</label>
                            <input type="password" id="senha" class="form-control" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Me lembre
                                </label>
                            </div>
                            <button class="btn btn-lg btn-default btn-block" type="submit">Entrar</button>
                            <div class="hidden-xs hidden-sm hidden-md hidden-lg">
                                <input id="op" name="op" value="1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=" visible-md visible-lg">
            <?php require './View/header-initial.php'; ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div id="cad" class="col-lg-6">
                        <h2>Cadastre-se!</h2>
                        <h5>Faça parte você também da maior rede colaborativa de alunos e professores do Brasil!</h5>
                        <div id="div-div-cad" class="bs-callout bs-callout-info container col-lg-12">
                            <div id="div-cad" class="input-group col-lg-12">
                                <input type="text" class="form-control" placeholder="Nome">
                                <input type="text" class="form-control" placeholder="CPF">
                                <input type="email" class="form-control" placeholder="E-mail">
                                <input type="password" class="form-control" placeholder="Senha">
                                <input type="password" class="form-control" placeholder="Confirmar senha">
                            </div>
                            <button type="submit" class="btn-default btn col-lg-12">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <a href="http://www.freepik.com"> Imagem de Creativeart / Freepik </a>
            </footer>
        </div>
        <script src="bibliotecas/js/jquery.js"></script>
        <script src="bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
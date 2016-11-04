<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="bibliotecas/css/style.css">
    </head>

    <body >

        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <form action="../View/Agenda/" class="form-signin">
                        <h2 class="form-signin-heading">Login</h2>
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
        <script src="bibliotecas/js/jquery.js"></script>
        <script src="bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>

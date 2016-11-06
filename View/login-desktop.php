<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="bibliotecas/css/style.css">
        
        <style>
            body
            {
                background-image: url("bibliotecas/img/tt.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
            }
            
            footer
            {
                padding-top: 55px;
                text-align: center;
            }
            
            footer a
            {
                color: #fff;
            }
            
            #cad
            {
                padding-top: 22px;
            }
            
            h2, h5
            {
                color: #ffffff;
            }
            
            #div-cad
            {
                padding-bottom: 20px;
            }
            
            #div-cad .form-control
            {
                height: 35px;
            }
            
            #div-div-cad .btn
            {
                height: 35px;
            }
            
            .input-group .form-control
            {
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>
        <?php require 'header-initial.php';?>
        
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
                            <input type="text" class="form-control" placeholder="E-mail">
                            <input type="text" class="form-control" placeholder="Senha">
                            <input type="text" class="form-control" placeholder="Confirmar senha">
                        </div>
                        <button type="submit" class="btn-default btn col-lg-12">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <a href="http://www.freepik.com"> Imagem de Creativeart / Freepik </a>
        </footer>
        <script src="bibliotecas/js/jquery.js"></script>
        <script src="bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>

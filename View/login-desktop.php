<?php $nome_tela = "Login Desktop"; ?>
<?php require_once '../config.php'; ?>
<?php require_once ROOT . "cabecalho.php"; ?>
<?php require 'header-initial.php'; ?>
<div id="alert">
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>
<div class="container">
    <div class="row">
        <div id="cad" class="col-sm-6 col-sm-offset-6">

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
<?php require ROOT . 'rodape.php'; ?>
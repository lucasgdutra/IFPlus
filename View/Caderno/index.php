<?php
$nome_tela = "Caderno";
require_once '../../config.php';
require_once ROOT . "cabecalho.php";
verificaUsuario();
require_once ROOT . 'View' . DS . 'navbar.php';
?>
<script src="//cdn.ckeditor.com/4.6.0/standard-all/ckeditor.js"></script>

<script type="text/javascript">
    $(function () {
        $("#pesquisaaula").keyup(function () {
            var index = $(this).parent().index();
            var nth = "#tabelaaula td:nth-child(" + (index + 1).toString() + ")";
            var valor = $(this).val().toUpperCase();
            $("#tabelaaula tbody tr").show();
            $(nth).each(function () {
                if ($(this).text().toUpperCase().indexOf(valor) < 0) {
                    $(this).parent().hide();
                }
            });
        });

        $("#pesquisaaula").blur(function () {
            $(this).val("");
        });
    });
</script>
<script type="text/javascript">
    function mostra_aula(id) {
        
        $.post('/Funcoes/Caderno/mostra_aula.php', {acao: 'incluir', id: id}, function (retorno) {
            $("#modalAula").modal({backdrop: 'static'});
            $("#conteudo-aula").html(retorno);
        });
    }
</script>
<div id="alert">
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>

<?php if (usuarioTipo() == "professor"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Caderno" . DS . "prof.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View" . DS . "Chat" . DS . 'barra-lateral.php'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (usuarioTipo() == "aluno"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Caderno" . DS . "aluno.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View" . DS . "Chat" . DS . 'barra-lateral.php'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php require ROOT . 'rodape.php'; ?>


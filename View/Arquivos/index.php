<?php
    $nome_tela = "Arquivos";
    require_once '../../config.php';
    require_once ROOT . "cabecalho.php";
    verificaUsuario();
    require_once ROOT . 'View' . DS . 'navbar.php';
    require_once ROOT . "Funcoes/Arquivo/basicas.php";
    require_once (ROOT . "Classes/chat.php");
    BD::conn();


    $op = @ $_REQUEST['op'];

    $nome = @ $_REQUEST['nome'];
    $desc = @ $_REQUEST['desc'];

    $agro1a = @ $_REQUEST['AGROPECUARIA1A'];
    $agro1b = @ $_REQUEST['AGROPECUARIA1B'];
    $agro2a = @ $_REQUEST['AGROPECUARIA2A'];
    $agro2b = @ $_REQUEST['AGROPECUARIA2B'];
    $agro3a = @ $_REQUEST['AGROPECUARIA3A'];
    $agro3b = @ $_REQUEST['AGROPECUARIA3B'];

    $info1 = @ $_REQUEST['INFORMATICA1C'];
    $info2 = @ $_REQUEST['INFORMATICA2C'];
    $info3 = @ $_REQUEST['INFORMATICA3C'];

    $meio1 = @ $_REQUEST['MEIOAMBIENTE1D'];
    $meio2 = @ $_REQUEST['MEIOAMBIENTE2D'];
    $meio3 = @ $_REQUEST['MEIOAMBIENTE3D'];

    $alim1 = @ $_REQUEST['ALIMENTOS1E'];
    $alim2 = @ $_REQUEST['ALIMENTOS2E'];
    $alim3 = @ $_REQUEST['ALIMENTOS3E'];

    echo $desc;

    if (!isset($op)) {
        $op = 0;
    }

    if (!isset($up)) {
        $up = 0;
    }

//     if ($op == 1) {
//         require_once (ROOT. "Funcoes/Arquivo/upload.php");
//         $up = upload($nome, $desc;
//     }
// ?>
<div id="alert">
    <?php mostraAlerta("success"); ?>
    <?php mostraAlerta("danger"); ?>
    <?php mostraAlerta("info"); ?>
    <?php mostraAlerta("warning"); ?>
</div>

<?php if (usuarioTipo() == "professor"): ?>
    <?php
$prof = id($_SESSION["usuario_logado"]);
$disc = disciplina($prof["id"]);
$grad = grade($disc["id_disciplina"]);
$query = BD::conn()->prepare("SELECT * FROM turma WHERE turma.grade_id = ?");
$query->execute(array($grad["id"]));
$result = $query->fetchAll();
$row = $query->rowCount();
if($row == 0)
{
    ?>

    <div class="col-xs-12">
        <h3>Desculpe, não encontramos turmas relacionadas ao Usuario <?php echo $_SESSION["usuario_logado"];?></h3>
        <h4>Contate o Administrador do sistema, o mais rapido possivel</h4>
    </div>

    <?php
}
else
{
?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Arquivos" . DS . "prof.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View" . DS . "Chat" . DS . 'barra-lateral.php'; ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php endif; ?>

<?php if (usuarioTipo() == "aluno"): ?>
    <div id="main" class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-10 no-padding">
                <?php require_once ROOT . "View" . DS . "Arquivos" . DS . "aluno.php"; ?>
            </div>
            <div class = "col-sm-3 col-md-2 hidden-xs no-padding">
                <?php require_once ROOT . "View" . DS . "Chat" . DS . "barra-lateral.php"; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php require ROOT . 'rodape.php'; ?>
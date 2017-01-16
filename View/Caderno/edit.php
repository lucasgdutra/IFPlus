<script src="validator.js"></script>
<?php
require_once('functions.php');
require_once '../../Funcoes/Caderno/banco-aula.php';
$id = $_GET['id'];
$aula = mostraAula($conexao, $id);
if ($aula == null) {
    ?>
    <div class = "bg-danger text-center">>

        <p>Não foi possível mostrar a aula</p>
    </div>
    <?php
} else {
    foreach ($aula as $aula) :
        $aulanumber = $aula->getNumero()
        ?>

        <form action="<?= BASEURL ?>Funcoes/Caderno/edita-aula.php" method="post">
            <!-- area de campos do form -->
            <hr />

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="hidden" name="id" value="<?=$aula->getId() ?>">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" value="<?=$aula->getTitulo() ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="numero">Numero</label>
                    <input type="number" class="form-control" name="numero" value="<?=$aulanumber?>" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <textarea class="form-control" name="conteudo" > <?= utf8_encode($aula->getConteudo()); ?></textarea>
                    <script>
                        CKEDITOR.replace('conteudo');
                    </script>
                    <input type="hidden" name="id_disciplina" value="<?= $id_disciplina ?>">
                </div>
            </div>
            <div id="actions" class="row">
                <div class="col-md-12">
                    <button id="enviaaula" type="submit" class="btn btn-default">Salvar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>

        <?php
    endforeach;
}
?>

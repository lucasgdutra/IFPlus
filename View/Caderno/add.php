<?php
require_once('functions.php');
$id_disciplina = $_POST['id'];
?>
<script src="validator.js"></script>
<?php include(HEADER_TEMPLATE); ?>
<script src="ckeditor/ckeditor.js"></script>
<div class="container">
    <h2>Nova Aula</h2>

    <form action="<?= BASEURL ?>Funcoes/Caderno/adiciona-aula.php" method="post">
        <!-- area de campos do form -->
        <hr />

        <div class="row">
            <div class="form-group col-md-6">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo">
            </div>

            <div class="form-group col-md-6">
                <label for="numero">Numero</label>
                <input type="number" class="form-control" name="numero" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea class="form-control" name="conteudo" aria-invalid="true" ></textarea>
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

</div>

<?php include(FOOTER_TEMPLATE); ?>
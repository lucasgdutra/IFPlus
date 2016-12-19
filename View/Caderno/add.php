<?php
require_once('functions.php');
?>

<?php include(HEADER_TEMPLATE); ?>
<script src="ckeditor/ckeditor.js"></script>
<div class="container">
    <h2>Nova Aula</h2>

    <form action="<?= BASEURL ?>Funcoes/Caderno/adiciona-aula.php" method="post">
        <!-- area de campos do form -->
        <hr />

        <div class="row">
            <div class="form-group col-md-6">
                <label for="campo1">Titulo</label>
                <input type="text" class="form-control" name="aula[titulo]" value="">
            </div>

            <div class="form-group col-md-6">
                <label for="campo2">Numero</label>
                <input type="number" class="form-control" name="aula[numero]" value="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea class="form-control" name="aula[conteudo]" ></textarea>
                <script>
                    CKEDITOR.replace('aula[conteudo]');
                </script>
                <input type="hidden" name="aula[Disciplina_id]" value="45">
            </div>
        </div>
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-default">Salvar</button>
                <a href="index.php" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>

</div>

<?php include(FOOTER_TEMPLATE); ?>
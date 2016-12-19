<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Aula</h2>

<form action="add.php" method="post">
    <!-- area de campos do form -->
    <hr />

    <div class="row">
        <div class="form-group col-md-6">
            <label for="campo1">Titulo</label>
            <input type="text" class="form-control" name="aula[titulo]" value="<?php echo $customer['city']; ?>">
        </div>

        <div class="form-group col-md-6">
            <label for="campo2">Numero</label>
            <input type="number" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <textarea class="form-control" name="aula[conteudo]" ><?php echo $customer['mobile']; ?></textarea>
            <script>
                CKEDITOR.replace('aula[conteudo]');
            </script>
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-default">Salvar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
</form>



<?php include(FOOTER_TEMPLATE); ?>
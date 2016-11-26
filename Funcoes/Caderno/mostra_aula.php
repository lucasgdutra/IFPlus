<?php
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<form id="frmFone" method="post" action="">
    <div class="tituloform"><?php echo $titulo; ?></div>
    <input type="hidden" name="tf_id" id="tf_id_fone" value="<?php echo $id; ?>">
    <input type="hidden" name="tf_acao" id="acao_fone" value="<?php echo $acao; ?>">
    <fieldset <?php echo $st_disabled; ?>> 

        <div class="row-fluid form-group" >
            <div id="vtipo" class="has-feedback span4">
                <label for="Titulo">Tipo Fone</label>
                <input type="text" name="tf_tipo" autofocus class="form-control input-sm" id="tipo" required value="<?php echo $tipo; ?>">
                <span id="spantipo" class="glyphicon form-control-feedback"></span>
            </div>

            <div id="vfone" class="has-feedback span4">
                <label for="Titulo">Número Fone</label>
                <input type="text"  name="tf_fone" class="form-control input-sm" id="fone" required value="<?php echo $fone; ?>">
                <span id="spanfone" class="glyphicon form-control-feedback"></span>
            </div>
            <div id="vcpf" class="has-feedback span4">
                <div id="voperadora" class="has-feedback">
                    <label for="Titulo">Operadora</label>
                    <input type="text" name="tf_operadora" class="form-control input-sm" id="operadora" value="<?php echo $operadora; ?>">
                    <span id="spanoperadora" class="glyphicon form-control-feedback"></span>
                </div>                                
            </div>
        </div>
        <div class="row-fluid ">
            <div class="span6">                    
                <label for="chkPrincpal">Marcar como Telefone Principal? </label>                 
                <input type="checkbox" name="st_principal" id="st_principal" <?php echo $st_marcado; ?>>
            </div>
        </div>

        <div id="vobservacoes" class="has-feedback row-fluid form-group">
            <label for="Titulo">Observações</label>
            <input type="text" name="tf_obs" autofocus class="form-control input-sm" id="observacoes" value="<?php echo $obs; ?>">
            <span id="spanobservacoes" class="glyphicon form-control-feedback"></span>
        </div>

    </fieldset>
    <div id="teste"></div>

    <div id="retorno4"></div>

    <div class="modal-footer">
        <button id="btnIncluirFone" name="btnSubmit" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"    ></span> Ok</button>                                                                 
        <a id="btnFecharFone" href="#" name="btnFechar" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>                                

    </div>    
</form>



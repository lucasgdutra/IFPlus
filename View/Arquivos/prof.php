<div  class="container-fluid">

    <div style=" padding: 0;" class="container-fluid">
        <div id="submenu" class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="col-xs-4 active">
                    <a href="#arquivos-send" aria-controls="arquivos-send" id="lnk-send" role="tab" data-toggle="tab">Enviados</a>
                </li>
                <li role="presentation" class="col-xs-4">
                    <a href="#arquivos-new" aria-controls="arquivos-new" role="tab" data-toggle="tab">Novo</a>
                </li>
                <li role="presentation" class="col-xs-4">
                    <a href="#arquivos-turm" aria-controls="arquivos-turm" role="tab" data-toggle="tab">Turmas</a>
                </li>
            </ul>
        </div>
        <div class="tab-content container">
            <div role="tabpanel" class="tab-pane active" id="arquivos-send">
                 <?php require_once ('enviados-prof.php'); ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="arquivos-new">
                 <?php require_once ('novo-prof.php'); ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="arquivos-turm">
                <?php require_once ('turm-prof.php'); ?>
            </div>
        </div>
    </div>
</div>

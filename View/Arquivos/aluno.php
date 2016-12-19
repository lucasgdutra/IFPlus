<div style="padding: 0" class="container-fluid">
    <div class="row">
        <div id="submenu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active col-xs-12 col-lg-12 col-md-12 col-sm-12">
                    <a class="disabled">Todos os Arquivos</a>
                </li>
            </ul>
        </div>
        <br>
        <div  class="container-fluid">
            <div style="padding-left: 15px; padding-right: 15px;" class="row">
                <div  class="container-fluid">
                    <div style="padding-left: 15px; padding-right: 15px;" class="row">
                        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="text" class="form-control" aria-label="Pesquisar" placeholder="Pesquisar Arquivo">
                            <div class="input-group-btn">
                                <botton type="button" class="btn btn-default" aria-label="Pesquisar">
                                    <span class="glyphicon glyphicon-search"></span>
                                </botton>
                            </div>
                        </div>
                        <?php require 'past.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


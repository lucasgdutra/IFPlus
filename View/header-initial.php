<style>
    .form-control
    {
        height: 30px;
        border-radius: 0px;
    }
    
    .btn
    {
        border-radius: 0px;
        height: 30px;
        padding: 0px 12px;
    }
    
    .btn-default
    {
        border-color: #e8c70c;
    }
</style>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header col-md-6">
                    <div >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><?php echo"IFPlus"; ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="form-login" class="navbar-form navbar-left" role="login">
                        <div id="div-inputs" class="form-group">
                          <input type="text" class="form-control" placeholder="E-mail ou CPF">
                          <input type="text" class="form-control" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-default">Entrar</button>
                    </form>
                </div>
            </div>
        </div>

    </nav>
</header>

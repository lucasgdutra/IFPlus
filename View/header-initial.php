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
                        
                        <a class="navbar-brand" href="#"><?php echo"IFPlus"; ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="form-login" action="index.php" class="navbar-form navbar-left" role="login">
                        <div id="div-inputs" class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail ou CPF">
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-default">Entrar</button>
                    </form>
                </div>
            </div>
        </div>

    </nav>
</header>

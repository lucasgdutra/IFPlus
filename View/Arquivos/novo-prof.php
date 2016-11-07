<style>
    #select-turm > div > div > h6
    {
        font-size: 11px;
        margin-bottom: 0px;
    }
    
    #button-arquivo
    {
        background-color: #ffffff;
    }
    
    #select-file
    {
        margin-bottom: 50px;
    }
    
    .arr
    {
        padding-left: 0px;
    }
    
    #select-turm
    {
        background-color: #fff;
        margin-bottom: 30px;
    }
    
    #div-button
    {
        /*position: ;*/
    }
    
    .btn
    {
        /*padding: 6px 0px;*/
    }
</style>
<div>
    <div id="select-file" class="row">
        <button type="submit" class="btn-default btn col-xs-6 col-sm-5 col-md-3 col-md-offset-2 col-lg-3">Escolher Arquivo</button>
        <button id="button-arquivo" class="btn btn-default col-xs-5 col-xs-offset-1 col-sm-4 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-1" type="submit">
            Arquivo
            <span class="glyphicon glyphicon-remove"></span>
        </button>
    </div>
    
    <div>
        <div class="row">
            <div id="select-turm" class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <h4>
                    Selecionar Turma
                </h4>
                <h6>
                    Selecione a turma para quem você deseja enviar o arquivo
                </h6>
                <div class="col-xs-3">
                    <h6>Primeiro ano</h6>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox">1° C
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox">1° D
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-xs-offset-1">
                    <h6>Segundo ano</h6>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox">2° C
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox">2° D
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-xs-offset-1">
                    <h6>Terceiro ano</h6>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox">3° C
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox">3° D
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-default btn col-xs-6 col-xs-offset-3 col-sm-7 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">Enviar</button> 
        </div>
    </div>
        
</div>
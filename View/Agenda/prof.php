<div style="padding: 0" class="container-fluid">
    <div class="row">
        <div id="submenu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active col-xs-4 col-lg-4 col-md-4 col-sm-4">
                    <a class="disabled">Novo</a>
                </li>
            </ul>
        </div>
        <br>
        <div  class="container-fluid">
            <div style="padding-left: 15px; padding-right: 15px;" class="row">
                <div  class="container-fluid">
                	<form class="form-horizontal" method="POST" action="insert_db.php">
                    <div style="padding-left: 15px; padding-right: 15px;" class="row">
                    	<p style="color: #AAAAAA;">Novo lembrete</p>
                        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="text" class="form-control" placeholder="Título" style="margin-bottom: 15px;" id="titulo" name="titulo">
                        </div>
                        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <textarea class="form-control" rows="3" placeholder="Descrição" style="margin-bottom: 15px;" id="descricao" name="descricao"></textarea>
                        </div>
                        <p style="color: #AAAAAA;">Horário</p>
                        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 10px;">
                        	<select class="form-control" id="hora" name="hora">
        						<option>Hora</option>
      								<?php 
      									for ($hora=1; $hora <= 24; $hora++) 
      									{ 
        									echo "<option>".$hora."</option>";
      									}
      								?>
      						</select>
      					</div>
      					<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 10px;">
      						<select class="form-control" id="minuto" name="minuto">
        						<option>Minuto</option>
      								<?php 
      									for ($minuto=0; $minuto <= 59; $minuto++) 
      									{ 
        									echo "<option>".$minuto."</option>";
      									}
      								?>
      						</select>
      					</div>
      					<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 10px;">
      						<select class="form-control" id="segundo" name="segundo">
        						<option>Segundo</option>
      								<?php 
      									for ($segundo=0; $segundo <= 59; $segundo++) 
      									{ 
        									echo "<option>".$segundo."</option>";
      									}
      								?>
      						</select>
      					</div>
      					<p style="color: #AAAAAA;">Data</p>
      					<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 10px;">
      						<select class="form-control" id="dia" name="dia">
        						<option>Dia</option>
      								<?php 
      									for ($dia=1; $dia <= 31; $dia++) 
      									{ 
        									echo "<option>".$dia."</option>";
      									}
      								?>
      						</select>
      					</div>
      					<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 10px;">
      						<select class="form-control" id="mes" name="mes">
        						<option>Mes</option>
      								<?php 
      									for ($mes=1; $mes <= 12; $mes++) 
      									{ 
        									echo "<option>".$mes."</option>";
      									}
      								?>
      						</select>
      					</div>
      					<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 15px;">
      						<select class="form-control" id="ano" name="ano">
        						<option>Ano</option>
      								<?php 
      									for ($ano=2016; $ano <= 2018; $ano++) 
      									{ 
        									echo "<option>".$ano."</option>";
      									}
      								?>
      						</select>
      					</div>
      					<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 15px;">
      						<select class="form-control" id="turma" name="turma">
        						<option>Turma</option>
        						<option>1A</option>
        						<option>1B</option>
        						<option>1C</option>
        						<option>1D</option>
        						<option>1E</option>
        						<option>2A</option>
        						<option>2B</option>
        						<option>2C</option>
        						<option>2D</option>
        						<option>2E</option>
        						<option>3A</option>
        						<option>3B</option>
        						<option>3C</option>
        						<option>3D</option>
        						<option>3E</option>
      						</select>
      					</div>
      					<div class="input-group-btn" style="padding-left: 50%; padding-right: 50%;">
      						<button type="submit" class="btn btn-default">Criar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
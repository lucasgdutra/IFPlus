<?php
	require_once '../../insert_db.php';
?>

<div style="padding: 0" class="container-fluid">
    <div class="row">
        <div id="submenu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="default col-xs-4 col-lg-4 col-md-4 col-sm-4">
                    <a class="disabled" href="index.php">Novo</a>
                </li>
                <li role="presentation" class="active col-xs-4 col-lg-4 col-md-4 col-sm-4">
                    <a class="disabled" href="todos.php">Todos</a>
                </li>
                <li role="presentation" class="default col-xs-4 col-lg-4 col-md-4 col-sm-4">
                    <a class="disabled" href="concluidos.php">Concluídos</a>
                </li>
            </ul>
        </div>
        <div  class="container-fluid">
            <div style="padding-left: 15px; padding-right: 15px;" class="row">
                <div  class="container-fluid">
          			<table class="table">
            			<thead>
              				<tr>
                				<th>Concluída</th>
                				<th>Nome</th>
                				<th>Data limite</th> 
                				<th>Hora limite</th>
                				<th>Ação</th>
              				</tr>
            			</thead>
            			<tbody>
            					<?php require_once 'show.php'; ?>
           				</tbody>
          			</table>
        		</div>
              </div>
        </div>
    </div>
</div>
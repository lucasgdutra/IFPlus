<?php	
	$consulta = "SELECT titulo, descricao, data, hora, concluida FROM `lembrete`";
	$resultados_lembretes = mysqli_query($conexao, $consulta);
	while($resultados_pesquisa = mysqli_fetch_assoc($resultados_lembretes))
	{ ?>
		<tr>
            <td><?php echo $resultados_pesquisa['concluida']; ?></td>
            <td><?php echo $resultados_pesquisa['titulo']; ?></td>
            <td><?php echo $resultados_pesquisa['data']; ?></td>
            <td><?php echo $resultados_pesquisa['hora']; ?></td>
            <td><button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#myModal">Ver detalhes</button></td>
        </tr>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <?php	} ?>
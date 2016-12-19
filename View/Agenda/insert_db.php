<?php
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	echo $titulo;
	echo $descricao;
	/*$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	$hora = $_POST['hora'];
	$minuto = $_POST['minuto'];
	$segundo = $_POST['segundo'];
	$array_data_lembrete = array($dia, $mes, $ano);
	$data_lembrete = implode('-', $array_data_lembrete);
	$array_hora_lembrete = array($hora, $minuto, $segundo);
	$hora_lembrete = implode(':', $array_hora_lembrete);
	if(empty($titulo))
		{
			echo "<div class=\"alert alert-warning\" role=\"alert\">
        			<strong>Erro!</strong> Preencha todos os campos.
      			</div>";
		}
	else
		{
			$cadastrar = "INSERT INTO lembrete (titulo, descricao, dia, mes, ano) VALUES ('$titulo','$dia', '$mes', '$ano')";
			if(mysql_query($cadastrar))
			{
				echo "<div class=\"alert alert-success\" role=\"alert\">
        				<strong>Feito!</strong> Está feito!
      				</div>";
			}
		}
	*/
?>
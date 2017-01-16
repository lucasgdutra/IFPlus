<?php


function busca_arquivo($turma, $professor_id)
{
	$query = BD::conn()->prepare("SELECT * FROM arquivo WHERE id_professor = {$professor_id} AND id_turma = {$turma['id']}");
	$query->execute();
	//$linha = $query->fetch(PDO::FETCH_ASSOC);
	$i = 0;
	while($linha = $query->fetch(PDO::FETCH_ASSOC)){
        $array[$i] = $linha;
        $i ++;
    }
	return $array;
}

/*function algum_arquivo($id)
{
	$query = BD::conn()->prepare("SELECT * FROM arquivo WHERE id_professor = {$professor_id}");
	$query->execute();
	$linha = $query->fetch(PDO::FETCH_ASSOC);
	if($linha == NULL)
	{
		return 0;
	}
	else
	{
		return 1;
	}
}*/

function busca_turma($turma)
{
	$query = BD::conn()->prepare("SELECT id FROM turma WHERE curso = '{$turma[0]}' AND anoatual = '{$turma[1]}'");
	$query->execute();
	$linha = $query->fetch(PDO::FETCH_ASSOC);
	$result = $linha["id"];
	return $result;
}

function checkDir($Dir) {
    if (file_exists($Dir) && is_dir($Dir)):
        return true;
    else:
        return false;
    endif;
}

function salva_arquivo($curso, $nome_final, $extensao, $id, $nome, $desc, $_UP, $file)
{
	print_r($cusro);
	foreach ($curso as $key) {
		print_r($key);		
		if($key)
		{
			$turma = explode("_", $key);
			$test = busca_turma($turma);

			$nome_final = $nome_final . $turma[1] . $turma[2] . "." . $extensao;
			$local = $_UP['pasta'] . $nome_final;

			if(file_exists($file))
			{
				copy($file, $local);
				unlink($file);
			}

			$query = BD::conn()->prepare("INSERT INTO `arquivo` (`id_professor`, `id_turma`, `nome`, `descricao`, `local`) VALUES ('{$id}', '{$test}', '{$nome}', '{$desc}', '{$local}')");
			$query->execute();
			$linha = $query->rowCount();
			print_r($query);
			// $t = array($id, $test, $nome, $desc, $local);
			// print_r($t);
			// print_r($turma);

			if($linha > 0)
			{
				$sucesso[] = $turma[1] . "°" . $turma[2] . " ";
			}
			else
			{
				echo "<script> alert('não foi possivel enviar tal arquivo para a turma {$turma[1]}°{$turma[2]}, tente novamente mais tarte');</script>";
				if(file_exists($file))
				{
					unlink($file);
				}
			}
		}
	}

	return $sucesso;
}

function ajuda_array($value)
{
	$teste = "";
	foreach ($value as $key) {
		$teste = $teste . $key;
	}
	return $teste;
}
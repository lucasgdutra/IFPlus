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
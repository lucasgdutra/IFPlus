<?php
require_once (ROOT . "Classes/chat.php");
BD::conn();

function id($email)
{
	$query = BD::conn()->prepare("SELECT usuario.id FROM usuario WHERE usuario.email = ?");
	$query->execute(array($email));
	$row = $query->fetch();

	$query2 = BD::conn()->prepare("SELECT professor.id FROM professor WHERE professor.id_usuario = ?");
	$query2->execute(array($row["id"]));
	$row2 = $query2->fetch();
	return $row2;
}


function disciplina($id_prof)
{
	//saber id da disciplina pelo professor
	$query = BD::conn()->prepare("SELECT ministra.id_disciplina FROM ministra WHERE  ministra.id_professor= ?");
    $query->execute(array($id_prof));
    $row = $query->fetch();
    return $row;
}

function grade($id_disciplina)
{
	//saber id da grade pela disciplina
	$query = BD::conn()->prepare("SELECT grade.id FROM grade WHERE grade.id_Disciplina = ?");
	$query->execute(array($id_disciplina));
	$row = $query->fetch();
	return $row;
}

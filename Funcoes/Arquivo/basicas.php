<?php
require_once (ROOT . "Classes/chat.php");


function id_prof($email)
{
	BD::conn();
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
	BD::conn();
	//saber id da disciplina pelo professor
	$query = BD::conn()->prepare("SELECT ministra.disciplina_id FROM ministra WHERE  ministra.professor_id = ?");
    $query->execute(array($id_prof));
    $row = $query->fetch();
    return $row;
}


function prof_turma($id_disciplina)
{
	BD::conn();
	//saber se o professor está relacionado à alguma turma 
    $query = BD::conn()->prepare("SELECT * FROM turma_has_disciplina WHERE turma_has_disciplina.disciplina_id = ?");
    $query->execute(array($id_disciplina));
    $result = $query->fetchAll();
    $row = $query->rowCount();
    return $row;
}
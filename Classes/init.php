<?php

$user = unserialize($_SESSION['user']);

if($user->tipo == "aluno")
	$turma = unserialize($_SESSION['turma']);
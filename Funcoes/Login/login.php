<?php

require_once '../../config.php';
require_once ("banco-usuario.php");
require_once("logica-usuario.php");
require_once ROOT . "Classes/BD.class.php";


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header('Location:' . BASEURL . '/index.php');
} else {
    $tipousuario = tipoUsuario($conexao, $usuario["id"]);

    // if ($tipousuario == "aluno") {
    //     $buscaturma = buscaTurma($conexao, $usuario["id"]);
    // } else if ($tipousuario == "professor") {
    //     $buscaprofessor = buscaProfessor($conexao, $usuario["id"]);
    // }

    // logaUsuario($usuario["email"]);
    // define_id($usuario["id"]);
    // defineTipo($tipousuario);
    // defineTurma($buscaturma['id']);
    // defineAno($buscaturma['anoatual']);
    // defineProfessor($buscaprofessor);
    session_start();
    $user = new Usuario($usuario["id"], $tipousuario);
    $_SESSION['user'] = serialize($user);


    if($tipousuario == "aluno")
    {
        $turma = new Turma($user);
        $_SESSION['turma'] = serialize($turma);
        // $turma->ver();
    }

    logaUsuario($user->email);
    header('Location:' . BASEURL . 'index.php');
}
die();

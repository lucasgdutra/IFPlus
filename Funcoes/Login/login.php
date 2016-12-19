<?php

require_once '../../config.php';
require_once ("banco-usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
echo $usuario;
if ($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header('Location:' . BASEURL . '/index.php');
} else {
    $tipousuario = tipoUsuario($conexao, $usuario["id"]);

    if ($tipousuario == "aluno") {
        $buscaturma = buscaTurma($conexao, $usuario["id"]);
    } else if ($tipousuario == "professor") {
        $buscaprofessor = buscaProfessor($conexao, $usuario["id"]);
    }

    logaUsuario($usuario["email"]);
    define_id($usuario["id"]);
    defineTipo($tipousuario);
    defineTurma($buscaturma);
    defineProfessor($buscaprofessor);
    header('Location:' . BASEURL . '/index.php');
}
die();

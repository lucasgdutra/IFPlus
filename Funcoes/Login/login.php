<?php

require_once ("banco-usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
echo $usuario;
if ($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header("Location: /index.php");
} else {
    $tipousuario = tipoUsuario($conexao, $usuario["id"]);
    
    if ($tipousuario == "aluno") {
        $buscaturma = buscaTurma($conexao, $usuario["id"]);
    }
    
    logaUsuario($usuario["email"]);
    defineTipo($tipousuario);
    defineTurma($buscaturma);
    header("Location: /index.php");
}
die();

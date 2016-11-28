<?php

session_start();

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
    if (!usuarioEstaLogado()) {
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
        header("Location: /index.php");
        die();
    }
}

function defineTipo($tipo) {
    $_SESSION["tipo_usuario"] = $tipo;
}

function usuarioTipo() {

    return $_SESSION["tipo_usuario"];
}

function defineTurma($turma) {
        $_SESSION["id_turma"] = $turma;
}

function alunoTurma() {

    return $_SESSION["id_turma"];
}

function logaUsuario($email) {
    $_SESSION["usuario_logado"] = $email;
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logout() {
    session_destroy();
    session_start();
}

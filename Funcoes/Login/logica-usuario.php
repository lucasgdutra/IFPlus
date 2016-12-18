<?php

require_once 'banco-usuario.php';
session_start();

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
    if (!usuarioEstaLogado()) {
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
        header('Location:' . BASEURL . 'index.php');
        die();
    }
}

/* logica chat */

function define_id($id) {
    $_SESSION["id_user"] = $row->id;
}

function id_logado() {

    return $_SESSION["id_user"];
}

function defineTipo($tipo) {
    $_SESSION["tipo_usuario"] = $tipo;
}

function usuarioTipo() {

    return $_SESSION["tipo_usuario"];
}

function defineAno($turma) {
    $_SESSION["ano_turma"] = $turma;
}

function anoTurma() {

    return $_SESSION["ano_turma"];
}

function defineTurma($turma) {
    $_SESSION["id_turma"] = $turma;
}

function idTurma() {

    return $_SESSION["id_turma"];
}

//variavel email ja tem
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

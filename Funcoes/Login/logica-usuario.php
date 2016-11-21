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

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function usuarioTipo() {
    return $_SESSION["tipo_usuario"];
}

function logaUsuario($email, $tipo) {
    $_SESSION["usuario_logado"] = $email;
    $_SESSION["tipo_usuario"] = $tipo;
}

function logout() {
    session_destroy();
    session_start();
}

<?php

require_once '../../cabecalho.php';
require_once ROOT . 'Funcoes' . DS . 'conecta.php';

function buscaUsuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from Usuario where email='{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function tipoUsuario($conexao, $id) {
    $query = "select * from Aluno where id_usuario='{$id}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    if ($usuario == NULL) {
        $tipoUsuario = professor;
    }
    else {
        $tipoUsuario = aluno;
    }
    return $tipoUsuario;
}

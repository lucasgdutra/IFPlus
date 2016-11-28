<?php

require_once '../../config.php';


function buscaUsuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from Usuario where email='{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function tipoUsuario($conexao, $id) {
    $query = "select * from Professor WHERE id_usuario='{$id}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    if ($usuario == NULL) {
        $tipoUsuario = aluno;
    }
    else {
        $tipoUsuario = professor;
    }
    return $tipoUsuario;
}

function buscaTurma($conexao, $id) {
    $query = "select Aluno.id_turma from Aluno WHERE aluno.id_usuario=2 ";
    $resultado = mysqli_query($conexao, $query);
    $id_turma = mysqli_fetch_assoc($resultado);
    return $id_turma['id_turma'];
}
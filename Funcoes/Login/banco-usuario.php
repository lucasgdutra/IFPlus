<?php

function buscaUsuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuario where email='{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function tipoUsuario($conexao, $id) {
    $query = "select * from professor WHERE id_usuario='{$id}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    if ($usuario == NULL) {
        $tipoUsuario = aluno;
    } else {
        $tipoUsuario = professor;
    }
    return $tipoUsuario;
}

function buscaTurma($conexao = null, $id = null) {
    $query = "select turma.* from aluno, turma WHERE aluno.id = {$id} and aluno.id_turma = turma.id";
    $resultado = mysqli_query($conexao, $query);
    $id_turma = mysqli_fetch_assoc($resultado);
    return $id_turma;
}

function buscaProfessor($conexao = null, $id = null) {
    $query = "select id from professor WHERE id_usuario = {$id} ";
    $resultado = mysqli_query($conexao, $query);
    $id_professor = mysqli_fetch_assoc($resultado);
    return $id_professor['id'];
}

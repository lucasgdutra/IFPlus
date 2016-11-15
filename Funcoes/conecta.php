<?php

$host = "hostinger";
$user = "u244818129_dipol";
$pass = "Olo()176";
$database = "u244818129_ifplu";

function conexao($host, $user, $pass, $database) {
    $conexao = mysqli_connect($host, $user, $pass, $database);
// Verifica se ocorreu algum erro
    if (mysqli_connect_error()) {
        die("Não foi possível conectar-se ao banco de dados: " . mysqli_connect_error());
        exit();
    }
    return $conexao;
}

$conexao = conexao($host, $user, $pass, $database);

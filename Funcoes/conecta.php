<?php

//
// $host = "mysql.hostinger.com.br";
// $user = "u244818129_dipol";
// $pass = "Olo()176";
// $database = "u244818129_ifplu";
//
$host = "localhost";
$user = "root";
$pass = "";
$database = "u244818129_ifplu";

define(HOST, "$host");
define(USER, "$user");
define(PASS, "$pass");
define(DB, "$database");

function conexao($host, $user, $pass, $database) {
    $conexao = mysqli_connect($host, $user, $pass, $database);
// Verifica se ocorreu algum erro
    if (mysqli_connect_error()) {
        die("Não foi possível conectar-se ao banco de dados: " . utf8_encode(mysqli_connect_error()));
        exit();
    }
    return $conexao;
}

$conexao = conexao(HOST, USER, PASS, DB);

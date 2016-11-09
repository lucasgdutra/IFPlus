<?php
include_once './conecta.php';



//função buscaaula
function buscaaula($conexao) {
    //definindo variavel como array
    $aulas = array();
    //executando query sql para buscar dados
    $resultado = mysqli_query($conexao, "select * from aula");
    //enquanto houver valores no banco:
    while ($aula = mysqli_fetch_assoc($resultado)) {
        //insira valores no vetor aulas
        array_push($aulas, $aula);
    }
    //função retorna array com todas as aulas
    return $aulas;
}

//para chamar função
$buscaaula = mostraaula($conexao);
foreach ($mostraaula as $aula) {
    echo $aula['titulo'] . "<br/>";
}
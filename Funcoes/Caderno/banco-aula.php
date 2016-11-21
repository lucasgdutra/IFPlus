<?php
function insereAula($conexao, $titulo, $preco) {
    $query = "insert into aula (titulo, numero, conteudo, id_grade) values ('{$tituloAula}', '{$numeroAula}', '{$conteudoAula}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}
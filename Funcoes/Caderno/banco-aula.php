<?php

require_once '../../config.php';

function listaDisciplinas($conexao, $Turma) {

    $disciplinas = array();
    $query = "select Disciplina.* from Disciplina, Grade, Turma WHERE "
            . "                                                 Grade.`id_Disciplina`=Disciplina.id and"
            . "                                                 Grade.ano = turma.anoatual and"
            . "                                                 grade.curso = turma.curso and"
            . "                                                 Turma.id = {$Turma}";
    $resultado = mysqli_query($conexao, $query);
    if ($resultado->num_rows == 0) {
        $disciplinas = "

        <div class=\"bg-danger text-center\">
            <p>Nenhuma disciplina para listar, ocorreu algum erro na conexao ou o administrador não adicionou as disciplinas de sua grade</p>
        </div>
        ";
        return $disciplinas;
    } else {
        while ($disciplina_array = mysqli_fetch_assoc($resultado)) {

            $id = $disciplina_array['id'];
            $nome = $disciplina_array['nome'];
            $ano = $disciplina_array['ano'];


            $disciplina = new Disciplina($id, $nome, $ano);


            array_push($disciplinas, $disciplina);
        }

        return $disciplinas;
    }
}

function listaAulas($conexao, $Disciplina) {

    $aulas = array();
    $query = "select Aula.* from Aula WHERE Aula.`id_Disciplina` = '{$Disciplina}'";

    $resultado = mysqli_query($conexao, $query);

    while ($aula_array = mysqli_fetch_assoc($resultado)) {

        $id = $aula_array['id'];
        $titulo = $aula_array['titulo'];
        $numero = $aula_array['numero'];
        $conteudo = $aula_array['conteudo'];
        $Disciplina = $aula_array['Disciplina'];

        $aula = new Aula($id, $titulo, $numero, $conteudo, $Disciplina);



        array_push($aulas, $aula);
    }

    return $aulas;
}

function mostraAula($conexao, $aula) {

    $aulas = array();
    $query = "select Aula.* from Aula WHERE Aula.id = '{$aula}'";

    $resultado = mysqli_query($conexao, $query);

    while ($aula_array = mysqli_fetch_assoc($resultado)) {

        $id = $aula_array['id'];
        $titulo = $aula_array['titulo'];
        $numero = $aula_array['numero'];
        $conteudo = $aula_array['conteudo'];
        $Disciplina = $aula_array['Disciplina'];

        $aula = new Aula($id, $titulo, $numero, $conteudo, $Disciplina);



        array_push($aulas, $aula);
    }

    return $aulas;
}

function insereProduto(
$conexao, Produto $produto) {

    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado)
                values ('{$produto->getNome()}', {$produto->getPreco()},
                '{$produto->getDescricao()}', {$produto->getCategoria()->getId()},
                {$produto->isUsado()})";

    return mysqli_query($conexao, $query);
}

function alteraProduto(
$conexao, Produto $produto) {

    $query = "update produtos set nome = '{$produto->getNome()}',
                preco = {$produto->getPreco()}, descricao = '{$produto->getDescricao()}',
                categoria_id = {$produto->getCategoria()->getId()},
                usado = {$produto->isUsado()} where id = '{$produto->getId()}'";

    return mysqli_query($conexao, $query);
}

function buscaProduto(
$conexao, $id) {

    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    $produto_buscado = mysqli_fetch_assoc($resultado);

    $categoria = new Categoria();
    $categoria->setId($produto_buscado['categoria_id']);

    $nome = $produto_buscado['nome'];
    $descricao = $produto_buscado['descricao'];
    $preco = $produto_buscado['preco'];
    $usado = $produto_buscado['usado'];

    $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
    $produto->setId($produto_buscado['id']);

    return $produto;
}

function removeProduto(
$conexao, $id) {

    $query = "delete from produtos where id = {$id}";

    return mysqli_query($conexao, $query);
}

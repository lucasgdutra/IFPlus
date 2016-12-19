<?php

require_once '../../config.php';

function listaDisciplinas($conexao, $idTurma, $anoTurma) {

    $disciplinas = array();
    $query = "select disciplina.* from disciplina, grade, turma WHERE "
            . "grade.`id_Disciplina`=disciplina.id and "
            . "grade.ano = turma.anoatual and "
            . "grade.curso = turma.curso and "
            . "turma.id = {$idTurma} union "
            . "select disciplina.* from disciplina, grade WHERE "
            . "grade.`id_Disciplina`=disciplina.id and "
            . "grade.ano = {$anoTurma} and grade.curso = 'MEDIO' ORDER by nome";
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

function listaDisciplinasprofessor($conexao, $professor) {

    $disciplinas = array();
    $query = "select disciplina.* from disciplina, ministra, professor WHERE "
            . "                                                 professor.id=ministra.id_professor and"
            . "                                                 ministra.id_disciplina = disciplina.id and"
            . "                                                 professor.id = {$professor}";
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
    $query = "select aula.* from aula WHERE aula.`id_Disciplina` = '{$Disciplina}'";


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

function insereAula($conexao, $titulo, $numero, $conteudo, $Disciplina) {

    $query = "INSERT INTO `aula` (`id`, `titulo`, `numero`, `conteudo`, `id_Disciplina`) VALUES (NULL, '{$titulo}', '{$numero}', '{$conteudo}', '{$Disciplina}');";
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

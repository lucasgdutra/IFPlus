<?php
require_once './conecta.php';

function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome, preco) values ('{$nome}', '{$preco}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

$turma = "2";

//função buscadisciplina
function buscadisciplina($conexao, $turma) {
//definindo variavel como array
    $disciplinas = array();
//executando query sql para buscar dados
    $resultado = mysqli_query($conexao, "select * from disciplinas");
//enquanto houver valores no banco:
    while ($disciplina = mysqli_fetch_assoc($resultado)) {
//insira valores no vetor aulas
        array_push($disciplinas, $disciplina);
    }
//função retorna array com todas as aulas
    return $disciplinas;
}

//para chamar função
$buscadisciplina = buscadisciplina($conexao, $turma);
foreach ($buscadisciplina as $disciplina) :
    ?>
    <div role="tabpanel" class="tab-pane active" id="caderno-disc">
        <a href="#" aria-controls="caderno-aula" class="list-group-item ">
            <h4>Matematica</h4>
        </a>
    </div>
    <?php
endforeach;

//função buscaaula
function mostraaula($conexao, $disciplina) {
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
$mostraaula = mostraaula($conexao);
foreach ($mostraaula as $aula) :
    ?>
    <div role = "tabpanel" class = "tab-pane" id = "caderno-aula">
        <div class = "list-group">
            <a href = "#" class = "list-group-item " data-toggle = "modal" data-target = "#AulaModal">
                <h4 class = "list-group-item-heading"><?php echo $disciplina['nome'] ?></h4>
                <p class = "list-group-item-text"><?php 'Aula' . $aula['numero'] . '|' . $aula['titulo'] ?></p>
            </a>
        </div>
    </div>
    <?php
endforeach;



//exemplo de array
$data = array(
    'nome' => 'Aluno3c',
);

function Inserir($tabela, array $data, $conexao) {
    $atributos = implode(",", array_keys($data));
    $valores = "'" . implode("','", $data) . "'";
    $query = "INSERT INTO {$tabela} ( {$atributos} ) VALUES ( {$valores} )";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
?>
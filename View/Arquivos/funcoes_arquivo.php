<?php

function mostra_janela($texto)
{
    echo "<script type=\"text/javascript\" language=\"javascript\">";
    echo "alert(\"$texto\");";
    echo "</script>";
}


function upload()
{

  $erro = "";
  // Pasta onde o arquivo vai ser salvo
  $_UP['pasta'] =  ROOT . 'uploads/';

  // Tamanho máximo do arquivo (em Bytes)
  $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
  //
  // Array com as extensões permitidas
  $_UP['extensoes'] = array('pdf', 'jpg');

  // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
  $_UP['renomeia'] = true;

  // Array com os tipos de erros de upload do PHP
  $_UP['erros'][0] = 'Não houve erro';
  $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
  $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
  $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
  $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

  // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
  if ($_FILES['arquivo']['error'] != 0) {
    $erro = $erro . "Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']];
    mostra_janela($erro);
    return 0; // Para a execução do script
  }

  // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

  // Faz a verificação da extensão do arquivo
  $tmp = explode('.', $_FILES['arquivo']['name']);
  $extensao = end($tmp);
  if (array_search($extensao, $_UP['extensoes']) === false) {
    $erro = $erro . " Por favor, envie arquivos com as seguintes extensões: pdf";
    mostra_janela($erro);
    return 0;
  }

  // Faz a verificação do tamanho do arquivo
  if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
    $erro = $erro . " O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    mostra_janela($erro);
    return 0;
  }

  // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta

  // Primeiro verifica se deve trocar o nome do arquivo
  if ($_UP['renomeia'] == true) {
    // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
    $nome_final = md5(time()).'.' . $extensao;
  } else {
    // Mantém o nome original do arquivo
    $nome_final = $_FILES['arquivo']['name'];
  }

  // Depois verifica se é possível mover o arquivo para a pasta escolhida
  if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
    // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
    
    mostra_janela("Upload efetuado com sucesso!");
    return 1;
    //echo '<a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
  } else {
    // Não foi possível fazer o upload, provavelmente a pasta está incorreta
    mostra_janela("Não foi possível enviar o arquivo, tente novamente");
    return 0;
  }
}
<?php
  require_once '../../config.php';
  require_once ROOT . "Funcoes/Arquivo/basicas.php";
  require_once( ROOT . "Funcoes/Arquivo/arquivo.func.php");
  require_once( ROOT . "Funcoes/funcoes_basicas.php");
  include ROOT . "Classes/init.php";
  BD::conn();

  $nome = @ $_REQUEST['nome'];

  $desc = @ $_REQUEST['desc'];

  $agroA[] = @ $_REQUEST['AGROPECUARIA1A'];
  $agroA[] = @ $_REQUEST['AGROPECUARIA2A'];
  $agroA[] = @ $_REQUEST['AGROPECUARIA3A'];

  $agroB[] = @ $_REQUEST['AGROPECUARIA1B'];
  $agroB[] = @ $_REQUEST['AGROPECUARIA2B'];
  $agroB[] = @ $_REQUEST['AGROPECUARIA3B'];

  $info[] = @ $_REQUEST['INFORMATICA1C'];
  $info[] = @ $_REQUEST['INFORMATICA2C'];
  $info[] = @ $_REQUEST['INFORMATICA3C'];

  $meio[] = @ $_REQUEST['MEIOAMBIENTE1D'];
  $meio[] = @ $_REQUEST['MEIOAMBIENTE2D'];
  $meio[] = @ $_REQUEST['MEIOAMBIENTE3D'];

  $alim[] = @ $_REQUEST['ALIMENTOS1E'];
  $alim[] = @ $_REQUEST['ALIMENTOS2E'];
  $alim[] = @ $_REQUEST['ALIMENTOS3E'];


  $id = $user->getId();
  $nome_prof = str_replace(" ", "_", $user->nome);
  $dir = ROOT . "uploads/" . $nome_prof . "/";

  if (!checkDir($dir)):
    mkdir($dir, 0777);
  endif;


  if(!$agroA)
    $agroA = NULL;
  if(!$agroB)
    $agroB = NULL;
  if(!$info)
    $info = NULL;
  if(!$meio)
    $meio = NULL;
  if(!$alim)
    $alim = NULL;
  if(!$desc)
    $alim = NULL;

  $erro = "";
  // Pasta onde o arquivo vai ser salvo
  $_UP['pasta'] =  $dir;

  // Tamanho máximo do arquivo (em Bytes)
  $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
  //
  // Array com as extensões permitidas
  $_UP['extensoes'] = array('pdf');

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
    $_SESSION['danger'] = $erro . "Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']];
    header('Location:' . BASEURL . 'View/Arquivos/'); 
  }

  // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

  // Faz a verificação da extensão do arquivo
  $tmp = explode('.', $_FILES['arquivo']['name']);
  $extensao = end($tmp);
  if (array_search($extensao, $_UP['extensoes']) === false) {
    $_SESSION['warning'] = $erro . " Por favor, envie arquivos com as seguintes extensões: pdf";
    header('Location:' . BASEURL . 'View/Arquivos/'); 
  }

  // Faz a verificação do tamanho do arquivo
  if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
    $_SESSION['warning'] = $erro . " O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    header('Location:' . BASEURL . 'View/Arquivos/');
  }

  // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta

  // Primeiro verifica se deve trocar o nome do arquivo
  if ($_UP['renomeia'] == true) {
    // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
    //$test = str_replace(" ", "_", $nome);
    $nome_final = md5($nome);

  } else {
    // Mantém o nome original do arquivo
    $nome_final = $_FILES['arquivo']['name'];
  }

  $file = $_UP['pasta'] . $nome_final . "." . $extensao;


  // Depois verifica se é possível mover o arquivo para a pasta escolhida
  if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final . "." . $extensao)) {
    $file = $_UP['pasta'] . $nome_final . "." . $extensao;
    // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
    $_SESSION['success'] = "Arquivo Enviado para as turmas: ";
    if($agroA)
      $mensagem = salva_arquivo($agroA, $nome_final, $extensao, $id, $nome, $desc, $_UP, $file);

    $msg = ajuda_array($mensagem);
    $_SESSION['success'] = $_SESSION['success'] . $msg;

    if($agroB)
      $mensagem = salva_arquivo($agroB, $nome_final, $extensao, $id, $nome, $desc, $_UP, $file);

    $msg = ajuda_array($mensagem);
    $_SESSION['success'] = $_SESSION['success'] . $msg;

    if($info)
      $mensagem = salva_arquivo($info, $nome_final, $extensao, $id, $nome, $desc, $_UP, $file);

    $msg = ajuda_array($mensagem);
    $_SESSION['success'] = $_SESSION['success'] . $msg;

    if($meio)
      $mensagem = salva_arquivo($meio, $nome_final, $extensao, $id, $nome, $desc, $_UP, $file);

    $msg = ajuda_array($mensagem);
    $_SESSION['success'] = $_SESSION['success'] . $msg;

    if($alim)
      $mensagem = salva_arquivo($alim, $nome_final, $extensao, $id, $nome, $desc, $_UP, $file);

    $msg = ajuda_array($mensagem);
    $_SESSION['success'] = $_SESSION['success'] . $msg;

  } else {
    // Não foi possível fazer o upload, provavelmente a pasta está incorreta
    unlink($_UP['pasta'] . $nome_final . $extensao);
    echo "<script> alert('Algo de errado ocorreu em nosso servidor, tente novamente mais tarte');</script>";
  }

  // header('Location:' . BASEURL . 'View/Arquivos/'); 
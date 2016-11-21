<?php
require_once '../../cabecalho.php';;
if(usuarioTipo()=="professor"){
    header("Location: /View/Caderno/prof.php");
} else {
    header("Location: /View/Caderno/aluno.php");
}
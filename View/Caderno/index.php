<?php

require_once '../../cabecalho.php';

if (usuarioTipo() == "professor"):
    require_once ROOT . "View" . DS . "Caderno" . DS . "prof.php";
endif;

if (usuarioTipo() == "aluno"):
    require_once ROOT . "View" . DS . "Caderno" . DS . "aluno.php";
endif;
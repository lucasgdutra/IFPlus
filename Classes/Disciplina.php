<?php

class Disciplina {

    private $id;
    private $nome;
    private $ano;

    function __construct($id, $nome, $ano) {
        $this->id = $id;
        $this->nome = $nome;
        $this->ano = $ano;
       
    }

    public function getId() {
        return $this->id;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function getAno() {
        return $this->ano;
    }
}

<?php

Class Aula {

    private $id;
    private $titulo;
    private $numero;
    private $conteudo;
    private $Disciplina;

    function __construct($titulo, $numero, $conteudo, $Disciplina) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->conteudo = $conteudo;
        $this->Disciplina = $Disciplina;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function getDisciplina() {
        return $this->Disciplina;
    }

}

?>
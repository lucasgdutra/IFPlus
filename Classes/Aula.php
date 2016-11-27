<?php

abstract class Aula {

    private $id;
    private $titulo;
    private $numero;
    private $conteudo;
    private $Disciplina;

    function __construct($titulo, $numero, $conteudo, Disciplina $Disciplina) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->conteudo = $conteudo;
        $this->Disciplina = $Disciplina;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function isUsado() {
        return $this->usado;
    }

    public function setUsado($usado) {
        $this->usado = $usado;
    }

    public function precoComDesconto($valor = 0.1) {

        if ($valor > 0 && $valor <= 0.5) {
            $this->preco -= $this->preco * $valor;
        }

        return $this->preco;
    }

    public function calculaImposto() {
        return $this->preco * 0.195;
    }

    public function temIsbn() {
        return $this instanceof Livro;
    }

    public function temTaxaImpressao() {
        return $this instanceof LivroFisico;
    }

    public function temWaterMark() {
        return $this instanceof Ebook;
    }

    abstract function atualizaBaseadoEm($params);

    function __toString() {
        return $this->nome . ": R$ " . $this->preco;
    }

}

?>
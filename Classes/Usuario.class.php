<?php

class Usuario {

    private $id_usuario; // Table Usuario

    private $id; // Table professor or Aluno

    private $cpf;

	// private $sessao;

    // private $senha;

    public $foto;

    public $email;

    public $nome;

    public $tipo;

    private function getall(){
		$query = BD::conn()->prepare("SELECT * FROM usuario WHERE id = ?");
		$query->execute(array($this->id_usuario));
		$row = $query->fetch(PDO::FETCH_ASSOC);

		$query_id_user = BD::conn()->prepare("SELECT * FROM {$this->tipo} WHERE id = ?");
		$query_id_user->execute(array($this->id_usuario));
		$row1 = $query_id_user->fetch(PDO::FETCH_ASSOC);

		$this->nome = $row["nome"];
		$this->cpf = $row["cpf"];
		$this->email = $row["email"];
		$this->foto = $row["foto"];
		$this->id = $row1["id"];
	}

    function __construct($id, $tipo) {
    	$this->id_usuario = $id;
    	$this->tipo = $tipo;

    	$this->getall();
    }

    public function getId() {
        return $this->id;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getCpf() {
        return $this->cpf;
    }

    function ver() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}

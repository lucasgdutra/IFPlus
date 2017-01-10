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

		$query_id_user = BD::conn()->prepare("SELECT * FROM {$this->tipo} WHERE id_usuario = ?");
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

    function getId_turma_prof(){
        if($this->tipo == "aluno")
            return;

        function getTurmas_prof($disciplina_id){
            $query = BD::conn()->prepare("SELECT * FROM turma_has_disciplina WHERE disciplina_id = {$disciplina_id}");
            $query->execute();
            $i = 1;
            while($linha = $query->fetch(PDO::FETCH_ASSOC)){
                $array[$i] = $linha["turma_id"];
                $i ++;
            }
            return $array;
        }

        function getAllturma_prof($turmas_id){

            foreach ($turmas_id as $id):
                $select = BD::conn()->prepare("SELECT anoatual, curso, sigla FROM turma WHERE id = {$id}");
                $select->execute();
                $linha = $select->fetch(PDO::FETCH_ASSOC);
                $array[] = $linha;
            endforeach;
                        
            return $array;
        }

        $query = BD::conn()->prepare("SELECT * FROM ministra WHERE professor_id = ?");
        $query->execute(array($this->id));
        $row = $query->fetch(PDO::FETCH_ASSOC);
        //print_r($row);

        $test = getTurmas_prof($row["disciplina_id"]);

        $return = getAllturma_prof($test);

        return $return;
    }



    function ver() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}

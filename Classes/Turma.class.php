<?php

class Turma {

    private $id;
    private $anofinal;
    private $anoatual;
    private $curso;
    private $aluno;


    private function setId()
    {
    	$query = BD::conn()->prepare("SELECT * FROM aluno WHERE id_usuario = ?");
		$query->execute(array($this->aluno->getId_usuario()));
		$row = $query->fetch(PDO::FETCH_ASSOC);

		$this->id = $row["id_turma"];
    }

    function __construct($aluno)
    {
		$this->aluno = (object) $aluno;

        if ($this->aluno->tipo == "professor")
        {
            $this->aluno = NULL;
            return "Tal objeto não é um aluno";
        }

		$this->setId();
    }

    function ver() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}

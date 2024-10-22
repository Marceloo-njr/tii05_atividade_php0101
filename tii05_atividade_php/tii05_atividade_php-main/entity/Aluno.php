<?php
class Aluno {
    private $matricula;
    private $nome;
    private $disciplinas = []; 
    
    public function __construct($matricula, $nome) {
        $this->matricula = $matricula;
        $this->nome = $nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDisciplinas() {
        return $this->disciplinas;
    }

    public function addDisciplina(Disciplina $disciplina) {
        $this->disciplinas[] = $disciplina; //
    }

    public function setDisciplinas(array $disciplinas) {
        $this->disciplinas = $disciplinas; 
    }

    
    public function clearDisciplinas() {
        $this->disciplinas = [];
    }
}

?>

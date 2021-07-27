<?php 

  class Tutor {
    
    public $nome;
    public $disciplina;
    public $nivel;
    public $valor;
    
    public function __construct(string $nomeA, string $disciplinaA, string $nivel,float $valorA){
      $this->nome = $nomeA;
      $this->disciplina = $disciplinaA;
      $this->nivel = $nivelA;
      $this->valor = $valorA;
    }
    
    public function getNome() {
     return $this->Nome;
    }

    public function setNome(string $nomeA) {
        $this->$nome = $nomeA;
    }
    
    public function getDisciplina() {
     return $this->disciplina;
    }

    public function setDisciplina(string $disciplinaA) {
        $this->disciplina = $disciplinaA;
    }
    
    public function getNivel() {
     return $this->nivel;
    }

    public function setNivel(string $nivelA) {
        $this->nivel = $nivelA;
    }

    public function getValor() {
     return $this->valor;
    }

    public function setValor(float $valorA) {
        $this->valor = $valorA;
    }

    public function AgendarAula() {
        
    }
    
    public function AgendarDisponibilidade() {
        
    }
    
    public function AgendarIndisponibilidade() {
        
    }

  }
  ?>
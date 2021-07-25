<?php 

  include './conteudo.php';

  class Avaliacao {
    
    public $nota;
    public $observacao;
    
    public function __construct(string $nota, float $observacao){
      $this->data = $nota;
      $this->link = $observacao;
    }

    public function getNota() {
     return $this->nota;
    }

    public function setNota(string $nota) {
        $this->nota = $nota;
    }

    public function getObservacao() {
        return $this->observacao;
       }
   
    public function setObservacao(float $observacao) {
        $this->observacao = $observacao;
    }
        
    }
   
  ?>

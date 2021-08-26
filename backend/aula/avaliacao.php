<?php 

  include './conteudo.php';

  class Avaliacao {
    
    public $nota;
    public $comentario;
    
    public function __construct(string $nota, string $comentario){
      $this->nota = $nota;
      $this->comentario = $comentario;
    }

    public function getNota() {
     return $this->nota;
    }

    public function setNota(string $nota) {
        $this->nota = $nota;
    }

    public function getComentario() {
        return $this->comentario;
       }
   
    public function setComentario(string $comentario) {
        $this->comentario = $comentario;
    }
        
    }
   
  ?>

<?php 

  include './conteudo.php';
  include './avaliacao.php';

  class Aula {
    
    public $data;
    public $link;
    public $conteudo;
    public $avaliacao;
    
    public function __construct(string $data, float $link, Conteudo $conteudo, Avaliacao $avaliacao){
      $this->data = $data;
      $this->link = $link;
      $this->conteudo = $conteudo;
      $this->avaliacao = $avaliacao;
    }

    public function getData() {
     return $this->data;
    }

    public function setData(string $data) {
        $this->data = $data;
    }

    public function getLink() {
        return $this->link;
       }
   
    public function setLink(float $link) {
        $this->link = $link;
    }

    public function getConteudo() {
        return $this->conteudo;
       }
   
    public function setConteudo(float $conteudo) {
        $this->conteudo = $conteudo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
       }
   
    public function setAvaliacao(float $avaliacao) {
        $this->avaliacao = $avaliacao;
    }
        
    }
   
  ?>

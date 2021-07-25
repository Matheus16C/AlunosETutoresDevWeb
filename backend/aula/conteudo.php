<?php 

  class Conteudo {
    
    public $valor;
    public $area;
    public $nivel;
    public $instituicao;
    
    public function __construct(string $valor, float $area, string $nivel, string $instituicao){
      $this->valor = $valor;
      $this->area = $area;
      $this->nivel = $nivel;
      $this->instituicao = $instituicao;
    }

    public function getValor() {
     return $this->valor;
    }

    public function setValor(string $valor) {
        $this->valor = $valor;
    }

    public function getArea() {
        return $this->area;
       }
   
    public function setArea(float $area) {
        $this->area = $area;
    }

    public function getNivel() {
        return $this->nivel;
       }
   
    public function setNivel(float $nivel) {
        $this->nivel = $nivel;
    }

    public function getInstituicao() {
        return $this->instituicao;
       }
   
    public function setInstituicao(float $instituicao) {
        $this->instituicao = $instituicao;
    }  
    
    }
   
  ?>

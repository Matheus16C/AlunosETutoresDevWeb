<?php 

  include './Usuario.php';

  class CarteiraVirtual {
    
    public $usuario;
    public $valorTotal;
    
    public function __construct(float $valorTotal){
      $this->valorTotal = $valorTotal;
    }

    public function getValorTotal() {
     return $this->valorTotal;
    }

    public function setValorTotal(float $valorTotal) {
        $this->valorTotal = $valorTotal;
    }

    public function depositar(float $valorTotal) {
     $this->valorTotal += $valorTotal;
   }

   public function pagar(float $valorTotal) {
    $this->valorTotal -= $valorTotal;
  }
   
  }
  ?>

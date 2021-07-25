<?php 

  include './Usuario.php';
  include './carteiraVirtual.php';

  class Transacao {
    
    public $tipo;
    public $valor;
    public $data;
    public $status;
    public $descricao;
    public $participante;
    public $carteira;
    
    public function __construct(string $tipo, float $valor, string $data, string $status, string $descricao, Usuario $participante, CarteiraVirtual $carteira){
      $this->tipo = $tipo;
      $this->valor = $valor;
      $this->data = $data;
      $this->status = $status;
      $this->descricao = $descricao;
      $this->participante = $participante;
      $this->carteira = $carteira;
    }

    public function getTipo() {
     return $this->tipo;
    }

    public function setTipo(string $tipo) {
        $this->tipo = $tipo;
    }

    public function getValor() {
        return $this->valor;
       }
   
       public function setValor(float $valor) {
           $this->valor = $valor;
       }

       public function getData() {
        return $this->data;
       }
   
       public function setData(string $data) {
           $this->data = $data;
       }

       public function getStatus() {
        return $this->status;
       }
   
       public function setStatus(string $status) {
           $this->status = $status;
       }

       public function getDescricao() {
        return $this->descricao;
       }
   
       public function setDescricao(string $descricao) {
           $this->descricao = $descricao;
       }

       public function getParticipante() {
        return $this->participante;
       }
   
       public function setParticipante(Usuario $participante) {
           $this->participante = $participante;
       }

       public function confirmaTransacao(Usuario $participante, CarteiraVirtual $carteira) {
        if ($this->valor > $this->carteira->getValorTotal()){
            print("Saldo indisponível!");
        }
        else{
            $this->carteira->pagar($this->valor);
            $this->setStatus("Confirmada");
            print("Transação confirmada!");
            }
        }
        
    }
   
  ?>

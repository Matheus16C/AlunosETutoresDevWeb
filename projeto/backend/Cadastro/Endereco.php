<?php

  class Endereco
  {
    private $cep;
    private $pais;
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
  

    public function __construct(string $cep, string $cidade, string $pais, string $estado, string $bairro, string $rua, int $numero){
      $this->cep = $cep;
      $this->cidade = $cidade;
      $this->pais = $pais;
      $this->estado = $estado;
      $this->bairro = $bairro;
      $this->rua = $rua;
      $this->numero = $numero;
    }
  
    public function getCep() {
      return $this->cep;
    }
    public function getCidade() {
      return $this->cidade;
    }
    public function getPais() {
      return $this->pais;
    }
    public function getEstado() {
      return $this->estado;
    }
    public function getBairro() {
      return $this->bairro;
    }
    public function getRua() {
      return $this->rua;
    }
    public function getNumero() {
      return $this->numero;
    }

    public function armazena($conexao){
      $querry = "insert into endereco  (cep, cidade, pais, estado, bairro, rua, numero) values ('$this->cep','$this->cidade','$this->pais','$this->estado','$this->bairro','$this->rua',$this->numero);";
      $result = pg_query($conexao, $querry);
      
      if  (!$result) {
        echo "query did not execute";
        exit;
      }
      
      $querry = "select endereco_id from endereco  where cep = '$this->cep' and cidade = '$this->cidade' and pais = '$this->pais' and estado = '$this->estado' and bairro ='$this->bairro' and rua = '$this->rua' and numero = $this->numero;";
      $result = pg_query($conexao, $querry);
      if  (!$result) {
        echo "query did not execute";
        exit;
      }
      $rs = pg_fetch_assoc($result);
      if (!$rs) {
        return "ERROR";
        
      }
      return $rs['endereco_id'];
    }
  }
?>
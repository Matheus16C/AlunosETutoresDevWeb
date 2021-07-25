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
  

    public function __constructor(string $cep, string $cidade, string $pais, string $estado, string $bairro, string $rua, int $numero){
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
  }
?>
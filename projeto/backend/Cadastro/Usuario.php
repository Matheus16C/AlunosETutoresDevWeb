<?php 

  include '../../database/conexao.php';

  class Usuario {
    
    public $nome;
    public $cpf;
    public $dataNascimento;
    public $genero;
    public $email;
    public $senha;
    public $formacao;
    
    public function __construct(string $nome, string $cpf, string $dataNascimento, string $genero, string $email, string $senha, string $formacao){
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->dataNascimento = $dataNascimento;
      $this->email = $email;
      $this->genero = $genero;
      $this->senha = $senha;
      $this->formacao = $formacao;
    }

    public function getNome() {
     return $this->nome;
    }
    public function getCpf() {
      return $this->cpf;
   }
    public function getEmail() {
      return $this->email;
    }
    public function getSenha() {
      return $this->senha;
    }
    public function getGenero() {
      return $this->genero;
     }
    public function getDataNascimento() {
      return $this->dataNascimento;
    }
    public function getFormacao() {
      return $this->formacao;
    }
    public function armazena($conexao, $codigo_end){

      $querry = "insert into usuario (nome, cpf, dataNascimento, genero, email, senha, endereco, tipo, formacao, foto) VALUES ('$this->nome','$this->cpf','$this->dataNascimento','$this->genero','$this->email','$this->senha', $codigo_end, 1, '$this->formacao', 'assets/avatar_aluno.jpg');";
      $result = pg_query($conexao, $querry);
      
      if  (!$result) {
        echo "query did not execute";
        exit;
      }
      
      $querry = "select usuario_id from usuario  where cpf = '$this->cpf'";
      $result = pg_query($conexao, $querry);
      if  (!$result) {
        echo "query did not execute";
        exit;
      }
      $rs = pg_fetch_assoc($result);
      if (!$rs) {
        return "ERROR";
        
      }
      return $rs['usuario_id'];
    }
  }
?>
<?php 

  include './Endereco.php';
  include './Formacao.php';

  class Usuario {
    
    public $nome;
    public $cpf;
    public $dataNascimento;
    public $genero;
    public $email;
    public $senha;
    public $endereco;
    public $formacao;
    
    public function __construct(string $nome, string $cpf, string $dataNascimento, string $genero, string $email, string $senha, Endereco $endereco, Formacao $formacao){
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->dataNascimento = $dataNascimento;
      $this->email = $email;
      $this->genero = $genero;
      $this->senha = $senha;
      $this->endereco = $endereco;
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
    public function getDataNascimento() {
      return $this->dataNascimento;
    }
    public function getEndereco() {
      return $this->endereco;
    }
    public function getFormacao() {
      return $this->formacao;
    }
    public function armazena($conexao){
      $querry = "insert into endereco  (cep, cidade, pais, estado, bairro, rua, numero) values (".$this->endereco->getCep().",".$this->endereco->getCidade().",".$this->endereco->getPais().",".$this->endereco->getEstado().",".$this->endereco->getBairro().",".$this->endereco->getRua().",".$this->endereco->getNumero().");";
      $res = pg_query($conexao, $querry);
      if(!$res){
        echo "Não foi possivel estabelecer conexão com o banco";
        exit;
      }
      if(pg_num_rows($res)==0){
        echo "0 records";
      }
      else{
        $row = pg_fetch_array($res);
        $codigo_end = $row[0];
      }
      
      $querry = "insert into usuario (nome, cpf, data_nascimento, genero, email, senha, endereco) VALUES (".$this->nome.",".$this->cpf.",".$this->dataNascimento.",".$this->genero.",".$this->email.",".$this->senha.",".$codigo_end.");";
      $res = pg_query($conexao, $querry);
      
      if(!$res){
        echo "Não foi possivel estabelecer conexão com o banco";
        exit;
      }
      if(pg_num_rows($res)==0){
        echo "0 records";
      }
      else{
        $row = pg_fetch_array($res);
        $codigo_usu = $row[0];
      }
      $querry = "insert into formacao (nivel, disciplina, cod_usu) values (".$this->formacao->getNivelInteresse().",".$this->formacao->getDiscInteresse().",".$codigo_usu.");";
      $res = pg_query($conexao, $querry);
      
      if(!$res){
        echo "Não foi possivel estabelecer conexão com o banco";
        exit;
      }
      else{
        "Inserção bem sucedida!";
      }
    }
  }
?>
<?php 

include '../../database/conexao.php';

  class AulaColetiva{

    private $data;
    private $link;
    private $conteudo;
    private $duracao;
    private $descricao;

    public function __construct(string $data, string $link, int $conteudo, string $duracao, string $descricao){
      $this->data = $data;
      $this->link = $link;
      $this->conteudo = $conteudo;
      $this->duracao = $duracao;
      $this->descricao = $descricao;
    }

    public function getData() {
      return $this->data;
     }
 
     public function getLink() {
         return $this->link;
        }
 
     public function getConteudo() {
         return $this->conteudo;
        }

     public function getDuracao() {
      return $this->duracao;
     }

  public function getDescricao() {
    return $this->descricao;
   }
    
    public function armazena($conexao){
      $querry = "insert into aulacoletiva  (dataaulacoletiva, link, conteudo, duracao, descricao, status) values ('$this->data','$this->link','$this->conteudo','$this->duracao','$this->descricao', 1);";
      $result = pg_query($conexao, $querry);
      
      if  (!$result) {
        echo "query did not execute";
        exit;
      }
      
    }
        
    }
   
  ?>

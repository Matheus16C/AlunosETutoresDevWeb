
<?php

  include '../../../database/conexao.php';

  class Avaliacao
  {
    private $nota;
    private $comentario;
    private $aula_id;
  

    public function __construct(string $nota, string $comentario){
      $this->nota = $nota;
      $this->comentario = $comentario;
    }

    public function getComentario() {
      return $this->comentario;
    }

    public function getNota() {
      return $this->getnota;
    }

    public function armazena($conexao, $aula_id){
      $querry = "insert into avaliacao_aulaindividual (comentario, nota, aula) values ('$this->comentario', '$this->nota', $aula_id);";
      $res = pg_query($conexao, $querry);
      
      if(!$res){
        echo "Não foi possivel estabelecer conexão com o banco";
        exit;
      }
      else{
        echo "Inserção bem sucedida!";
      }
    }
  }

?>
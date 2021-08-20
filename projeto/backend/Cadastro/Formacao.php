
<?php
  class Formacao
  {
    private $nivelInteresse;
    private $discInteresse;
  

    public function __construct(string $nivelInteresse, string $discInteresse){
      $this->nivelInteresse = $nivelInteresse;
      $this->discInteresse = $discInteresse;
    
    }
    public function getNivelInteresse() {
      return $this->nivelInteresse;
    }
    public function getDiscInteresse() {
      return $this->getDiscInteresse;
    }
    public function armazena($conexao, $codigo_usu){
      $querry = "insert into DISCINTERESSE (nivel, disciplina, usuario) values ('$this->nivelInteresse','$this->discInteresse', $codigo_usu);";
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
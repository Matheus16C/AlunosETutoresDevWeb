
<?php
  class Formacao
  {
    private $formacao;
    private $nivelInteresse;
    private $discInteresse;
  

    public function __constructor(string $formacao, string $nivelInteresse, array $discInteresse){
      $this->formacao = $formacao;
      $this->nivelInteresse = $nivelInteresse;
      $this->discInteresse = $discInteresse;
    
    }
  
    public function getFormacao() {
      return $this->formacao;
    }
    public function getNivelInteresse() {
      return $this->nivelInteresse;
    }
    public function getDiscInteresse() {
      return $this->getDiscInteresse;
    }
  }

?>
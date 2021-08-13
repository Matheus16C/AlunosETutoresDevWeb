<?php
    class Login
    {
        private $login; 
        private $senha;
       
        public function getLogin(){
            return $this->login;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        
        public function setLogin(string $_login) {
            $this->login = $_login;
        }
        
        public function setSenha(string $_senha) {
            $this->senha = $_senha;
        }
    }
?>

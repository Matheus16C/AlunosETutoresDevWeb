<?php
    class Login{
        private $login = $_POST['login'];
        private $entrar = $_POST['entrar'];
        private $senha = md5($_POST['senha']);
        private $connect = pg_connect('ec2-3-226-134-153.compute-1.amazonaws.com','tzxplhjaunfrsc','5eba1c96de997c5cc3cdc2205d38eaf7bbf2f3183715c56ed9c4f5d4a02e35d6');
        private $db = pg_select('d5ol6e2dnva67i');
        //AINDA FALTA FAZER TABELAS DO LOGIN
        private $query_select = "SELECT login FROM usuarios WHERE login = '$login'";

        public function login() {
        if (isset($entrar)) {

            $verifica = mysql_query("SELECT * FROM usuarios WHERE login =
            '$login' AND senha = '$senha'") or die("erro ao selecionar");
            if (pg_num_rows($verifica)<=0){

                echo "Falha no login";
                die();
            }else{
                setcookie("login",$login);
                header("Location:index.php");
            }
        }
        }
    }
?>
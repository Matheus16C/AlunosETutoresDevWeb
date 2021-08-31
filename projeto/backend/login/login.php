<?php
    include '../../database/conexao.php';
    session_start();
    if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
        $_SESSION['loginError'] =' Preencha os campos';
        header("Location: ..\../frontend\login\PagLogin.php"); exit;
    }

    $login = $_POST['login'];

    $senha = $_POST['senha']; 
  

    $sql = "select tipo, usuario_id, nome from usuario where '$login' = email and '$senha' = senha ";
    $query = pg_query($conexao, $sql);
    if  (!$query)
    {
        
        header("Location: ..\../frontend/login/PagLogin.php"); exit;
       
    }
    $rs = pg_fetch_assoc($query);
    if (!$rs) {
        $_SESSION['loginError'] = 'Falha no login';
        header("Location: ..\../frontend\login\PagLogin.php"); exit;
    }
    if (!isset($_SESSION)) session_start();


    $_SESSION['UsuarioID'] = $rs['usuario_id'];
    $_SESSION['UsuarioNome'] = $rs['nome'];
    $_SESSION['UsuarioTipo'] = $rs['tipo'];

    if( $_SESSION['UsuarioTipo'] == 1){
        //ALUNO
        header("Location: ..\../frontend\Aluno\PaginaInicial/index.php"); exit;
        
    }else{
        header("Location: ..\../frontend\Tutor\PaginaInicial/index.php"); exit;
    }
   

  ?>
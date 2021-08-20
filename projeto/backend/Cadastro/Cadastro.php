<?php
  include './Usuario.php';
  include './Endereco.php';
  include './Formacao.php';


  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $nomeCompleto = $_POST["nome"] . " " . $_POST["sobrenome"];
  $cpf = $_POST["cpf"];
  $genero = $_POST["genero"];
  $dataNascimento = $_POST["datanascimento"];
  $cep = $_POST["cep"];
  $pais = $_POST["pais"];
  $estado = $_POST["estado"];
  $cidade = $_POST["cidade"];
  $bairro = $_POST["bairro"];
  $rua = $_POST["rua"];
  $numero = $_POST["numero"];
  $formacao = $_POST["formacao"];
  $nivelInteresse = $_POST["nivel"];
  $discInteresse = $_POST["discp"];

  $infoEndereco = new Endereco($cep, $cidade, $pais, $estado, $bairro, $rua, $numero);
  $infoFormacao = new Formacao($nivelInteresse, $discInteresse);
  $usuario = new Usuario($nomeCompleto, $cpf, $dataNascimento, $genero, $email, $senha, $formacao);
  
  $codigo_end = $infoEndereco->armazena($conexao);
  if($codigo_end != "ERROR"){
    $codigo_usu = $usuario->armazena($conexao, $codigo_end);
    if($codigo_end != "ERROR"){
      $infoFormacao->armazena($conexao, $codigo_usu);
    }
  }
  
?>
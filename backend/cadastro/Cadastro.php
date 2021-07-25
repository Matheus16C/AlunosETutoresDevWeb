<?php
  include '../banco/conexao.php';
  include './Usuario.php';


  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $nomeCompleto = $_POST["nome"] + " " + $_POST["sobrenome"];
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
  $infoFormacao = new Formacao($formacao, $nivelInteresse, $discInteresse);
  $usuario = new Usuario($nomeCompleto, $cpf, $dataNascimento, $genero, $email, $senha, $infoEndereco, $infoFormacao);
  $usuario->armazena($conexao);
?>
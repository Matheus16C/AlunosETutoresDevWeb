<?php
  include 'aulaColetiva.php';

  /* include './Usuario.php';
  include './Endereco.php';
  include './Formacao.php'; */

  $conteudo = $_POST["conteudo"];
  $descricao = $_POST["descricao"];
  $data = $_POST["data"] ." ". $_POST["hora"];
  /* $hora = $_POST["hora"]; */
  $duracao = $_POST["duracao"];
  $url = $_POST["url"];


  /* $email = $_POST["email"];
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
  $discInteresse = $_POST["discp"]; */

  $AulaColetiva = new AulaColetiva($data, $url, $conteudo, $duracao, $descricao);

  /* $infoEndereco = new Endereco($cep, $cidade, $pais, $estado, $bairro, $rua, $numero);
  $infoFormacao = new Formacao($nivelInteresse, $discInteresse);
  $usuario = new Usuario($nomeCompleto, $cpf, $dataNascimento, $genero, $email, $senha, $formacao); */
  
  $codigo_end = $AulaColetiva->armazena($conexao);
    
?>
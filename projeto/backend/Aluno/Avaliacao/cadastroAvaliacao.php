<?php
  include './avaliacao.php';
  include '../../../database/conexao.php';

  $comentario = $_POST["comentario"];
  $nota = $_POST["nota"];

  $infoAvaliacao = new Avaliacao($nota, $comentario);

  $infoAvaliacao->armazena($conexao, 1);
  
?>
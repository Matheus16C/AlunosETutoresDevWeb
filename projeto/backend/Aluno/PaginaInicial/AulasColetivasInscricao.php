<?php
  if (!isset($_SESSION)) session_start();
  include '../../../database/conexao.php';

  $id=$_SESSION['UsuarioID'];
  $result= pg_query($conexao, "SELECT aulaindividual.aulaindividual_id as aula_id, usuario.nome as tutor, aulaindividual.dataaulaindividual as dataaula, 
  aulaindividual.comentario as comentario, conteudo.area_dominio as area, aulaindividual.duracao as duracao from aulaindividual 
  inner join conteudo on conteudo.conteudo_id = aulaindividual.conteudo
  inner join usuario on usuario.usuario_id = conteudo.tutor_id
  where aulaindividual.aluno = $id and aulaindividual.status = 2;");

  
?>
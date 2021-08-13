<?php

  include '../../../database/conexao.php';

  $result= pg_query($conexao, "SELECT nome, foto from usuario where usuario_id = 1");

  if  (!$result) {
    echo "query did not execute";
    exit;
  }

  $tutor=pg_fetch_assoc($result);

  $nome = explode(" ",$tutor['nome']);

  $result= pg_query($conexao, "SELECT aulaindividual.aulaindividual_id as aula_id, usuario.nome as aluno, aulaindividual.dataaulaindividual as dataaula, 
  aulaindividual.comentario as comentario, conteudo.area_dominio as area, aulaindividual.duracao as duracao from aulaindividual inner join 
  usuario on usuario.usuario_id = aulaindividual.aluno inner join conteudo on conteudo.conteudo_id = aulaindividual.conteudo 
  where conteudo.tutor_id = 1 and aulaindividual.status = 2;");

  if  (!$result) {
    echo "query did not execute";
    exit;
  }
  $rs = pg_fetch_assoc($result);
  if (!$rs) {
    echo "Nenhuma aula para aprovação";
    
  }
  $cont=1
  
?>
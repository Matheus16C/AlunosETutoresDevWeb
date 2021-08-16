<?php

  include '../../../database/conexao.php';

  $result= pg_query($conexao, "SELECT nome, foto from usuario where usuario_id = 2");

  if  (!$result) {
    echo "query did not execute";
    exit;
  }

  $aluno=pg_fetch_assoc($result);

  $nome = explode(" ",$aluno['nome']);

  $result= pg_query($conexao, "SELECT aulaindividual.aulaindividual_id as aula_id, usuario.nome as tutor, aulaindividual.dataaulaindividual as dataaula, 
  aulaindividual.comentario as comentario, conteudo.area_dominio as area, aulaindividual.duracao as duracao from aulaindividual 
  inner join conteudo on conteudo.conteudo_id = aulaindividual.conteudo
  inner join usuario on usuario.usuario_id = conteudo.tutor_id
  where aulaindividual.aluno = 2 and aulaindividual.status = 2;");

  if  (!$result) {
    echo "query did not execute";
    exit;
  }
  $rs = pg_fetch_assoc($result);
  if (!$rs) {
    echo "Nenhuma aula coletiva disponível";
    
  }
  $cont=1

  
?>
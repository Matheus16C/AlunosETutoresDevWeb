<?php

  include '../../../database/conexao.php';

  $result= pg_query($conexao, "SELECT nome, foto from usuario where usuario_id = 1");

  if  (!$result) {
    echo "query did not execute";
    exit;
  }

  $tutor=pg_fetch_assoc($result);

  $nome = explode(" ",$tutor['nome']);

  $result= pg_query($conexao, "SELECT aulacoletiva.aulacoletiva_id as aula_id, aulacoletiva.dataaulacoletiva as dataaula, 
  aulacoletiva.descricao as descricao, conteudo.area_dominio as area, aulacoletiva.duracao as duracao, count(alunos_aulacoletiva.aulacoletiva) 
  as qtd_alunos from aulacoletiva inner join alunos_aulacoletiva on alunos_aulacoletiva.aulacoletiva = aulacoletiva.aulacoletiva_id 
  inner join conteudo on conteudo.conteudo_id = aulacoletiva.conteudo where conteudo.tutor_id = 1 and aulacoletiva.status = 1
  group by aulacoletiva.aulacoletiva_id, conteudo.area_dominio;");

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
<?php
  if (!isset($_SESSION)) session_start();
  include '../../../database/conexao.php';

  $id=$_SESSION['UsuarioID'];
 
  $result= pg_query($conexao, "SELECT aulacoletiva.aulacoletiva_id as aula_id, usuario.nome as tutor, aulacoletiva.dataaulacoletiva as dataaula, 
  aulacoletiva.descricao as descricao, conteudo.area_dominio as area, aulacoletiva.duracao as duracao, count(alunos_aulacoletiva.aulacoletiva) 
  as qtd_alunos from aulacoletiva left join alunos_aulacoletiva on alunos_aulacoletiva.aulacoletiva = aulacoletiva.aulacoletiva_id 
  inner join conteudo on conteudo.conteudo_id = aulacoletiva.conteudo inner join usuario on usuario.usuario_id = conteudo.tutor_id where aulacoletiva.status = 1
  group by aulacoletiva.aulacoletiva_id, conteudo.area_dominio, usuario.nome;");

  
?>
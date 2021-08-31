<?php
  if (!isset($_SESSION)) session_start();
  include '../../../database/conexao.php';

  $id=$_SESSION['UsuarioID'];
  $result= pg_query($conexao, "SELECT aulaindividual.aulaindividual_id as aula_id, usuario.nome as aluno, aulaindividual.dataaulaindividual as dataaula, 
  aulaindividual.comentario as comentario, conteudo.area_dominio as area, aulaindividual.duracao as duracao from aulaindividual inner join 
  usuario on usuario.usuario_id = aulaindividual.aluno inner join conteudo on conteudo.conteudo_id = aulaindividual.conteudo 
  where conteudo.tutor_id =  and aulaindividual.status = 1;");

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
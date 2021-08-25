<?php
    include '../../database/conexao.php';
    include 'AgendaAulaIndividual.php';
    
    $tutor = $_POST['tutor']; //ID
    $aluno= $_POST['aluno']; //ID
    $conteudo= $_POST['conteudo']; //ID
    $data=$_POST['data'];
    $duracao=$_POST['duracao'];
    $horarioDisp= $_POST['horario'];
    $comentario = $_POST['obs'] ;
    $link = $_POST['link'];

    $objAulaIndividual = new AgendaAulaIndividual($tutor, $aluno, $conteudo, $data, $duracao, $horarioDisp, $comentario, $link);

    $objAulaIndividual->armazenaAulaIndividual($conexao);
?>
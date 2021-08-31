<?php

    include '../../../database/conexao.php';

   
    //Buscando dados no banco de dados informações do professores e disciplinas
    $result= pg_query($conexao, "select u.nome, c.area_dominio, c.nivel, c.valor from conteudo c inner join usuario u on u.usuario_id = c.tutor_id;");

    if  (!$result) {
        echo "query did not execute";
        exit;
    }
    $rs = pg_fetch_assoc($result);
    if (!$rs) {
    echo "Nenhuma aula para aprovação";
        
    }
    $cont=1;


?>
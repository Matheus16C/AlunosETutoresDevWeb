<?php
class AgendaAulaIndividual{

    public $tutor; //ID
    public $aluno; //ID
    public $conteudo; //ID
    public $data;
    public $duracao;
    public $horarioDisp;
    public $comentario;
    public $link;

    public function __construct($tutor, $aluno, $conteudo, $data, $duracao, $horarioDisp, $comentario, $link)
    {
            $this->tutor = $tutor;
            $this->aluno = $aluno;
            $this->conteudo=$conteudo;
            $this->data = $data;
            $this->duracao = $duracao;
            $this->horarioDisp = $horarioDisp;
            $this->comentario=$comentario;
            $this->link=$link;
    }

    public function armazenaAulaIndividual($conexao)
    {
        $dataConcatenada = $this->data.' '.$this->horarioDisp.':00:00';
        $duracaoConcatenado = $this->duracao.':00:00';
        $query = "insert into aulaindividual (dataaulaindividual, comentario, aluno, conteudo, duracao, status, link) values ('$dataConcatenada', '$this->comentario',' $this->aluno', '$this->conteudo', '$duracaoConcatenado', 1, '$this->link')";
        $result = pg_query($conexao, $query);
        if  (!$result)
        {
            echo "query did not execute";
            exit;
        }
    }

}



?>
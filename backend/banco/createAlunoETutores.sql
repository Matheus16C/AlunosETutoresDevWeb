create table if not exists USUARIO  (
	usuario_id serial not null primary key,
	nome VARCHAR(60),
	cpf VARCHAR(14),
	dataNascimento DATE,
	email VARCHAR(80),
	senha Varchar(20),
	endereco int,
	tipo int,
	formacao VARCHAR(100)
);

create table if not exists ENDERECO (
	endereco_id serial not null primary key,
	cep VARCHAR(9),
	pais VARCHAR(50),
	estado VARCHAR(50),
	cidade VARCHAR(50),
	bairro VARCHAR(50),
	rua VARCHAR(100),
	numero int,
	foreign key (usuario_id) references usuario (usuario_id)
);

create table if not exists DISCINTERESSE (
	discInteresse_id serial not null primary key,
	nivel VARCHAR(100),
	disciplina VARCHAR(100),
    foreign key (conteudo_id) references CONTEUDO (conteudo_id)
);

create table if not exists CONTEUDO (
	conteudo_id serial not null primary key,
	nome VARCHAR(100),
	valor float,
	nivel int,
	instituicao int,
	area_dominio VARCHAR(100),
	foreign key (tutor_id) references Usuario (usuario_id)
);

create table if not exists INSTITUICAO (
	instituicao_id serial not null primary key,
	nome VARCHAR(100)
);

create table if not exists AULAINDIVIDUAL (
	aulaIndividual_id serial not null primary key,
	dataAulaIndividual DATE,
	status int,
	comentario VARCHAR(500),
	foreign key (aluno_id) references Usuario (usuario_id),
    foreign key (conteudo_id) references CONTEUDO (conteudo_id)
);

Create TABLE if not EXISTS TRANSACAO (
	transacao_id serial not null primary key,
    tipo varchar(60),
    valor float,
    dataTransacao date,
    status varchar(60),
    descricao varchar(60),
	foreign key (aluno_id) references Usuario (usuario_id),
	foreign key (tutor_id) references Usuario (usuario_id)
);


CREATE TABLE IF NOT EXISTS AVALIACAO(
	avaliacao_id serial not null primary key,
    comentario varchar(60),
	nota int
	foreign key (aula_id) references AULAINDIVIDUAL (aulaIndividual_id),
	foreign key (aluno_id) references Usuario (usuario_id)
);


create table if not exists Inscricao (
    inscricao_id serial not null primary key,
    dataInscrição date,
	foreign key (alunoSeguindo_id) references Usuario (usuario_id),
	foreign key (alunoSendoSeguido_id) references Usuario (usuario_id)
);


create table if not exists AulaColetiva (
    aulaColetiva_id serial not null primary key,
    dataAulaColetiva date,
    nome VARCHAR(60),
    foreign key (tutor_id) references usuario (usuario_id),
    foreign key (conteudo_id) references CONTEUDO (conteudo_id)
);


create table if not exists Alunos_AulaColetiva (
	foreign key (aulaColetiva_id) references AulaColetiva (aulaColetiva_id),
	foreign key (aluno_id) references Usuario (usuario_id)
);


create table if not exists DataIndisponivel (
    dataIndisponivel_id serial not null primary key,
    foreign key (tutor_id) references Usuario (usuario_id),
    dataIndisponivel date
);
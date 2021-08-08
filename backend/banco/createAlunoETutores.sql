drop table if exists aulacoletiva CASCADE;
drop table if exists usuario CASCADE;
drop table if exists avaliacao CASCADE;
drop table if exists aulaindividual CASCADE;
drop table if exists alunos_aulacoletiva CASCADE;
drop table if exists conteudo CASCADE;
drop table if exists dataindisponivel CASCADE;
drop table if exists discinteresse CASCADE;
drop table if exists endereco CASCADE;
drop table if exists inscricao CASCADE;
drop table if exists instituicao CASCADE;
drop table if exists tutor_recebe CASCADE;
drop table if exists transacao CASCADE;


create table if not exists USUARIO (
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
	numero int
);

create table if not exists DISCINTERESSE (
	discInteresse_id serial not null primary key,
	nivel VARCHAR(100),
	disciplina VARCHAR(100),
	usuario int
    
);

create table if not exists CONTEUDO (
	conteudo_id serial not null primary key,
	valor float,
	nivel int,
	instituicao int,
	area_dominio VARCHAR(100),
	tutor_id int
	
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
	aluno int,
	conteudo int
);

Create TABLE if not EXISTS TRANSACAO (
	transacao_id serial not null primary key,
    tipo varchar(60),
    valor float,
    dataTransacao date,
    status varchar(60),
    usuario int,
    participante int
	
);


CREATE TABLE IF NOT EXISTS avaliacao_aulaindividual(
	avaliacao_id serial not null primary key,
    comentario varchar(60),
	nota int,
	aula int
);

CREATE TABLE IF NOT EXISTS avaliacao_aulacoletiva(
	avaliacao_id serial not null primary key,
    comentario varchar(60),
	nota int,
	aula int,
	aluno int
);

create table if not exists Inscricao (
    inscricao_id serial not null primary key,
    dataInscrição date,
    aluno int,
    tutor int
	
);


create table if not exists AulaColetiva (
    aulaColetiva_id serial not null primary key,
    dataAulaColetiva date,
    status int,
    descricao VARCHAR(500),
    conteudo int
    
);


create table if not exists Alunos_AulaColetiva (
	aulacoletiva int,
	aluno int
);


create table if not exists DataIndisponivel (
    dataIndisponivel_id serial not null primary key,
    dataIndisponivel date,
    tutor int
    
);

alter table usuario add foreign key (endereco) references ENDERECO (endereco_id);
alter table DISCINTERESSE add foreign key (usuario) references USUARIO (usuario_id);
alter table CONTEUDO add foreign key (tutor_id) references Usuario (usuario_id);
alter table CONTEUDO add foreign key (instituicao) references Instituicao (instituicao_id);
alter table AULAINDIVIDUAL add foreign key (aluno) references Usuario (usuario_id);
alter table AULAINDIVIDUAL add foreign key (conteudo) references CONTEUDO (conteudo_id);
alter table transacao add foreign key (usuario) references Usuario (usuario_id);
alter table transacao add foreign key (participante) references Usuario (usuario_id);
alter table avaliacao_aulaindividual add foreign key (aula) references AULAINDIVIDUAL (aulaIndividual_id);
alter table avaliacao_aulacoletiva add foreign key (aula) references AULAINDIVIDUAL (aulaIndividual_id);
alter table avaliacao_aulacoletiva add foreign key (aluno) references Usuario (usuario_id);
alter table INSCRICAO add foreign key (aluno) references Usuario (usuario_id);
alter table INSCRICAO add foreign key (tutor) references Usuario (usuario_id);
alter table AulaColetiva add foreign key (conteudo) references CONTEUDO (conteudo_id);
alter table Alunos_AulaColetiva add foreign key (aulacoletiva) references AulaColetiva (aulaColetiva_id);
alter table Alunos_AulaColetiva add foreign key (aluno) references Usuario (usuario_id);
alter table DataIndisponivel add foreign key (tutor) references Usuario (usuario_id);



insert into endereco (cep, pais, estado, cidade, bairro, rua, numero) values 
	('11111-111', 'Brasil', 'Espirito Santo', 'Serra', 'Eldorado', 'Um', 1 ),
	('22222-222', 'Brasil', 'Espirito Santo', 'Serra', 'Jacaraipe', 'dois', 1 ),
	('33333-33"', 'Brasil', 'Espirito Santo', 'Vitoria', 'Goiabeiras', 'tres', 1 ),
	('44444-444', 'Brasil', 'Espirito Santo', 'Vila Velha', 'Argolas', 'quatro', 1 ),
	('55555-555', 'Brasil', 'Espirito Santo', 'Vitoria', 'Camburi', 'cinco', 1 );

select * from endereco e;

insert into usuario (nome, cpf, datanascimento, email, senha, endereco, tipo, formacao) values
	('Matheus Costa', '1111', '1996/08/20', 'matheus@gmail.com', 'matheus123', 1 , 2, 'Ensino Superior completo' ),
	('Pedro Guimarães', '2222', '1988/11/10', 'pedro@gmail.com', 'pedro123', 2 , 1, 'Ensino medio completo' ),
	('Alice Santos', '3333', '1999/03/21', 'alice@gmail.com', 'alice123', 4 , 1, 'Cursando Mestrado' ),
	('Ana Luiza', '4444', '2002/01/01', 'ana@gmail.com', 'luiza123', 5, 2, 'Ensino superior completo' ),
	('João Silva', '5555', '2002/10/14', 'joao@gmail.com', 'joao123', 3, 1, 'Cursando Ensino Superior' );

select * from usuario u;

insert into instituicao (nome) values 
	('IFES'), ('UFES'), ('FAESA'), ('Centro de Linguas');

select * from instituicao i;

insert into conteudo (valor, nivel, instituicao, area_dominio, tutor_id) values
	(100.00, 5, 2, 'Algebra linear', 1),
	(150.00, 3, 2, 'TPA', 1),
	(300.00, 5, 5, 'Ingles', 1),
	(200.00, 4, 5, 'Alemão', 4),
	(50.00, 3, 3, 'Arqueologia', 4),
	(140.00, 5, 3, 'Biologia', 1);

select * from conteudo c;

insert into inscricao (datainscrição, aluno, tutor) values 
	('2021/07/20', 2, 1),
	('2021/06/10', 2, 4),
	('2021/07/20', 3, 1),
	('2021/08/01', 5, 4),
	('2021/05/28', 1, 4);

select * from inscricao i;

insert into aulaindividual (dataaulaindividual, status, comentario, aluno, conteudo) values
	('2021/07/20', 3, 'preciso de ajuda para entender melhor os conceitos basicos de Algebra', 2, 25),
	('2021/08/10', 1, 'verb to be', 5, 27),
	('2021/08/02', 4, 'Covid-19', 3, 30);
	
select * from aulaindividual;

insert into discinteresse (nivel, disciplina, usuario) values
	('Superior', 'Algebra Linear', 1),
	('Tecnico', 'Algebra Linear', 2),
	('Superior', 'Biologia', 3),
	('Superior', 'Arqueologia', 4),
	('Tecnico', 'Ingles', 5);
	
select * from discinteresse;

insert into aulacoletiva (dataaulacoletiva, descricao, conteudo, status) values
	('2021/08/12', 'Basico de ingles', 27, 1),
	('2021/08/10', 'Biologia basica', 30, 2),
	('2021/08/10', 'Apresentando meu conhecimento em Algebra Linear', 25, 4),
	('2021/08/5', 'Alemão basico', 28, 3);
	
	
select * from aulacoletiva;

insert into alunos_aulacoletiva (aulacoletiva, aluno) values 
	(1, 5),
	(1, 1),
	(1, 3),
	(2, 2),
	(2, 5),
	(2, 3),
	(4, 2),
	(4, 5),
	(4, 3);
	

select * from alunos_aulacoletiva aa;
	
insert into avaliacao_aulaindividual (comentario, nota, aula) values 
	('muito bom', 5, 4);
	
	
select * from avaliacao_aulaindividual;
	
insert into avaliacao_aulacoletiva (comentario, nota, aula, aluno) values
	('muito boa, passou bem o conteudo', 5, 4, 2),
	('Preciso de mais conteudo', 4, 4, 3);

select * from avaliacao_aulacoletiva aa;

insert into dataindisponivel (dataindisponivel, tutor) values
	('2021/08/20', 1),
	('2021/08/20', 4),
	('2021/09/18', 1);

select * from dataindisponivel d;

insert into transacao (tipo, valor, datatransacao, status, usuario, participante) values
	('Deposito', 300.00, '2021/06/10', 'Em aprovação', 2, null),
	('Deposito', 500.00, '2021/06/02', 'Aprovado', 3, null),
	('Retirado', 100.00, '2021/06/02', 'Aprovado', 4, null);

select * from transacao t;
	

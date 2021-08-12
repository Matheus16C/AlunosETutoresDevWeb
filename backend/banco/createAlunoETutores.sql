drop table if exists aulacoletiva CASCADE;
drop table if exists usuario CASCADE;
drop table if exists avaliacao_aulacoletiva CASCADE;
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
drop table if exists avaliacao_aulaindividual CASCADE;



create table if not exists USUARIO (
	usuario_id serial not null primary key,
	nome VARCHAR(60),
	cpf VARCHAR(14),
	dataNascimento DATE,
	email VARCHAR(80),
	senha Varchar(20),
	endereco int,
	tipo int,
	formacao VARCHAR(100),
	foto VARCHAR(500)
	
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
	dataAulaIndividual timestamp with time zone,
	status int,
	comentario VARCHAR(500),
	aluno int,
	conteudo int,
	duracao time
);

Create TABLE if not EXISTS TRANSACAO (
	transacao_id serial not null primary key,
    tipo varchar(60),
    valor float,
    dataTransacao timestamp with time zone,
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
    dataInscrição timestamp with time zone,
    aluno int,
    tutor int
	
);


create table if not exists AulaColetiva (
    aulaColetiva_id serial not null primary key,
    dataAulaColetiva timestamp with time zone,
    status int,
    descricao VARCHAR(500),
    conteudo int,
    duracao time
    
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
alter table avaliacao_aulacoletiva add foreign key (aula) references aulacoletiva (aulacoletiva_id);
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
	('Matheus Costa', '1111', '1996/08/20', 'matheus@gmail.com', 'matheus123', 1 , 2, 'Ensino Superior completo', 'assets/avatar_tutor.png' ),
	('Pedro Guimarães', '2222', '1988/11/10', 'pedro@gmail.com', 'pedro123', 2 , 1, 'Ensino medio completo', 'assets/avatar_aluno.png' ),
	('Alice Santos', '3333', '1999/03/21', 'alice@gmail.com', 'alice123', 4 , 1, 'Cursando Mestrado', 'assets/avatar_aluno.png' ),
	('Ana Luiza', '4444', '2002/01/01', 'ana@gmail.com', 'luiza123', 5, 2, 'Ensino superior completo', 'assets/avatar_tutor.png' ),
	('João Silva', '5555', '2002/10/14', 'joao@gmail.com', 'joao123', 3, 1, 'Cursando Ensino Superior', 'assets/avatar_aluno.png' );

select * from usuario u;

UPDATE usuario 
	SET foto = 'assets/avatar_aluno.jpg'
	where tipo = 1;

insert into instituicao (nome) values 
	('IFES'), ('UFES'), ('FAESA'), ('Centro de Linguas');

select * from instituicao i;

insert into conteudo (valor, nivel, instituicao, area_dominio, tutor_id) values
	(100.00, 5, 1, 'Algebra linear', 1),
	(150.00, 3, 1, 'TPA', 1),
	(300.00, 5, 4, 'Ingles', 1),
	(200.00, 4, 4, 'Alemão', 4),
	(50.00, 3, 3, 'Arqueologia', 4),
	(140.00, 5, 2, 'Biologia', 1);

select * from conteudo c;

insert into inscricao (datainscrição, aluno, tutor) values 
	('2021/07/20 22:10', 2, 1),
	('2021/06/10 23:50', 2, 4),
	('2021/07/20 17:21', 3, 1),
	('2021/08/01 18:22', 5, 4),
	('2021/05/28 09:00', 1, 4);

select * from inscricao i;

insert into aulaindividual (dataaulaindividual, status, comentario, aluno, conteudo, duracao) values
	('2021/07/20 13:00', 3, 'preciso de ajuda para entender melhor os conceitos basicos de Algebra', 2, 1, '01:00:00'),
	('2021/08/10 14:30', 1, 'verb to be', 5, 3, '01:00:00'),
	('2021/08/02 16:00', 4, 'Covid-19', 3, 6, '01:00:00');

insert into aulaindividual (dataaulaindividual, status, comentario, aluno, conteudo, duracao) values
	('2021/07/20 13:00', 1, 'preciso de ajuda para entender melhor os conceitos basicos de Algebra', 2, 1, '01:00:00'),
	('2021/08/10 15:40', 1, 'teste', 5, 3, '01:00:00');
insert into aulaindividual (dataaulaindividual, status, comentario, aluno, conteudo, duracao) values
	('2021/08/20 19:00', 1, 'teste', 5, 3, '01:00:00');
	
select * from aulaindividual where aulaindividual_id = 2;

insert into discinteresse (nivel, disciplina, usuario) values
	('Superior', 'Algebra Linear', 1),
	('Tecnico', 'Algebra Linear', 2),
	('Superior', 'Biologia', 3),
	('Superior', 'Arqueologia', 4),
	('Tecnico', 'Ingles', 5);
	
select * from discinteresse;

insert into aulacoletiva (dataaulacoletiva, descricao, conteudo, status, duracao) values
	('2021/08/12 19:00', 'Basico de ingles', 3, 1, '01:00:00'),
	('2021/08/10 18:00', 'Biologia basica', 6, 2, '01:00:00'),
	('2021/08/10 15:00', 'Apresentando meu conhecimento em Algebra Linear', 1, 4, '01:00:00'),
	('2021/08/5 13:00', 'Alemão basico', 4, 3, '01:00:00');
	
	
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
	('muito bom', 5, 1);
	
	
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
	('Deposito', 300.00, '2021/06/10 10:52', 'Em aprovação', 2, null),
	('Deposito', 500.00, '2021/06/02 15:52', 'Aprovado', 3, null),
	('Retirado', 100.00, '2021/06/02 17:18', 'Aprovado', 4, null);

select * from transacao t;

SELECT conteudo.tutor_id, aulaindividual.aulaindividual_id, usuario.nome as aluno, aulaindividual.dataaulaindividual, 
    aulaindividual.comentario, conteudo.area_dominio, aulaindividual.duracao from aulaindividual inner join 
    usuario on usuario.usuario_id = aulaindividual.aluno inner join conteudo on conteudo.conteudo_id = aulaindividual.conteudo where conteudo.tutor_id = 1 and aulaindividual.status = 1;

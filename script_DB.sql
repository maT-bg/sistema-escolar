charset latin1;

DROP DATABASE IF EXISTS Escola;
CREATE DATABASE Escola;

USE Escola;

CREATE TABLE Alunos(
matricula VARCHAR(5) not null,
nome VARCHAR(50) NOT NULL,
endereco VARCHAR(50),
cidade VARCHAR(30),
codcurso CHAR(2),
primary key (matricula));

CREATE TABLE Cursos(
codcurso CHAR(2) not null,
nome VARCHAR(50) NOT NULL,
coddisc1 char(2),
coddisc2 char(2),
coddisc3 char(2),
primary key (codcurso));

CREATE TABLE Disciplinas(
coddisciplina CHAR(2) not null,
nomedisciplina VARCHAR(30) NOT NULL,
primary key (coddisciplina));

insert into disciplinas values ('11','Banco de Dados');
insert into disciplinas values ('12','Lógica de Programação');
insert into disciplinas values ('13','Desenvolvimento de Software');
insert into disciplinas values ('21','Banco de Dados 2');
insert into disciplinas values ('22','Desenvolvimento de Software 2');
insert into disciplinas values ('23','Programação de Computador 1');
insert into disciplinas values ('31','Banco de Dados 3');
insert into disciplinas values ('32','Programação de Computador 2');
insert into disciplinas values ('33','Desenvolvimento de Software 3');

insert into cursos values ('01','Auxiliar de informática','11','12','13');
insert into cursos values ('02','Programador de Computador','21','22','23');
insert into cursos values ('03','Técnico em informática','31','32','33');

insert into alunos values ('10001','Marcos Moraes','Rua Padra, 5057','Mogi Mirim','01');
insert into alunos values ('10002','Maria Conceiçãoo Lopes','Rua Araras, 23','Mogi Guaçu','01');
insert into alunos values ('10003','Ana Carina Lopes','Rua Peraltas, 22','Santos','01');
insert into alunos values ('10004','Carlos Aguiar','Rua Bonafá, 96','Tremembé','01');
insert into alunos values ('10005','Pedro Antonio','Rua das Ortigas, 112','Taubaté','01');
insert into alunos values ('10006','André Luiz','Rua Lopes, 207','Itapira','02');
insert into alunos values ('10007','Rita de Cássia','Rua Eletromais, 2020','Itapira','02');
insert into alunos values ('10008','Caique dos Santos','Rua das Amoreiras, 55','Campinas','02');
insert into alunos values ('10009','Carlos Tavares','Rua Peixe, 99','Santos','02');
insert into alunos values ('10010','Ricardo Moreira','Rua Itapira, 59','Aparecida','03');
insert into alunos values ('10011','Richardson Campeao','Av. do Tricolor,  60','São Paulo','03');
insert into alunos values ('10012','Junior dos Santos','Rua Benfeitor, 07','São Paulo','03');
insert into alunos values ('10013','Carina Melo','Rua Osvaldo, 79','São Paulo','03');

show tables;
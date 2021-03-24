
create database clientes;
use clientes;
create table usuario (
id int not null auto_increment,
nome varchar(30) not null,
cpf varchar(11) not null,
rg varchar(13) not null,
endereco varchar(10) not null,
telefone varchar(11)not null,
Estado varchar(10) not null,
situacao int(1)not null,
genero int(1) not null,
nascimento varchar(10) not null,
  PRIMARY KEY(id)
);
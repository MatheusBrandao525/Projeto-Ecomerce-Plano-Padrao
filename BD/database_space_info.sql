create database db_space_info
default character set utf8
default collate utf8_general_ci;

use db_space_info;

create table tbl_usuario
(
id_usuario int primary key auto_increment,
nome_usuario varchar (18) not null,
sobrenome varchar (18) not null,
ds_cpf varchar (15) not null,
ds_email varchar (30) not null,
ds_senha varchar (8) not null,
ds_status boolean not null,
ds_endereco varchar (80) not null,
ds_cidade varchar (24) not null,
no_cep char(9) not null,
ds_telefone varchar (10) not null
) default charset utf8;

create table tbl_categoria
(
id_categoria int primary key auto_increment,
nome_categoria varchar (20) not null
)default charset utf8;

create table tbl_produto
(
id_produto int primary key auto_increment,
nome_produto varchar(30) not null,
descricao text not null,
id_categoria int not null,
imagen_produto varchar(84) not null,
imagen_dois varchar(84) not null,
imagen_tres varchar(84) not null,
qnt_estoque int not null,
vl_produto decimal(6,2) not null,
constraint fk_cat foreign key(id_categoria) references tbl_categoria(id_categoria)
)default charset utf8;

create view vw_produtos
as select
	tbl_produto.id_produto,
    tbl_produto.imagen_produto,
	tbl_produto.imagen_dois,
	tbl_produto.imagen_tres,
    tbl_produto.nome_produto,
    tbl_categoria.nome_categoria,
    tbl_produto.qnt_estoque,
    tbl_produto.descricao,
    tbl_produto.vl_produto
from tbl_produto inner join tbl_categoria
	on tbl_produto.id_categoria = tbl_categoria.id_categoria;
    
show databases;

CREATE USER 'Matheusb'@'localhost' IDENTIFIED WITH mysql_native_password BY '1exagon1@';
grant all privileges on db_space_info.* to 'Matheusb'@'localhost' with grant option;

insert into tbl_usuario 
values(default,'Matheus Felipe','Brandão','03600717243','mafe123silva@gmail.com','exagon10','1','Br 429 km90','São Francisco','76935000','993203891');

select * from tbl_usuario;
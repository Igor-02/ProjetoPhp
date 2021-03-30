create database bd_produto;

use bd_produto;

create table tb_usuario
(
	tb_usuario_id int not null auto_increment primary key,
    tb_usuario_login varchar(16) not null,
    tb_usuario_senha varchar(16) not null
)engine InnoDB;

create table tb_produto
(
	tb_produto_id int not null auto_increment primary key,
	tb_produto_nome varchar(64) not null,
    tb_produto_desc varchar(128),
    tb_produto_preco decimal(10,2) not null,
    tb_produto_quant int not null
)engine InnoDB;

-- drop database bd_produto;

select*from tb_produto;
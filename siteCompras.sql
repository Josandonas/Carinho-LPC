create database siteCompras;
use siteCompras;

create table if not exists Cliente(
idCliente int auto_increment,
nomeCliente varchar(45),
cpf char(11) unique,
email varchar(45),
senha varchar(45),
primary key(idCliente)
);

create table if not exists Carrinho(
idCarrinho int auto_increment,
cliente int default null,
primary key(idCarrinho),
constraint fk_cliente foreign key(cliente) references Cliente(idCliente)
);

create table if not exists Produtos(
idProduto int auto_increment,
nomeProduto varchar(45),
valor float,
modelo varchar(45),
cor varchar(45),
imagem longblob,
primary key(idProduto)
);

create table if not exists Produtos_has_Carrinho(
idProd_Car int auto_increment,
idCarrinho int,
idProduto int,
quantidade int,
subtotal float,
data datetime,
primary key(idProd_Car),
constraint fk_carrinho foreign key(idCarrinho) references Carrinho(idCarrinho),
constraint fk_produto foreign key(idProduto) references Produtos(idProduto)
);

-- criando banco de dados
CREATE DATABASE IF NOT EXISTS db_agilizae;

-- usando banco de dados
USE db_agilizae;

-- criando tabelas
CREATE TABLE gestor (
	cd_gestor int NOT NULL auto_increment,
    nm_gestor varchar(50),
    ds_email varchar(30),
    cd_telefone varchar(11),
    cd_cpf varchar(11)
);
CREATE TABLE restaurante (
	cd_restaurante int NOT NULL auto_increment,
    cd_gestor int,
    nm_restaurante varchar(50),
    nm_fantasia varchar(50),
    cd_cnpj varchar(14),
    ds_endereco varchar(50)
);
CREATE TABLE categoria (
	cd_categoria int NOT NULL,
    cd_restaurante int,
    nm_categoria varchar(20)
);
CREATE TABLE produto (
	cd_produto int NOT NULL,
    cd_categoria int,
    nm_produto varchar(20),
    vl_produto float(5),
    ds_produto varchar(500)
);
CREATE TABLE complemento_produto (
	cd_itemad int NOT NULL,
    cd_produto int,
    nm_itemad varchar(20),
    vl_itemad float(5)
);
CREATE TABLE funcionamento (
	cd_restaurante int,
    ds_diasemana varchar(15),
    hr_inicio varchar(4),
    hr_final varchar(4)
);
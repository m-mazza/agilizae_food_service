/* -- versão 1.0 --- */
/* -- banco de dados - agilizae -- */
CREATE DATABASE IF NOT EXISTS agilizae_bd;

USE agilizae_bd;

/* -- criando tabelas -- */
CREATE TABLE usuario (
	cd_usuario int NOT NULL,
	cd_cnpj varchar(15),
	nm_usuario varchar(30),
	ds_email varchar(30),
	cd_telefone varchar(15)
);

CREATE TABLE restaurante (
	cd_restaurante int NOT NULL,
    cd_usuario int,
    nm_razaosocial varchar(30),
    nm_fantasia varchar(30)
);

CREATE TABLE horario (
	cd_id int NOT NULL,
    nm_diasemana varchar(15),
    dt_entrada date,
    dt_saida date
);

CREATE TABLE endereco (
	nm_lougradouro varchar(30),
    nm_bairro varchar(30),
    nm_cidade varchar(30),
    sg_estado char(02),
    cd_numero varchar(04)
);

CREATE TABLE pagamento (
	id_tipo int NOT NULL,
    nm_tipo varchar(15)
);

CREATE TABLE produto (
	cd_produto int NOT NULL,
    cd_categoria int,
    nm_produto varchar(30),
    nm_slugprod varchar(30),
    vl_produto float(04),
    ds_produto varchar(300)
);

CREATE TABLE itens_adicionais (
	cd_item int,
    cd_produto int,
    nm_item varchar(30),
    vl_item float(04)
);

/* -- criando chaves primárias -- */
ALTER TABLE usuario
	ADD CONSTRAINT PK_usuario Primary Key(cd_usuario);
    
ALTER TABLE restaurante
	ADD CONSTRAINT PK_restaurante Primary Key(cd_restaurante);
    
ALTER TABLE horario
	ADD CONSTRAINT PK_horario Primary Key(cd_id);
    
-- ALTER TABLE endereco
-- ALTER TABLE pagamento
-- ALTER TABLE categoria_produto
-- ALTER TABLE produto
-- CREATE TABLE itens_adicionais

/* -- criando chaves estrangeiras -- */

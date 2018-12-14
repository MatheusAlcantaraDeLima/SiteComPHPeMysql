CREATE DATABASE pousada;
USE pousada;
CREATE TABLE funcionario(
cpf_func BIGINT,
nome_func VARCHAR(30),
email_func VARCHAR(30),
endereco_func VARCHAR(30),
CONSTRAINT PK_cpf_func PRIMARY KEY(cpf_func)
);
CREATE TABLE cliente(
cpf_clie BIGINT PRIMARY KEY,
nome_clie VARCHAR(30),
email_clie VARCHAR(30),
endereco_clie VARCHAR(30)
);
CREATE TABLE telefone_clie_func(
FK_cpf_cliente BIGINT,
FK_cpf_funcionario BIGINT,
nome_clie VARCHAR(30),
nome_func VARCHAR(30),
telefone_clie VARCHAR(30),
telefone_func VARCHAR(30),
CONSTRAINT FK_cpf_f FOREIGN KEY(FK_cpf_funcionario) REFERENCES funcionario(cpf_func),
CONSTRAINT FK_cpf_c FOREIGN KEY(FK_cpf_cliente) REFERENCES cliente(cpf_clie)
);
CREATE TABLE quarto(
id_quarto BIGINT,
qtd_camas INT,
qtd_banheiros INT,
preco_dia FLOAT(4,2),
quart_basic VARCHAR(5),
quart_familia VARCHAR(5),
quart_plus VARCHAR(5),
CONSTRAINT PK_id_quarto_basico PRIMARY KEY(id_quarto)
);
CREATE TABLE reserva(
FK_cpf_clie BIGINT,
FK_id_quarto BIGINT,
nome_clie VARCHAR(30),
email_clie VARCHAR(30),
telefone_clie VARCHAR(30),
qtd_dias INT,
pessoas INT,
quarto enum("basica", "familia", "plus"),
passeio enum ("escuna","barco","trilha"),
CONSTRAINT FK_cpf_clie FOREIGN KEY(FK_cpf_clie) REFERENCES cliente(cpf_clie),
CONSTRAINT FK_id_quarto FOREIGN KEY(FK_id_quarto) REFERENCES quarto(id_quarto)
);

CREATE DATABASE nautical_industry_db;
USE nautical_industry_db;

CREATE TABLE IF NOT EXISTS Funcionarios (
    id INT (20) NOT NULL AUTO_INCREMENT,
    nome VARCHAR (255) NOT NULL,
    cargo VARCHAR (255) NOT NULL,
    login VARCHAR (255) NOT NULL,
    senha VARCHAR (255) NOT NULL,
    PRIMARY KEY (id));

INSERT INTO Funcionarios (login, senha) VALUES ('teste', '1234');
INSERT INTO Funcionarios (login, senha) VALUES ('teste1', '5678');
INSERT INTO Funcionarios (login, senha) VALUES ('teste2', '9012');

CREATE TABLE IF NOT EXISTS Atividades (
    id INT (20) NOT NULL AUTO_INCREMENT,
    descricao VARCHAR (255) NOT NULL,
    data DATE NOT NULL,
    status VARCHAR (255) NOT NULL,
    PRIMARY KEY (id)
);
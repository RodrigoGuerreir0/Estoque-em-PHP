-- Active: 1700825179262@@127.0.0.1@3306@bembarato
CREATE TABLE estoque(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (100),
marca VARCHAR (100),
grupo VARCHAR (50),
quantidade INT (4),
peso VARCHAR (10),
codigo VARCHAR (20),
validade DATE,
data_emissao DATE
);
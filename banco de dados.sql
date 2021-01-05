--Comandos SQL utilizados na criação do meu Banco de Dados

--Criação do Banco de Dados
CREATE DATABASE BD_Usuarios;

--Criação da Tabela
CREATE TABLE `usuarios` (
	`nome` VARCHAR(50) NOT NULL,
	`email` VARCHAR(60) NOT NULL UNIQUE,
	`data_nasc` DATE NOT NULL,
	`cpf` VARCHAR(11) NOT NULL UNIQUE,
	`sexo` VARCHAR(10) NOT NULL,
	`telefone` VARCHAR(11) NOT NULL,
	`prontuario` CHAR(9) UNIQUE NOT NULL,
	`funcao` VARCHAR(10) NOT NULL,
	`login` VARCHAR(30) NOT NULL primary key,
	`senha` VARCHAR(40) NOT NULL
);
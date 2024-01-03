-- Creating a database--
CREATE DATABASE IF NOT EXISTS teste
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

-- Selecting database--
USE teste;

-- Creating a table for query test--
CREATE TABLE IF NOT EXISTS clientes(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    contato VARCHAR(45) DEFAULT '+244938789941',
    created_at DATETIME DEFAULT NOW(),
    updated_at DATETIME,
    deleted_at DATETIME
) DEFAULT CHARSET = utf8mb4;
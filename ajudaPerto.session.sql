-- =====================================================
-- Banco de Dados: Plataforma de Doações Solidárias
-- Versão: MVP
-- Autor: Filipe Chau
-- Linguagem: MySQL 8
-- =====================================================

-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS solidariedade_mvp
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE solidariedade_mvp;

-- =====================================================
-- TABELA: usuarios
-- =====================================================

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- =====================================================
-- TABELA: instituicoes
-- =====================================================

CREATE TABLE instituicoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    descricao TEXT,
    cidade VARCHAR(100),
    bairro VARCHAR(100),
    endereco VARCHAR(255),
    telefone VARCHAR(20),
    email VARCHAR(150),
    website VARCHAR(150),
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB;

-- ======================================================
-- TABELA: doacoes
-- ======================================================
CREATE TABLE doacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    instituicao_id INT NOT NULL,
    item VARCHAR(150) NOT NULL,
    quantidade VARCHAR(50),
    mensagem TEXT,
    data_doacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON DELETE CASCADE,
    FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id) ON DELETE CASCADE
)ENGINE=InnoDB;
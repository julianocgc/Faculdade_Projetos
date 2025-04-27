-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/03/2025 às 20:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_almoxarifado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(5) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `endereco_cliente` varchar(50) NOT NULL,
  `cidade_cliente` varchar(30) NOT NULL,
  `estado_cliente` varchar(2) NOT NULL,
  `telefone_cliente` varchar(15) NOT NULL,
  `email_cliente` varchar(30) NOT NULL,
  `data_nasc_cliente` date NOT NULL,
  `observacoes_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ordem_de_servico`
--

CREATE TABLE `ordem_de_servico` (
  `id_os` int(5) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `endereco_cliente` varchar(50) NOT NULL,
  `servico_cliente` varchar(50) NOT NULL,
  `equipamentos` varchar(50) NOT NULL,
  `nome_tecnico` varchar(50) NOT NULL,
  `observacoes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(5) NOT NULL,
  `equipamento` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `patrimonio` varchar(20) NOT NULL,
  `endereco_mac` varchar(20) NOT NULL,
  `numero_de_serie` varchar(20) NOT NULL,
  `ativo` varchar(3) NOT NULL,
  `localizacao` varchar(30) NOT NULL,
  `estoque` varchar(30) NOT NULL,
  `observacoes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `id_tecnico` int(5) NOT NULL,
  `nome_tecnico` varchar(50) NOT NULL,
  `cpf_tecnico` varchar(15) NOT NULL,
  `endereco_tecnico` varchar(50) NOT NULL,
  `telefone_tecnico` varchar(15) NOT NULL,
  `email_tecnico` varchar(30) NOT NULL,
  `funcao_tecnico` varchar(30) NOT NULL,
  `equipamentos_tecnico` varchar(50) NOT NULL,
  `observacoes_tecnico` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `ordem_de_servico`
--
ALTER TABLE `ordem_de_servico`
  ADD PRIMARY KEY (`id_os`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`id_tecnico`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ordem_de_servico`
--
ALTER TABLE `ordem_de_servico`
  MODIFY `id_os` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `id_tecnico` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

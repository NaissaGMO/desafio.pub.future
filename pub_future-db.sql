-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2022 às 04:20
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pub.future-db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `banco_usuario` varchar(25) NOT NULL,
  `conta_usuario` varchar(25) NOT NULL,
  `nasc_usuario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome_usuario`, `email`, `senha`, `banco_usuario`, `conta_usuario`, `nasc_usuario`) VALUES
(1, 'Gabriela Naissa ', 'gabrielanaissa@gmail.com', '1234', 'itau', 'conta salario', '2004-06-16'),
(2, 'karol', 'kmk@gmail.com', '6789', 'caixa', 'conta corrente', '2022-01-31'),
(3, 'luana', 'lu@gmail.com', '12', 'bradesco', 'conta poupança', '2021-12-29'),
(4, 'pedro', 'p@gmail.com', '9090', 'brb', 'conta poupança', '2022-02-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

CREATE TABLE `despesas` (
  `id` int(11) DEFAULT NULL,
  `tipo_despesa` varchar(25) DEFAULT NULL,
  `valor_despesa` decimal(10,0) DEFAULT NULL,
  `data_pagamento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id`, `tipo_despesa`, `valor_despesa`, `data_pagamento`) VALUES
(NULL, 'alimentação', '600', '2022-01-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) DEFAULT NULL,
  `tipo_receita` varchar(25) DEFAULT NULL,
  `valor_receita` decimal(10,0) NOT NULL,
  `descricao_receita` varchar(50) DEFAULT NULL,
  `data_recebimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `tipo_receita`, `valor_receita`, `descricao_receita`, `data_recebimento`) VALUES
(NULL, 'salario', '0', 'salario do emprego CLT', '2022-01-02'),
(NULL, 'salario', '2000', 'salario do emprego CLT', '2022-01-04'),
(NULL, 'pensão', '500', 'pensão recebida', '2022-01-10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

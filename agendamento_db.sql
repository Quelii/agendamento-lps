-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/07/2023 às 21:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agendamento_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento_sala01`
--

CREATE TABLE `agendamento_sala01` (
  `id` int(11) NOT NULL,
  `projetor` int(11) NOT NULL,
  `quantidade_pessoas` int(11) NOT NULL,
  `data_agendamento` date NOT NULL,
  `hora_agendamento` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamento_sala01`
--

INSERT INTO `agendamento_sala01` (`id`, `projetor`, `quantidade_pessoas`, `data_agendamento`, `hora_agendamento`) VALUES
(1, 1, 10, '2023-07-26', '15:30:00'),
(2, 1, 2, '2023-07-28', '15:20:00'),
(3, 1, 5, '2023-07-31', '12:00:00'),
(4, 2, 2, '2023-07-31', '12:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento_sala02`
--

CREATE TABLE `agendamento_sala02` (
  `id` int(11) NOT NULL,
  `projetor` int(11) NOT NULL,
  `quantidade_pessoas` int(11) NOT NULL,
  `data_agendamento` date NOT NULL,
  `hora_agendamento` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamento_sala02`
--

INSERT INTO `agendamento_sala02` (`id`, `projetor`, `quantidade_pessoas`, `data_agendamento`, `hora_agendamento`) VALUES
(1, 1, 5, '2023-07-27', '09:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `setor` varchar(100) NOT NULL,
  `creci` varchar(20) DEFAULT NULL,
  `concordo_terminos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `email`, `senha`, `nome`, `cargo`, `setor`, `creci`, `concordo_terminos`) VALUES
(1, 'queliane.oliveira@ba.estudante.senai.br', '123456', 'Queliane Bonfim de Oliveira', 'Estagiaria Ti', 'Interno - Clt', '000000', 1),
(2, 'quelianegramacho@gmail.com', '300416', 'Queliane Bonfim de Oliveira', 'Estagiaria Ti', 'Interno - Clt', '0000000', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `treinamento`
--

CREATE TABLE `treinamento` (
  `id` int(11) NOT NULL,
  `projetor` int(11) NOT NULL,
  `quantidade_pessoas` int(11) NOT NULL,
  `data_agendamento` date NOT NULL,
  `hora_agendamento` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `treinamento`
--

INSERT INTO `treinamento` (`id`, `projetor`, `quantidade_pessoas`, `data_agendamento`, `hora_agendamento`) VALUES
(1, 1, 5, '2023-07-27', '09:00:00'),
(0, 1, 30, '2023-07-28', '00:00:00'),
(0, 1, 10, '2023-07-26', '12:00:00'),
(0, 2, 2, '2023-07-27', '12:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamento_sala01`
--
ALTER TABLE `agendamento_sala01`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `agendamento_sala02`
--
ALTER TABLE `agendamento_sala02`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento_sala01`
--
ALTER TABLE `agendamento_sala01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `agendamento_sala02`
--
ALTER TABLE `agendamento_sala02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

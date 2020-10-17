-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2020 às 03:27
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `serieslaradb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `serieslara`
--

CREATE TABLE `serieslara` (
  `id` int(11) NOT NULL,
  `name_series` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `seasons` int(11) NOT NULL,
  `available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `serieslara`
--

INSERT INTO `serieslara` (`id`, `name_series`, `description`, `seasons`, `available`) VALUES
(1, 'The Boys', 'The Boys é legal', 2, 'Amazon Prime Video'),
(3, 'Friends', 'Friends é do balacubacu', 100, 'Netfrixxxxx'),
(4, '30%', 'sei la parça o que tem q escrever aqui topppp', 8, 'GloboPray'),
(5, 'How I meet your mother', 'Como eu conheci sua mãe', 8, 'Netflix'),
(7, 'The Boys Plus', 'The Boys TOP', 2, 'Amazon Prime Vídeo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `serieslara`
--
ALTER TABLE `serieslara`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_series` (`name_series`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `serieslara`
--
ALTER TABLE `serieslara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

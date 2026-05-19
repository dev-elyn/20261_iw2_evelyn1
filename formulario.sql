-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 19-Maio-2026 às 12:20
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_camisa`
--

CREATE TABLE `tb_camisa` (
  `cd_camisa` int(11) NOT NULL,
  `sg_tamanho` varchar(3) NOT NULL,
  `sg_cor` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_camisa`
--

INSERT INTO `tb_camisa` (`cd_camisa`, `sg_tamanho`, `sg_cor`) VALUES
(1, 'PP', 'Preto'),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, 'M', 'Roxo'),
(6, 'M', 'Roxo'),
(7, 'M', 'Roxo'),
(8, 'M', 'Roxo'),
(9, 'M', 'Roxo'),
(10, 'M', 'Roxo'),
(11, 'M', 'Roxo'),
(12, 'M', 'Roxo'),
(13, 'M', 'Roxo'),
(14, 'M', 'Roxo'),
(15, 'M', 'Roxo'),
(16, 'M', 'Roxo'),
(17, 'PP', 'Preto'),
(18, 'PP', 'Preto'),
(19, 'G', 'Preto'),
(20, 'G', 'Roxo'),
(21, 'P', 'Rosa'),
(22, 'M', 'Cinza'),
(23, 'PP', 'Cinza'),
(24, 'G', 'Cinza'),
(25, 'M', 'Preto'),
(26, 'G', 'Roxo'),
(27, 'P', 'Roxo'),
(28, 'M', 'Roxo'),
(29, 'M', 'Cinza'),
(30, 'PP', 'Preto');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_camisa`
--
ALTER TABLE `tb_camisa`
  ADD PRIMARY KEY (`cd_camisa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_camisa`
--
ALTER TABLE `tb_camisa`
  MODIFY `cd_camisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

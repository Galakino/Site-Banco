-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 31-Jul-2024 às 11:40
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitebanco`
--
CREATE DATABASE IF NOT EXISTS `sitebanco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sitebanco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrogerente`
--

DROP TABLE IF EXISTS `cadastrogerente`;
CREATE TABLE IF NOT EXISTS `cadastrogerente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastrogerente`
--

INSERT INTO `cadastrogerente` (`id`, `nome`, `senha`, `ativo`) VALUES
(1, 'lukinhas', '12345678', 's'),
(3, 'joao', '12345678', 's'),
(4, 'lucasPensador', 'kleber18', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeGerente` varchar(100) DEFAULT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `dataCadastro` varchar(30) DEFAULT NULL,
  `cep` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cartao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nomeGerente`, `nomeCliente`, `dataCadastro`, `cep`, `email`, `cartao`) VALUES
(2, 'joao', 'Jailson', '2024-07-04', '3512513', 'Jailson78@gmail.com', '12354689'),
(7, 'joao', 'Robson', '2024-07-08', '56516578', '', ''),
(13, 'lucasPensador', 'Eduardo do poste', '2024-07-08', '47988032', '', ''),
(21, 'lukinhas', 'Lucas Cavalcante Leandro', '2024-07-11', '1531568', 'lucas_c_leandro@estudante.sesisenai.org.br', '1455485885'),
(22, 'lukinhas', 'JoÃ£o ', '2024-07-11', '35246379', 'joao123@gmail.com', '6516565161'),
(23, 'lukinhas', 'Alexandre', '2024-07-29', '6516515', 'alaxandre123@gmail.com', '1543616534');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

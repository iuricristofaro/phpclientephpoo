-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2016 às 21:30
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `documentotipo` char(20) NOT NULL,
  `documentonumero` varchar(20) NOT NULL,
  `endereco` text NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `grau` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `documentotipo`, `documentonumero`, `endereco`, `telefone`, `grau`) VALUES
(1, 'Iuri Cristofaro', 'iuri@iuricristofaro.com.br', 'CPF', '111.222.333-44', 'Rua Australia N 01', '1111-1111', '1'),
(2, 'Gladcheff''s', 'gladcheffs@gladcheffs.com', 'CPF', '167.756.729-12', 'Rua Equardor N 02', '2222-2222', '1'),
(3, 'Jose Alves', 'jose@programadorweb.com', 'CPF', '123.456.789-01', 'Rua Dubai N 03', '4764-5395', '1'),
(4, 'Dayana Oliveira', 'adayana@jp3.com', 'CPF', '123.456.789-01', 'Rua Colonbia N 04', '3553-3113', '1'),
(5, 'Leonadro Alves', 'leonadro@jogo.com', 'CPF', '126.458.783-02', 'Rua Rio de Janerio N 05', '3433-3639', '1'),
(6, 'Claudia Jesus', 'claudia@agenciadesign.com', 'CNPJ', '167.756.729/1411-12', 'Rua Brazil N 06', '5295-5995', '3'),
(7, 'Pedro Fonseca', 'pedro@donocozinha.com', 'CNPJ', '153.429.715/1614-18', 'Rua Francas N 07', '2559-4513', '2'),
(8, 'Flavia Lucas', 'flavia@chefaustralia.com', 'CNPJ', '129.453.716/1211-10', 'Rua Goianas N 08', '5835-5925', '4'),
(9, 'Santiago', 'santiago@agenciabackend.com', 'CNPJ', '193.696.717.1012-20', 'Rua Holandas N 09', '5555-5555', '6'),
(10, 'Marcelo Santos', 'marcelo@backendo5.com', 'CNPJ', '113.426.759./1010-02', 'Rua Walter thome N 10', '5115-1585', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

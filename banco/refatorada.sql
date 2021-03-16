-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 05:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refatorada`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro`
--

CREATE TABLE `cadastro` (
  `idCadastro` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `idLogin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(300) DEFAULT NULL,
  `dia` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `idContato` int(11) NOT NULL,
  `mensagem` text DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `interece` char(1) DEFAULT NULL,
  `identificador` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `idContato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lojacontato`
--

CREATE TABLE `lojacontato` (
  `nome` varchar(200) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `idProdutos` int(11) NOT NULL,
  `produto` varchar(30) DEFAULT NULL,
  `descricao` varchar(400) DEFAULT NULL,
  `precoInicial` float(6,2) DEFAULT NULL,
  `precoFinal` float(6,2) DEFAULT NULL,
  `idTopVenda` int(11) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`idProdutos`, `produto`, `descricao`, `precoInicial`, `precoFinal`, `idTopVenda`, `img`) VALUES
(1, 'Geladeira', 'Geladeira com acabamento em inox', 3500.90, 3200.50, NULL, './imagens/geladeira.jpeg'),
(2, 'Microondas', '  Microondas com acabamento em ferro', 1870.90, 1580.50, NULL, './imagens/2_substituto_microondas.jpg'),
(3, 'Maquina de Lavar', 'Maquina de Lavar com 20 funcoes', 3100.90, 2870.50, NULL, './imagens/2_maquina_lavar_substituto.jpg'),
(4, 'Lava Loucas', 'Lava loucas em inox', 2400.90, 1210.50, NULL, './imagens/carro1.jpg'),
(5, 'Maquina de Lavar', 'Maquina de Lavar com capacidade para 25 Kg', 2740.90, 2700.50, NULL, './imagens/1_substituto_maquina de lavar.jpg'),
(6, 'Fogao com 5 bocas', '  Fogao preto com 5 bocas e forno', 2870.90, 1210.50, NULL, './imagens/carro2.jpg'),
(7, 'Maquina de Lavar', 'Maquina de lavar com 20 funcoes', 3000.70, 2705.90, NULL, './imagens/carro3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idCadastro`),
  ADD KEY `idLogin` (`idLogin`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idContato`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`),
  ADD KEY `idContato` (`idContato`);

--
-- Indexes for table `lojacontato`
--
ALTER TABLE `lojacontato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProdutos`),
  ADD KEY `idTopVenda` (`idTopVenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idCadastro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProdutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`idLogin`) REFERENCES `login` (`idLogin`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idContato`) REFERENCES `contato` (`idContato`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`idTopVenda`) REFERENCES `topvendas` (`idTopVenda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Out-2016 às 13:58
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bsc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetivo`
--

CREATE TABLE IF NOT EXISTS `objetivo` (
`Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descricao` text,
  `DtInicial` date NOT NULL,
  `DtFinal` date NOT NULL,
  `Media` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa`
--

CREATE TABLE IF NOT EXISTS `tarefa` (
`Id` int(11) NOT NULL,
  `IdObjetivo` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descricao` text,
  `Meta` float(10,2) NOT NULL,
  `DtInicio` date NOT NULL,
  `DtFim` date NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `NivelAcesso` int(1) NOT NULL,
  `Ativo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `variaveis`
--

CREATE TABLE IF NOT EXISTS `variaveis` (
`id` int(11) NOT NULL,
  `idTarefa` int(11) NOT NULL,
  `variavel` int(255) NOT NULL,
  `peso` float(10,2) NOT NULL,
  `meta` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objetivo`
--
ALTER TABLE `objetivo`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tarefa`
--
ALTER TABLE `tarefa`
 ADD PRIMARY KEY (`Id`), ADD KEY `IdObjetivo` (`IdObjetivo`), ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `variaveis`
--
ALTER TABLE `variaveis`
 ADD PRIMARY KEY (`id`), ADD KEY `idTarefa` (`idTarefa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objetivo`
--
ALTER TABLE `objetivo`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tarefa`
--
ALTER TABLE `tarefa`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `variaveis`
--
ALTER TABLE `variaveis`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tarefa`
--
ALTER TABLE `tarefa`
ADD CONSTRAINT `FKObjetivo` FOREIGN KEY (`IdObjetivo`) REFERENCES `objetivo` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `FKUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`Id`);

--
-- Limitadores para a tabela `variaveis`
--
ALTER TABLE `variaveis`
ADD CONSTRAINT `variaveis_ibfk_1` FOREIGN KEY (`idTarefa`) REFERENCES `tarefa` (`Id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

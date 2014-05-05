-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 05-Maio-2014 às 21:27
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `albumdacopa`
--
CREATE DATABASE IF NOT EXISTS `albumdacopa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `albumdacopa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(100) NOT NULL,
  `id_figurinha` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_figurinha` (`id_figurinha`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`id`, `id_usuario`, `id_figurinha`) VALUES
(1, 9, 2),
(2, 9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `figurinha`
--

CREATE TABLE IF NOT EXISTS `figurinha` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) DEFAULT NULL,
  `img_url` varchar(100) DEFAULT NULL,
  `posicao` int(100) DEFAULT NULL,
  `id_time` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `figurinha`
--

INSERT INTO `figurinha` (`id`, `label`, `img_url`, `posicao`, `id_time`) VALUES
(1, NULL, '"/foto.jpg"', NULL, NULL),
(2, NULL, '/foto2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idade` int(10) NOT NULL,
  `sexo` int(11) NOT NULL,
  `senha` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `idade`, `sexo`, `senha`) VALUES
(8, 'Felipe', 'Mello', 'felpmel@gmail.com', 29, 0, '1234'),
(9, 'Teste2', 'TesteSobrenome2', 'email2', 22, 0, '12345');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `album_ibfk_2` FOREIGN KEY (`id_figurinha`) REFERENCES `figurinha` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

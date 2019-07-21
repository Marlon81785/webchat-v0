-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql313.epizy.com
-- Tempo de Geração: 24/03/2019 às 10:41:20
-- Versão do Servidor: 5.6.41-84.1
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `epiz_23505110_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `UsrID` smallint(4) NOT NULL AUTO_INCREMENT,
  `UsrNome` text COLLATE utf8_unicode_ci NOT NULL,
  `UsrSenha` text COLLATE utf8_unicode_ci NOT NULL,
  `UsrEmail` text COLLATE utf8_unicode_ci NOT NULL,
  `UsrNvl` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`UsrID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`UsrID`, `UsrNome`, `UsrSenha`, `UsrEmail`, `UsrNvl`) VALUES
(1, 'Marlon Felipe Martins de Oliveira', 'Felipe3822', 'marlon81785@gmail.com', '1'),
(2, 'Ruan guaido', 'ruan123', 'ruan@gmail.com', ''),
(3, 'teste1', 'teste2', 'teste1@gmail.com', ''),
(4, 'Luiz gonzaga', 'luiz123', 'luiz@gmail.com', ''),
(5, 'joao antonio marques e silva', '123456', 'joaoantonio@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

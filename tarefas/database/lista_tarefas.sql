-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Mar-2022 às 01:09
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lista_tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feitas`
--

DROP TABLE IF EXISTS `feitas`;
CREATE TABLE IF NOT EXISTS `feitas` (
  `id` int(11) NOT NULL,
  `data_tarefa` date NOT NULL,
  `hora_tarefa` time NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `situacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

DROP TABLE IF EXISTS `tarefas`;
CREATE TABLE IF NOT EXISTS `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_tarefa` date NOT NULL,
  `hora_tarefa` time NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `data_tarefa`, `hora_tarefa`, `descricao`, `usuario`, `situacao`) VALUES
(5, '2022-02-05', '19:30:00', '01 banner 60x60', 'Carol', 'pronto'),
(6, '2022-05-01', '00:00:00', 'ooasdfasf', 'kia', 'pronto'),
(7, '2022-03-10', '21:07:00', '01 banner 60x80', 'bia', 'pronto'),
(8, '2022-03-11', '21:30:00', '01 banner 60x80', 'Laryssa', NULL),
(9, '2022-03-10', '21:53:00', '05 adesivos 13x15', 'Julin', 'pronto');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

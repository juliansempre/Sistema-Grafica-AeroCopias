-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Mar-2022 às 02:29
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `data_tarefa`, `hora_tarefa`, `descricao`, `usuario`, `situacao`) VALUES
(5, '2022-02-05', '19:30:00', '01 banner 60x60', 'Carol', 'pronto'),
(6, '2022-05-01', '00:00:00', 'ooasdfasf', 'kia', 'pronto'),
(7, '2022-03-10', '21:07:00', '01 banner 60x80', 'bia', 'pronto'),
(8, '2022-03-11', '21:30:00', '01 banner 60x80', 'Laryssa', NULL),
(9, '2022-03-10', '21:53:00', '05 adesivos 13x15', 'Julin', 'pronto'),
(10, '2000-01-01', '00:00:00', '', '', NULL),
(13, '2022-03-12', '12:03:00', 'Aeroporto teste 02', 'bia', 'pronto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefasaroeira`
--

DROP TABLE IF EXISTS `tarefasaroeira`;
CREATE TABLE IF NOT EXISTS `tarefasaroeira` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_tarefa` date NOT NULL,
  `hora_tarefa` time NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefasaroeira`
--

INSERT INTO `tarefasaroeira` (`id`, `data_tarefa`, `hora_tarefa`, `descricao`, `usuario`, `situacao`) VALUES
(10, '2022-03-13', '22:16:00', '01 banner 60x60', 'Saulo', NULL),
(11, '2022-03-12', '22:52:00', 'Aroeira teste', 'Julian', 'pronto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefasarte`
--

DROP TABLE IF EXISTS `tarefasarte`;
CREATE TABLE IF NOT EXISTS `tarefasarte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_tarefa` date NOT NULL,
  `hora_tarefa` time NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefasarte`
--

INSERT INTO `tarefasarte` (`id`, `data_tarefa`, `hora_tarefa`, `descricao`, `usuario`, `situacao`) VALUES
(2, '2022-03-12', '22:54:00', 'Arte teste', 'Julian', 'ENVIADO'),
(3, '2022-03-12', '23:18:00', '01 banner 60x60', 'Saulo', 'COM ALTERAÇAO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

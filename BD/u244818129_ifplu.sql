-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 19/12/2016 às 05:42
-- Versão do servidor: 10.1.16-MariaDB
-- Versão do PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u244818129_ifplu`
--
CREATE DATABASE IF NOT EXISTS `u244818129_ifplu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `u244818129_ifplu`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `aluno`
--

INSERT INTO `aluno` (`id`, `id_turma`, `id_usuario`) VALUES
(1, 6, 82),
(2, 6, 83),
(3, 3, 84),
(4, 9, 85),
(5, 12, 86),
(6, 5, 87),
(7, 5, 88),
(8, 2, 89),
(9, 8, 90),
(10, 11, 91),
(11, 4, 92),
(12, 4, 93),
(13, 1, 94),
(14, 7, 95),
(15, 10, 96),
(16, 6, 1),
(17, 6, 2),
(18, 3, 3),
(19, 9, 4),
(20, 12, 5),
(21, 5, 6),
(22, 5, 7),
(23, 2, 8),
(24, 8, 9),
(25, 11, 10),
(26, 4, 11),
(27, 4, 12),
(28, 1, 13),
(29, 7, 14),
(30, 10, 15);

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivo`
--

DROP TABLE IF EXISTS `arquivo`;
CREATE TABLE `arquivo` (
  `id` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `local` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `arquivo`
--

INSERT INTO `arquivo` (`id`, `id_professor`, `id_turma`, `nome`, `descricao`, `local`) VALUES
(1, 1, 16, 'Grupos Organizacionais', 'PDF para a aula de amanha', '/arquivos/GO.pdf'),
(2, 1, 4, 'GPO', '', '/uploads/GOPR.pdf'),
(3, 1, 1, 'asdasd', NULL, 'asdasd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aula`
--

DROP TABLE IF EXISTS `aula`;
CREATE TABLE `aula` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `conteudo` longtext NOT NULL,
  `id_Disciplina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `aula`
--

INSERT INTO `aula` (`id`, `titulo`, `numero`, `conteudo`, `id_Disciplina`) VALUES
(2, 'Aula 1', '1', 'Conteudo da aula 1', 171);

-- --------------------------------------------------------

--
-- Estrutura para tabela `compartilhamento`
--

DROP TABLE IF EXISTS `compartilhamento`;
CREATE TABLE `compartilhamento` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `id_lembrete` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `compartilhamento`
--

INSERT INTO `compartilhamento` (`id`, `id_usuario`, `id_turma`, `id_lembrete`) VALUES
(1, 1, 16, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `ano` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`, `ano`) VALUES
(1, 'ANIMAIS DE GRANDE PORTE', 3),
(2, 'ANIMAIS DE MEDIO PORTE', 3),
(3, 'ANIMAIS DE PEQUENO PORTE I', 2),
(4, 'ANIMAIS DE PEQUENO PORTE II', 2),
(5, 'ARTES', 1),
(6, 'BIOLOGIA', 1),
(7, 'BIOLOGIA', 2),
(8, 'BIOLOGIA', 3),
(9, 'CARTOGRAFIA BASICA', 2),
(10, 'CONSERVACAO, NUTRICAO E EMBALAGENS DE ALIMENTOS', 1),
(11, 'CULTURAS ANUAIS', 1),
(12, 'CULTURAS PERENES', 1),
(13, 'DINAMICA DA PAISAGEM', 1),
(14, 'ECOLOGIA APLICADA E UNIDADES DE CONSERVACAO', 1),
(15, 'EDUCACAO FISICA', 1),
(16, 'EDUCACAO FISICA', 2),
(17, 'EDUCACAO FISICA', 3),
(18, 'ESPANHOL', 1),
(19, 'ESPANHOL', 2),
(20, 'ESPANHOL', 3),
(21, 'FILOSOFIA', 1),
(22, 'FILOSOFIA', 2),
(23, 'FILOSOFIA', 3),
(24, 'FISICA', 1),
(25, 'FISICA', 2),
(26, 'FISICA', 3),
(27, 'FUNDAMENTOS DE ELETRONICA', 1),
(28, 'FUNDAMENTOS DE INFORMATICA', 1),
(29, 'GEOGRAFIA', 1),
(30, 'GEOGRAFIA', 2),
(31, 'GEOGRAFIA', 3),
(32, 'GESTAO DE TI E QUALIDADE', 3),
(33, 'GESTAO, PLANEJAMENTO E PROJETO', 3),
(34, 'HIDROLOGIA E GESTAO DE RECURSOS HIDRICOS', 1),
(35, 'HISTORIA', 1),
(36, 'HISTORIA', 2),
(37, 'HISTORIA', 3),
(38, 'IDENTIFICACAO DAS ARQUITETURAS E PROJETO DE REDES', 2),
(39, 'INFORMATICA APLICADA', 1),
(40, 'INGLES', 1),
(41, 'INGLES', 2),
(42, 'INGLES', 3),
(43, 'INGLES INSTRUMENTAL', 2),
(44, 'INSTALACAO, CONFIGURACAO E MANUTENCAO DE HARDWARE I', 2),
(45, 'INSTALACAO, CONFIGURACAO E MANUTENCAO DE HARDWARE II', 2),
(46, 'INSTALACAO, CONFIGURACAO E MANUTENCAO DE SERVICOS', 3),
(47, 'INTRODUCAO A METODOLOGIA CIENTIFICA', 2),
(48, 'INTRODUCAO A METODOLOGIA CIENTIFICA E FERRAMENTAS COMPUTACIONAIS', 1),
(49, 'LEGISLACAO E ETICA PROFISSIONAL', 3),
(50, 'LEGISLACAO E ETICA PROFISSIONAL', 3),
(51, 'LEGISLACAO E ETICA PROFISSIONAL E SEGURANCA DO TRABALHO', 1),
(52, 'LITERATURA', 1),
(53, 'LITERATURA', 2),
(54, 'LITERATURA', 3),
(55, 'MANEJO SOLO-AGUA-PLANTA-CLIMA', 2),
(56, 'MATEMATICA', 1),
(57, 'MATEMATICA', 2),
(58, 'MATEMATICA', 3),
(59, 'MECANIZACAO AGRICOLA', 2),
(60, 'METODOLOGIA CIENTIFICA E INFORMATICA APLICADA', 1),
(61, 'MICROBIOLOGIA, HIGIENE E SEGURANCA ALIMENTAR', 1),
(62, 'OLERICULTURA', 1),
(63, 'OPERACAO DE APLICATIVOS E UTILITARIOS', 1),
(64, 'PLANEJAMENTO E GESTAO', 3),
(65, 'PORTUGUES', 1),
(66, 'PORTUGUES', 2),
(67, 'PORTUGUES', 3),
(68, 'PORTUGUES INSTRUMENTAL', 2),
(69, 'PRODUCAO AGROINDUSTRIAL', 3),
(70, 'PROJETO INTEGRADOR I', 1),
(71, 'PROJETO MULTIDISCIPLINAR', 2),
(72, 'PROJETO MULTIDISCIPLINAR', 2),
(73, 'QUIMICA', 1),
(74, 'QUIMICA', 2),
(75, 'QUIMICA', 3),
(76, 'RECURSOS NATURAIS', 1),
(77, 'REDACAO', 1),
(78, 'REDACAO', 3),
(79, 'REDACAO', 2),
(80, 'SISTEMAS OPERACIONAIS', 1),
(81, 'SOCIOLOGIA', 1),
(82, 'SOCIOLOGIA', 2),
(83, 'SOCIOLOGIA', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `id_Disciplina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `grade`
--

INSERT INTO `grade` (`id`, `id_Disciplina`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80),
(81, 81),
(82, 82),
(83, 83);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lembrete`
--

DROP TABLE IF EXISTS `lembrete`;
CREATE TABLE `lembrete` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `concluida` tinyint(1) NOT NULL DEFAULT '0',
  `usuario_id_remetente` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `lembrete`
--

INSERT INTO `lembrete` (`id`, `titulo`, `descricao`, `data`, `hora`, `concluida`, `usuario_id_remetente`) VALUES
(2, 'sdgf', 'sgsg', '2016-10-13', '05:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `usuario_id_destinatario` int(11) NOT NULL,
  `usuario_id_remetente` int(11) NOT NULL,
  `mensagem` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `usuario_id_destinatario`, `usuario_id_remetente`, `mensagem`, `status`) VALUES
(3, 2, 1, 'OlÃ¡!', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ministra`
--

DROP TABLE IF EXISTS `ministra`;
CREATE TABLE `ministra` (
  `id_disciplina` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ministra`
--

INSERT INTO `ministra` (`id_disciplina`, `id_professor`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80),
(81, 81),
(82, 82),
(83, 83);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `professor`
--

INSERT INTO `professor` (`id`, `id_usuario`) VALUES
(1, 16),
(2, 17),
(3, 18),
(4, 19),
(5, 20),
(6, 21),
(7, 22),
(8, 23),
(9, 24),
(10, 25),
(11, 26),
(12, 27),
(13, 28),
(14, 29),
(15, 30),
(16, 31),
(17, 32),
(18, 33),
(19, 34),
(20, 35),
(21, 36),
(22, 37),
(23, 38),
(24, 39),
(25, 40),
(26, 41),
(27, 42),
(28, 43),
(29, 44),
(30, 45),
(31, 46),
(32, 47),
(33, 48),
(34, 49),
(35, 50),
(36, 51),
(37, 52),
(38, 53),
(39, 54),
(40, 55),
(41, 56),
(42, 57),
(43, 58),
(44, 59),
(45, 60),
(46, 61),
(47, 62),
(48, 63),
(49, 64),
(50, 65),
(51, 66),
(52, 67),
(53, 68),
(54, 69),
(55, 70),
(56, 71),
(57, 72),
(58, 73),
(59, 74),
(60, 75),
(61, 76),
(62, 77),
(63, 78),
(64, 79),
(65, 80),
(66, 81),
(67, 82),
(68, 83),
(69, 84),
(70, 85),
(71, 86),
(72, 87),
(73, 88),
(74, 89),
(75, 90),
(76, 91),
(77, 92),
(78, 93),
(79, 94),
(80, 95),
(81, 96),
(82, 97),
(83, 98);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `anofinal` int(11) NOT NULL,
  `anoatual` int(11) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `sigla` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `turma`
--

INSERT INTO `turma` (`id`, `anofinal`, `anoatual`, `curso`, `grade_id`, `sigla`) VALUES
(1, 2016, 3, 'INFORMATICA', 0, 'C'),
(2, 2017, 2, 'INFORMATICA', 0, 'C'),
(3, 2018, 1, 'INFORMATICA', 0, 'C'),
(4, 2016, 3, 'AGROPECUARIA', 1, 'A'),
(5, 2017, 2, 'AGROPECUARIA', 1, 'B'),
(6, 2018, 1, 'AGROPECUARIA', 0, 'B'),
(7, 2016, 3, 'MEIOAMBIENTE', 0, 'D'),
(8, 2017, 2, 'MEIOAMBIENTE', 0, 'D'),
(9, 2018, 1, 'MEIOAMBIENTE', 0, 'D'),
(10, 2016, 3, 'ALIMENTOS', 0, 'E'),
(11, 2017, 2, 'ALIMENTOS', 0, 'E'),
(12, 2018, 1, 'ALIMENTOS', 0, 'E');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sessao` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `email`, `senha`, `foto`, `sessao`) VALUES
(1, 'aluno1a', '12345678912', 'aluno1a@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(2, 'aluno1b', '12345678912', 'aluno1b@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(3, 'aluno1c', '12345678912', 'aluno1c@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(4, 'aluno1d', '12345678912', 'aluno1d@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(5, 'aluno1e', '12345678912', 'aluno1e@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(6, 'aluno2a', '12345678912', 'aluno2a@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(7, 'aluno2b', '12345678912', 'aluno2b@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(8, 'aluno2c', '12345678912', 'aluno2c@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(9, 'aluno2d', '12345678912', 'aluno2d@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(10, 'aluno2e', '12345678912', 'aluno2e@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(11, 'aluno3a', '12345678912', 'aluno3a@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(12, 'aluno3b', '12345678912', 'aluno3b@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(13, 'aluno3c', '12345678912', 'aluno3c@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(14, 'aluno3d', '12345678912', 'aluno3d@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(15, 'aluno3e', '12345678912', 'aluno3e@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(16, 'professoranimaisdegrandeporte', '12345678912', 'professoranimaisdegrandeporte@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(17, 'professoranimaisdemedioporte', '12345678912', 'professoranimaisdemedioporte@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(18, 'professoranimaisdepequenoportei', '12345678912', 'professoranimaisdepequenoportei@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(19, 'professoranimaisdepequenoporteii', '12345678912', 'professoranimaisdepequenoporteii@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(20, 'professorartes', '12345678912', 'professorartes@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(21, 'professorbiologia1', '12345678912', 'professorbiologia1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(22, 'professorbiologia2', '12345678912', 'professorbiologia2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(23, 'professorbiologia3', '12345678912', 'professorbiologia3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(24, 'professorcartografiabasica', '12345678912', 'professorcartografiabasica@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(25, 'professorconservacaonutricaoeembalagensdealimentos', '12345678912', 'professorconservacaonutricaoeembalagensdealimentos@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(26, 'professorculturasanuais', '12345678912', 'professorculturasanuais@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(27, 'professorculturasperenes', '12345678912', 'professorculturasperenes@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(28, 'professordinamicadapaisagem', '12345678912', 'professordinamicadapaisagem@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(29, 'professorecologiaaplicadaeunidadesdeconservacao', '12345678912', 'professorecologiaaplicadaeunidadesdeconservacao@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(30, 'professoreducacaofisica1', '12345678912', 'professoreducacaofisica1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(31, 'professoreducacaofisica2', '12345678912', 'professoreducacaofisica2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(32, 'professoreducacaofisica3', '12345678912', 'professoreducacaofisica3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(33, 'professorespanhol1', '12345678912', 'professorespanhol1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(34, 'professorespanhol2', '12345678912', 'professorespanhol2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(35, 'professorespanhol3', '12345678912', 'professorespanhol3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(36, 'professorfilosofia1', '12345678912', 'professorfilosofia1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(37, 'professorfilosofia2', '12345678912', 'professorfilosofia2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(38, 'professorfilosofia3', '12345678912', 'professorfilosofia3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(39, 'professorfisica1', '12345678912', 'professorfisica1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(40, 'professorfisica2', '12345678912', 'professorfisica2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(41, 'professorfisica3', '12345678912', 'professorfisica3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(42, 'professorfundamentosdeeletronica', '12345678912', 'professorfundamentosdeeletronica@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(43, 'professorfundamentosdeinformatica', '12345678912', 'professorfundamentosdeinformatica@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(44, 'professorgeografia1', '12345678912', 'professorgeografia1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(45, 'professorgeografia2', '12345678912', 'professorgeografia2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(46, 'professorgeografia3', '12345678912', 'professorgeografia3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(47, 'professorgestaodetiequalidade', '12345678912', 'professorgestaodetiequalidade@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(48, 'professorgestaoplanejamentoeprojeto', '12345678912', 'professorgestaoplanejamentoeprojeto@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(49, 'professorhidrologiaegestaoderecursoshidricos', '12345678912', 'professorhidrologiaegestaoderecursoshidricos@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(50, 'professorhistoria1', '12345678912', 'professorhistoria1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(51, 'professorhistoria2', '12345678912', 'professorhistoria2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(52, 'professorhistoria3', '12345678912', 'professorhistoria3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(53, 'professoridentificacaodasarquiteturaseprojetoderedes', '12345678912', 'professoridentificacaodasarquiteturaseprojetoderedes@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(54, 'professorinformaticaaplicada', '12345678912', 'professorinformaticaaplicada@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(55, 'professoringles1', '12345678912', 'professoringles1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(56, 'professoringles2', '12345678912', 'professoringles2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(57, 'professoringles3', '12345678912', 'professoringles3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(58, 'professoringlesinstrumental', '12345678912', 'professoringlesinstrumental@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(59, 'professorinstalacaoconfiguracaoemanutencaodehardwarei', '12345678912', 'professorinstalacaoconfiguracaoemanutencaodehardwarei@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(60, 'professorinstalacaoconfiguracaoemanutencaodehardwareii', '12345678912', 'professorinstalacaoconfiguracaoemanutencaodehardwareii@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(61, 'professorinstalacaoconfiguracaoemanutencaodeservicos', '12345678912', 'professorinstalacaoconfiguracaoemanutencaodeservicos@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(62, 'professorintroducaoametodologiacientifica', '12345678912', 'professorintroducaoametodologiacientifica@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(63, 'professorintroducaoametodologiacientificaeferramentascomputacionais', '12345678912', 'professorintroducaoametodologiacientificaeferramentascomputacionais@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(64, 'professorlegislacaoeeticainfo', '12345678912', 'professorlegislacaoeeticainfo@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(65, 'professorlegislacaoeeticaagro', '12345678912', 'professorlegislacaoeeticaagro@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(66, 'professorlegislacaoeeticaprofissionalesegurancadotrabalho', '12345678912', 'professorlegislacaoeeticaprofissionalesegurancadotrabalho@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(67, 'professorliteratura1', '12345678912', 'professorliteratura1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(68, 'professorliteratura2', '12345678912', 'professorliteratura2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(69, 'professorliteratura3', '12345678912', 'professorliteratura3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(70, 'professormanejosolo', '12345678912', 'professormanejosolo@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(71, 'professormatematica1', '12345678912', 'professormatematica1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(72, 'professormatematica2', '12345678912', 'professormatematica2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(73, 'professormatematica3', '12345678912', 'professormatematica3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(74, 'professormecanizacaoagricola', '12345678912', 'professormecanizacaoagricola@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(75, 'professormetodologiacientificaeinformaticaaplicada', '12345678912', 'professormetodologiacientificaeinformaticaaplicada@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(76, 'professormicrobiologiahigieneesegurancaalimentar', '12345678912', 'professormicrobiologiahigieneesegurancaalimentar@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(77, 'professorolericultura', '12345678912', 'professorolericultura@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(78, 'professoroperacaodeaplicativoseutilitarios', '12345678912', 'professoroperacaodeaplicativoseutilitarios@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(79, 'professorplanejamentoegestao', '12345678912', 'professorplanejamentoegestao@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(80, 'professorportugues1', '12345678912', 'professorportugues1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(81, 'professorportugues2', '12345678912', 'professorportugues2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(82, 'professorportugues3', '12345678912', 'professorportugues3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(83, 'professorportuguesinstrumental', '12345678912', 'professorportuguesinstrumental@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(84, 'professorproducaoagroindustrial', '12345678912', 'professorproducaoagroindustrial@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(85, 'professorprojetointegradori', '12345678912', 'professorprojetointegradori@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(86, 'professorprojetomultidisciplinarinfo', '12345678912', 'professorprojetomultidisciplinarinfo@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(87, 'professorprojetomultidisciplinaragro', '12345678912', 'professorprojetomultidisciplinaragro@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(88, 'professorquimica1', '12345678912', 'professorquimica1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(89, 'professorquimica2', '12345678912', 'professorquimica2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(90, 'professorquimica3', '12345678912', 'professorquimica3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(91, 'professorrecursosnaturais', '12345678912', 'professorrecursosnaturais@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(92, 'professorredacao1', '12345678912', 'professorredacao1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(93, 'professorredacao2', '12345678912', 'professorredacao2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(94, 'professorredacao3', '12345678912', 'professorredacao3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(95, 'professorsistemasoperacionais', '12345678912', 'professorsistemasoperacionais@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(96, 'professorsociologia1', '12345678912', 'professorsociologia1@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(97, 'professorsociologia2', '12345678912', 'professorsociologia2@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0),
(98, 'professorsociologia3', '12345678912', 'professorsociologia3@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', NULL, 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`,`id_turma`,`id_usuario`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_Aluno_Turma_idx` (`id_turma`),
  ADD KEY `fk_Aluno_Usuario1_idx` (`id_usuario`);

--
-- Índices de tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`id`,`id_professor`,`id_turma`),
  ADD KEY `fk_Arquivo_Professor1_idx` (`id_professor`),
  ADD KEY `fk_Arquivo_Turma1_idx` (`id_turma`);

--
-- Índices de tabela `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_id_Disciplina` (`id_Disciplina`);

--
-- Índices de tabela `compartilhamento`
--
ALTER TABLE `compartilhamento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD UNIQUE KEY `id_turma` (`id_turma`),
  ADD UNIQUE KEY `id_lembrete` (`id_lembrete`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`,`id_Disciplina`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_Grade_Disciplina1_idx` (`id_Disciplina`);

--
-- Índices de tabela `lembrete`
--
ALTER TABLE `lembrete`
  ADD PRIMARY KEY (`id`,`usuario_id_remetente`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_Lembrete_Usuario2_idx` (`usuario_id_remetente`);

--
-- Índices de tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`,`usuario_id_destinatario`,`usuario_id_remetente`),
  ADD KEY `fk_Usuario_has_Usuario_Usuario2_idx` (`usuario_id_remetente`),
  ADD KEY `fk_Usuario_has_Usuario_Usuario1_idx` (`usuario_id_destinatario`);

--
-- Índices de tabela `ministra`
--
ALTER TABLE `ministra`
  ADD PRIMARY KEY (`id_disciplina`,`id_professor`),
  ADD KEY `fk_Disciplina_has_Professor_Professor1_idx` (`id_professor`),
  ADD KEY `fk_Disciplina_has_Professor_Disciplina1_idx` (`id_disciplina`);

--
-- Índices de tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`,`id_usuario`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_Professor_Usuario1_idx` (`id_usuario`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de tabela `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `aula`
--
ALTER TABLE `aula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `compartilhamento`
--
ALTER TABLE `compartilhamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de tabela `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de tabela `lembrete`
--
ALTER TABLE `lembrete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

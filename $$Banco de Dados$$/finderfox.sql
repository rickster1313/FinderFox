-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2018 às 04:14
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finderfox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `id_notificacao` int(11) NOT NULL,
  `lida` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `origem_id` int(11) NOT NULL,
  `notificacao` varchar(220) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notificacao`
--

INSERT INTO `notificacao` (`id_notificacao`, `lida`, `user_id`, `origem_id`, `notificacao`, `tipo`) VALUES
(2, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(3, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(4, 0, 6, 13, 'VocÃª possui uma nova mensagem!', 0),
(5, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(6, 0, 13, 6, 'VocÃª possui uma nova mensagem!', 0),
(7, 0, 12, 6, 'VocÃª possui uma nova mensagem!', 0),
(8, 0, 12, 6, 'VocÃª possui uma nova mensagem!', 0),
(9, 0, 14, 13, 'VocÃª possui uma nova mensagem!', 0),
(10, 0, 13, 14, 'VocÃª possui uma nova mensagem!', 0),
(11, 0, 14, 13, 'VocÃª possui uma nova mensagem!', 0),
(12, 0, 13, 14, 'VocÃª possui uma nova mensagem!', 0),
(13, 0, 14, 13, 'VocÃª possui uma nova mensagem!', 0),
(14, 0, 14, 13, 'VocÃª possui uma nova mensagem!', 0),
(15, 0, 14, 12, 'VocÃª possui uma nova mensagem!', 0),
(16, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(17, 0, 14, 12, 'VocÃª possui uma nova mensagem!', 0),
(18, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(19, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(20, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(21, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(22, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(23, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(24, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(25, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(26, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(27, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(28, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(29, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(30, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(31, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(32, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(33, 0, 14, 12, 'VocÃª possui uma nova mensagem!', 0),
(34, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(35, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(36, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(37, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(38, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(39, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(40, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(41, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(42, 0, 12, 14, 'VocÃª possui uma nova mensagem!', 0),
(43, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(44, 0, 13, 14, 'VocÃª possui uma nova mensagem!', 0),
(45, 0, 14, 13, 'VocÃª possui uma nova mensagem!', 0),
(46, 0, 6, 12, 'VocÃª possui uma nova mensagem!', 0),
(47, 0, 12, 6, 'VocÃª possui uma nova mensagem!', 0),
(48, 0, 12, 6, 'VocÃª possui uma nova mensagem!', 0),
(49, 0, 12, 6, 'VocÃª possui uma nova mensagem!', 0),
(50, 0, 12, 6, 'VocÃª possui uma nova mensagem!', 0),
(51, 0, 12, 6, 'VocÃª possui uma nova mensagem!', 0),
(52, 0, 6, 13, 'VocÃª possui uma nova mensagem!', 0),
(53, 0, 6, 13, 'VocÃª possui uma nova mensagem!', 0),
(54, 0, 6, 13, 'VocÃª possui uma nova mensagem!', 0),
(55, 0, 16, 12, 'VocÃª possui uma nova mensagem!', 0),
(56, 0, 12, 16, 'VocÃª possui uma nova mensagem!', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_avs`
--

CREATE TABLE `tbl_avs` (
  `id_av` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` varchar(220) NOT NULL,
  `nome_av` varchar(220) NOT NULL,
  `slogan_av` varchar(550) NOT NULL,
  `logo_av` varchar(220) NOT NULL,
  `categoria` varchar(220) NOT NULL,
  `func` varchar(220) NOT NULL,
  `palavras_chave` varchar(550) NOT NULL,
  `img_home_active` varchar(50) NOT NULL DEFAULT 'no',
  `img_home` varchar(220) NOT NULL,
  `part1_active` varchar(50) NOT NULL DEFAULT 'yes',
  `part1_title` varchar(110) NOT NULL DEFAULT 'Features you love',
  `part1_nome1` varchar(110) NOT NULL DEFAULT 'Simple',
  `part1_text1` varchar(220) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque',
  `part1_nome2` varchar(110) DEFAULT 'Customize',
  `part1_text2` varchar(220) DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque',
  `part1_nome3` varchar(110) DEFAULT 'Secure',
  `part1_text3` varchar(220) DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque',
  `part2_active` varchar(50) NOT NULL DEFAULT 'yes',
  `part2_nome1` varchar(110) NOT NULL DEFAULT 'Crie sua conta',
  `part2_text1` varchar(220) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem',
  `part2_nome2` varchar(110) DEFAULT 'Compartilhe com seus amigos',
  `part2_text2` varchar(220) DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem',
  `part2_nome3` varchar(110) DEFAULT 'Viva la vida',
  `part2_text3` varchar(220) DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem',
  `part2_img` varchar(220) DEFAULT NULL,
  `galery_active` varchar(50) NOT NULL DEFAULT 'no',
  `galery_title` varchar(110) NOT NULL,
  `fotos` varchar(550) NOT NULL,
  `tipos` varchar(220) NOT NULL,
  `tipos_val` varchar(660) NOT NULL,
  `created` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_avs`
--

INSERT INTO `tbl_avs` (`id_av`, `user_id`, `url`, `nome_av`, `slogan_av`, `logo_av`, `categoria`, `func`, `palavras_chave`, `img_home_active`, `img_home`, `part1_active`, `part1_title`, `part1_nome1`, `part1_text1`, `part1_nome2`, `part1_text2`, `part1_nome3`, `part1_text3`, `part2_active`, `part2_nome1`, `part2_text1`, `part2_nome2`, `part2_text2`, `part2_nome3`, `part2_text3`, `part2_img`, `galery_active`, `galery_title`, `fotos`, `tipos`, `tipos_val`, `created`) VALUES
(1, 6, 'empre-ambiental', 'empre ambiental', 'meu solgan eu ligando', 'logo-empre-ambiental.jpeg', '', '3', '', 'no', '', 'yes', 'Features you love', 'Simple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Customize', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Secure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'yes', 'Crie sua conta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', 'Compartilhe com seus amigos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', 'Viva la vida', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', NULL, 'no', '', '', '', '', '2018-11-17 20:29:01'),
(2, 14, 'rique', 'rique', 'ahhaahahahahahahah que nojo', 'logo-rique.jpeg', '', '3', '', 'no', '', 'yes', 'Features you love', 'Simple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Customize', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Secure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'yes', 'Crie sua conta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', 'Compartilhe com seus amigos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', 'Viva la vida', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', NULL, 'no', '', '', '', '', '2018-11-19 16:10:50'),
(3, 16, 'disgraca', 'disgraca', 'ahhaahahahahahahah que nojo desse cÃ³digo', 'logo-disgraca.jpeg', '', '3', '', 'yes', 'photoHome-16-26-11-2018-03-33-29.jpeg', 'no', 'Features you love13', 'Simple13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque13', 'Customize13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque13', 'Secure13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque13', 'no', 'Crie sua conta13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem  13  ', 'Compartilhe com seus amigos13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem13', 'Viva la vida13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem13', 'photoSobre-16-26-11-2018-03-33-29.jpeg', 'yes', 'preocupa nao po', 'photoGalery-16-26-11-2018-03-50-37-0.jpeg$!$photoGalery-16-26-11-2018-03-50-37-1.jpeg$!$photoGalery-16-26-11-2018-03-50-37-2.jpeg$!$photoGalery-16-26-11-2018-03-50-51-0.jpeg', 'youtube', 'https://www.youtube.com/', '2018-11-25 23:14:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id_msg` int(11) NOT NULL,
  `remetente_id` int(11) NOT NULL,
  `destinatario_id` int(11) NOT NULL,
  `hora` datetime NOT NULL,
  `msg` text NOT NULL,
  `lida` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_chat`
--

INSERT INTO `tbl_chat` (`id_msg`, `remetente_id`, `destinatario_id`, `hora`, `msg`, `lida`) VALUES
(4, 12, 6, '2018-11-18 00:41:21', 'cuasda', 1),
(5, 12, 6, '2018-11-18 18:24:07', 'oi tudo bom bb', 1),
(6, 13, 6, '2018-11-18 18:26:02', 'petunia delivia de ere\n', 1),
(7, 12, 6, '2018-11-18 18:46:54', 'cocoa beans\n', 1),
(8, 6, 12, '2018-11-18 21:03:28', 'wehtjae', 1),
(9, 6, 12, '2018-11-18 21:03:32', 'wehtjaelalal', 1),
(10, 6, 12, '2018-11-18 21:03:53', 'Teste', 1),
(11, 6, 12, '2018-11-18 21:04:40', 'h9uhuhhguhjghuh\\shgaoepgagahgÃ§jÃ§hggjegÃ§  reagjkaenÃ§kgjaer', 1),
(12, 6, 13, '2018-11-18 21:06:19', 'Acabou?', 1),
(13, 6, 12, '2018-11-18 21:10:52', 'jhjhj', 1),
(14, 6, 12, '2018-11-18 21:25:44', '123456789123456789123456789123456789123456789123456789123456789', 1),
(15, 6, 13, '2018-11-18 21:34:13', 'coe rapÃ¡', 1),
(16, 6, 13, '2018-11-18 21:36:27', 'coe rapÃ¡', 1),
(17, 6, 12, '2018-11-19 02:58:45', 'fhbdkjscmgh WENABFSDNUWEN WEIBFN WEFH WEWEQD ', 1),
(18, 6, 12, '2018-11-19 02:59:09', 'PNEUMONULTRAMICROSILICOVULCANICANIOTICO', 1),
(19, 13, 14, '2018-11-19 16:11:49', 'ahh que nojo', 1),
(20, 14, 13, '2018-11-19 16:12:11', 'vai te fude rapÃ¡', 1),
(21, 13, 14, '2018-11-19 16:12:44', 'seu cu', 1),
(22, 14, 13, '2018-11-19 16:12:59', 'ahhhhh que foda', 1),
(23, 13, 14, '2018-11-19 16:13:37', 'que', 1),
(24, 13, 14, '2018-11-19 16:18:19', 'teste', 1),
(25, 12, 14, '2018-11-19 16:18:59', 'pararaa', 1),
(26, 14, 12, '2018-11-19 16:19:17', 'olÃ¡ amigo', 1),
(27, 12, 14, '2018-11-19 16:19:47', 'kkkkkk', 1),
(28, 14, 12, '2018-11-19 16:19:59', '<3', 1),
(29, 14, 12, '2018-11-19 16:25:42', 'vj', 1),
(30, 14, 12, '2018-11-19 16:26:12', 'asbfbafaf', 1),
(31, 14, 12, '2018-11-19 16:27:16', 'fidurx', 1),
(32, 14, 12, '2018-11-19 16:27:16', '', 1),
(33, 14, 12, '2018-11-19 16:27:32', 'fgjgfjgf', 1),
(34, 14, 12, '2018-11-19 16:27:40', 'Olaa', 1),
(35, 14, 12, '2018-11-19 16:27:48', 'LALALAL', 1),
(36, 14, 12, '2018-11-19 16:28:10', 'LALALA', 1),
(37, 14, 12, '2018-11-19 16:28:23', 'TESTE', 1),
(38, 14, 12, '2018-11-19 16:29:01', 'BLz', 1),
(39, 12, 6, '2018-11-19 16:46:19', '', 1),
(40, 12, 6, '2018-11-19 16:46:19', '', 1),
(41, 12, 6, '2018-11-19 16:46:19', '', 1),
(42, 14, 12, '2018-11-19 16:51:50', 'j', 1),
(43, 12, 14, '2018-11-19 16:51:59', 'h', 1),
(44, 12, 6, '2018-11-19 16:52:11', 'hg', 1),
(45, 12, 6, '2018-11-19 16:52:47', '', 1),
(46, 12, 6, '2018-11-19 16:52:50', '  ', 1),
(47, 12, 6, '2018-11-19 16:52:55', '', 1),
(48, 12, 6, '2018-11-19 16:53:00', '  ', 1),
(49, 14, 12, '2018-11-19 16:53:06', '', 1),
(50, 14, 12, '2018-11-19 16:53:11', '  ', 1),
(51, 14, 12, '2018-11-19 16:57:30', ' ', 1),
(52, 14, 12, '2018-11-19 16:58:08', ' ', 1),
(53, 12, 6, '2018-11-19 17:04:20', '  ', 1),
(54, 14, 13, '2018-11-19 17:08:50', 'man, eu amo a Ana', 1),
(55, 13, 14, '2018-11-19 17:09:22', 'sai dessa vey', 1),
(56, 12, 6, '2018-11-22 16:22:30', 'oi bb', 1),
(57, 6, 12, '2018-11-22 16:24:44', 'oi nenem', 1),
(58, 6, 12, '2018-11-22 16:24:56', 'turu bom?', 1),
(59, 6, 12, '2018-11-22 16:25:02', 'rsrs', 1),
(60, 6, 12, '2018-11-22 16:25:24', 'rara', 1),
(61, 6, 12, '2018-11-22 16:25:26', 'riri', 1),
(62, 13, 6, '2018-11-22 16:25:48', 'hihi', 1),
(63, 13, 6, '2018-11-22 16:25:55', 'teste', 1),
(64, 13, 6, '2018-11-22 16:25:57', 'ola', 1),
(65, 12, 16, '2018-11-26 01:13:39', 'eae gurizada', 1),
(66, 16, 12, '2018-11-26 01:14:14', 'gurizada teu cu', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_endereco`
--

CREATE TABLE `tbl_endereco` (
  `id_end` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `rua` varchar(220) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(220) NOT NULL,
  `numero` varchar(220) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `active` varchar(20) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL,
  `raio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_endereco`
--

INSERT INTO `tbl_endereco` (`id_end`, `user_id`, `cep`, `rua`, `estado`, `cidade`, `numero`, `nome`, `active`, `lat`, `lon`, `raio`) VALUES
(21, 6, '68911-045', 'Avenida Rio Araguaia', 'AP', 'MacapÃ¡', '232', 'amapa', 'sim', '', '', 'global'),
(22, 6, '13236-184', 'Rua Arapongas', 'SP', 'Campo Limpo Paulista', '452', 'luciano', 'sim', '-23.2122063', '-46.7999641', 'global'),
(23, 6, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '545', 'Riquelme', 'sim', '-23.2291995', '-46.7715631', 'global'),
(24, 6, '13238-094', 'Rua Teodoro Feliciano de Moraes', 'SP', 'Campo Limpo Paulista', '232', 'Sla', 'sim', '-23.2274655', '-46.7794261', 'global'),
(25, 14, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '304', 'principal', 'sim', '-23.2291995', '-46.7715631', 'global'),
(26, 15, '13236-184', 'Rua Arapongas', 'SP', 'Campo Limpo Paulista', '123', 'principal', 'nao', NULL, NULL, ''),
(34, 16, '69312-531', 'Rua IdÃ¡lia Soares Maduro', 'RR', 'Boa Vista', '12', 'VOCE FOI', 'sim', '2.7948212', '-60.70659649999999', '99999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_funcoes`
--

CREATE TABLE `tbl_funcoes` (
  `id_func` int(11) NOT NULL,
  `nome_func` varchar(220) NOT NULL,
  `descricao` varchar(660) NOT NULL,
  `tipo_func` varchar(110) NOT NULL,
  `status_func` varchar(110) NOT NULL,
  `created` datetime NOT NULL,
  `href` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_funcoes`
--

INSERT INTO `tbl_funcoes` (`id_func`, `nome_func`, `descricao`, `tipo_func`, `status_func`, `created`, `href`) VALUES
(1, 'agendamento', '', 'sistema', 'ativo', '2018-09-05 00:00:00', 'agendar'),
(2, 'formulário de contato', '', 'contato', 'ativo', '2018-09-05 00:00:00', ''),
(3, 'chat', '', 'comunicacao', 'ativo', '2018-09-05 00:00:00', 'chat'),
(4, 'divulgacao', '', 'comunicacao', 'ativo', '2018-09-05 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `nvl_acesso` varchar(50) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `CPF_CNPJ` varchar(220) DEFAULT NULL,
  `telefone` varchar(220) NOT NULL,
  `img` varchar(220) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nome`, `nvl_acesso`, `email`, `senha`, `CPF_CNPJ`, `telefone`, `img`, `status`, `created`, `modified`) VALUES
(6, 'empresario 1', 'empresario', 'empre', '$2y$10$ji0v6oAEKEJEV2qz.tGdPO3fe9mvxig3rp6uBVB8u5ouRSv5zXe5C', '23.423.452/2342-34', '(67) 567567565', '', 0, '2018-08-03 08:22:05', NULL),
(12, 'usuario1', 'usuario', 'user', '$2y$10$ji0v6oAEKEJEV2qz.tGdPO3fe9mvxig3rp6uBVB8u5ouRSv5zXe5C', '123.242.135-12', '(21) 323123123', '', 0, '2018-08-13 02:15:25', NULL),
(13, 'luciano', 'usuario', 'user2', '$2y$10$702IB5svEKGU6apnZMBtcOP0kxR8SyvZFNxIS/ZuB5Soh/84wBBzK', '123.141.242-14', '(13) 132131232', '', 0, '2018-11-18 18:25:13', NULL),
(14, 'riquelme', 'empresario', 'r', '$2y$10$hYfgOi37KvRynEtsvKkkS.Pdkaf7zFQClFuZiYLNP812ycvvGt7Re', '12.345.654/3212-34', '(23) 412343212', '', 0, '2018-11-19 16:09:07', NULL),
(15, '   h', 'empresario', 'k@g.h', '$2y$10$gWXgvn5O18W/e0MroI.p4eN57B6adXMnukRjJY1oBkil3zsvy1wV2', '777.777.777-77', '(77) 777777777', '', 0, '2018-11-19 17:23:24', NULL),
(16, 'aiia iaiiii', 'empresario', 'fudeu@gmail.com', '$2y$10$YjWa4xb0AH68XUDk0hPRPOoka8NOtPn9GtD192J7PLXqvJ5lcRyN.', '453.453.537-87', '(78) 63753753', 'assets/images/user_icon-icons.com_57997.png', 0, '2018-11-25 23:08:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`id_notificacao`);

--
-- Indexes for table `tbl_avs`
--
ALTER TABLE `tbl_avs`
  ADD PRIMARY KEY (`id_av`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id_msg`);

--
-- Indexes for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  ADD PRIMARY KEY (`id_end`);

--
-- Indexes for table `tbl_funcoes`
--
ALTER TABLE `tbl_funcoes`
  ADD PRIMARY KEY (`id_func`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `id_notificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_avs`
--
ALTER TABLE `tbl_avs`
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_funcoes`
--
ALTER TABLE `tbl_funcoes`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

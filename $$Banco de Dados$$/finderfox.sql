-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2018 às 05:09
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
(2, 1, 'ambiente-do-empre', 'ambiente do empre', 'Esse Ã© o slogan do AV do empre', 'logo-ambiente-do-empre.jpeg', '', '3', '', 'yes', 'photoHome-1-30-11-2018-04-45-19.jpeg', 'yes', 'Fatos dos AVs', 'Simples', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Personalizavel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Seguro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'no', 'Crie sua conta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem ', 'Compartilhe com seus amigos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', 'Viva la vida', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', NULL, 'yes', 'Galeria do empre', 'photoGalery-1-30-11-2018-04-46-14-0.jpeg$!$photoGalery-1-30-11-2018-04-46-14-1.jpeg$!$photoGalery-1-30-11-2018-04-46-14-2.jpeg', 'youtube,face', 'https://www.youtube.com/$!$https://www.facebook.com/', '2018-11-30 01:45:08');

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
(1, 1, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '304', 'principal', 'sim', '-23.2291995', '-46.77156309999999', '75'),
(2, 1, '13238-094', 'Rua Teodoro Feliciano de Moraes', 'SP', 'Campo Limpo Paulista', '131', 'VOCE FOI2', 'sim', '-23.2274655', '-46.77942609999999', 'global');

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
(2, 'formulario de contato', '', 'contato', 'ativo', '2018-09-05 00:00:00', ''),
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
(1, 'empresario', 'empresario', 'empre', '$2y$10$oUOJRMja5YULHokGFrXaMuWduRgvuoTjMCjfBqZEXhU8lQ1BuqMwC', '12.312.312/3123-12', '(12) 312312313', 'assets/images/user_icon-icons.com_57997.png', 0, '2018-11-30 01:31:22', NULL),
(4, 'usuario', 'usuario', 'user', '$2y$10$QVYyMbH7iPoePlbhRi0IourWEC4XmGve/2n/dzv8WHDmRYfyETEt.', '213.423.423-42', '(12) 313423423', 'assets/images/user_icon-icons.com_57997.png', 0, '2018-11-30 01:54:06', NULL);

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
  MODIFY `id_notificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_avs`
--
ALTER TABLE `tbl_avs`
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_funcoes`
--
ALTER TABLE `tbl_funcoes`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

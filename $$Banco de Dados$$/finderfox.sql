-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Ago-2018 às 01:13
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
  `func` varchar(5555) NOT NULL,
  `palavras_chave` varchar(550) NOT NULL,
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

INSERT INTO `tbl_avs` (`id_av`, `user_id`, `url`, `nome_av`, `slogan_av`, `logo_av`, `categoria`, `func`, `palavras_chave`, `img_home`, `part1_active`, `part1_title`, `part1_nome1`, `part1_text1`, `part1_nome2`, `part1_text2`, `part1_nome3`, `part1_text3`, `part2_active`, `part2_nome1`, `part2_text1`, `part2_nome2`, `part2_text2`, `part2_nome3`, `part2_text3`, `part2_img`, `galery_active`, `galery_title`, `fotos`, `tipos`, `tipos_val`, `created`) VALUES
(1, 6, 'empre', 'empre', 'slogan de um empresario aleatÃ³rio', 'logo-empre.png', 'alimentacao', '', '', '', 'yes', 'Features you loveee', 'Simple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Customize', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Secure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'yes', 'Crie sua conta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem	', 'Compartilhe com seus amigos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem	', 'Viva la vida', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem	', NULL, 'no', 'Galeria', 'screen1.jpg$!$screen3.jpg$!$screen2.jpg', 'youtube,face', 'https://www.youtube.com/$!$https://www.facebook.com/', ''),
(4, 13, 'lolzeiros', 'lolzeiros BR', 'amor Ã© como o vento, estÃ¡ sempre ao seu lado', 'logo-lolzeiros-BR.jpeg', '', '', '', '', 'no', 'Features you love', 'Simple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Customize', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'Secure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque', 'yes', 'Crie sua conta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', 'Compartilhe com seus amigos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', 'Viva la vida', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem', NULL, 'no', '', '', '', '', '2018-08-18 20:06:14');

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
(6, 10, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '15', 'fulano02', 'nao', NULL, NULL, ''),
(9, 6, '13238-094', 'Rua Teodoro Feliciano de Moraes', 'SP', 'Campo Limpo Paulista', '232', 'secundario2', 'sim', '-23.2274655', '-46.7794261', 'global'),
(10, 10, '05785-020', 'Rua Armando Erse Figueiredo', 'SP', 'SÃ£o Paulo', '23', 'sao paulo 1', 'sim', '-23.6267112', '-46.7688442', 'global'),
(14, 11, '05785-200', 'Rua Siriema', 'SP', 'SP', '123', 'principal', 'nao', NULL, NULL, ''),
(17, 10, '03047-000', 'Rua 21 de Abril', 'SP', 'SÃ£o Paulo', '21', 'bras', 'sim', '-23.5427884', '-46.6076459', '70'),
(18, 13, '13238-094', 'Rua Teodoro Feliciano de Moraes', 'Campo Limpo Paulista', 'SP', '232', 'principal', 'sim', '-23.2274655', '-46.7794261', '100');

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
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nome`, `nvl_acesso`, `email`, `senha`, `CPF_CNPJ`, `telefone`, `status`, `created`, `modified`) VALUES
(6, 'empresario', 'empresario', 'empre', '$2y$10$ur7mbGCxpLnNEirAYnI2ue0C3wra.TuH97l30fg5OGlxXi.MH5wcy', '23.423.452/2342-34', '(67) 567567565', 0, '2018-08-03 08:22:05', NULL),
(10, 'empresario2', 'empresario', 'empre2', '$2y$10$0J1NbqVDVVGimc8llPLXTOhx99jTWk7giUpOfaVmjy/6t/q08J4Im', '23.423.454/5435-54', '(23) 251553453', 0, '2018-08-06 02:59:10', NULL),
(11, 'empre3', 'empresario', 'empre3', '$2y$10$ZC5qSz0Int0ZdfMTcKhXxebvBuHPkVMCP14nPWZnnlySadfMfLbem', '234.532.554-14', '(34) 553451345', 0, '2018-08-09 18:44:54', NULL),
(12, 'usuario1', 'usuario', 'user', '$2y$10$ji0v6oAEKEJEV2qz.tGdPO3fe9mvxig3rp6uBVB8u5ouRSv5zXe5C', '123.242.135-12', '(21) 323123123', 0, '2018-08-13 02:15:25', NULL),
(13, 'jefferson', 'empresario', 'jefferson@gmail.com', '$2y$10$KEY/rGSY94YsGwM5wV58W.hBR/ssJFw/lK0pIUB/Np7tR/av2aLem', '12.321.321/3213-12', '(12) 321312312', 0, '2018-08-15 18:33:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_avs`
--
ALTER TABLE `tbl_avs`
  ADD PRIMARY KEY (`id_av`);

--
-- Indexes for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  ADD PRIMARY KEY (`id_end`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_avs`
--
ALTER TABLE `tbl_avs`
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

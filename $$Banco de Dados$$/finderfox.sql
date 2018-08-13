-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Ago-2018 às 10:27
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
  `created` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_avs`
--

INSERT INTO `tbl_avs` (`id_av`, `user_id`, `url`, `nome_av`, `slogan_av`, `logo_av`, `categoria`, `func`, `created`) VALUES
(1, 6, 'empre', 'empre', 'slogan de um empresario aleatÃ³rio', 'logo-empre.png', 'alimentacao', '', ''),
(2, 10, 'ambiente-empre2', 'ambiente empre2', 'teste do ambiente2', 'logo-ambiente-empre2.png', '', '', '');

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
(8, 6, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '232', 'principal', 'sim', '-23.2291995', '-46.7715631', '36'),
(9, 6, '13238-094', 'Rua Teodoro Feliciano de Moraes', 'SP', 'Campo Limpo Paulista', '232', 'secundario2', 'sim', '-23.2274655', '-46.7794261', 'global'),
(10, 10, '05785-020', 'Rua Armando Erse Figueiredo', 'SP', 'SÃ£o Paulo', '23', 'sao paulo 1', 'sim', '-23.6267112', '-46.7688442', 'global'),
(11, 6, '05785-200', 'Rua Siriema', 'SP', 'SÃ£o Paulo', '76', 'sao paulo 2', 'sim', '-23.624607', '-46.7641732', '50'),
(12, 6, '05788-430', 'Rua Professor Mamede de Oliveira', 'SP', 'SÃ£o Paulo', '765', 'sao paulo 3', 'sim', '-23.6281132', '-46.7698969', '10'),
(13, 6, '88512-530', 'Rua AntÃ´nio Caldas', 'SC', 'Lages', '304', 'santa catarina 1', 'sim', '-27.8462626', '-50.3465943', '1'),
(14, 11, '05785-200', 'Rua Siriema', 'SP', 'SP', '123', 'principal', 'nao', NULL, NULL, ''),
(16, 6, '15700-014', 'Rua 7', 'SP', 'Jales', '98', 'tupone', 'sim', '-20.272851', '-50.547839', '600'),
(17, 10, '03047-000', 'Rua 21 de Abril', 'SP', 'SÃ£o Paulo', '21', 'bras', 'sim', '-23.5427884', '-46.6076459', '70');

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
(12, 'usuario1', 'usuario', 'user', '$2y$10$ji0v6oAEKEJEV2qz.tGdPO3fe9mvxig3rp6uBVB8u5ouRSv5zXe5C', '123.242.135-12', '(21) 323123123', 0, '2018-08-13 02:15:25', NULL);

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
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

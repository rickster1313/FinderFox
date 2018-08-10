-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Ago-2018 às 14:02
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 6, 'empre', 'empre', 'slogan de um empresario aleatÃ³rio', 'logo-empre.png', '', '', '');

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
(5, 10, '13238-094', 'Rua Teodoro Feliciano de Moraes', 'SP', 'Campo Limpo Paulista', '13', 'principal', 'nao', NULL, NULL, ''),
(6, 10, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '15', 'fulano02', 'nao', NULL, NULL, ''),
(8, 6, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '232', 'principal', 'sim', '-23.2291995', '-46.7715631', '36'),
(9, 6, '13238-094', 'Rua Teodoro Feliciano de Moraes', 'SP', 'Campo Limpo Paulista', '232', 'secundario2', 'sim', '-23.2274655', '-46.7794261', 'global'),
(10, 6, '05785-020', 'Rua Armando Erse Figueiredo', 'SP', 'SÃ£o Paulo', '23', 'sao paulo 1', 'nao', NULL, NULL, ''),
(11, 6, '05785-200', 'Rua Siriema', 'SP', 'SÃ£o Paulo', '76', 'sao paulo 2', 'sim', '-23.624607', '-46.7641732', '15'),
(12, 6, '05788-430', 'Rua Professor Mamede de Oliveira', 'SP', 'SÃ£o Paulo', '765', 'sao paulo 3', 'nao', '-23.6281132', '-46.7698969', '10'),
(13, 6, '88512-530', 'Rua AntÃ´nio Caldas', 'SC', 'Lages', '304', 'santa catarina 1', 'nao', '-27.8462626', '-50.3465943', '1'),
(14, 11, '05785-200', 'Rua Siriema', 'SÃ£o Paulo', 'SP', '123', 'principal', 'nao', NULL, NULL, ''),
(15, 6, '07864-260', 'Rua Pardal', 'SP', 'Franco da Rocha', '108', 'melki', 'nao', NULL, NULL, ''),
(16, 6, '15700-014', 'Rua 7', 'SP', 'Jales', '98', 'tupone', 'nao', '-20.272851', '-50.547839', '20');

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
(11, 'empre3', 'empresario', 'empre3@gmail.com', '$2y$10$ZC5qSz0Int0ZdfMTcKhXxebvBuHPkVMCP14nPWZnnlySadfMfLbem', '234.532.554-14', '(34) 553451345', 0, '2018-08-09 18:44:54', NULL);

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
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

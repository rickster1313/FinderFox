-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Ago-2018 às 13:19
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
  `active` varchar(50) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL,
  `raio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_endereco`
--

INSERT INTO `tbl_endereco` (`id_end`, `user_id`, `cep`, `rua`, `estado`, `cidade`, `numero`, `nome`, `active`, `lat`, `lon`, `raio`) VALUES
(4, 6, '13238-110', 'Rua das AmÃ©ricas', 'SP', 'Campo Limpo Paulista', '08', 'principal', 'nao', NULL, NULL, NULL);

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
(6, 'empresario', 'empresario', 'empre', '$2y$10$ur7mbGCxpLnNEirAYnI2ue0C3wra.TuH97l30fg5OGlxXi.MH5wcy', '23.423.452/2342-34', '(67) 567567565', 0, '2018-08-03 08:22:05', NULL);

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
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

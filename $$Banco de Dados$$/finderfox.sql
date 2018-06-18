-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jun-2018 às 16:50
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
  `nome_av` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `data_nasc` date NOT NULL,
  `nvl_acesso` varchar(50) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `CPF_CNPJ` varchar(220) DEFAULT NULL,
  `endereco` varchar(220) NOT NULL,
  `telefone` varchar(220) NOT NULL,
  `sexo` varchar(220) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nome`, `data_nasc`, `nvl_acesso`, `email`, `senha`, `CPF_CNPJ`, `endereco`, `telefone`, `sexo`, `status`, `created`, `modified`) VALUES
(1, 'Riquelme Daniel de Lima', '2001-10-13', 'adm', 'riquelme13102001@gmail.com', '$2y$10$cV1FZ2VBDSQY4E6xcElTseGmudF5fqysY8bVIkcbYJlG6M5Gs/Jpy', '347.765.098-06', 'rua uruguai 85', '(11) 99673-8748', 'Masculino', 0, '2018-04-14 15:32:00', NULL),
(2, 'fulano01', '2018-05-31', 'empresario', 'fulano01@gmail.com', '$2y$10$9HTaC90xohEtFyZyCoa1lOEFPUlMfpNoUR.6UXpeY/lP80RRYh.ry', '347.765.098-05', 'rua do fulano 01', '(13) 13131-6641', 'Feminino', 0, '2018-05-31 04:28:53', NULL),
(3, 'fulano02', '2018-05-31', 'empresario', 'fulano02@gmail.com', '$2y$10$cSqx4475VjlWNGknJa98FuG7wCgI9aqC0nvwRBKSb1UOYvws3H.ky', '12.345.678/9123-45', 'fasdfwerfewf', '(23) 42423-4242', 'Outro', 0, '2018-05-31 05:22:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_avs`
--
ALTER TABLE `tbl_avs`
  ADD PRIMARY KEY (`id_av`);

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
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

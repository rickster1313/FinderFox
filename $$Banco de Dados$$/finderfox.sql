-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jun-2018 às 20:47
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
  `logo_av` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_avs`
--

INSERT INTO `tbl_avs` (`id_av`, `user_id`, `url`, `nome_av`, `slogan_av`, `logo_av`) VALUES
(1, 3, 'empresario-ambiente-virtual', 'empresario ambiente virtual', 'o primeiro AV de muitos XDXDXDD', 'logo-empresario-ambiente-virtual.jpeg'),
(3, 2, 'fulanozagem-mecanica', 'fulanozagem mecanica', 'fulano mecanicas', 'logo-fulanozagem-mecanica.jpeg');

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
(1, 'Riquelme Daniel de Lima', '2001-10-13', 'adm', 'riquelme13102001@gmail.com', '$2y$10$cV1FZ2VBDSQY4E6xcElTseGmudF5fqysY8bVIkcbYJlG6M5Gs/Jpy', '34776509806', 'rua uruguai 85', '011996738748', 'Masculino', 0, '2018-04-14 15:32:00', NULL),
(2, 'Fulano01', '2001-06-20', 'empresario', 'fulano01@gmail.com', '$2y$10$s83SCpLJ/azIugqq8TzI3.Yg3HoIAyaITBpz0WDbKLRnD7h0N1kIy', '123.456.789-11', 'R.Arapongas 452', '(11) 98756-4321', '', 0, '2018-06-20 08:07:45', NULL),
(3, 'tester empresario', '2018-06-20', 'empresario', 'empre', '$2y$10$khKt4tZtq.hOFh4wfhBg3.Jd4KLVkuC1gOc/Ti1.ei0Kj.szbE8kO', '12.345.678/9909-87', 'rua dos empresarios', '(12) 34567-8909', '', 0, '2018-06-20 11:14:33', NULL);

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
  MODIFY `id_av` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

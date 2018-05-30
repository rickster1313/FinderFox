-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Maio-2018 às 07:47
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
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `data_nasc` date NOT NULL,
  `nvl_acesso` varchar(50) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `CPF` varchar(220) DEFAULT NULL,
  `CNPJ` varchar(220) DEFAULT NULL,
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

INSERT INTO `tbl_usuarios` (`id`, `nome`, `data_nasc`, `nvl_acesso`, `email`, `senha`, `CPF`, `CNPJ`, `endereco`, `telefone`, `sexo`, `status`, `created`, `modified`) VALUES
(1, 'Riquelme Daniel de Lima', '2001-10-13', 'adm', 'riquelme13102001@gmail.com', '$2y$10$cV1FZ2VBDSQY4E6xcElTseGmudF5fqysY8bVIkcbYJlG6M5Gs/Jpy', '34776509806', NULL, 'rua uruguai 85', '011996738748', 'Masculino', 0, '2018-04-14 15:32:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

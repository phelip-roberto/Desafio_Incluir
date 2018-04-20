-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Abr-2018 às 20:54
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafioincluir`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `nome`, `qtd`, `preco`, `tipo`) VALUES
(1, 'Maçã', 17, 2.00, 1),
(2, 'Alface', 8, 0.10, 2),
(3, 'Batata', 20, 0.15, 3),
(4, 'Morango', 17, 0.10, 1),
(5, 'Cenoura', 40, 0.30, 3),
(6, 'Cenoura', 30, 0.10, 3),
(7, 'Laranja', 0, 0.00, 0),
(8, 'Cenoura', 30, 0.10, 3),
(9, 'Laranja', 20, 0.25, 1),
(10, 'Acelga', 8, 1.00, 2),
(11, 'Brocólis', 9, 0.50, 2),
(12, 'Couve', 10, 1.00, 2),
(13, 'Batata-Doce', 15, 1.00, 3),
(14, 'Uva Verde', 10, 1.00, 1),
(15, 'Pêssego', 30, 1.50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

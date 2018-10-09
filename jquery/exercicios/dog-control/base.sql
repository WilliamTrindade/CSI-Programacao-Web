-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2018 às 21:46
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal`
--
CREATE DATABASE IF NOT EXISTS `animal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `animal`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cachorro`
--

CREATE TABLE `cachorro` (
  `codigo` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cc` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cachorro`
--

INSERT INTO `cachorro` (`codigo`, `nome`, `cc`) VALUES
(1, 'q', 'q'),
(2, 'we', '121-1.2'),
(3, 'exemplo', '222-2.2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cachorro`
--
ALTER TABLE `cachorro`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cachorro`
--
ALTER TABLE `cachorro`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

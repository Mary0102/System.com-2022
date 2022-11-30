-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30-Nov-2022 às 10:41
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `system.com`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_user_np`
--

CREATE TABLE `cad_user_np` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_user_np`
--

INSERT INTO `cad_user_np` (`id`, `nome`, `senha`, `email`, `telefone`, `cpf`) VALUES
(1, 'Mariana Souza', 'socorro123', 'Mariana@gmail.com', 2147483647, 2147483647),
(2, 'Mariana', 'socorro123', 'Mariana@gmail.com', 2147483647, 2147483647),
(3, 'Mariana', 'socorro123', 'Mariana@gmail.com', 2147483647, 2147483647),
(4, 'Julia Marques', '123456', 'jujuba@gmail.com', 12345678, 2147483647),
(5, 'Raissa', 'raissa1234', 'ray@gmail.com', 989766543, 2147483647),
(6, 'Raissa', 'Andromeda', 'ray@gmail.com', 989766543, 123456789),
(7, 'Raissa', 'Andromeda', 'ray@gmail.com', 989766543, 2147483647),
(8, 'Raissa', 'Andromeda', 'ray@gmail.com', 989766543, 2147483647),
(9, 'Raissa', 'Andromeda', 'ray@gmail.com', 989766543, 99988877),
(10, 'Paula', 'jaca123', 'Paula@gmail.com', 989766543, 667755324),
(11, 'Raissa', 'Andromeda', 'Mariana@gmail.com', 989766543, 1234532146);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_user_np`
--

CREATE TABLE `login_user_np` (
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_user_np`
--

INSERT INTO `login_user_np` (`email`, `senha`) VALUES
('socorro@gmail.com', '12345'),
('socorro@gmail.com', '12345'),
('socorro@gmail.com', '12345'),
('Mariana@gmail.com', 'Andromeda'),
('Mariana@gmail.com', 'Andromeda');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_user_np`
--
ALTER TABLE `cad_user_np`
  ADD PRIMARY KEY (`id`,`cpf`,`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_user_np`
--
ALTER TABLE `cad_user_np`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

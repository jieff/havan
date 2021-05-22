-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Maio-2021 às 22:27
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cambio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacoes`
--

CREATE TABLE `operacoes` (
  `idNome` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `moedaOrigem` varchar(3) NOT NULL,
  `moedaDestino` varchar(3) NOT NULL,
  `dataOperacao` date NOT NULL,
  `valorOriginal` float NOT NULL,
  `valorConvertido` float NOT NULL,
  `taxaCobrada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `operacoes`
--

INSERT INTO `operacoes` (`idNome`, `cliente`, `moedaOrigem`, `moedaDestino`, `dataOperacao`, `valorOriginal`, `valorConvertido`, `taxaCobrada`) VALUES
(368, 'Ralf Lima', 'USD', 'BRL', '2021-05-21', 5000, 26720, 2672),
(369, 'Marcelo Bernart Schmidt', 'EUR', 'BRL', '2021-05-21', 750, 4880.25, 488),
(372, 'Marcio Michelluzzi', 'USD', 'Sel', '2021-05-21', 1500, 8016, 802);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `operacoes`
--
ALTER TABLE `operacoes`
  ADD PRIMARY KEY (`idNome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `operacoes`
--
ALTER TABLE `operacoes`
  MODIFY `idNome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

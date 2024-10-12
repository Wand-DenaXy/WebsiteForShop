-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2024 às 09:38
-- Versão do servidor: 8.2.0
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `frescoslda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao`
--

CREATE TABLE `producao` (
  `cod_producao` int NOT NULL,
  `produtos` int NOT NULL,
  `produtores` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtores`
--

CREATE TABLE `produtores` (
  `produtores_id` int NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `contacto` varchar(20) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtores`
--

INSERT INTO `produtores` (`produtores_id`, `nome`, `endereco`, `contacto`, `email`) VALUES
(9, 'Manuel O Produto', '112', '114', '154tgegfgerfbetbtb'),
(6, 'MIGUEL%%', '4444', '45134', 't43@ggreg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `prod_id` int NOT NULL,
  `nome` varchar(25) NOT NULL,
  `preco` int NOT NULL,
  `quantidade` int NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `nome`, `preco`, `quantidade`, `descricao`) VALUES
(1, 'Miguel112', 55, 192, 'eifwohgwrug'),
(3, 'Manuel Silvestre', 1205, 55, '233erghuier');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registrar`
--

CREATE TABLE `registrar` (
  `user_id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `registrar`
--

INSERT INTO `registrar` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Manuel', 'manueldias@gmail.com', '123456789');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `producao`
--
ALTER TABLE `producao`
  ADD PRIMARY KEY (`cod_producao`),
  ADD KEY `produtos` (`produtos`),
  ADD KEY `produtores` (`produtores`);

--
-- Índices para tabela `produtores`
--
ALTER TABLE `produtores`
  ADD PRIMARY KEY (`produtores_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`prod_id`);

--
-- Índices para tabela `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `producao`
--
ALTER TABLE `producao`
  MODIFY `cod_producao` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtores`
--
ALTER TABLE `produtores`
  MODIFY `produtores_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `registrar`
--
ALTER TABLE `registrar`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

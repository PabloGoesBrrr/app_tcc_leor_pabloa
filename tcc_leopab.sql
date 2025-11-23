-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2025 às 03:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc_leopab`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_address`
--

CREATE TABLE `tb_address` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_address`
--

INSERT INTO `tb_address` (`id`, `id_user`, `endereco`, `cidade`, `estado`, `tipo`) VALUES
(2, 1, 'caca', 'caa', 'ss', 'loja'),
(10, 4, 'outro', 'endereco', 'sp', 'escritorio'),
(11, 1, 'spcorar', 'aadasda', 'ss', 'servicos'),
(16, 4, 'teste quarenta', 'sumare', 'marcos', 'loja');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'pablo', '$2y$10$omU9NXuxV4L3.46dtBKko.n2cTixsE9tNtcTU1oJzkwgQ2hh83L32', '2025-11-22 17:10:48'),
(3, 'testabn', '$2y$10$DV2snLnmz0T1fQV1Lvu5s.15a3vAGGw3rjul7yTeU8N/EHz6/YEaq', '2025-11-22 17:12:35'),
(4, 'leo', '$2y$10$/XlD4.f0YMf5VaFN9vbZQeMQq/6kJX106daBWh4impeaAEXlPS4Fu', '2025-11-22 22:30:36');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_address`
--
ALTER TABLE `tb_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_address`
--
ALTER TABLE `tb_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_address`
--
ALTER TABLE `tb_address`
  ADD CONSTRAINT `tb_address_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

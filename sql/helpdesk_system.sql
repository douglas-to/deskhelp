-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2023 às 03:40
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `helpdesk_system`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hd_departments`
--

CREATE TABLE `hd_departments` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `hd_departments`
--

INSERT INTO `hd_departments` (`id`, `name`, `status`) VALUES
(1, 'Técnico', 1),
(2, 'Testando', 1),
(3, 'Automação', 1),
(4, 'Design', 1),
(5, 'Programação', 1),
(7, 'Segurança', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hd_tickets`
--

CREATE TABLE `hd_tickets` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(20) NOT NULL,
  `user` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `init_msg` text NOT NULL,
  `department` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `last_reply` int(11) NOT NULL,
  `user_read` int(11) NOT NULL,
  `admin_read` int(11) NOT NULL,
  `resolved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hd_ticket_replies`
--

CREATE TABLE `hd_ticket_replies` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `text` text NOT NULL,
  `ticket_id` text NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hd_users`
--

CREATE TABLE `hd_users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(250) NOT NULL,
  `user_type` enum('admin','user') NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `hd_users`
--

INSERT INTO `hd_users` (`id`, `email`, `password`, `create_date`, `name`, `user_type`, `status`) VALUES
(1, 'helena45@gmail.com', 'bf05849e62c0ed5ee8a94f0f50e11b71', '2021-10-25 23:24:33', 'Helena', 'user', 1),
(2, 'dougto@gmail.com', '14f9a8418b17e67618154b4e28da157c', '2021-10-25 23:24:46', 'Douglas', 'admin', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `hd_departments`
--
ALTER TABLE `hd_departments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `hd_tickets`
--
ALTER TABLE `hd_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `hd_ticket_replies`
--
ALTER TABLE `hd_ticket_replies`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `hd_users`
--
ALTER TABLE `hd_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hd_departments`
--
ALTER TABLE `hd_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `hd_tickets`
--
ALTER TABLE `hd_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `hd_ticket_replies`
--
ALTER TABLE `hd_ticket_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `hd_users`
--
ALTER TABLE `hd_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

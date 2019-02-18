-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Fev-2019 às 16:16
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secret`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `checklist`
--

CREATE TABLE `checklist` (
  `id` int(11) NOT NULL,
  `id_task` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `checklist`
--

INSERT INTO `checklist` (`id`, `id_task`, `name`, `user_id`, `status`, `date_created`) VALUES
(39, '31', 'teste', '1', '1', '2019-02-18 14:41:16'),
(40, '31', 'teste', '1', '1', '2019-02-18 14:41:23'),
(41, '24', 'teste', '1', '1', '2019-02-18 14:53:59'),
(42, '27', 'este', '1', '1', '2019-02-18 15:05:59'),
(43, '34', 'teste', '1', '1', '2019-02-18 15:06:47'),
(44, '34', 'teste', '1', '1', '2019-02-18 15:06:53'),
(45, '34', 'teste', '1', '1', '2019-02-18 15:07:10'),
(46, '34', 'te', '1', '1', '2019-02-18 15:07:47'),
(47, '34', 'dia de gloria', '1', '1', '2019-02-18 15:08:20'),
(48, '34', 'dia de gloria', '1', '1', '2019-02-18 15:08:31'),
(49, '34', 'teste', '1', '1', '2019-02-18 15:09:17'),
(50, '27', 'ffe', '1', '1', '2019-02-18 15:10:34'),
(51, '27', 'ffe', '1', '1', '2019-02-18 15:10:45'),
(52, '27', 'teste', '1', '1', '2019-02-18 15:11:49'),
(53, '27', 'teste', '1', '1', '2019-02-18 15:12:28'),
(54, '27', 'teste', '1', '1', '2019-02-18 15:12:47'),
(55, '27', 'teste', '1', '1', '2019-02-18 15:13:02'),
(56, '27', 'teste', '1', '1', '2019-02-18 15:13:17'),
(57, '27', 'dia de gloria', '1', '1', '2019-02-18 15:13:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grouptasks`
--

CREATE TABLE `grouptasks` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grouptasks`
--

INSERT INTO `grouptasks` (`id`, `name`, `date_created`, `user_id`, `status`) VALUES
(42, 'Casa Andrade', '2019-02-18 08:21:15', '1', '1'),
(49, 'felipe oliveira', '2019-02-18 12:27:49', '1', '1'),
(50, '123456', '2019-02-18 13:16:53', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `id_group_task` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tasks`
--

INSERT INTO `tasks` (`id`, `id_group_task`, `name`, `user_id`, `date_created`, `status`) VALUES
(11, '1', 'Criar Banco de Dados', '1', '2019-02-18 02:05:31', '1'),
(12, '1', 'Executar Função', '1', '2019-02-18 02:05:50', '1'),
(13, '2', 'Executar Função', '1', '2019-02-18 02:06:27', '1'),
(14, '4', 'Criar Banco', '1', '2019-02-18 02:10:07', '2'),
(24, '50', 'Vida Nova', '1', '2019-02-18 12:22:27', '2'),
(27, '49', 'novo planejamento', '1', '2019-02-18 12:28:00', '2'),
(32, '', 'teste', '1', '2019-02-18 13:43:48', '1'),
(34, '49', 'cadastrar', '1', '2019-02-18 15:05:24', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grouptasks`
--
ALTER TABLE `grouptasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `grouptasks`
--
ALTER TABLE `grouptasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

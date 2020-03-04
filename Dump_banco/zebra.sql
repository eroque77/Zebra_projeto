-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Mar-2020 às 14:50
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zebra`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(10) UNSIGNED NOT NULL,
  `cargo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `cargo`, `created_at`, `updated_at`) VALUES
(1, 'Programador Php', '2020-03-01 04:39:55', '2020-03-01 04:39:55'),
(2, 'Fullstack Developer', '2020-03-01 04:40:23', '2020-03-01 04:40:23'),
(3, 'Frontend Developer', '2020-03-01 04:40:49', '2020-03-01 04:40:49'),
(4, 'Backend Developer', '2020-03-01 04:41:09', '2020-03-01 04:41:09'),
(5, 'DevOps', '2020-03-01 04:42:09', '2020-03-01 04:42:09'),
(6, 'Web Design', '2020-03-02 01:13:22', '2020-03-02 01:13:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programadores`
--

CREATE TABLE `programadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int(10) NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anos` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `programadores`
--

INSERT INTO `programadores` (`id`, `nome`, `idade`, `cidade`, `email`, `cargo`, `anos`, `created_at`, `updated_at`) VALUES
(6, 'Henrique Roque', 37, 'São Paulo', 'eroque@toldosdias.com.br', '1', 4, '2020-03-01 23:45:31', '2020-03-01 23:45:31'),
(22, 'Marcos', 31, 'São Paulo', 'zeroque@toldosdias.com.br', '5', 22, '2020-03-02 00:32:26', '2020-03-02 00:32:26'),
(26, 'Henrique Roque', 37, 'São Paulo', 'eroque@toldosdias.com.br', '3', 4, '2020-03-02 00:57:11', '2020-03-02 00:57:11'),
(30, 'Eduardo Roque', 42, 'SÃO PAULO', 'eduardo.roque.systems@gmail.com', '2', 6, '2020-03-02 01:03:35', '2020-03-02 01:03:35'),
(31, 'Elio', 40, 'São Paulo', 'eduardo.roque.systems@gmail.com', '4', 4, '2020-03-02 01:06:12', '2020-03-02 01:06:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programadores`
--
ALTER TABLE `programadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `programadores`
--
ALTER TABLE `programadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

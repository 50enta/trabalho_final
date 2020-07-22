-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 07:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g_eventos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `apagado`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Administrador', 'admin@gmail.com', NULL, '$2y$10$6pMtmtoJ6IjRBGFZBRL/QuixsnfDYEWIXfBU4Z7jiSEREbQqC7l2i', NULL, '2020-06-05 01:21:22', '2020-06-05 01:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `categoria_imagens`
--

CREATE TABLE `categoria_imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoria_itens`
--

CREATE TABLE `categoria_itens` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoria_itens`
--

INSERT INTO `categoria_itens` (`id`, `descricao`, `apagado`, `created_at`, `updated_at`) VALUES
(1, 'Cadeira', 0, '2020-06-22 19:22:24', '2020-06-23 19:22:24'),
(2, 'Mesa', 0, '2020-06-22 19:22:24', '2020-06-23 19:22:24'),
(3, 'Pano', 0, '2020-06-22 17:20:09', '2020-06-22 17:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `apagado`, `nome`, `contacto`, `funcao`, `created_at`, `updated_at`) VALUES
(1, 0, 'Ana Lucia Macia', '84234778', 'Jardineira', '2020-06-06 05:17:09', '2020-06-06 05:17:09'),
(2, 0, 'Mario joao', '84234778', 'garcon', '2020-06-06 05:17:22', '2020-06-06 05:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `colaboradores_do_eventos`
--

CREATE TABLE `colaboradores_do_eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `evento_id` int(10) UNSIGNED DEFAULT NULL,
  `colaborador_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `preco` double DEFAULT NULL,
  `cor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pendente',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `tipos_evento_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `apagado`, `descricao`, `data_inicio`, `data_fim`, `preco`, `cor`, `status`, `user_id`, `tipos_evento_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'Casamento', '2020-06-27 08:00:00', '2020-06-27 20:59:00', NULL, '#000000', 'Pendente', 1, 1, '2020-06-06 04:54:02', '2020-06-06 04:54:02'),
(2, 0, 'Minha festa de Graduacao', '2020-07-17 12:00:00', '2020-07-17 23:53:00', NULL, '#d91717', 'Pendente', 2, 3, '2020-06-22 15:51:01', '2020-06-22 15:51:01'),
(3, 0, 'festa de Graduacao', '2020-07-17 14:00:00', '2020-07-18 01:00:00', NULL, '#26cfad', 'Pendente', 3, 3, '2020-06-22 15:53:35', '2020-06-22 15:53:35'),
(4, 0, 'Aniversario dos meus pais', '2020-07-30 13:00:00', '2020-07-30 23:00:00', NULL, '#f2d40d', 'Pendente', 4, 2, '2020-06-22 15:58:24', '2020-06-22 15:58:24'),
(5, 0, 'Casamento', '2020-07-31 12:00:00', '2020-07-31 23:00:00', NULL, '#ee11d1', 'Pendente', 5, 1, '2020-06-22 16:04:02', '2020-06-22 16:04:02'),
(6, 0, 'meus 2 anos', '2020-07-05 13:00:00', '2020-07-05 20:00:00', NULL, '#1826f2', 'Pendente', 6, 2, '2020-06-22 16:10:54', '2020-06-22 16:10:54'),
(7, 0, 'meu aniversario', '2020-07-05 18:00:00', '2020-07-06 02:00:00', NULL, '#0ef116', 'Pendente', 7, 2, '2020-06-22 16:15:58', '2020-06-22 16:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `fotoservicos`
--

CREATE TABLE `fotoservicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeria_imagems`
--

CREATE TABLE `galeria_imagems` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `evento_id` int(10) UNSIGNED NOT NULL,
  `categoria_imagens_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imagem_eventos`
--

CREATE TABLE `imagem_eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `evento_id` int(10) UNSIGNED NOT NULL,
  `categoria_imagens_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itens_do_pacotes`
--

CREATE TABLE `itens_do_pacotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `itens_material_id` int(10) UNSIGNED DEFAULT NULL,
  `pacote_eventos_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itens_materials`
--

CREATE TABLE `itens_materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formato` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacidade` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria_itens_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itens_materials`
--

INSERT INTO `itens_materials` (`id`, `apagado`, `descricao`, `formato`, `cor`, `capacidade`, `quantidade`, `categoria_itens_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'cadeira plastica', NULL, NULL, NULL, 10, 1, '2020-06-21 17:31:03', '2020-06-21 17:31:03'),
(2, 0, 'mesa metalica', NULL, NULL, NULL, 20, 2, '2020-06-21 17:46:58', '2020-06-21 17:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_10_144446_create_admins_table', 1),
(4, '2019_10_14_155924_create_tipos_eventos_table', 1),
(5, '2019_10_15_152001_create_categoria_itens_table', 1),
(6, '2019_10_17_152204_create_categoria_imagens_table', 1),
(7, '2019_10_18_152243_create_colaboradores_table', 1),
(8, '2019_10_19_152359_create_itens_materials_table', 1),
(9, '2019_10_20_155759_create_servicos_table', 1),
(10, '2019_10_21_152634_create_pacote_eventos_table', 1),
(11, '2019_10_22_155835_create_eventos_table', 1),
(12, '2019_10_23_155335_create_servicos_do_pacotes_table', 1),
(13, '2019_10_23_155403_create_itens_do_pacotes_table', 1),
(14, '2019_10_25_153119_create_imagem_eventos_table', 1),
(15, '2019_10_25_155247_create_colaboradores_do_eventos_table', 1),
(16, '2019_10_26_153153_create_processo_pagamentos_table', 1),
(17, '2020_04_15_200022_create_fotoservicos_table', 1),
(18, '2020_04_20_092830_create_galeria_imagems_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pacote_eventos`
--

CREATE TABLE `pacote_eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inter_inferior` int(11) DEFAULT NULL,
  `inter_superior` int(11) DEFAULT NULL,
  `precoTotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `processo_pagamentos`
--

CREATE TABLE `processo_pagamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataPagamento` date NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicos`
--

CREATE TABLE `servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicos`
--

INSERT INTO `servicos` (`id`, `descricao`, `apagado`, `created_at`, `updated_at`) VALUES
(1, 'Espaco', 0, '2020-06-15 18:32:28', '2020-06-15 18:32:28'),
(2, 'Piscina', 0, '2020-06-15 18:33:00', '2020-06-15 18:33:00'),
(3, 'Ornamentacao', 0, '2020-06-15 18:33:19', '2020-06-15 18:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `servicos_do_pacotes`
--

CREATE TABLE `servicos_do_pacotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `servicos_id` int(10) UNSIGNED DEFAULT NULL,
  `pacote_eventos_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipos_eventos`
--

CREATE TABLE `tipos_eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipos_eventos`
--

INSERT INTO `tipos_eventos` (`id`, `descricao`, `comentario`, `image`, `apagado`, `created_at`, `updated_at`) VALUES
(1, 'Casamento', 'O casamento e um momento unico e por isso especial...', '1591370028.jfif', 0, '2020-06-05 22:13:49', '2020-06-05 22:13:49'),
(2, 'Aniversario', 'os aniversarios apesar de celebrados todos os anos , tambem merecem ser comemorados', '1591370141.jfif', 0, '2020-06-05 22:15:24', '2020-06-05 22:15:41'),
(3, 'Graduacao', 'Este e com certeza um dos maiores sonhos de todo o estudante e mais do que isso de sua familia e amigos', '1591370570.jfif', 0, '2020-06-05 22:22:51', '2020-06-05 22:22:51'),
(4, 'Final de Ano', 'porq', '1591370607.jfif', 0, '2020-06-05 22:23:27', '2020-06-05 22:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `apelido`, `telefone`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lucilia', 'Mandlate', '847762775', 'luciliamandlate@gmail.com', NULL, '$2y$10$UYDPlaOlmpQN8HVeopOx3u0hBA1..vrrdDfi9U/ujJYhvgsFOB8/u', NULL, NULL, '2020-06-05 18:00:30', '2020-06-05 18:00:30'),
(2, 'Valter', 'Cinquenta', '849357309', '50@gmail.com', NULL, '$2y$10$Yw2cfMRFdAHdH8lFLAcjHOiTmKuFh3s.dyG9hCtHrMtv1fEtC81ca', NULL, NULL, '2020-06-22 15:47:54', '2020-06-22 15:47:54'),
(3, 'Alodia', 'Mandlate', '849390293', 'alodia@gmail.com', NULL, '$2y$10$g1futUom4FaLu6euL00QfO1p13rgsW1./HvGDI0ICXp9OIHGGIAiK', NULL, NULL, '2020-06-22 15:52:16', '2020-06-22 15:52:16'),
(4, 'Dulce', 'Mandlate', '854878250', 'dulce@gmail.com', NULL, '$2y$10$b2oJXJeu7084aOel9.5lveUTSq137eQa1Lco647TOLeopOuVBAT7S', NULL, NULL, '2020-06-22 15:56:47', '2020-06-22 15:56:47'),
(5, 'Maria', 'Mandlate', '821111111', 'maria@gmail.com', NULL, '$2y$10$Q6zM4etfM82b0EgiSLgvp.4z/sogP/vjQ6bd8nnAWjamZIFuQB/Ka', NULL, NULL, '2020-06-22 16:02:45', '2020-06-22 16:02:45'),
(6, 'Abner', 'Mandlate', '867777543', 'Ab@gmail.com', NULL, '$2y$10$r2E6rZf8dxTL0wwnGFZ8MeUJwWxmTGfH0iHbNvQMcVS.KIe0iWX/K', NULL, NULL, '2020-06-22 16:07:03', '2020-06-22 16:07:03'),
(7, 'Guilherme', 'Mandlate', '825432156', 'gui@gmail.com', NULL, '$2y$10$f49hXQAM2aipR8ras/FoF.hB9i4LPJzg9Qcv/C8H/tGBKu5ZnsZaS', NULL, NULL, '2020-06-22 16:14:47', '2020-06-22 16:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categoria_imagens`
--
ALTER TABLE `categoria_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria_itens`
--
ALTER TABLE `categoria_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colaboradores_do_eventos`
--
ALTER TABLE `colaboradores_do_eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colaboradores_do_eventos_evento_id_foreign` (`evento_id`),
  ADD KEY `colaboradores_do_eventos_colaborador_id_foreign` (`colaborador_id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventos_user_id_foreign` (`user_id`),
  ADD KEY `eventos_tipos_evento_id_foreign` (`tipos_evento_id`);

--
-- Indexes for table `fotoservicos`
--
ALTER TABLE `fotoservicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria_imagems`
--
ALTER TABLE `galeria_imagems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeria_imagems_evento_id_foreign` (`evento_id`),
  ADD KEY `galeria_imagems_categoria_imagens_id_foreign` (`categoria_imagens_id`);

--
-- Indexes for table `imagem_eventos`
--
ALTER TABLE `imagem_eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagem_eventos_evento_id_foreign` (`evento_id`),
  ADD KEY `imagem_eventos_categoria_imagens_id_foreign` (`categoria_imagens_id`);

--
-- Indexes for table `itens_do_pacotes`
--
ALTER TABLE `itens_do_pacotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itens_do_pacotes_itens_material_id_foreign` (`itens_material_id`),
  ADD KEY `itens_do_pacotes_pacote_eventos_id_foreign` (`pacote_eventos_id`);

--
-- Indexes for table `itens_materials`
--
ALTER TABLE `itens_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itens_materials_categoria_itens_id_foreign` (`categoria_itens_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacote_eventos`
--
ALTER TABLE `pacote_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `processo_pagamentos`
--
ALTER TABLE `processo_pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos_do_pacotes`
--
ALTER TABLE `servicos_do_pacotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicos_do_pacotes_servicos_id_foreign` (`servicos_id`),
  ADD KEY `servicos_do_pacotes_pacote_eventos_id_foreign` (`pacote_eventos_id`);

--
-- Indexes for table `tipos_eventos`
--
ALTER TABLE `tipos_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categoria_imagens`
--
ALTER TABLE `categoria_imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria_itens`
--
ALTER TABLE `categoria_itens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colaboradores_do_eventos`
--
ALTER TABLE `colaboradores_do_eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fotoservicos`
--
ALTER TABLE `fotoservicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeria_imagems`
--
ALTER TABLE `galeria_imagems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagem_eventos`
--
ALTER TABLE `imagem_eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itens_do_pacotes`
--
ALTER TABLE `itens_do_pacotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itens_materials`
--
ALTER TABLE `itens_materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pacote_eventos`
--
ALTER TABLE `pacote_eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processo_pagamentos`
--
ALTER TABLE `processo_pagamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicos_do_pacotes`
--
ALTER TABLE `servicos_do_pacotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipos_eventos`
--
ALTER TABLE `tipos_eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colaboradores_do_eventos`
--
ALTER TABLE `colaboradores_do_eventos`
  ADD CONSTRAINT `colaboradores_do_eventos_colaborador_id_foreign` FOREIGN KEY (`colaborador_id`) REFERENCES `colaboradores` (`id`),
  ADD CONSTRAINT `colaboradores_do_eventos_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`);

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_tipos_evento_id_foreign` FOREIGN KEY (`tipos_evento_id`) REFERENCES `tipos_eventos` (`id`),
  ADD CONSTRAINT `eventos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galeria_imagems`
--
ALTER TABLE `galeria_imagems`
  ADD CONSTRAINT `galeria_imagems_categoria_imagens_id_foreign` FOREIGN KEY (`categoria_imagens_id`) REFERENCES `categoria_imagens` (`id`),
  ADD CONSTRAINT `galeria_imagems_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`);

--
-- Constraints for table `imagem_eventos`
--
ALTER TABLE `imagem_eventos`
  ADD CONSTRAINT `imagem_eventos_categoria_imagens_id_foreign` FOREIGN KEY (`categoria_imagens_id`) REFERENCES `categoria_imagens` (`id`),
  ADD CONSTRAINT `imagem_eventos_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`);

--
-- Constraints for table `itens_do_pacotes`
--
ALTER TABLE `itens_do_pacotes`
  ADD CONSTRAINT `itens_do_pacotes_itens_material_id_foreign` FOREIGN KEY (`itens_material_id`) REFERENCES `itens_materials` (`id`),
  ADD CONSTRAINT `itens_do_pacotes_pacote_eventos_id_foreign` FOREIGN KEY (`pacote_eventos_id`) REFERENCES `pacote_eventos` (`id`);

--
-- Constraints for table `itens_materials`
--
ALTER TABLE `itens_materials`
  ADD CONSTRAINT `itens_materials_categoria_itens_id_foreign` FOREIGN KEY (`categoria_itens_id`) REFERENCES `categoria_itens` (`id`);

--
-- Constraints for table `servicos_do_pacotes`
--
ALTER TABLE `servicos_do_pacotes`
  ADD CONSTRAINT `servicos_do_pacotes_pacote_eventos_id_foreign` FOREIGN KEY (`pacote_eventos_id`) REFERENCES `pacote_eventos` (`id`),
  ADD CONSTRAINT `servicos_do_pacotes_servicos_id_foreign` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

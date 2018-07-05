-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jul-2018 às 02:24
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeria-de-fotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `url`, `created_at`, `user_id`) VALUES
(2, 'Notebook', 'foto-2.jpeg\r\n', '2018-06-03 19:15:02', 1),
(4, 'Sky at night', 'c0967f49050425f2f3d8732d4e6fae4b.jpeg', '2018-06-04 18:11:03', 1),
(5, 'Woman with lights', 'da24a762b8f00307f877c193a3c33995.jpeg', '2018-06-04 18:26:39', 1),
(7, 'Girl', '9e07abd007d1e880c399ebf79bf4c261.jpeg', '2018-06-04 18:29:25', 2),
(8, ' sneakers', '96aa3b33784484222f6d39a1184c52d9.jpeg', '2018-06-04 18:34:46', 2),
(9, 'Woman', 'f77fcb86e72f6ceaadba5273120a9a84.jpeg', '2018-06-05 20:00:42', 2),
(10, 'NaN', '9ab2a0ff6abb39626953228b7ecfdfb8.jpeg', '2018-06-05 20:05:10', 3),
(11, 'Meal', 'b75486d21f4ee5d11766d706ef2d3cb1.jpeg', '2018-06-05 20:11:12', 3),
(13, 'Coca cola', '07b25c4bd4adc8beb82c751afc564502.jpeg', '2018-06-07 18:36:22', 17),
(15, 'Motobike', '6aa5bdfa884a60c00066c235de1ebcd4.jpeg', '2018-06-07 23:19:18', 18),
(16, 'Beautiful view', 'bb86077a592c1d8d09b61a036a68bee3.jpeg', '2018-06-07 23:19:59', 18),
(17, 'Notebook on the desk', 'e3d5228822d8bbb61658148c24e8c0d1.jpeg', '2018-06-08 20:37:38', 1),
(19, '', 'e89f438a3a37a3b5d3f1803536491566.jpeg', '2018-06-14 22:34:51', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descricao` text NOT NULL,
  `url_foto` varchar(255) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nome`, `senha`, `create_at`, `descricao`, `url_foto`) VALUES
(1, 'willa@gmail.com', 'willa abreu', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-04 23:42:37', 'sou uma pessoa que gosta muito de ser feliz eh isto.\r\n', 'c4ca4238a0b923820dcc509a6f75849b.jpeg'),
(2, 'laryssa@contato.com', 'laryssa\r\n', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 01:56:43', '', 'user.png'),
(3, 'darcy_vovolinda@gmail.com', 'darcy', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 02:04:17', '', 'user.png'),
(4, 'guilherme_danki@outlook.com', 'guilherme', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 02:07:10', '', 'user.png'),
(5, 'andressa@gmail.com', 'andressa', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 15:06:41', '', 'user.png'),
(12, 'giovanni@contato.com', 'giovanni', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 18:01:46', '', 'user.png'),
(15, 'maria@contato.com', 'maria', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 18:03:46', '', 'user.png'),
(16, 'lorena2018@gmail.com', 'lorena', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-06 20:02:21', '', 'user.png'),
(17, 'paulo_abreu@gmail.com', 'paulo abreu sardinha', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-07 18:35:41', 'Vovô da treta', '70efdf2ec9b086079795c442636b55fb.jpeg'),
(18, 'joedoe@gmail.com', 'john doe', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-07 23:13:53', 'Hi, my name is John I\'m from NY and more things about me written here lorem ipsum ipsum.', '6f4922f45568161a8cdf4ad2299f6d23.jpeg'),
(19, 'fulano@gmail.com', 'fulano', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-14 01:29:56', '', 'user.png'),
(21, 'anderson@gmail.com', 'anderson', '$2y$10$3OFQ74/Y82ZKXyUwZ5xEI.O3sNIZUSqj4WArNvd77T1VbTUXyklP6', '2018-06-30 20:21:40', '', 'user.png'),
(22, 'jorgin@gmail.com', 'jorgin', '$2y$10$cVmYSirZ6001KKIXVBoHJ.zgWcuNYDD/YTvQoIYydcwWipertSaKS', '2018-07-04 21:13:08', '', 'user.png'),
(23, 'manuel@gmail.com', 'manuel', '$2y$10$vplnPFdh52FZv9qzld2TfOg47Cj3lhb6FBm8IzfmdxePpH7afenH2', '2018-07-04 21:14:21', '', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

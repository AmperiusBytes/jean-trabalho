-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2022 às 19:28
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
-- Banco de dados: `db_atletica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `horario_inicio` time NOT NULL,
  `horario_fim` time NOT NULL,
  `localizacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id_evento`, `titulo`, `descricao`, `data`, `horario_inicio`, `horario_fim`, `localizacao`) VALUES
(2, 'Grifos X Famintos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam adipiscing vitae proin sagittis nisl rhoncus. Quisque id diam vel quam elementum pulvinar etiam. Sit amet commodo nulla facili', '2022-11-30', '14:05:24', '18:05:24', 'Campo Municipal, Espírito Santo do Pinhal'),
(3, 'Cervejada da Comp', 'Open de Cerveja com DJ ao-vivo para os alunos da Computação e Mecatrônica', '2022-12-08', '19:00:00', '00:00:00', 'República dos Programas'),
(4, 'Grifos X Mamutes', 'Jogo contra os Mamutes da História', '2022-12-16', '19:00:00', '21:00:00', 'Estádio do Poli-esportivo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id_jogador` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `altura` float NOT NULL,
  `camisa` int(11) NOT NULL,
  `caminho_foto` varchar(255) DEFAULT NULL,
  `time_futebol` tinyint(1) NOT NULL DEFAULT 0,
  `time_volei` tinyint(1) NOT NULL DEFAULT 0,
  `time_queimada` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`id_jogador`, `nome`, `idade`, `altura`, `camisa`, `caminho_foto`, `time_futebol`, `time_volei`, `time_queimada`) VALUES
(2, 'Lucas', 20, 1.9, 5, 'storage/lucas.jpg', 1, 0, 0),
(4, 'Alana', 20, 1.58, 15, 'storage/alana.jpg', 0, 1, 0),
(11, 'Cael Silva', 24, 1.7, 1, 'storage/cael.jpg', 1, 0, 0),
(12, 'Dudu', 20, 1.87, 9, 'storage/eduardo.jpg', 1, 0, 0),
(13, 'Aceti', 19, 1.8, 7, 'storage/aceti.jpg', 1, 0, 0),
(15, 'Vinicius', 21, 1.9, 8, 'storage/vinicius.jpg', 1, 0, 0),
(66, 'Neto', 20, 1.85, 14, 'storage/jose.jpg', 1, 0, 1),
(68, 'Amanda', 20, 1.58, 13, 'storage/amanda.jpg', 0, 1, 0),
(70, 'Heitor', 21, 1.87, 17, 'storage/heitor.jpg', 0, 1, 0),
(72, 'Vitória', 21, 1.66, 10, 'storage/vitoria.jpg', 0, 1, 1),
(73, 'Enzo', 19, 1.7, 75, 'storage/enzo.jpg', 0, 0, 1),
(74, 'Turcatti', 19, 1.7, 3, 'storage/turcatti.jpg', 0, 0, 1),
(75, 'Madu', 19, 1.65, 2, 'storage/madu.jpg', 0, 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id_jogador`),
  ADD UNIQUE KEY `camisa` (`camisa`),
  ADD UNIQUE KEY `caminho_foto` (`caminho_foto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

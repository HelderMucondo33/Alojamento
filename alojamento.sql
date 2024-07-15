-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2022 às 17:11
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alojamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nr_documento` int(20) NOT NULL,
  `telefone` int(15) NOT NULL,
  `emial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `nr_documento`, `telefone`, `emial`) VALUES
(1, 'Helder', 12, 84576245, 'heldermucondo@gmail.com '),
(2, 'Karla', 13, 84576244, 'Karla@gmail.com ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nome` varchar(230) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`id`, `nome`, `email`, `numero`, `mensagem`) VALUES
(1, 'manteigass', 'teste@gmail.com', 15151515, 'nm'),
(2, 'manteigass', 'teste@gmail.com', 15151515, 'nm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(55) NOT NULL,
  `telefone` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `numeroBI` varchar(55) NOT NULL,
  `sexo` enum('feminino','masculino','outros','') NOT NULL,
  `username` varchar(40) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `perfil` enum('administrador','recepcionista') NOT NULL,
  `morada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `apelido`, `telefone`, `email`, `numeroBI`, `sexo`, `username`, `senha`, `perfil`, `morada`) VALUES
(1, 'Amor', 'maaa', '84362451', 'Amor2@gmail.com', '1882345432p', '', 'helder', '12345678', '', 'Ndalvela'),
(3, 'Helder', 'Mucondo', '84362451', 'heldermucondo@gmail.com', '188234543232p', 'masculino', 'helder mucondo', '1234', '', 'Ndlavela'),
(4, 'Dinis', 'Matavele', '123456', 'aza@gmail.com', '1882345432322p', 'masculino', 'Dinis', '12345', '', 'Hulene'),
(7, 'Karla', 'mm', '8425647454', 'karlamm@gmail.com', '1882345432p', '', 'karla', '123456', '', 'hjkl');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE `quarto` (
  `id` int(11) NOT NULL,
  `nr_quarto` int(11) NOT NULL,
  `nr_camas` int(4) NOT NULL,
  `tipo_cama` enum('king','queen') NOT NULL,
  `status_quarto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`id`, `nr_quarto`, `nr_camas`, `tipo_cama`, `status_quarto`) VALUES
(1, 200, 1, 'queen', '1'),
(2, 1, 1, 'queen', '1'),
(3, 20, 2, 'king', '1'),
(4, 20, 2, 'king', '0'),
(5, 20, 2, 'king', '1'),
(6, 23, 2, 'king', '0'),
(7, 22, 1, 'queen', '0'),
(8, 111, 1, 'queen', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `data-reserva` date NOT NULL DEFAULT current_timestamp(),
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  `status` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_quarto` int(11) NOT NULL,
  `preco` enum('500','1000') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id`, `data-reserva`, `data_entrada`, `data_saida`, `status`, `id_cliente`, `id_quarto`, `preco`) VALUES
(1, '2022-11-13', '2022-11-15', '2022-11-16', 0, 1, 1, '500'),
(2, '2022-11-13', '2022-11-15', '2022-11-17', 0, 1, 1, '500'),
(15, '2022-11-13', '2022-11-26', '2022-11-27', 1, 2, 1, '500'),
(16, '2022-11-13', '2022-11-26', '2022-11-27', 1, 2, 1, '500'),
(17, '2022-11-14', '2022-11-25', '2022-11-30', 1, 2, 1, '500'),
(18, '2022-11-14', '2022-11-14', '2022-11-16', 0, 1, 1, '500'),
(19, '2022-11-14', '2022-11-14', '2022-11-16', 0, 1, 1, '500'),
(20, '2022-11-14', '2022-11-18', '2022-11-23', 0, 2, 1, '500'),
(21, '2022-11-14', '2022-11-18', '2022-11-23', 0, 2, 1, '500'),
(22, '2022-11-15', '2022-11-16', '2022-11-18', 0, 1, 1, '500'),
(23, '2022-11-15', '2022-11-18', '2022-11-23', 0, 1, 1, '500'),
(24, '2022-11-15', '2022-11-10', '2022-11-18', 1, 1, 1, '500'),
(25, '2022-11-15', '2022-11-16', '2022-11-25', 0, 1, 1, '500'),
(26, '2022-11-15', '2022-11-09', '2022-11-15', 0, 1, 1, '500'),
(27, '2022-11-15', '2022-11-11', '2022-11-15', 1, 2, 1, '500'),
(28, '2022-11-15', '2022-11-11', '2022-11-15', 0, 1, 1, '500'),
(29, '2022-11-15', '2022-11-12', '2022-11-15', 0, 1, 1, '500'),
(30, '2022-11-15', '2022-11-10', '2022-11-15', 0, 1, 1, '500'),
(31, '2022-11-15', '2022-11-10', '2022-11-15', 0, 1, 1, '500'),
(32, '2022-11-15', '2022-11-09', '2022-11-16', 1, 1, 1, '500'),
(33, '2022-11-15', '2022-11-09', '2022-11-15', 1, 1, 1, '500'),
(34, '2022-11-15', '2022-11-10', '2022-11-15', 1, 1, 1, '500'),
(35, '2022-11-15', '2022-11-10', '2022-11-15', 1, 1, 1, '500'),
(36, '2022-11-15', '2022-11-10', '2022-11-15', 1, 1, 1, '500'),
(37, '2022-11-15', '2022-11-10', '2022-11-15', 1, 1, 1, '500'),
(38, '2022-11-15', '2022-11-02', '2022-11-15', 1, 1, 1, '500'),
(39, '2022-11-15', '2022-11-09', '2022-11-15', 1, 1, 1, '500'),
(40, '2022-11-15', '2022-11-09', '2022-11-15', 1, 1, 1, '500'),
(41, '2022-11-15', '2022-11-09', '2022-11-15', 1, 1, 1, '500'),
(42, '2022-11-15', '2022-11-09', '2022-11-15', 1, 1, 1, '500'),
(43, '2022-11-15', '2022-11-09', '2022-11-15', 1, 1, 1, '500'),
(44, '2022-11-15', '2022-11-09', '2022-11-15', 0, 1, 1, '500'),
(45, '2022-11-15', '2022-11-09', '2022-11-15', 1, 1, 1, '500'),
(46, '2022-11-15', '2022-11-09', '2022-11-15', 0, 1, 1, '500'),
(47, '2022-11-17', '2022-11-10', '2022-11-17', 0, 1, 1, '500'),
(48, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(49, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(50, '2022-11-17', '2022-11-09', '2022-11-11', 0, 1, 1, '500'),
(51, '2022-11-17', '2022-11-09', '2022-11-17', 0, 1, 1, '500'),
(52, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(53, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(54, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(55, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(56, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(57, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(58, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(59, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(60, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(61, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(62, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(63, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(64, '2022-11-17', '2022-11-10', '2022-11-16', 1, 1, 1, '500'),
(65, '2022-11-17', '2022-11-10', '2022-11-16', 0, 1, 1, '500'),
(66, '2022-11-17', '2022-11-10', '2022-11-16', 0, 1, 1, '500'),
(67, '2022-11-17', '2022-11-10', '2022-11-16', 0, 1, 1, '500'),
(68, '2022-11-17', '2022-11-15', '2022-11-16', 0, 1, 1, '500'),
(69, '2022-11-17', '2022-11-09', '2022-11-18', 1, 1, 1, '500'),
(70, '2022-11-17', '2022-11-02', '2022-11-16', 0, 1, 1, '500'),
(71, '2022-11-17', '2022-11-02', '2022-11-18', 1, 1, 1, '500'),
(72, '2022-11-17', '2022-11-02', '2022-11-18', 1, 2, 1, '500'),
(73, '2022-11-17', '2022-11-10', '2022-11-16', 0, 1, 1, '500'),
(74, '2022-11-17', '2022-11-02', '2022-11-16', 0, 1, 1, '500'),
(75, '2022-11-18', '2022-11-10', '2022-11-17', 0, 1, 1, '500'),
(76, '2022-11-18', '2022-11-10', '2022-11-17', 0, 2, 1, '500'),
(81, '2022-11-18', '2022-11-09', '2022-11-17', 0, 1, 1, '500'),
(82, '2022-11-18', '2022-11-09', '2022-11-17', 0, 1, 1, '500'),
(83, '2022-11-18', '2022-11-10', '0000-00-00', 1, 1, 6, '500'),
(84, '2022-11-18', '2022-11-10', '0000-00-00', 0, 1, 6, '500'),
(85, '2022-11-18', '2022-11-09', '2022-11-17', 0, 2, 7, '500'),
(86, '2022-11-19', '2022-11-03', '2022-11-18', 0, 2, 4, '1000'),
(87, '2022-11-20', '2022-11-10', '2022-11-16', 0, 2, 4, '500'),
(88, '2022-11-20', '2022-11-10', '2022-11-16', 0, 2, 4, '500');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(230) NOT NULL,
  `password` varchar(32) NOT NULL,
  `perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `perfil`) VALUES
(1, 'Admin', '1234', 'admin'),
(3, 'user', '12345678', 'rececionista '),
(4, 'helder', '123', 'recepcionista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarionormal`
--

CREATE TABLE `usuarionormal` (
  `id` int(11) NOT NULL,
  `username` varchar(230) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarionormal`
--

INSERT INTO `usuarionormal` (`id`, `username`, `password`, `email`) VALUES
(1, 'teste', '1234', 'teste@gmail.com'),
(2, 'teste2', '1234', 'teste2@gmail.com'),
(3, 'teste3', '1234', 'teste3@gmail.com'),
(4, 'teste4', '1234', 'teste4@gmail.com'),
(5, 'teste5', '1234', 'teste5@gmail.com'),
(6, 'teste6', '12', 'teste6@gmail.com'),
(7, 'helder', '1234', 'heldermucondo@gmail.com'),
(8, 'helder2', '1234', 'helder2mucondo@gmail.com'),
(9, 'helder23', '1234', 'helder23mucondo@gmail.com'),
(10, 'Ana', '1234', 'anamaria@gmail.com '),
(11, 'Mariela', 'helderama', 'marela@gmail.com'),
(12, 'katrine', 'amante', 'katrine23@gmail.com'),
(13, 'Helder2', '1234', 'helder2@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_quarto` (`id_quarto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarionormal`
--
ALTER TABLE `usuarionormal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `quarto`
--
ALTER TABLE `quarto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarionormal`
--
ALTER TABLE `usuarionormal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarionormal` (`id`);

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuarionormal` (`id`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_quarto`) REFERENCES `quarto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

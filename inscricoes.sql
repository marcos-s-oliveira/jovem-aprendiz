-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jun-2019 às 04:46
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inscricoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregador`
--

CREATE TABLE `empregador` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telefone` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empregador`
--

INSERT INTO `empregador` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Prefeitura Municipal de Figueirão - Gabinete do Prefeito', 'gabinete@figueirao.ms.gov.br', '32741126');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscritos`
--

CREATE TABLE `inscritos` (
  `id` int(11) NOT NULL,
  `vagaId` int(11) NOT NULL,
  `usuarioId` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inscritos`
--

INSERT INTO `inscritos` (`id`, `vagaId`, `usuarioId`, `created`) VALUES
(89, 5, 3, '2019-06-10 18:36:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `auth_pass` varchar(64) NOT NULL,
  `cpf` varchar(32) NOT NULL,
  `nascimento` date NOT NULL,
  `cel` varchar(32) NOT NULL,
  `logradouro` varchar(32) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(32) NOT NULL,
  `cep` int(11) NOT NULL,
  `municipio` varchar(64) NOT NULL,
  `uf` varchar(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `auth_pass`, `cpf`, `nascimento`, `cel`, `logradouro`, `numero`, `bairro`, `cep`, `municipio`, `uf`, `created`, `modified`) VALUES
(1, 'Teste do Sistema', 'teste@teste', '698dc19d489c4e4db73e28a713eab07b', '12345678909', '0000-00-00', '(12)34567-8901', 'Nome da Rua', 1, '1', 0, 'Fugueirão', 'MS', '2019-06-07 19:03:01', '2019-06-10 14:59:08'),
(3, 'marcos', 'marcos@mail.com', '25f9e794323b453885f5181f1b624d0b', '73650676168', '1992-09-15', '(41) 9 8507-1358', 'teste', 8, 'teste', 79, 'Municipio', 'UF', '2019-06-07 19:16:15', '2019-06-10 18:34:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `cargo` varchar(64) NOT NULL,
  `nivel` varchar(32) NOT NULL,
  `carga` int(11) NOT NULL,
  `vagas` varchar(32) NOT NULL,
  `inicio` varchar(32) NOT NULL,
  `fim` varchar(32) NOT NULL,
  `entrevistaInicio` varchar(32) NOT NULL,
  `entrevistaFim` varchar(32) NOT NULL,
  `edital` varchar(64) NOT NULL,
  `empregadorId` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `cargo`, `nivel`, `carga`, `vagas`, `inicio`, `fim`, `entrevistaInicio`, `entrevistaFim`, `edital`, `empregadorId`, `created`, `updated`, `ativo`) VALUES
(5, 'Jovem Aprendiz', 'Estudante', 20, 'CR', '2019-06-13', '2019-06-14', '2019-06-18', '2019-06-19', 'uploads/editais/1.pdf', 1, '2019-06-10 14:08:16', '2019-06-10 19:11:54', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empregador`
--
ALTER TABLE `empregador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscritos`
--
ALTER TABLE `inscritos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UsuarioId` (`vagaId`,`usuarioId`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empregador`
--
ALTER TABLE `empregador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inscritos`
--
ALTER TABLE `inscritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

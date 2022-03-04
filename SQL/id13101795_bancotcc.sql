-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24-Abr-2020 às 01:25
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id13101795_bancotcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `beneficiado`
--

CREATE TABLE `beneficiado` (
  `IDB` int(11) NOT NULL,
  `NomeB` varchar(100) NOT NULL,
  `CPFB` varchar(20) NOT NULL,
  `HistoriaB` varchar(256) NOT NULL,
  `EstadoB` varchar(30) NOT NULL,
  `TelB` varchar(15) NOT NULL,
  `RGB` varchar(20) NOT NULL,
  `SenhaB` varchar(40) NOT NULL,
  `EmailB` varchar(100) NOT NULL,
  `CidadeB` varchar(100) NOT NULL,
  `LoginB` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `beneficiado`
--

INSERT INTO `beneficiado` (`IDB`, `NomeB`, `CPFB`, `HistoriaB`, `EstadoB`, `TelB`, `RGB`, `SenhaB`, `EmailB`, `CidadeB`, `LoginB`) VALUES
(6, 'Gabriel Garcia Ferreira', '452.964.208-96', 'Eu temho camcer e quero aduja :D', 'São Paulo', '(18) 98828-8936', '45.245.215-2', '793c7a8ff6a9d9751ee5cd30ce578e07', 'garciasplayferreirag@gmail.com', 'Araçatuba', 'gabrielgarcia27'),
(8, 'Tayná Goes de Sousa', '416.796.488-02', 'Qual é parça tô precisando, faz a boa ai', 'Acre', '(18) 98807-1968', '39.384.570-9', 'ba02b3ee10c3dfb30a349e2e6cdddf15', 'tayna.sousa2@etec.sp.gov.br', 'Desconhecida', 'Tayná');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `IDDO` int(11) NOT NULL,
  `ConfirmacaoDo` varchar(5) NOT NULL,
  `DataDo` date NOT NULL,
  `DescricaoDo` varchar(30) NOT NULL,
  `IDD` int(11) NOT NULL,
  `IDB` int(11) NOT NULL,
  `IDP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `IDD` int(11) NOT NULL,
  `NomeD` varchar(100) NOT NULL,
  `EmailD` varchar(100) NOT NULL,
  `SenhaD` varchar(40) NOT NULL,
  `CPFD` varchar(20) NOT NULL,
  `RGD` varchar(20) NOT NULL,
  `CidadeD` varchar(30) NOT NULL,
  `EstadoD` varchar(30) NOT NULL,
  `TelD` varchar(15) NOT NULL,
  `LoginD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `doador`
--

INSERT INTO `doador` (`IDD`, `NomeD`, `EmailD`, `SenhaD`, `CPFD`, `RGD`, `CidadeD`, `EstadoD`, `TelD`, `LoginD`) VALUES
(2, 'Tayná Goes de Sousa', 'taynagoes02@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '416.796.488-02', '39.384.570-9', 'Araçatuba', 'Roraima', '(18) 98807-1968', 'Tayna'),
(9, 'Gabriel Garcia Ferreira ', 'garciasplayferreirag@gmail.com', 'c5b66f3fc19d9cfbfef27e9133391a4b', '452.964.208-96', '15.259.595-9', 'Araçatuba', 'São Paulo', '(18) 99999-9999', 'GabrielGarcia27'),
(15, 'Linda', 'linda@linda.com', 'eaa171a95386b61263c17796fdac9873', '278.037.638-47', '55.754.414', 'Desconhecida', 'Ceará', '(11) 98182-8486', 'Linda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `IDP` int(11) NOT NULL,
  `NomeP` varchar(100) NOT NULL,
  `dataP` date NOT NULL,
  `CategoriaP` varchar(100) NOT NULL,
  `QuantidadeP` varchar(256) NOT NULL,
  `fotoP` varchar(256) NOT NULL,
  `descP` text NOT NULL,
  `IDD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`IDP`, `NomeP`, `dataP`, `CategoriaP`, `QuantidadeP`, `fotoP`, `descP`, `IDD`) VALUES
(1, 'Camiseta', '2020-04-02', 'Roupas', '1', 'produtos/a9eac71419.jpg', 'Tam P - Semi Nova', 2),
(3, 'Casa', '2020-04-03', 'Cestas Básicas', '4', 'produtos/510fdcf339233c5.png', 'dvdfv', 2),
(4, 'Camiseta', '2020-04-22', 'Roupas', '20', 'produtos/4d52f3f61d28c88.png', 'Tamanho G - Preta', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `beneficiado`
--
ALTER TABLE `beneficiado`
  ADD PRIMARY KEY (`IDB`),
  ADD UNIQUE KEY `CPFB` (`CPFB`),
  ADD UNIQUE KEY `LoginB` (`LoginB`);

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`IDDO`),
  ADD KEY `IDD` (`IDD`),
  ADD KEY `IDB` (`IDB`),
  ADD KEY `IDP` (`IDP`);

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`IDD`),
  ADD UNIQUE KEY `EmailD` (`EmailD`),
  ADD UNIQUE KEY `CPFD` (`CPFD`),
  ADD UNIQUE KEY `LoginD` (`LoginD`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`IDP`),
  ADD KEY `IDD` (`IDD`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `beneficiado`
--
ALTER TABLE `beneficiado`
  MODIFY `IDB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `IDDO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `IDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `IDP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `doacao_ibfk_1` FOREIGN KEY (`IDD`) REFERENCES `doador` (`IDD`),
  ADD CONSTRAINT `doacao_ibfk_2` FOREIGN KEY (`IDB`) REFERENCES `beneficiado` (`IDB`),
  ADD CONSTRAINT `doacao_ibfk_3` FOREIGN KEY (`IDP`) REFERENCES `produto` (`IDP`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`IDD`) REFERENCES `doador` (`IDD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

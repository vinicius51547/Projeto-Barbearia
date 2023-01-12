-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2021 às 18:25
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdsalao2ds`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbagenda`
--

CREATE TABLE `tbagenda` (
  `idagenda` int(11) NOT NULL,
  `dataAgenda` datetime DEFAULT NULL,
  `horaagenda` time DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `idservico` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(30) NOT NULL,
  `cpfCliente` varchar(14) NOT NULL,
  `celularCliente` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idproduto` int(11) NOT NULL,
  `descproduto` varchar(30) DEFAULT NULL,
  `textoproduto` varchar(50) DEFAULT NULL,
  `fotoproduto` varchar(60) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservico`
--

CREATE TABLE `tbservico` (
  `idservico` int(11) NOT NULL,
  `descServico` varchar(20) NOT NULL,
  `textoServico` varchar(50) NOT NULL,
  `fotoServico` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(20) DEFAULT NULL,
  `loginUsuario` varchar(20) DEFAULT NULL,
  `senhaUsuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  ADD PRIMARY KEY (`idagenda`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idservico` (`idservico`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idproduto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbservico`
--
ALTER TABLE `tbservico`
  ADD PRIMARY KEY (`idservico`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  MODIFY `idagenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbservico`
--
ALTER TABLE `tbservico`
  MODIFY `idservico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  ADD CONSTRAINT `tbagenda_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `tbagenda_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbagenda_ibfk_3` FOREIGN KEY (`idservico`) REFERENCES `tbservico` (`idservico`);

--
-- Limitadores para a tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `tbproduto_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

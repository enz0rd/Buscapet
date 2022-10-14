-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Out-2022 às 01:06
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdbuscapet`
--

-- --------------------------------------------------------

CREATE TABLE `categorias_empresas` (
  `idcategoria` int(100) NOT NULL,
  `ds_categoria` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `categorias_prodser` (
	`idcategoria` int(100) NOT NULL,
	`ds_categoria` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `idempresa` int(100) NOT NULL,
  `logoempresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ds_empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc_empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contato_empresa` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `idcategoria` int(100) NOT NULL,
  `endereco_empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(100) NOT NULL,
  `img_produto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ds_produto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor_produto` decimal(60,0) NOT NULL,
  `qtd_produto` int(100) NOT NULL,
  `desc_produto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idcategoria` int(100) NOT NULL,
  `idempresa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idservico` int(100) NOT NULL,
  `img_servico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ds_servico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor_servico` decimal(10,0) NOT NULL,
  `desc_servico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idcategoria` int(100) NOT NULL,
  `idempresa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias_prodser`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `ds_categoria` (`ds_categoria`);


--
-- Índices para tabela `categorias_empresas`
--
ALTER TABLE `categorias_empresas`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `ds_categoria` (`ds_categoria`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresa`),
  ADD KEY `idcategoria` (`idcategoria`),
  ADD UNIQUE KEY `ds_empresa` (`ds_empresa`,`contato_empresa`,`endereco_empresa`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`),
  ADD KEY `idempresa` (`idempresa`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idservico`),
  ADD KEY `idempresa` (`idempresa`),
  ADD KEY `idcategoria` (`idcategoria`);
--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias_empresas`
--
ALTER TABLE `categorias_empresas`
  MODIFY `idcategoria` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias_prodser`
--
ALTER TABLE `categorias_prodser`
  MODIFY `idcategoria` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idempresa` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idservico` int(100) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_empresas` (`idcategoria`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_prodser` (`idcategoria`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  ADD CONSTRAINT `servicos_ibfk_2` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_prodser` (`idcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

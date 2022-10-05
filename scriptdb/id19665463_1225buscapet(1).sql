-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Out-2022 às 23:09
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id19665463_1225buscapet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `idempresa` int(100) NOT NULL,
  `logoempresa` blob NOT NULL,
  `ds_empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_Empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc_empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contato_empresa` int(100) NOT NULL,
  `endereco_empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(100) NOT NULL,
  `img_produto` blob NOT NULL,
  `ds_produto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor_produto` decimal(60,0) NOT NULL,
  `qtd_produto` int(100) NOT NULL,
  `desc_produto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cat_produto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idempresa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idservico` int(100) NOT NULL,
  `img_servico` blob NOT NULL,
  `ds_servico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor_servico` decimal(10,0) NOT NULL,
  `desc_servico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cat_servico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idempresa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresa`),
  ADD UNIQUE KEY `ds_empresa` (`ds_empresa`,`contato_empresa`,`endereco_empresa`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`),
  ADD KEY `idempresa` (`idempresa`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idservico`),
  ADD KEY `idempresa` (`idempresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

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
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

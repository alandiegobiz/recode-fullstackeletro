-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2020 às 04:08
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstackeletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `msg` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `msg`, `data`) VALUES
(4, 'Clara', 'Mozao eu te amo', '2020-10-30 14:06:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `nome_cliente` varchar(60) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `preco_venda` float NOT NULL,
  `quantidade` int(10) NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`nome_cliente`, `endereco`, `telefone`, `descricao`, `preco_venda`, `quantidade`, `valor_total`) VALUES
('Pedro', 'Rua Pedro', '(11)98680-7141', 'Geladeira Consul', 2000, 3, 6000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` float(8,2) DEFAULT NULL,
  `preco_venda` float(8,2) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES
(1, 'geladeira', 'Geladeira Frost Free Brastemp 540L', 6389.00, 5019.00, 'https://brastemp.vtexassets.com/arquivos/ids/161686/BRO80AB-beladeira-brastemp-side-inverse-540-litros-VITRINE_1650x1450.jpg?v=636626012576530000'),
(2, 'geladeira', 'Geladeira Frost Free Brastemp 375L', 2068.60, 1910.90, 'https://images-submarino.b2w.io/produtos/01/00/offers/01/00/item/133605/7/133605724SZ.png'),
(3, 'geladeira', 'Geladeira Consul Prata 340 litros', 2199.90, 2069.00, 'https://www.extra-imagens.com.br/Eletrodomesticos/GeladeiraeRefrigerador/2Portas/50003895/1164853080/refrigerador-consul-crm39ak-frost-free-com-prateleiras-altura-flex-evox-prata-340l-50003895.jpg'),
(4, 'fogao', 'Fogão Consul 4 bocas', 939.00, 849.90, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRMT5fQnsD4XBh0EUnf1B9tIkSFBnZ3gQfCGwul4FJ5I5g65XMVqBPCOxtZKwv-gfVv_CP3_hb7&usqp=CAc'),
(5, 'fogao', 'Fogão Esmaltec 6 bocas', 1250.00, 1099.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBCbJ42xmHJu-BOeb35JaRw5dgChod0Vf4dkFT85PmpEHRW05Ojekr_dDHqQ&usqp=CAc'),
(6, 'microondas', 'Microondas Electrolux', 650.00, 559.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQb3KEUaWsqYuEpIRb_vrczVxlb0PL2okv0keZgFnw_ujEoKeg2xk_lkM50hPc3OoWwMemSmVE&usqp=CAc'),
(7, 'microondas', 'Microondas LG', 800.00, 699.90, 'https://www.casasbahia-imagens.com.br/Eletrodomesticos/FornodeMicroondas/1502277815/1444992139/microondas-lg-solo-30-litros-prata-ms3095-1502277815.jpg'),
(8, 'microondas', 'Microondas Consul', 600.00, 549.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSCCrqsLzL256Pl4iLaSIxBtLsUIGG1vKmt1kPWCtPedLR_Ii3f5IVfZ-VHqQ&usqp=CAc'),
(9, 'lavaroupas', 'Lavadoura de roupas Consul 12Kg', 1999.00, 1750.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTZ03Q_ncKqID85FNqw1ieeOxZGP6R9OpgxgBGp0wDn5TNm6VRoXAD7SQzvrAZAlmrXjWjJao3Q&usqp=CAc'),
(10, 'lavaroupas', 'Lavadoura de roupas Electrolux 13Kg', 2400.00, 1950.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTcnEYYqOvplDJxiJAYCT5WmuAzNAA1g6FjTnOqX9qhEn31A68DUF7PhAHAurhY2IGlV1mFsOIG&usqp=CAc'),
(11, 'lavaloucas', 'Lavadoura-louças Brastemp', 3000.00, 2650.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSXznzIKgqH4oM5cLgZXCYCRZVK4q-02NaTk8lHiM8txZDoyXiaw3q4xqV2OYTj82zw0Chl7JM&usqp=CAc'),
(12, 'lavaloucas', 'Lavadoura-louças Electrolux', 2750.00, 2350.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRFT4u5Tmj6O3IINWHQx6iF_u_KNasIwlCjcB3CtcJ5kwqwjsMg1ARv4j7WHBqarp_5MxBMMfnA&usqp=CAc');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2022 às 21:15
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `nome` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `senha` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`nome`, `email`, `senha`) VALUES
('das', 'a@a', 'a'),
('asd', 'aaaaa@w', '2'),
('asd', 'asd@asd', 'asd'),
('john', 'john.fronza@unidavi.edu.br', 'senhareal'),
('Nio', 'nio@gmail.com', '123'),
('rew', 'q@w', '123'),
('rew', 'rew@rew', 'rew'),
('RAWRUWUUWRARWRWRW', 'thezippynio@gmail.ciom', 'amofurriespelados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(99) NOT NULL,
  `descricao` varchar(999) NOT NULL,
  `id` int(99) NOT NULL,
  `categoriaid` int(99) NOT NULL,
  `img_caminho` varchar(99) NOT NULL,
  `valor` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `descricao`, `id`, `categoriaid`, `img_caminho`, `valor`) VALUES
('Cellphone_1', 'It works', 1, 1, 'images/cellphone.jpg', 5000),
('Arabic Cellphone', 'Iraq technology', 2, 1, 'images/arabic.jpeg', 6),
('iPhone 22', 'real', 3, 1, 'images/iphone22.png', 22222),
('Televisão Portátil | Hypson', 'televisão portátil em preto e branco tamanho 5,5 polegadas , voltagem 110,220,60hz,e pilha . • Cor: colorido/preto/branco • Descrição completa: televisão portátil em preto e branco tamanho 5,5 polegadas , voltagem 110,220,60hz,e pilha .', 4, 2, 'images/tubo.png', 156);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoriaid` (`categoriaid`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

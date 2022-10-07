-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Out-2022 às 21:58
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
('Televisão Portátil | Hypson', 'televisão portátil em preto e branco tamanho 5,5 polegadas , voltagem 110,220,60hz,e pilha . • Cor: colorido/preto/branco • Descrição completa: televisão portátil em preto e branco tamanho 5,5 polegadas , voltagem 110,220,60hz,e pilha .', 4, 2, 'images/tubo.png', 156),
('Smart TV 50” Crystal 4K Samsung 50AU7700 - Wi-Fi Bluetooth HDR Alexa Built in 3 HDMI 1 USB', 'Se você procura uma TV para assistir filmes, séries, novelas e até mesmo jogar seus games favoritos com a melhor qualidade possível, a Smart TV UN50AU7700GXZD da Samsung é o modelo ideal para a sua casa! Ela possui tela de 50\" Crystal 4K com painel VA, oferecendo cores vivas e imagens impressionantes de qualquer ângulo. As bordas super finas aumentam ainda mais o campo de visão e destacam apenas as imagens que você quer ver. A Tv Samsung crystal 50\" seu design elegante contribui para deixar o ambiente mais organizado, pois conta com canaletas exclusivas para organizar e esconder os fios. O sistema operacional Tizen traz mais praticidade e permite comandar a TV por voz através de assistentes integrados como Bixby, Alexa e Google Assistant. Um dos grandes destaques deste modelo é o controle remoto único desenvolvido pela Samsung. Com ele você pode controlar todos os aparelhos compatíveis conectados a TV e acessar aplicativos com um único botão de atalho. Além disso, esta smart TV oferec', 6, 2, 'images/tv.webp', 2535),
('Micro-ondas Panasonic 21L Branco NN-ST25LWRU', 'Modelo: NN-ST25LWRU\r\nCor: Branco\r\nConteúdo da Embalagem: 01 Micro-ondas + 01 Prato Giratório + 01 Manual de Instruções\r\nGarantia: 12 meses\r\nSAC: 0800-776-0000 e 4004-6600', 7, 3, 'images/microondas.webp', 489),
('Sofá 2,00 Metros Retrátil e Reclinável Viero Eduarda, 3 ou + Lugares ', 'Está em busca da melhor opção para conforto em beleza para sua sala de estar? Então conheça o Sofá de 2,00 Metros Eduarda da Viero, que conta com estrutura produzida em madeira de eucalipto e tecido veludo, acabamento semi-brilhoso, o que garante alta resistência e firmeza, além de assentos em espuma D23/convencional e percintas elásticas e encostos 100% em fibra siliconada. Não perca tempo e garanta já o seu!', 10, 4, 'images/sofa.webp', 799);

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
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

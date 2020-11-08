-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2020 às 20:29
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(40) NOT NULL,
  `categorias` varchar(30) NOT NULL,
  `artigo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data` varchar(30) NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_usuario` (`usuario_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id_post`, `titulo`, `autor`, `categorias`, `artigo`, `data`, `usuario_id`) VALUES
(1, 'Apple marca evento para 10 de novembro; o que vem por aí?', 'Thayla', 'tecnologia', 'A Apple confirmou que realizará um evento no dia 10 de novembro. Batizada de \\\"One more thing\\\", a ocasião deve servir para apresentar um novo produto da empresa. A expectativa é de que a gigante finalmente revele o primeiro MacBook com arquitetura ARM.\r\n\r\nChips Apple Silicon devem ser baseados no A14 Bionic, afirmam rumores\r\nPor que a Apple trocou processadores Intel pela arquitetura ARM?\r\nA empresa começou a enviar convites com a expressão. Ela pode ser traduzida como “tem mais uma coisa” e era uma frase cunhada por Steve Jobs para captar a atenção para um anúncio que fechava suas apresentações. \r\n', '02/11/2020 às 18:24:25', 6),
(2, 'Opinião: São Paulo, aonde você pode chegar? Goleada sobre o Flamengo nos leva a essa pergunta', 'Aleeh', 'esportes', 'Admita, torcedor são-paulino: você não esperava essa goleada do São Paulo por 4 a 1 sobre o Flamengo, domingo, no Maracanã. Não tem problema reconhecer: eu também não.\r\n\r\nAliás, no podcast \\\"Ge São Paulo\\\" (clique aqui para ouvir), todos nós erramos os palpites para o jogo no Maracanã. O resultado mais otimista foi um empate, chute do Eduardo Rodrigues.\r\nDentro de campo, no entanto, o São Paulo surpreendeu e fez uma de suas melhores atuações sob o comando de Fernando Diniz em um espetacular jogo de futebol com o Flamengo no Maracanã.\r\n\r\n', '02/11/2020 às 18:28:29', 7),
(3, 'Novo titulo', 'manoze', 'entretenimento', 'Novembro é o mês da chegada de uma nova geração de consoles. Com lançamento previsto para 10 e 19 de novembro no Brasil, respectivamente, o Xbox Series X e S e o PlayStation 5 chegam para ditar as regras dos próximos anos, com seus games exclusivos ou não apresentando gráficos incríveis, novas tecnologias e maneiras de se jogar.\r\nA notícia boa, além da chegada das plataformas em si, é que a maioria dos games estará disponível também nos consoles atuais, o que significa que quem não quer investir em uma nova plataforma agora não ficará sem ter o que jogar. Enquanto isso, no Switch, os jogadores dão uma olhada no passado de The Legend of Zelda: Breath of the Wild; já no PC, uma nova expansão de World of Warcraft chega para levar o universo adiante.\r\nO novo capítulo da saga dos assassinos nos leva à era nórdica, em uma mistura de mitos e realidade que já se tornou tradição da franquia da Ubisoft. Mais uma vez estreando uma nova era de plataformas, a empresa traz um ambiente que há muito vinha sendo esperado e rumorizado pelos fãs, com direito a todos os combates, barbas cheias e auroras boreais que uma história desse tipo tem direito.\r\n\r\nEm Assassin’s Creed Valhalla, estamos em um momento de guerra dos nórdicos contra as tropas inglesas. O mundo aberto do jogo nos levará a diferentes cidades e povoados da época, enquanto controlamos personagens masculino ou feminino de acordo com a escolha do usuário, o que também inclui customizações e uma árvore de habilidades complexa.\r\n\r\nO novo game chega em 10 de novembro para PC, PS4 e Xbox One, com upgrades gratuitos ou versões diretas para o PlayStation 5 e Xbox Series X | S em seus respectivos lançamentos.', '02/11/2020 às 18:29:52', 7),
(4, 'Xbox Series X e S têm queda de preço no Brasil após redução do IPI', 'BrksEdu', 'entretenimento', 'A Microsoft anunciou nesta quinta-feira (29) a redução de preço dos Xbox Series X e Series S no Brasil. Com isso, o Xbox Series X vai passar de R$ 4.999 para R$ 4.599, uma redução de 8% no preço final; enquanto o Xbox Séries S teve seu preço reduzido de R$ 2.999 para R$ 2.799, ou seja, corte de 6,66% no preço final.\r\nEm comunicado oficial à imprensa, a companhia disse que o corte no preço vem em decorrência do decreto que diminui o Imposto sob Produtos Industrializados (IPI) para o setor de videogames. “Após o decreto da redução do IPI para videogames ser publicado no Diário Oficial da União, os novos consoles Xbox Series X e S chegam ao país com preços reduzidos”, informou a companhia.\r\n\r\nQuem fez a compra antecipada dos videogames e está aguardando a entrega, poderá solicitar reembolso. Contudo, isso precisa ser acordado com o próprio revendedor. “Os consumidores que já fizeram a compra na pré-venda devem solicitar o reembolso com os varejistas responsáveis pela comercialização, que devem avaliar como isso será feito caso a caso”, explica a Microsoft.\r\nQueda do IPI\r\nNo último dia 26 de outubro, o presidente Jair Bolsonaro anunciou a redução de 10% no IPI para o setor de games. Com isso, consoles passaram de 40% para 30% na alíquota do imposto. Outros dois setores também se beneficiaram da medida: o de “partes e acessórios dos consoles e das máquinas de jogos de vídeo cujas imagens são reproduzidas numa tela” (de 32% para 22%) e de “máquinas de jogos de vídeo com tela incorporada, portáteis ou não, e suas partes” (de 16% para 6%).', '02/11/2020 às 18:31:42', 6);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `id_usuarioFK` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

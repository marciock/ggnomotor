-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 06/08/2018 às 21:00
-- Versão do servidor: 5.7.23-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ggno`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comites`
--

CREATE TABLE `comites` (
  `id_comite` int(11) NOT NULL,
  `comite` varchar(80) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Fazendo dump de dados para tabela `comites`
--

INSERT INTO `comites` (`id_comite`, `comite`) VALUES
(1, 'Lorem Ipsum'),
(2, 'Ipsum contuer');

-- --------------------------------------------------------

--
-- Estrutura para tabela `documentos`
--

CREATE TABLE `documentos` (
  `id_documentos` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `titulo` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `id_setor` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `chave` varchar(8) COLLATE utf8_general_mysql500_ci NOT NULL,
  `arquivo` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `descricao` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `gestao`
--

CREATE TABLE `gestao` (
  `id_menu` int(11) NOT NULL,
  `id_usuario` varchar(15) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `icon`
--

CREATE TABLE `icon` (
  `id_icon` int(11) NOT NULL,
  `icon` text COLLATE utf8_bin NOT NULL,
  `disabled` text COLLATE utf8_bin NOT NULL,
  `title` varchar(80) COLLATE utf8_bin NOT NULL,
  `url` text COLLATE utf8_bin NOT NULL,
  `component` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `icon`
--

INSERT INTO `icon` (`id_icon`, `icon`, `disabled`, `title`, `url`, `component`) VALUES
(1, 'icons/usuarios.svg', 'icons/usuarios_desabled.svg', 'Usuarios', '/usuarios', 'nd-usuarios'),
(2, 'icons/documentos.svg', 'icons/documentos_desabled.svg', 'Documentos', '/documentos', 'nd-documentos'),
(3, 'icons/comites.svg', 'icons/comites_desabled.svg', 'Comites', '/comites', 'nd-comites'),
(4, 'icons/indicadores.svg', 'icons/indicadores_desabled.svg', 'Indicadores', '/indicadores', 'nd-indicadores'),
(5, 'icons/noticias.svg', 'icons/noticias_desabled.svg', 'Noticias', '/noticias', 'nd-noticias'),
(6, 'icons/agendas.svg', 'icons/agendas_desabled.svg', 'Agenda', '/agenda', 'nd-agenda'),
(7, 'icons/ideias.svg', 'icons/ideias_desabled.svg', 'Ideias', '/ideias', 'nd-ideias'),
(8, 'icons/reunioes.svg', 'icons/reunioes_desabled.svg', 'Reunioes dos Comites', '/reunioes', 'nd-reunioes'),
(9, 'icons/notas.svg', '', 'Unidades', '/unidades', 'nd-unidades'),
(10, 'icons/local.svg', '', 'Locais', '/locais', 'nd-locais'),
(11, 'icons/setores.svg', '', 'Setores', '/setores', 'nd-setores');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ideias`
--

CREATE TABLE `ideias` (
  `id_ideias` int(11) NOT NULL,
  `chave` varchar(8) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nome` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `titulo` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `descricao` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `indicadores`
--

CREATE TABLE `indicadores` (
  `id_indicadores` int(11) NOT NULL,
  `titulo` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `descricao` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `mes` int(2) NOT NULL,
  `ano` int(4) NOT NULL,
  `arquivo` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Fazendo dump de dados para tabela `indicadores`
--

INSERT INTO `indicadores` (`id_indicadores`, `titulo`, `descricao`, `mes`, `ano`, `arquivo`) VALUES
(2, 'Indicadore', 'descricao do indicadore', 2, 2018, 'http://localhost/ggnomotor/assets/indicadores/teste.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `local`
--

CREATE TABLE `local` (
  `id_local` int(11) NOT NULL,
  `cidade` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Fazendo dump de dados para tabela `local`
--

INSERT INTO `local` (`id_local`, `cidade`) VALUES
(1, 'Maringa'),
(2, 'Paranavai'),
(4, 'Campo Mourao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `id_unidade` int(8) NOT NULL,
  `titulo` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `resumo` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `descricao` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `data` date NOT NULL,
  `imagem` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Fazendo dump de dados para tabela `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `id_unidade`, `titulo`, `resumo`, `descricao`, `data`, `imagem`) VALUES
(2, 5, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur.\r\ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', '2018-05-18', 'http://localhost/ggnomotor/assets/noticias/52018-05-180754.jpg'),
(3, 5, 'But I must explain to you how', 'But I must explain to you how.\r\ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', '2018-05-18', 'http://localhost/ggnomotor/assets/noticias/52018-05-180755.jpg'),
(4, 4, 'At vero eos et accusamus et iusto odio ', 'At vero eos et accusamus et iusto odio .\r\ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', '2018-05-18', 'http://localhost/ggnomotor/assets/noticias/42018-05-180756.jpg'),
(5, 4, 'On the other hand, we denounce', 'On the other hand, we denounce\r\ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'n the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\nn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\nn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\nn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\nn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\nn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\nn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n/\r\n', '2018-05-18', 'http://localhost/ggnomotor/assets/noticias/42018-05-180758.jpg'),
(6, 3, 'in voluptate velit esse cillum ', 'in voluptate velit esse cillum \r\ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2018-05-18', 'http://ggnomotor/assets/noticias/32018-05-180758.jpg'),
(7, 2, 'Sed ut perspiciatis unde omnis ', 'Sed ut perspiciatis unde omnis ', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2018-05-18', 'http://localhost/ggnomotor/assets/noticias/22018-05-180759.jpg'),
(8, 1, 'account of the system, and expound the ', 'account of the system, and expound the .\r\ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', '2018-05-18', 'http://localhost/ggnomotor/assets/noticias/12018-05-180800.jpg'),
(9, 2, 'teste do titulo', 'teste do resumo', 'teste da descriÃ§Ã£o', '2018-07-27', '/var/www/ggnomotor/assets/noticias/22018-07-271030.jpg'),
(10, 2, 'teste do titulo', 'teste do resumo', 'teste da descriÃ§Ã£o', '2018-07-27', '/var/www/ggnomotor/assets/noticias/22018-07-271037.jpg'),
(11, 2, 'teste do titulo', 'teste do resumo', 'teste da descriÃ§Ã£o', '2018-07-27', '/var/www/ggnomotor/assets/noticias/22018-07-271039.jpg'),
(12, 2, 'teste do titulo', 'teste do resumo', 'teste da descriÃ§Ã£o', '2018-07-27', '/var/www/ggnomotor/assets/noticias/22018-07-271039.jpg'),
(13, 2, 'teste do titulo', 'teste do resumo', 'teste da descriÃ§Ã£o', '2018-07-27', '/var/www/ggnomotor/assets/noticias/22018-07-271041.jpg'),
(14, 2, 'teste do titulo', 'teste do resumo', 'teste da descriÃ§Ã£o', '2018-07-27', '/var/www/ggnomotor/assets/noticias/22018-07-271042.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `privilegio`
--

CREATE TABLE `privilegio` (
  `id_privilegio` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `id_icon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `privilegio`
--

INSERT INTO `privilegio` (`id_privilegio`, `id_usuarios`, `id_icon`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 3, 2),
(13, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reunioes`
--

CREATE TABLE `reunioes` (
  `id_reunioes` int(11) NOT NULL,
  `assunto` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `id_local` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora_inicial` time NOT NULL,
  `hora_final` time NOT NULL,
  `descricao` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `participantes` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Fazendo dump de dados para tabela `reunioes`
--

INSERT INTO `reunioes` (`id_reunioes`, `assunto`, `id_local`, `data`, `hora_inicial`, `hora_final`, `descricao`, `participantes`) VALUES
(3, 'Projetos Hidraulicos', 2, '2018-04-19', '21:00:00', '21:00:00', 'Esta e uma reuniao muito importante', 'Todos os funiocnarios da DO'),
(4, 'Indicadores de MarÃƒÂ§o', 1, '2018-04-19', '08:00:00', '10:00:00', 'Esta e uma reuniao muito legal', 'Gerente de Umuarama  e coordenadores ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reunioes_comites`
--

CREATE TABLE `reunioes_comites` (
  `id_reunioescomites` int(11) NOT NULL,
  `assunto` text COLLATE utf8_bin NOT NULL,
  `id_comite` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora_inicial` time NOT NULL,
  `hora_final` time NOT NULL,
  `descricao` text COLLATE utf8_bin NOT NULL,
  `participantes` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `reunioes_comites`
--

INSERT INTO `reunioes_comites` (`id_reunioescomites`, `assunto`, `id_comite`, `id_local`, `data`, `hora_inicial`, `hora_final`, `descricao`, `participantes`) VALUES
(1, 'Lorem Ipsum', 1, 2, '2018-05-29', '09:00:00', '11:00:00', 'Ipsum Lorem ', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `setor`
--

CREATE TABLE `setor` (
  `id_setor` int(11) NOT NULL,
  `setor` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `setor`
--

INSERT INTO `setor` (`id_setor`, `setor`) VALUES
(1, 'Lorem'),
(2, 'Ipsum'),
(3, 'Quatzus'),
(4, 'Premateur');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipodoc`
--

CREATE TABLE `tipodoc` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `pasta` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Fazendo dump de dados para tabela `tipodoc`
--

INSERT INTO `tipodoc` (`id_tipo`, `tipo`, `pasta`) VALUES
(1, 'Microsoft Word', 'doc'),
(2, 'Libreoffice Write', 'odt'),
(3, 'Microsoft Excel', 'xls'),
(4, 'Libreoffice Calc', 'ods'),
(5, 'PDF', 'pdf'),
(6, 'Imagem', 'jpg'),
(7, 'Microsft Powerpoint', 'ppt'),
(8, 'Libreoffice Impress', 'odp');

-- --------------------------------------------------------

--
-- Estrutura para tabela `unidades`
--

CREATE TABLE `unidades` (
  `id_unidade` int(11) NOT NULL,
  `unidade` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Fazendo dump de dados para tabela `unidades`
--

INSERT INTO `unidades` (`id_unidade`, `unidade`) VALUES
(1, 'IPSUM'),
(2, 'RACCKA'),
(3, 'ACCUSAMUS'),
(4, 'FINIBUS'),
(5, 'LOREM'),
(6, 'Grum'),
(7, 'Grum'),
(8, 'Grum'),
(9, 'Grum'),
(10, 'Grum'),
(11, 'GGNO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `chave` varchar(8) COLLATE utf8_bin NOT NULL,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `senha` varchar(256) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `chave`, `nome`, `senha`, `email`) VALUES
(1, 'S01234', 'Mario Detras', '81dc9bdb52d04dc20036dbd8313ed055', 'marciock@gmail.com'),
(2, 's00890', 'Antonio da Silva', '827ccb0eea8a706c4c34a16891f84e7b', 'marciock@gmail.com'),
(3, 's011234', 'Carlos Albuquerque', '81dc9bdb52d04dc20036dbd8313ed055', 'carlosal@gmail.com'),
(4, 's008234', 'Daniele Chaventes', '81dc9bdb52d04dc20036dbd8313ed055', 'danyee@gmail.com'),
(5, 's023455', 'Reinaldo Legal', '3d2172418ce305c7d16d4b05597c6a59', 'reilegal@gamil.com'),
(6, 's0999999', 'Zeila Punginsk', '827ccb0eea8a706c4c34a16891f84e7b', 'zeila@gmail.com'),
(7, 's011345', 'Vanessa Salaf', '827ccb0eea8a706c4c34a16891f84e7b', 'vanessa@gmail.com');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `comites`
--
ALTER TABLE `comites`
  ADD PRIMARY KEY (`id_comite`);

--
-- Índices de tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documentos`);

--
-- Índices de tabela `gestao`
--
ALTER TABLE `gestao`
  ADD PRIMARY KEY (`id_menu`);

--
-- Índices de tabela `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id_icon`);

--
-- Índices de tabela `ideias`
--
ALTER TABLE `ideias`
  ADD PRIMARY KEY (`id_ideias`);

--
-- Índices de tabela `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id_indicadores`);

--
-- Índices de tabela `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id_local`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Índices de tabela `privilegio`
--
ALTER TABLE `privilegio`
  ADD PRIMARY KEY (`id_privilegio`);

--
-- Índices de tabela `reunioes`
--
ALTER TABLE `reunioes`
  ADD PRIMARY KEY (`id_reunioes`);

--
-- Índices de tabela `reunioes_comites`
--
ALTER TABLE `reunioes_comites`
  ADD PRIMARY KEY (`id_reunioescomites`);

--
-- Índices de tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id_setor`);

--
-- Índices de tabela `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices de tabela `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id_unidade`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documentos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `gestao`
--
ALTER TABLE `gestao`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `icon`
--
ALTER TABLE `icon`
  MODIFY `id_icon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `ideias`
--
ALTER TABLE `ideias`
  MODIFY `id_ideias` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id_indicadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `local`
--
ALTER TABLE `local`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de tabela `privilegio`
--
ALTER TABLE `privilegio`
  MODIFY `id_privilegio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de tabela `reunioes`
--
ALTER TABLE `reunioes`
  MODIFY `id_reunioes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `reunioes_comites`
--
ALTER TABLE `reunioes_comites`
  MODIFY `id_reunioescomites` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id_setor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id_unidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

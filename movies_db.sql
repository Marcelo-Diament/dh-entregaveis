-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Ago-2018 às 07:50
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `favorite_movie_id` int(10) UNSIGNED DEFAULT NULL,
  `picture_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `actors`
--

INSERT INTO `actors` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `rating`, `favorite_movie_id`, `picture_url`) VALUES
(1, NULL, NULL, 'Sam', 'Worthington', '7.5', 1, 'https://articlebio.com/uploads/bio/2016/07/19/sam-worthington.jpg'),
(2, NULL, NULL, 'Zoe', 'Saldana', '5.5', 2, 'https://articlebio.com/uploads/bio/2018/01/14/zoe-saldana.jpg'),
(3, NULL, NULL, 'Sigourney', 'Weaver', '9.7', NULL, 'https://cdn.24.co.za/files/Cms/General/d/1894/805554f3f2954ec8a453cc605d0c87b3.jpg'),
(4, NULL, NULL, 'Leonardo', 'Di Caprio', '3.5', 4, 'https://www.sde.co.ke/sdemedia/sdeimages/pulse/Leonardo111114.jpg'),
(5, NULL, NULL, 'Kate', 'Winslet', '1.5', 5, 'http://famosos.culturamix.com/blog/wp-content/gallery/kate-winslet/foto-kate-winslet-03.jpg'),
(6, NULL, NULL, 'Billy', 'Zane', '7.5', 6, 'https://image.gala.de/20118446/uncropped-0-0/43d19430310d4e6e678ed5bd469a6558/TL/billy-zane--5578119-.jpg'),
(7, NULL, NULL, 'Mark', 'Hamill', '6.5', 7, 'https://pausadrammatica.files.wordpress.com/2018/02/mark-hamill.jpg?w=450&h=450&crop=1'),
(8, NULL, NULL, 'Harrison', 'Ford', '7.5', 8, 'https://i1.wp.com/sociedadejedi.com.br/wp-content/uploads/2015/10/Harrison.jpg?fit=450%2C450'),
(9, NULL, NULL, 'Carrie', 'Fisher', '7.5', 9, 'https://i1.wp.com/sociedadejedi.com.br/wp-content/uploads/2016/12/15590134_1812120069059985_3007456045236659449_n.jpg?fit=450%2C450&ssl=1'),
(10, NULL, NULL, 'Sam', 'Neill', '2.5', 10, 'https://articlebio.com/uploads/biography/2018/04/05/sam-neill.jpg'),
(11, NULL, NULL, 'Laura', 'Dern', '7.5', 11, 'https://articlebio.com/uploads/bio/2017/10/04/laura-dern.jpg'),
(12, NULL, NULL, 'Jeff', 'Goldblum', '4.5', NULL, 'https://bookitnow.pk/uploads/8b3c21db79fe3558533cc66ff7ce05d8.jpg'),
(13, NULL, NULL, 'Daniel', 'Radcliffe', '7.5', 13, 'https://frostsnow.com//uploads/biography/2017/08/17/daniel-radcliffe.jpg'),
(14, NULL, NULL, 'Emma', 'Watson', '2.5', 14, 'https://frostsnow.com//uploads/biography/2015/10/04/emma-watson.jpg'),
(15, NULL, NULL, 'Rupert', 'Grint', '6.2', 15, 'https://www.herworld.com/sites/default/files/u14155/red.jpeg'),
(16, NULL, NULL, 'Shia', 'LaBeouf', '9.5', 16, 'https://articlebio.com/uploads/bio/2016/03/23/shia-labeouf.jpg'),
(17, NULL, NULL, 'Rosie', 'Huntington-Whiteley', '1.5', 17, 'https://www.herworld.com/sites/default/files/articles/women-now/people/rosie.jpg'),
(18, NULL, NULL, 'Matthew', 'Broderick', '6.1', 18, 'http://hwlebsworth.com.au/app/uploads/2017/03/Matthew-Broderick.jpg'),
(19, NULL, NULL, 'James', 'Earl Jones', '7.5', 19, 'https://i5.walmartimages.com/asr/b0af91b6-f0b2-4254-b1c4-c17f704c6351_1.eda16eaea778a650193730e9f7960fed.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF'),
(20, NULL, NULL, 'Jeremy', 'Irons', '7.2', 20, 'https://www.esquireme.com/sites/default/files/styles/full_img/public/images/2016/03/14/Jeremy-Irons-43580ok.jpeg?itok=2UxAfh5N'),
(21, NULL, NULL, 'Johnny', 'Depp', '1.5', 21, 'https://frostsnow.com//uploads/biography/2017/07/25/johnny-depp.jpg'),
(22, NULL, NULL, 'Helena', 'Bonham Carter', '7.5', 1, 'https://metrouk2.files.wordpress.com/2008/01/helenapremap_450x450.jpg?quality=80&strip=all&zoom=1&resize=450%2C450'),
(23, NULL, NULL, 'Mia', 'Wasikowska', '7.5', 2, 'https://frostsnow.com//uploads/biography/2018/01/26/mia-wasikowska.jpg'),
(24, NULL, NULL, 'Albert', 'Brooks', '2.5', 3, 'https://vignette.wikia.nocookie.net/nickelodeon-movies/images/e/ec/Albert_Brooks.jpg/revision/latest?cb=20170423131121'),
(25, NULL, NULL, 'Ellen', 'DeGeneres', '2.6', 4, 'https://articlebio.com/uploads/bio/ellen-degeneres.jpg'),
(26, NULL, NULL, 'Alexander', 'Gould', '7.5', 5, 'https://frostsnow.com/uploads/biography/2017/07/30/xalexander-gould.jpg.pagespeed.ic.CJcxnYHA5b.jpg'),
(27, NULL, NULL, 'Tom', 'Hanks', '4.4', 6, 'https://marriedwiki.com/uploads/bio/tom-hanks.jpg'),
(28, NULL, NULL, 'Tim', 'Allen', '7.5', 7, 'https://frostsnow.com//uploads/biography/2016/01/14/tim-allen.jpg'),
(29, NULL, NULL, 'Sean', 'Penn', '9.2', 8, 'https://articlebio.com/uploads/bio/2016/03/23/sean-penn.jpg'),
(30, NULL, NULL, 'Adam', 'Sandler', '3.1', 9, 'https://articlebio.com/uploads/bio/2016/03/23/adam-sandler.jpg'),
(31, NULL, NULL, 'Renee', 'Zellweger', '9.5', 10, 'https://cinematicpassions.files.wordpress.com/2008/06/bigimage_13386.jpg?w=450&h=450'),
(32, NULL, NULL, 'Emilia', 'Clarke', '8.2', 11, 'https://marriedwiki.com/uploads/bio/emilia-clarke.jpg'),
(33, NULL, NULL, 'Peter', 'Dinklage', '2.3', 12, 'https://articlebio.com/uploads/bio/2016/07/29/peter-dinklage.jpg'),
(34, NULL, NULL, 'Kit', 'Harington', '2.4', NULL, 'https://frostsnow.com/uploads/biography/2015/12/03/xkit-harington.jpg.pagespeed.ic.hRx4GJDKTS.jpg'),
(35, NULL, NULL, 'Jared', 'Padalecki', '2.8', 14, 'https://articlebio.com/uploads/bio/2015/12/23/jared-padalecki.jpg'),
(36, NULL, NULL, 'Jensen', 'Ackles', '5.5', 15, 'https://articlebio.com/uploads/bio/2015/12/23/jensen-ackles.jpg'),
(37, NULL, NULL, 'Jim', 'Beaver', '2.6', 16, 'http://www.damndirtygeeks.com/wp-content/uploads/2014/12/ScottWeitzHeadshot450.jpg'),
(38, NULL, NULL, 'Andrew', 'Lincoln', '3.3', 17, 'https://marriedwiki.com/uploads/bio/andrew-lincoln.jpg'),
(39, NULL, NULL, 'Jon', 'Bernthal', '2.9', NULL, 'https://marriedwiki.com/uploads/bio/jon-bernthal.jpg'),
(40, NULL, NULL, 'Sarah', 'Callies', '2.4', 19, 'https://marriedwiki.com/uploads/bio/sarah-wayne-callies.jpg'),
(41, NULL, NULL, 'Jim', 'Caviezel', '1.9', 20, 'https://frostsnow.com//uploads/biography/2016/01/04/jim-caviezel.jpg'),
(42, NULL, NULL, 'Taraji', 'Henson', '5.9', 21, 'https://frostsnow.com//uploads/biography/2016/01/01/taraji-p-henson.jpg'),
(43, NULL, NULL, 'Kevin', 'Chapman', '2.9', 1, 'https://i.imgur.com/sFaClS5.jpg'),
(44, NULL, NULL, 'Johnny', 'Galecki', '2.3', 2, 'https://frostsnow.com//uploads/biography/2016/01/02/johnny-galecki.jpg'),
(45, NULL, NULL, 'Jim', 'Parsons', '6.9', 3, 'https://articlebio.com/uploads/bio/2018/01/10/jim-parsons.jpg'),
(46, NULL, NULL, 'Kaley', 'Cuoco', '2.3', 4, 'https://frostsnow.com//uploads/biography/2015/11/15/kaley-cuoco.jpg'),
(47, NULL, NULL, 'Bryan', 'Cranston', '7.9', NULL, 'https://articlebio.com/uploads/bio/2017/02/23/bryan-cranston.jpg'),
(48, NULL, NULL, 'Aaron', 'Paul', '5.9', 6, 'https://frostsnow.com//uploads/biography/2017/09/23/aaron-paul.jpg'),
(49, NULL, NULL, 'Anna', 'Gunn', '3.1', 7, 'https://frostsnow.com/uploads/biography/2015/11/16/xanna-gunn.jpg.pagespeed.ic.a1wYv-Yq-M.jpg'),
(50, NULL, NULL, 'Ator', 'Novo', '9.9', 12, ''),
(89, '2018-08-20 03:03:56', '2018-08-20 03:03:56', 'Nicolas', 'Cage', '5.0', 2, 'https://images-na.ssl-images-amazon.com/images/I/418kHXlR8eL._SY450_.jpg'),
(100, '2018-08-20 04:32:31', '2018-08-20 04:32:31', 'Steve', 'Buscemi', '10.0', 96, 'https://bandbent.files.wordpress.com/2012/09/120810-s3-clip-trailer-day-3080689-36-450.jpg'),
(135, '2018-08-20 07:14:03', '2018-08-20 07:14:03', 'Michelle', 'Pfeiffer', '5.0', 16, 'https://marriedwiki.com/uploads/bio/michelle-pfeiffer.jpg'),
(142, '2018-08-20 07:37:17', '2018-08-20 07:37:17', 'Jim', 'Carrey', '5.5', 5, 'https://articlebio.com/uploads/bio/2015/12/15/jim-carrey.jpg'),
(143, '2018-08-20 07:46:06', '2018-08-20 07:46:06', 'Javier', 'Bardem', '8.1', 11, 'https://articlebio.com/uploads/bio/2016/02/05/javier-bardem.jpg'),
(144, '2018-08-20 07:48:47', '2018-08-20 07:48:47', 'Kevin', 'Costner', '8.1', 3, 'https://frostsnow.com//uploads/biography/2018/01/21/kevin-costner.jpg'),
(145, '2018-08-20 07:50:10', '2018-08-20 07:50:10', 'Kevin', 'Bacon', '7.7', 87, 'https://marriedwiki.com/uploads/bio/kevin-bacon.jpg'),
(146, '2018-08-20 07:54:16', '2018-08-20 07:54:16', 'Penelope', 'Cruz', '6.1', 84, 'https://frostsnow.com//uploads/biography/2015/10/04/penelope-cruz.jpg'),
(147, '2018-08-20 08:21:14', '2018-08-20 08:21:14', 'Sophia', 'Loren', '7.1', 92, 'https://i.pinimg.com/originals/0d/7e/a1/0d7ea1d63db070601e0310871741cfcd.jpg'),
(148, '2018-08-20 08:23:11', '2018-08-20 08:23:11', 'Brigitte', 'Bardot', '6.9', 1, 'http://1.bp.blogspot.com/-_A5IvXR795s/U1IBwTAZVhI/AAAAAAAAANU/iQtsFu1ZwNk/s1600/artworks-000037809258-q0fdat-original.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `actor_episode`
--

CREATE TABLE `actor_episode` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `episode_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `actor_episode`
--

INSERT INTO `actor_episode` (`id`, `created_at`, `updated_at`, `actor_id`, `episode_id`) VALUES
(1, NULL, NULL, 32, 1),
(2, NULL, NULL, 32, 2),
(3, NULL, NULL, 32, 3),
(4, NULL, NULL, 32, 4),
(5, NULL, NULL, 32, 5),
(6, NULL, NULL, 33, 1),
(7, NULL, NULL, 33, 2),
(8, NULL, NULL, 33, 3),
(9, NULL, NULL, 33, 4),
(10, NULL, NULL, 33, 5),
(11, NULL, NULL, 33, 6),
(12, NULL, NULL, 34, 1),
(13, NULL, NULL, 34, 2),
(14, NULL, NULL, 34, 4),
(15, NULL, NULL, 34, 5),
(16, NULL, NULL, 34, 6),
(17, NULL, NULL, 35, 7),
(18, NULL, NULL, 35, 8),
(19, NULL, NULL, 35, 9),
(20, NULL, NULL, 35, 10),
(21, NULL, NULL, 35, 11),
(22, NULL, NULL, 35, 12),
(23, NULL, NULL, 35, 13),
(24, NULL, NULL, 35, 15),
(25, NULL, NULL, 35, 16),
(26, NULL, NULL, 35, 17),
(27, NULL, NULL, 36, 7),
(28, NULL, NULL, 36, 8),
(29, NULL, NULL, 36, 9),
(30, NULL, NULL, 36, 10),
(31, NULL, NULL, 36, 13),
(32, NULL, NULL, 36, 14),
(33, NULL, NULL, 36, 15),
(34, NULL, NULL, 36, 16),
(35, NULL, NULL, 36, 17),
(36, NULL, NULL, 37, 7),
(37, NULL, NULL, 37, 8),
(38, NULL, NULL, 37, 9),
(39, NULL, NULL, 37, 10),
(40, NULL, NULL, 37, 11),
(41, NULL, NULL, 37, 12),
(42, NULL, NULL, 37, 13),
(43, NULL, NULL, 37, 14),
(44, NULL, NULL, 37, 15),
(45, NULL, NULL, 37, 17),
(46, NULL, NULL, 38, 18),
(47, NULL, NULL, 38, 19),
(48, NULL, NULL, 38, 20),
(49, NULL, NULL, 38, 22),
(50, NULL, NULL, 38, 23),
(51, NULL, NULL, 39, 18),
(52, NULL, NULL, 39, 19),
(53, NULL, NULL, 39, 20),
(54, NULL, NULL, 39, 21),
(55, NULL, NULL, 39, 22),
(56, NULL, NULL, 39, 23),
(57, NULL, NULL, 40, 19),
(58, NULL, NULL, 40, 20),
(59, NULL, NULL, 40, 21),
(60, NULL, NULL, 40, 22),
(61, NULL, NULL, 40, 23),
(62, NULL, NULL, 41, 24),
(63, NULL, NULL, 41, 25),
(64, NULL, NULL, 41, 26),
(65, NULL, NULL, 41, 27),
(66, NULL, NULL, 41, 28),
(67, NULL, NULL, 42, 24),
(68, NULL, NULL, 42, 25),
(69, NULL, NULL, 42, 26),
(70, NULL, NULL, 42, 27),
(71, NULL, NULL, 42, 28),
(72, NULL, NULL, 43, 24),
(73, NULL, NULL, 43, 26),
(74, NULL, NULL, 43, 27),
(75, NULL, NULL, 43, 28),
(76, NULL, NULL, 44, 29),
(77, NULL, NULL, 44, 30),
(78, NULL, NULL, 44, 31),
(79, NULL, NULL, 44, 32),
(80, NULL, NULL, 44, 33),
(81, NULL, NULL, 44, 34),
(82, NULL, NULL, 44, 35),
(83, NULL, NULL, 44, 36),
(84, NULL, NULL, 44, 37),
(85, NULL, NULL, 45, 29),
(86, NULL, NULL, 45, 31),
(87, NULL, NULL, 45, 32),
(88, NULL, NULL, 45, 33),
(89, NULL, NULL, 45, 34),
(90, NULL, NULL, 45, 35),
(91, NULL, NULL, 45, 36),
(92, NULL, NULL, 45, 37),
(93, NULL, NULL, 46, 29),
(94, NULL, NULL, 46, 30),
(95, NULL, NULL, 46, 33),
(96, NULL, NULL, 46, 35),
(97, NULL, NULL, 46, 36),
(98, NULL, NULL, 46, 37),
(99, NULL, NULL, 47, 38),
(100, NULL, NULL, 47, 39),
(101, NULL, NULL, 47, 40),
(102, NULL, NULL, 47, 41),
(103, NULL, NULL, 47, 42),
(104, NULL, NULL, 47, 45),
(105, NULL, NULL, 47, 46),
(106, NULL, NULL, 47, 47),
(107, NULL, NULL, 47, 48),
(108, NULL, NULL, 47, 49),
(109, NULL, NULL, 47, 50),
(110, NULL, NULL, 47, 51),
(111, NULL, NULL, 47, 52),
(112, NULL, NULL, 47, 53),
(113, NULL, NULL, 47, 54),
(114, NULL, NULL, 47, 55),
(115, NULL, NULL, 47, 56),
(116, NULL, NULL, 48, 40),
(117, NULL, NULL, 48, 41),
(118, NULL, NULL, 48, 42),
(119, NULL, NULL, 48, 43),
(120, NULL, NULL, 48, 44),
(121, NULL, NULL, 48, 45),
(122, NULL, NULL, 48, 47),
(123, NULL, NULL, 48, 48),
(124, NULL, NULL, 48, 49),
(125, NULL, NULL, 48, 50),
(126, NULL, NULL, 48, 51),
(127, NULL, NULL, 48, 52),
(128, NULL, NULL, 48, 54),
(129, NULL, NULL, 48, 55),
(130, NULL, NULL, 48, 56),
(131, NULL, NULL, 48, 57),
(132, NULL, NULL, 49, 38),
(133, NULL, NULL, 49, 39),
(134, NULL, NULL, 49, 40),
(135, NULL, NULL, 49, 41),
(136, NULL, NULL, 49, 42),
(137, NULL, NULL, 49, 43),
(138, NULL, NULL, 49, 44),
(139, NULL, NULL, 49, 46),
(140, NULL, NULL, 49, 47),
(141, NULL, NULL, 49, 48),
(142, NULL, NULL, 49, 49),
(143, NULL, NULL, 49, 50),
(144, NULL, NULL, 49, 51),
(145, NULL, NULL, 49, 52),
(146, NULL, NULL, 49, 54),
(147, NULL, NULL, 49, 55),
(148, NULL, NULL, 49, 57);

-- --------------------------------------------------------

--
-- Estrutura da tabela `actor_movie`
--

CREATE TABLE `actor_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `actor_movie`
--

INSERT INTO `actor_movie` (`id`, `created_at`, `updated_at`, `actor_id`, `movie_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 2, 1),
(3, NULL, NULL, 3, 1),
(4, NULL, NULL, 4, 2),
(5, NULL, NULL, 5, 2),
(6, NULL, NULL, 6, 2),
(7, NULL, NULL, 7, 3),
(8, NULL, NULL, 7, 4),
(9, NULL, NULL, 8, 3),
(10, NULL, NULL, 8, 4),
(11, NULL, NULL, 9, 3),
(12, NULL, NULL, 9, 4),
(13, NULL, NULL, 10, 5),
(14, NULL, NULL, 11, 5),
(15, NULL, NULL, 12, 5),
(16, NULL, NULL, 13, 6),
(17, NULL, NULL, 13, 8),
(18, NULL, NULL, 13, 9),
(19, NULL, NULL, 14, 6),
(20, NULL, NULL, 14, 8),
(21, NULL, NULL, 14, 9),
(22, NULL, NULL, 15, 6),
(23, NULL, NULL, 15, 8),
(24, NULL, NULL, 15, 9),
(25, NULL, NULL, 16, 7),
(26, NULL, NULL, 17, 7),
(27, NULL, NULL, 18, 7),
(28, NULL, NULL, 19, 10),
(29, NULL, NULL, 20, 10),
(30, NULL, NULL, 21, 11),
(31, NULL, NULL, 22, 11),
(32, NULL, NULL, 22, 9),
(33, NULL, NULL, 23, 11),
(34, NULL, NULL, 24, 12),
(35, NULL, NULL, 25, 12),
(36, NULL, NULL, 26, 12),
(37, NULL, NULL, 27, 13),
(38, NULL, NULL, 27, 14),
(39, NULL, NULL, 27, 19),
(40, NULL, NULL, 28, 13),
(41, NULL, NULL, 28, 14),
(42, NULL, NULL, 29, 20),
(43, NULL, NULL, 30, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `episodes`
--

CREATE TABLE `episodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(10) UNSIGNED DEFAULT NULL,
  `release_date` datetime NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `season_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `episodes`
--

INSERT INTO `episodes` (`id`, `created_at`, `updated_at`, `title`, `number`, `release_date`, `rating`, `season_id`) VALUES
(1, NULL, NULL, 'Winter Is Coming', 1, '2011-01-01 00:00:00', '7.3', 1),
(2, NULL, NULL, 'The North Remembers', 1, '2012-01-01 00:00:00', '8.3', 2),
(3, NULL, NULL, 'Valar Dohaeris', 1, '2013-01-01 00:00:00', '6.3', 3),
(4, NULL, NULL, 'Two Swords', 1, '2014-01-01 00:00:00', '7.5', 4),
(5, NULL, NULL, 'The Wars to Come', 1, '2015-01-01 00:00:00', '9.3', 5),
(6, NULL, NULL, 'The Red Woman', 1, '2016-01-01 00:00:00', '7.7', 6),
(7, NULL, NULL, 'Pilot', 1, '2005-01-01 00:00:00', '7.3', 8),
(8, NULL, NULL, 'In My Time of Dying', 1, '2006-01-01 00:00:00', '8.3', 9),
(9, NULL, NULL, 'The Magnificent Seven', 1, '2007-01-01 00:00:00', '6.3', 10),
(10, NULL, NULL, 'Lazarus Rising', 1, '2008-01-01 00:00:00', '7.5', 11),
(11, NULL, NULL, 'Sympathy for the Devil', 1, '2009-01-01 00:00:00', '9.3', 12),
(12, NULL, NULL, 'Exile on Main St.', 1, '2010-01-01 00:00:00', '7.7', 13),
(13, NULL, NULL, 'Meet the New Boss', 1, '2011-01-01 00:00:00', '7.3', 14),
(14, NULL, NULL, 'We Need to Talk About Kevin', 1, '2012-01-01 00:00:00', '8.3', 15),
(15, NULL, NULL, 'I Think Im Gonna Like It Here', 1, '2013-01-01 00:00:00', '6.3', 16),
(16, NULL, NULL, 'A Very Special Supernatural Special', 1, '2014-01-01 00:00:00', '7.5', 17),
(17, NULL, NULL, 'Out of the Darkness, Into the Fire', 1, '2015-01-01 00:00:00', '9.3', 18),
(18, NULL, NULL, 'Days Gone Bye', 1, '2010-01-01 00:00:00', '7.3', 20),
(19, NULL, NULL, 'What Lies Ahead', 1, '2011-01-01 00:00:00', '8.3', 21),
(20, NULL, NULL, 'Seed', 1, '2012-01-01 00:00:00', '6.3', 22),
(21, NULL, NULL, '30 Days Without an Accident', 1, '2013-01-01 00:00:00', '7.5', 23),
(22, NULL, NULL, 'No Sanctuary', 1, '2014-01-01 00:00:00', '9.3', 24),
(23, NULL, NULL, 'First Time Again', 1, '2015-01-01 00:00:00', '7.7', 25),
(24, NULL, NULL, 'Pilot', 1, '2011-01-01 00:00:00', '7.3', 27),
(25, NULL, NULL, 'The Contingency', 1, '2012-01-01 00:00:00', '8.3', 28),
(26, NULL, NULL, 'Liberty', 1, '2013-01-01 00:00:00', '6.3', 29),
(27, NULL, NULL, 'Panopticon', 1, '2015-01-01 00:00:00', '7.5', 30),
(28, NULL, NULL, 'B.S.O.D.', 1, '2016-01-01 00:00:00', '9.3', 31),
(29, NULL, NULL, 'Pilot', 1, '2005-01-01 00:00:00', '7.3', 32),
(30, NULL, NULL, 'The Bad Fish Paradigm', 1, '2006-01-01 00:00:00', '8.3', 33),
(31, NULL, NULL, 'The Electric Can Opener Fluctuation', 1, '2007-01-01 00:00:00', '6.3', 34),
(32, NULL, NULL, 'The Robotic Manipulation', 1, '2008-01-01 00:00:00', '7.5', 35),
(33, NULL, NULL, 'The Skank Reflex Analysis', 1, '2009-01-01 00:00:00', '9.3', 36),
(34, NULL, NULL, 'The Date Night Variable', 1, '2010-01-01 00:00:00', '7.7', 37),
(35, NULL, NULL, 'The Hofstadter Insufficiency', 1, '2011-01-01 00:00:00', '7.3', 38),
(36, NULL, NULL, 'The Locomotion Interruption', 1, '2012-01-01 00:00:00', '8.3', 39),
(37, NULL, NULL, 'The Matrimonial Momentum', 1, '2013-01-01 00:00:00', '6.3', 40),
(38, NULL, NULL, 'Pilot', 1, '2009-01-01 00:00:00', '7.3', 42),
(39, NULL, NULL, 'Seven Thirty-Seven', 1, '2010-01-01 00:00:00', '8.3', 43),
(40, NULL, NULL, 'No Más', 1, '2011-01-01 00:00:00', '6.3', 44),
(41, NULL, NULL, 'Box Cutter', 1, '2012-01-01 00:00:00', '7.5', 45),
(42, NULL, NULL, 'Live Free or Die', 1, '2013-01-01 00:00:00', '9.3', 46),
(43, NULL, NULL, 'Madrigal', 2, '2013-02-01 00:00:00', '9.3', 46),
(44, NULL, NULL, 'Hazard Pay', 3, '2013-03-01 00:00:00', '9.3', 46),
(45, NULL, NULL, 'Fifty-One', 4, '2013-04-01 00:00:00', '9.3', 46),
(46, NULL, NULL, 'Dead Freight', 5, '2013-05-01 00:00:00', '9.3', 46),
(47, NULL, NULL, 'Buyout', 6, '2013-06-01 00:00:00', '9.3', 46),
(48, NULL, NULL, 'Say My Name', 7, '2013-06-01 00:00:00', '9.3', 46),
(49, NULL, NULL, 'Gliding Over All', 8, '2013-07-01 00:00:00', '9.3', 46),
(50, NULL, NULL, 'Blood Money', 9, '2013-07-01 00:00:00', '9.3', 46),
(51, NULL, NULL, 'Buried', 10, '2013-07-01 00:00:00', '9.3', 46),
(52, NULL, NULL, 'Confessions', 11, '2013-08-01 00:00:00', '9.3', 46),
(53, NULL, NULL, 'Rabid Dog', 12, '2013-09-01 00:00:00', '9.3', 46),
(54, NULL, NULL, 'To hajiilee', 13, '2013-10-01 00:00:00', '9.3', 46),
(55, NULL, NULL, 'Ozymandias', 14, '2013-11-01 00:00:00', '9.3', 46),
(56, NULL, NULL, 'Granite State', 15, '2013-12-01 00:00:00', '9.3', 46),
(57, NULL, NULL, 'Felina', 16, '2013-12-01 00:00:00', '9.3', 46);

-- --------------------------------------------------------

--
-- Estrutura da tabela `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ranking` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `genres`
--

INSERT INTO `genres` (`id`, `created_at`, `updated_at`, `name`, `ranking`, `active`) VALUES
(1, '2016-07-04 03:00:00', NULL, 'Comedia', 1, 1),
(2, '2014-07-04 03:00:00', NULL, 'Terror', 2, 1),
(3, '2013-07-04 03:00:00', NULL, 'Drama', 3, 1),
(4, '2011-07-04 03:00:00', NULL, 'Acao', 4, 1),
(5, '2010-07-04 03:00:00', NULL, 'Ciencia Ficcao', 5, 1),
(6, '2013-07-04 03:00:00', NULL, 'Suspense', 6, 1),
(7, '2005-07-04 03:00:00', NULL, 'Animacao', 7, 1),
(8, '2003-07-04 03:00:00', NULL, 'Aventura', 8, 1),
(9, '2008-07-04 03:00:00', NULL, 'Documentario', 9, 1),
(10, '2013-07-04 03:00:00', NULL, 'Infantil', 10, 1),
(11, '2011-07-04 03:00:00', NULL, 'Fantasia', 11, 1),
(12, '2013-07-04 03:00:00', NULL, 'Musical', 12, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_17_130820_create_genres_table', 1),
(4, '2016_10_17_130829_create_movies_table', 1),
(5, '2016_10_17_130842_create_series_table', 1),
(6, '2016_10_17_130849_create_seasons_table', 1),
(7, '2016_10_17_130903_create_episodes_table', 1),
(8, '2016_10_17_130913_create_actors_table', 1),
(9, '2016_10_17_130925_create_actor_movie_table', 1),
(10, '2016_10_17_130938_create_actor_episode_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rating` decimal(3,1) UNSIGNED NOT NULL,
  `awards` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `release_date` datetime NOT NULL,
  `length` int(10) UNSIGNED DEFAULT NULL,
  `genre_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `movies`
--

INSERT INTO `movies` (`id`, `created_at`, `updated_at`, `title`, `rating`, `awards`, `release_date`, `length`, `genre_id`) VALUES
(1, NULL, NULL, 'Avatar', '7.9', 3, '2010-10-04 00:00:00', 120, 5),
(2, NULL, NULL, 'Titanic', '7.7', 11, '1997-09-04 00:00:00', 320, 3),
(3, NULL, NULL, 'Star Wars: Episódio VI - O Retorno de Jedi', '9.1', 7, '2004-07-04 00:00:00', NULL, 5),
(4, NULL, NULL, 'Star Wars: Episódio VII', '9.0', 6, '2003-11-04 00:00:00', 180, 5),
(5, NULL, NULL, 'Jurassic Park', '8.3', 5, '1999-01-04 00:00:00', 270, 5),
(6, NULL, NULL, 'Harry Potter e as Relíquias da Muerte - Parte 2', '9.0', 2, '2008-07-04 00:00:00', 190, 6),
(7, NULL, NULL, 'Transformers: O Lado Oculto da Lua', '0.9', 1, '2005-07-04 00:00:00', NULL, 5),
(8, NULL, NULL, 'Harry Potter e a Pedra Filosofal', '10.0', 1, '2008-04-04 00:00:00', 120, 8),
(9, NULL, NULL, 'Harry Potter e a Câmara Secreta', '3.5', 2, '2009-08-04 00:00:00', 200, 8),
(10, NULL, NULL, 'O Rei Leão', '9.1', 3, '2000-02-04 00:00:00', NULL, 10),
(11, NULL, NULL, 'Alice no País das Maravilhoas', '5.7', 2, '2008-07-04 00:00:00', 120, 10),
(12, NULL, NULL, 'Procurando Nemo', '8.3', 2, '2000-07-04 00:00:00', 110, 7),
(13, NULL, NULL, 'Toy Story', '6.1', 0, '2008-03-04 00:00:00', 150, 7),
(14, NULL, NULL, 'Toy Story 2', '3.2', 2, '2003-04-04 00:00:00', 120, 7),
(15, NULL, NULL, 'A Vida é Bela', '8.3', 5, '1994-10-04 00:00:00', NULL, 3),
(16, NULL, NULL, 'Esqueceram de Mim', '3.2', 1, '1989-01-04 00:00:00', 120, 1),
(17, NULL, NULL, 'Divertida Mente', '9.0', 2, '2008-07-04 00:00:00', 120, 7),
(18, NULL, NULL, 'Carruagens de Fogo', '9.9', 7, '1980-07-04 00:00:00', 180, 3),
(19, NULL, NULL, 'Big', '7.3', 2, '1988-02-04 00:00:00', 130, 8),
(20, NULL, NULL, 'I am Sam', '9.0', 4, '1999-03-04 00:00:00', 130, 3),
(21, NULL, NULL, 'Hotel Transylvania', '7.1', 1, '2012-05-04 00:00:00', 90, 10),
(84, '2018-08-18 21:05:45', '2018-08-18 21:05:45', 'Jamaica Abaixo de Zero', '10.0', 2, '2004-04-20 04:20:00', 420, 1),
(86, '2018-08-18 22:27:59', '2018-08-18 22:27:59', 'Pra Lá de Bagdá', '10.0', 0, '2000-04-20 16:20:00', 420, 1),
(87, '2018-08-18 22:29:34', '2018-08-18 22:29:34', 'O Boneco Assassino', '5.0', 2, '1992-06-13 00:00:00', 120, 2),
(88, '2018-08-18 22:30:19', '2018-08-18 22:30:19', '007 - Tomorrow Never Dies', '8.0', 5, '2008-12-20 16:48:00', 134, 4),
(89, '2018-08-18 22:30:59', '2018-08-18 22:30:59', 'Catch Me If You Can', '10.0', 6, '1991-05-02 21:21:00', 165, 6),
(90, '2018-08-18 22:31:56', '2018-08-18 22:31:56', 'Ilha das Flores', '10.0', 9, '1993-02-01 17:45:00', 79, 9),
(91, '2018-08-18 22:32:37', '2018-08-18 22:32:37', 'Fantasia', '10.0', 15, '1990-02-01 13:31:00', 186, 11),
(92, '2018-08-18 22:33:13', '2018-08-18 22:33:13', 'The Blues Brothers', '10.0', 8, '1992-02-20 16:16:00', 142, 12),
(93, '2018-08-19 01:37:20', '2018-08-19 01:37:20', 'Silicon Cowboys', '6.8', 1, '2016-03-11 00:00:00', 77, 9),
(94, '2018-08-19 02:19:33', '2018-08-19 02:19:33', 'A Bela e a Fera', '10.0', 5, '2001-05-05 15:02:00', 52, 10),
(95, '2018-08-19 04:36:38', '2018-08-19 04:36:38', 'Duro de Matar', '0.0', 0, '1993-02-01 20:05:00', 95, 4),
(96, '2018-08-19 19:45:52', '2018-08-19 19:45:52', 'O Iluminado', '8.4', 3, '1977-01-28 05:25:00', 146, 2),
(97, '2018-08-20 08:27:28', '2018-08-20 08:27:28', 'Nós que Aqui Estamos por Vós Esperamos', '8.9', 0, '1999-02-23 05:50:00', 73, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(10) UNSIGNED DEFAULT NULL,
  `release_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `serie_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `seasons`
--

INSERT INTO `seasons` (`id`, `created_at`, `updated_at`, `title`, `number`, `release_date`, `end_date`, `serie_id`) VALUES
(1, NULL, NULL, 'Primeira Temporada', 1, '2011-01-01 00:00:00', '2011-01-01 00:00:00', 1),
(2, NULL, NULL, 'Segunda Temporada', 2, '2012-01-01 00:00:00', '2012-01-01 00:00:00', 1),
(3, NULL, NULL, 'Terceira Temporada', 3, '2013-01-01 00:00:00', '2013-01-01 00:00:00', 1),
(4, NULL, NULL, 'Quarta Temporada', 4, '2014-01-01 00:00:00', '2014-01-01 00:00:00', 1),
(5, NULL, NULL, 'Quinta Temporada', 5, '2015-01-01 00:00:00', '2015-01-01 00:00:00', 1),
(6, NULL, NULL, 'Sexta Temporada', 6, '2016-01-01 00:00:00', '2016-01-01 00:00:00', 1),
(7, NULL, NULL, 'Setima Temporada', 7, '2017-01-01 00:00:00', '2017-01-01 00:00:00', 1),
(8, NULL, NULL, 'Primeira Temporada', 1, '2005-01-01 00:00:00', '2006-01-01 00:00:00', 2),
(9, NULL, NULL, 'Segunda Temporada', 2, '2006-01-01 00:00:00', '2007-01-01 00:00:00', 2),
(10, NULL, NULL, 'Terceira Temporada', 3, '2007-01-01 00:00:00', '2008-01-01 00:00:00', 2),
(11, NULL, NULL, 'Quarta Temporada', 4, '2008-01-01 00:00:00', '2009-01-01 00:00:00', 2),
(12, NULL, NULL, 'Quinta Temporada', 5, '2009-01-01 00:00:00', '2010-01-01 00:00:00', 2),
(13, NULL, NULL, 'Sexta Temporada', 6, '2010-01-01 00:00:00', '2011-01-01 00:00:00', 2),
(14, NULL, NULL, 'Setima Temporada', 7, '2011-01-01 00:00:00', '2012-01-01 00:00:00', 2),
(15, NULL, NULL, 'Oitava Temporada', 8, '2012-01-01 00:00:00', '2013-01-01 00:00:00', 2),
(16, NULL, NULL, 'Nona Temporada', 9, '2013-01-01 00:00:00', '2014-01-01 00:00:00', 2),
(17, NULL, NULL, 'Decima Temporada', 10, '2014-01-01 00:00:00', '2015-01-01 00:00:00', 2),
(18, NULL, NULL, 'Decima primeira Temporada', 11, '2015-01-01 00:00:00', '2016-01-01 00:00:00', 2),
(19, NULL, NULL, 'Decima segunda Temporada', 12, '2016-01-01 00:00:00', '2017-01-01 00:00:00', 2),
(20, NULL, NULL, 'Primeira Temporada', 1, '2010-01-01 00:00:00', '2010-01-01 00:00:00', 3),
(21, NULL, NULL, 'Segunda Temporada', 2, '2011-01-01 00:00:00', '2012-01-01 00:00:00', 3),
(22, NULL, NULL, 'Terceira Temporada', 3, '2012-01-01 00:00:00', '2013-01-01 00:00:00', 3),
(23, NULL, NULL, 'Quarta Temporada', 4, '2013-01-01 00:00:00', '2014-01-01 00:00:00', 3),
(24, NULL, NULL, 'Quinta Temporada', 5, '2014-01-01 00:00:00', '2015-01-01 00:00:00', 3),
(25, NULL, NULL, 'Sexta Temporada', 6, '2015-01-01 00:00:00', '2016-01-01 00:00:00', 3),
(26, NULL, NULL, 'Setima Temporada', 7, '2016-01-01 00:00:00', '2017-01-01 00:00:00', 3),
(27, NULL, NULL, 'Primeira Temporada', 1, '2011-01-01 00:00:00', '2012-01-01 00:00:00', 4),
(28, NULL, NULL, 'Segunda Temporada', 2, '2012-01-01 00:00:00', '2013-01-01 00:00:00', 4),
(29, NULL, NULL, 'Terceira Temporada', 3, '2013-01-01 00:00:00', '2014-01-01 00:00:00', 4),
(30, NULL, NULL, 'Quarta Temporada', 4, '2014-01-01 00:00:00', '2015-01-01 00:00:00', 4),
(31, NULL, NULL, 'Quinta Temporada', 5, '2015-01-01 00:00:00', '2016-01-01 00:00:00', 4),
(32, NULL, NULL, 'Primeira Temporada', 1, '2006-01-01 00:00:00', '2008-01-01 00:00:00', 5),
(33, NULL, NULL, 'Segunda Temporada', 2, '2008-01-01 00:00:00', '2009-01-01 00:00:00', 5),
(34, NULL, NULL, 'Terceira Temporada', 3, '2009-01-01 00:00:00', '2010-01-01 00:00:00', 5),
(35, NULL, NULL, 'Quarta Temporada', 4, '2010-01-01 00:00:00', '2011-01-01 00:00:00', 5),
(36, NULL, NULL, 'Quinta Temporada', 5, '2011-01-01 00:00:00', '2012-01-01 00:00:00', 5),
(37, NULL, NULL, 'Sexta Temporada', 6, '2012-01-01 00:00:00', '2013-01-01 00:00:00', 5),
(38, NULL, NULL, 'Setima Temporada', 7, '2013-01-01 00:00:00', '2014-01-01 00:00:00', 5),
(39, NULL, NULL, 'Oitava Temporada', 8, '2014-01-01 00:00:00', '2015-01-01 00:00:00', 5),
(40, NULL, NULL, 'Nona Temporada', 9, '2015-01-01 00:00:00', '2016-01-01 00:00:00', 5),
(41, NULL, NULL, 'Decima Temporada', 10, '2016-01-01 00:00:00', '2017-01-01 00:00:00', 5),
(42, NULL, NULL, 'Primeira Temporada', 1, '2008-01-01 00:00:00', '2008-01-01 00:00:00', 6),
(43, NULL, NULL, 'Segunda Temporada', 2, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 6),
(44, NULL, NULL, 'Terceira Temporada', 3, '2010-01-01 00:00:00', '2010-01-01 00:00:00', 6),
(45, NULL, NULL, 'Quarta Temporada', 4, '2011-01-01 00:00:00', '2011-01-01 00:00:00', 6),
(46, NULL, NULL, 'Quinta Temporada', 5, '2012-01-01 00:00:00', '2012-01-01 00:00:00', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `genre_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`id`, `created_at`, `updated_at`, `title`, `release_date`, `end_date`, `genre_id`) VALUES
(1, NULL, NULL, 'Game of Thrones', '2011-01-01 00:00:00', '2016-03-04 00:00:00', 11),
(2, NULL, NULL, 'Supernatural', '2005-01-01 00:00:00', '2016-01-04 00:00:00', 6),
(3, NULL, NULL, 'The Walking Dead', '2010-01-01 00:00:00', '2016-01-04 00:00:00', 2),
(4, NULL, NULL, 'Person of Interest', '2011-01-01 00:00:00', '2015-01-04 00:00:00', 4),
(5, NULL, NULL, 'The Big Bang Theory', '2007-01-01 00:00:00', '2016-01-04 00:00:00', 1),
(6, NULL, NULL, 'Breaking Bad', '2008-01-01 00:00:00', '2013-01-04 00:00:00', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actors_favorite_movie_id_foreign` (`favorite_movie_id`);

--
-- Indexes for table `actor_episode`
--
ALTER TABLE `actor_episode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_episode_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_episode_episode_id_foreign` (`episode_id`);

--
-- Indexes for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_movie_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_movie_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_season_id_foreign` (`season_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genres_ranking_unique` (`ranking`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seasons_serie_id_foreign` (`serie_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `actor_episode`
--
ALTER TABLE `actor_episode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `actor_movie`
--
ALTER TABLE `actor_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `actors`
--
ALTER TABLE `actors`
  ADD CONSTRAINT `actors_favorite_movie_id_foreign` FOREIGN KEY (`favorite_movie_id`) REFERENCES `movies` (`id`);

--
-- Limitadores para a tabela `actor_episode`
--
ALTER TABLE `actor_episode`
  ADD CONSTRAINT `actor_episode_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `actor_episode_episode_id_foreign` FOREIGN KEY (`episode_id`) REFERENCES `episodes` (`id`);

--
-- Limitadores para a tabela `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `actor_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Limitadores para a tabela `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`);

--
-- Limitadores para a tabela `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Limitadores para a tabela `seasons`
--
ALTER TABLE `seasons`
  ADD CONSTRAINT `seasons_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`);

--
-- Limitadores para a tabela `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

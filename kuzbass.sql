-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 22 2016 г., 16:14
-- Версия сервера: 5.7.14
-- Версия PHP: 7.0.10RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kuzbass`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth`
--

INSERT INTO `auth` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$08$gbYNZoW4zrEz6pXB27qia.AcGnQjck46PVWDlJCGwQonp1w1OJPpq');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(17, '11111');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `page`, `title`, `content`, `keywords`, `description`) VALUES
(1, 'about', 'О канале', '<p><em>Телеканал &laquo;Сделано в Кузбассе&raquo; посвящён рабочим профессиям нашего региона.</em></p>\r\n\r\n<p><br />\r\n&laquo;Сделано в Кузбассе&raquo; показывает кузбасского рабочего за его обычным делом так, как это происходит в реальной жизни.&nbsp;Крупнейшие предприятия Кузбасса показывают изнутри процесс своего производства: в эфире можно увидеть, как добывается уголь на разрезе, производится цемент, изготавливаются плиты для крупнопанельного домостроения и горно-шахтное оборудование, скульптуры из угля и декоративная керамика, охотничьи лыжи и театральные куклы, бутерброды и сувениры из дерева и многое другое.<br />\r\n<strong>Ролики снабжаются информацией о показываемом производстве, его особенностях или истории ремесла. Телеканал доступен бесплатно в кабельном и Большом ТВ Good Line.</strong><br />\r\nКак известно, бесконечно можно смотреть на три вещи: как горит огонь, как течёт вода и как другие работают. С помощью наших телеканалов можно составить идеальную телепрограмму, ведь текущую в естественной среде воду показывает &laquo;Наша Сибирь&raquo;, а огонь и труд - &laquo;Сделано в Кузбассе&raquo;. Созерцайте и узнавайте больше о родном крае вместе с Good Line!</p>\r\n', 'о канале, канал', 'Страница о канале'),
(2, 'contacts', 'Контакты', 'Здесь будут контакты', 'контакты', 'Страница контактов'),
(3, 'index', 'Главная', 'asdfasdfasdf', 'главная, сделано, кузбасс', 'Главная страница');

-- --------------------------------------------------------

--
-- Структура таблицы `plots`
--

CREATE TABLE `plots` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `video` varchar(100) NOT NULL,
  `place` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plots`
--

INSERT INTO `plots` (`id`, `category_id`, `title`, `keywords`, `description`, `video`, `place`) VALUES
(13, 17, 'asdfasdgadsg', 'asdgasdad', 'avbaervesrberb', 'asdfasdf', 'afwe4fvawefvgv34vb3qw4g34g34g'),
(14, 17, '1111', '22222', '445445ty34gdfgb werwh 34 5ehb 35rb e546 b456 b54b hb46h ntyn yfgn cghn cnchnfgjhn e56 hrtgfh', '234234', '5123451234tg 3w4rtg dfghe tfhd fgh sfdh sfgh sdfh b');

-- --------------------------------------------------------

--
-- Структура таблицы `previews`
--

CREATE TABLE `previews` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plots`
--
ALTER TABLE `plots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `previews`
--
ALTER TABLE `previews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `plots`
--
ALTER TABLE `plots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `previews`
--
ALTER TABLE `previews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

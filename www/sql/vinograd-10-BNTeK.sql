-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 17 2012 г., 18:11
-- Версия сервера: 5.5.24
-- Версия PHP: 5.3.10-1ubuntu3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `vinograd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `cover_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `title`, `cover_id`) VALUES
(8, 'test 1', 24),
(9, 'test 2', 37),
(10, 'test 3', 34);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname_en` varchar(128) DEFAULT NULL,
  `cname_ru` varchar(128) DEFAULT NULL,
  `cname_kz` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `cname_en`, `cname_ru`, `cname_kz`) VALUES
(9, NULL, 'Вина', NULL),
(11, NULL, 'Салаты', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `cookmenus`
--

CREATE TABLE IF NOT EXISTS `cookmenus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_ru` varchar(128) CHARACTER SET utf8 NOT NULL,
  `name_en` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `name_kz` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `cost` int(11) NOT NULL,
  `remark_ru` text CHARACTER SET utf8 NOT NULL,
  `remark_en` text CHARACTER SET utf8,
  `remark_kz` text CHARACTER SET utf8,
  `post_data` int(11) NOT NULL,
  `categories` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cookmenus_categories1` (`categories`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `cookmenus`
--

INSERT INTO `cookmenus` (`id`, `name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `post_data`, `categories`) VALUES
(5, 'Салат Долька апельсина', NULL, NULL, 1500, 'Салат Долька апельсина', NULL, NULL, 0, 11),
(6, 'Овощной салат с морской капустой', NULL, NULL, 2000, 'Овощной салат с морской капустой', NULL, NULL, 0, 11),
(7, 'Цезарь', NULL, NULL, 1000, 'Церазь очень вккусный', NULL, NULL, 0, 11),
(8, 'Цезарь', NULL, NULL, 1000, 'Церазь очень вккусный', NULL, NULL, 0, 11),
(9, 'Грузинское', NULL, NULL, 2000, 'Грузинское вино', NULL, NULL, 0, 9),
(10, 'Талас', NULL, NULL, 1000, 'Талас', NULL, NULL, 0, 9),
(11, 'Французкое', NULL, NULL, 3000, 'Вино фрацузкое', NULL, NULL, 0, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `alt` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rel` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `home` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `album_id`, `name`, `alt`, `rel`, `home`) VALUES
(11, 1, '1350041525.jpg', 'Отображаемое имя', '', 0),
(12, 1, '1350041555.jpg', 'Отображаемое имя', '', 0),
(40, 11, '1350466678.jpg', 'reserved', 'reserved', 0),
(41, 11, '1350466696.jpg', 'посуда', 'посуда', 1),
(42, 11, '1350466706.jpg', 'посуда', 'посуда', 1),
(43, 11, '1350466722.jpg', 'скидка', 'скидка', 1),
(44, 11, '1350466736.jpg', 'главный зал', 'главный зал', 0),
(45, 11, '1350466751.jpg', 'главный зал', 'главный зал', 0),
(46, 11, '1350466763.jpg', 'главный зал', 'главный зал', 1),
(47, 11, '1350466772.jpg', 'главный зал', 'главный зал', 0),
(48, 11, '1350466798.jpg', 'VinoGrad', 'VinoGrad', 1),
(49, 11, '1350466823.jpg', 'люстры', 'люстры', 1),
(50, 12, '1350466878.jpg', 'общий вид', 'общий вид', 1),
(51, 12, '1350466890.jpg', 'стол', 'стол', 0),
(52, 12, '1350466911.jpg', 'стол', 'стол', 0),
(53, 12, '1350466926.jpg', 'стена', 'стена', 1),
(54, 13, '1350467049.jpg', 'диван', 'диван', 0),
(55, 13, '1350467064.jpg', 'домашний кинотеатр', 'домашний кинотеатр', 0),
(56, 13, '1350467138.jpg', 'стена', 'стена', 0),
(57, 14, '1350468209.jpg', 'вина', 'вина', 0),
(58, 14, '1350468217.jpg', 'вина', 'вина', 0),
(59, 14, '1350468238.jpg', 'алкаголь', 'алкаголь', 0),
(60, 14, '1350468325.jpg', 'барная стойка', 'барная стойка', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `position` tinyint(1) NOT NULL,
  `post_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `caption`, `text`, `position`, `post_time`) VALUES
(8, 'Новость № 1', '<p>\n	<strong>Текст&nbsp;Новости № 1</strong></p>\n', 1, 1350469795),
(9, 'Акция № 1', '<p>\n	Текст акции № 1</p>\n', 2, 1350469850);

-- --------------------------------------------------------

--
-- Структура таблицы `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `autor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `quotes`
--

INSERT INTO `quotes` (`id`, `title`, `text`, `autor`) VALUES
(6, 'хорошая цитата', 'она на столько хороша, что мы боимся ее показать вам, простите', 'не известный автор'),
(7, 'test', 'test test test', 'autor');

-- --------------------------------------------------------

--
-- Структура таблицы `recalls`
--

CREATE TABLE IF NOT EXISTS `recalls` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `theme` varchar(128) COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `post_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reply_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `recalls`
--

INSERT INTO `recalls` (`id`, `name`, `email`, `theme`, `text`, `post_time`, `status`, `reply_id`) VALUES
(1, 'uralsk.kz', 'bntek@mail.kz', 'qweq', 'qweew', 1349429963, 0, 0),
(6, 'Виталий', 'BNTeKKZ@gmail.com', 'Мне очень у вас понравилось', 'Мне очень у вас понравилось! прям ОЧЕНЬ ОЧЕНЬ! ^_^', 1349697882, 1, 0),
(7, 'asd', 'BNTeKKZ@gmail.com', 'asd', 'asdasd', 1350024433, 1, 0),
(8, 'asd', 'BNTeKKZ@gmail.com', 'asd', 'asdasd', 1350024444, 1, 0),
(9, 'MyName', 'mail@urals.kz', 'theeem!', 'ну типа того вроде как не плохо, но в целом как то так', 1350283137, 1, 0),
(10, 'name sdsd', 'gaf@sukin', 'theme', 'text of th this recall', 1350369309, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_bin NOT NULL,
  `post_time` int(11) NOT NULL,
  `recall_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_replies_recalls1` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `replies`
--

INSERT INTO `replies` (`id`, `text`, `post_time`, `recall_id`) VALUES
(1, 'ffffff', 1350283471, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cookmenus`
--
ALTER TABLE `cookmenus`
  ADD CONSTRAINT `cookmenus_ibfk_2` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 16 2012 г., 18:34
-- Версия сервера: 5.5.25a
-- Версия PHP: 5.4.4

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `cname_en`, `cname_ru`, `cname_kz`) VALUES
(1, 'фыв', 'ыф', 'ыфв'),
(2, 'фыв', 'ыф', 'ыфв'),
(3, 'фыв', 'ыф', 'ыфв'),
(4, 'фыв', 'ыф', 'ыфв'),
(5, 'фыв', 'ыф', 'ыфв'),
(6, 'фыв', 'ыф', 'ыфв'),
(7, 'фыв', 'ыф', 'ыфв');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cookmenus`
--

INSERT INTO `cookmenus` (`id`, `name_ru`, `name_en`, `name_kz`, `cost`, `remark_ru`, `remark_en`, `remark_kz`, `post_data`, `categories`) VALUES
(1, 'asd', 'sad', 'sad', 123123, 'sad', 'sad', 'ads', 0, 1),
(2, 'Еда', 'Еда на анг', 'Еда на каз', 1223, 'Еду надо есть', 'Еду надо есть', 'Еду надо есть', 0, 3),
(3, 'Еда', 'Еда на анг', 'Еда на каз', 1223, 'Еду надо есть', 'Еду надо есть', 'Еду надо есть', 0, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `album_id`, `name`, `alt`, `rel`, `home`) VALUES
(11, 1, '1350041525.jpg', 'Отображаемое имя', '', 0),
(12, 1, '1350041555.jpg', 'Отображаемое имя', '', 0),
(22, 8, '1350055952.jpg', '1-1', '1-1', 1),
(24, 8, '1350055983.jpg', '1-3', '1-3', 1),
(25, 8, '1350294278.jpg', 'Отображаемое22 имя', '', 1),
(26, 8, '1350294300.jpg', 'lol', '', 0),
(27, 8, '1350294310.jpg', 'loool', '', 0),
(28, 8, '1350294343.jpg', 'Отображаемое имя', '', 0),
(29, 8, '1350294349.jpg', 'Отображаемое имя', '', 1),
(30, 8, '1350294357.jpg', 'Отображаемое имя', '', 1),
(31, 8, '1350294365.jpg', 'Отображаемое имя', '', 1),
(32, 8, '1350294372.jpg', 'Отображаемое имя', '', 0),
(33, 9, '1350298790.jpg', 'Отображаемое имя', '', 0),
(34, 10, '1350298799.jpg', 'Отображаемое имя', '', 0),
(35, 9, '1350298844.jpg', 'Отображаемое имя', '', 0),
(37, 9, '1350298906.jpg', 'Отображаемое имя', '', 0),
(38, 8, '1350371413.jpg', 'Отображаемое имя', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `position` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `caption`, `text`, `position`) VALUES
(1, 'caption', '<p>\n	Ткстовый текст</p>\n', 2),
(4, 'caption', '<p>\n	Тестовый Заголовок</p>\n', 1),
(5, 'caption', '<p>\n	Тестовый Заголовок</p>\n', 2),
(6, ' Мы запустились', '<p>\n	Типо первая новость</p>\n', 1),
(7, ' Мы запустились2', '<p>\n	&nbsp;Мы запустились2</p>\n', 2);

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
(1, 'uralsk.kz', 'bntek@mail.kz', 'qweq', 0x7177656577, 1349429963, 0, 0),
(6, 'Виталий', 'BNTeKKZ@gmail.com', 'Мне очень у вас понравилось', 0xd09cd0bdd0b520d0bed187d0b5d0bdd18c20d18320d0b2d0b0d18120d0bfd0bed0bdd180d0b0d0b2d0b8d0bbd0bed181d18c2120d0bfd180d18fd0bc20d09ed0a7d095d09dd0ac20d09ed0a7d095d09dd0ac21205e5f5e, 1349697882, 1, 0),
(7, 'asd', 'BNTeKKZ@gmail.com', 'asd', 0x617364617364, 1350024433, 1, 0),
(8, 'asd', 'BNTeKKZ@gmail.com', 'asd', 0x617364617364, 1350024444, 1, 0),
(9, 'MyName', 'mail@urals.kz', 'theeem!', 0xd0bdd18320d182d0b8d0bfd0b020d182d0bed0b3d0be20d0b2d180d0bed0b4d0b520d0bad0b0d0ba20d0bdd0b520d0bfd0bbd0bed185d0be2c20d0bdd0be20d0b220d186d0b5d0bbd0bed0bc20d0bad0b0d0ba20d182d0be20d182d0b0d0ba, 1350283137, 1, 0),
(10, 'name sdsd', 'gaf@sukin', 'theme', 0x74657874206f66207468207468697320726563616c6c, 1350369309, 0, 0);

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
(1, 0x666666666666, 1350283471, 9);

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
  ADD CONSTRAINT `cookmenus_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`);

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

-- phpMyAdmin SQL Dump
-- version 3.5.2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 17 2012 г., 15:06
-- Версия сервера: 5.5.9
-- Версия PHP: 5.3.6

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

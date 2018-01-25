-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 25 2018 г., 20:52
-- Версия сервера: 10.1.24-MariaDB
-- Версия PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `concerts`
--

CREATE TABLE `concerts` (
  `name` text COLLATE utf8_bin NOT NULL,
  `site` text COLLATE utf8_bin NOT NULL,
  `phone` text COLLATE utf8_bin NOT NULL,
  `city` text COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `seating_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `concerts`
--

INSERT INTO `concerts` (`name`, `site`, `phone`, `city`, `address`, `seating_capacity`) VALUES
('ÐšÐ»ÑƒÐ± 16 Ñ‚Ð¾Ð½Ð½', '16tons.ru', '8 (499) 253-53-00', 'ÐœÐ¾ÑÐºÐ²Ð°', 'ÑƒÐ». ÐŸÑ€ÐµÑÐ½ÐµÐ½ÑÐºÐ¸Ð¹ Ð’Ð°Ð», 6, ÑÑ‚Ñ€. 1', 600),
('Brooklyn Hall', ' brooklynclub.biz', '8 (926) 594-36-89', 'ÐœÐ¾ÑÐºÐ²Ð°', 'Ð”ÐµÑ€Ð±ÐµÐ½ÐµÐ²ÑÐºÐ°Ñ ÑƒÐ»., 20, ÑÑ‚Ñ€.25', 1000),
('Ð”Ð¶Ð°Ð·Ð¾Ð²Ñ‹Ð¹ ÐºÐ»ÑƒÐ± Ð­ÑÑÐµ', 'jazzesse.ru', '8 (495) 150-28-48', 'ÐœÐ¾ÑÐºÐ²Ð°', 'ÑƒÐ». ÐŸÑÑ‚Ð½Ð¸Ñ†ÐºÐ°Ñ, 27, ÑÑ‚Ñ€.3Ð', 150),
('Doolin-house', ' doolin-house.ru', '8 (495) 695-92-06', 'ÐœÐ¾ÑÐºÐ²Ð°', 'ÑƒÐ». ÐÑ€Ð±Ð°Ñ‚, 20, ÐœÐ¾ÑÐºÐ²Ð°', 70),
('ÐšÐ»ÑƒÐ± \"Glastonberry\" (Ð±Ð¾Ð»ÑŒÑˆÐ¾Ð¹ Ð·Ð°Ð»)', 'glastonberry.ru', '8 (495) 642-45-43', 'ÐœÐ¾ÑÐºÐ²Ð°', '1-Ñ Ð”ÑƒÐ±Ñ€Ð¾Ð²ÑÐºÐ°Ñ ÑƒÐ»Ð¸Ñ†Ð°, 13Ð ÑÑ‚Ñ€Ð¾ÐµÐ½Ð¸Ðµ 1', 400),
('ÐšÐ»ÑƒÐ± \"Glastonberry\" (Ð¼Ð°Ð»Ñ‹Ð¹ Ð·Ð°Ð»)', 'glastonberry.ru', '8 (495) 642-45-43', 'ÐœÐ¾ÑÐºÐ²Ð°', '1-Ñ Ð”ÑƒÐ±Ñ€Ð¾Ð²ÑÐºÐ°Ñ ÑƒÐ»Ð¸Ñ†Ð°, 13Ð ÑÑ‚Ñ€Ð¾ÐµÐ½Ð¸Ðµ 1', 200),
('ÐšÐ»ÑƒÐ± ÐÐ»ÐµÐºÑÐµÑ ÐšÐ¾Ð·Ð»Ð¾Ð²Ð°', 'kozlovclub.ru', '8 (926) 952-00-77', 'ÐœÐ¾ÑÐºÐ²Ð°', 'ÑƒÐ». ÐœÐ°Ñ€Ð¾ÑÐµÐ¹ÐºÐ°, 9/2', 150),
('Schwein ÐºÐ»ÑƒÐ±', 'schwein.ru', '8 (499) 267-45-04', 'ÐœÐ¾ÑÐºÐ²Ð°', 'Ð›ÐµÑ„Ð¾Ñ€Ñ‚Ð¾Ð²ÑÐºÐ¸Ð¹ Ð¿ÐµÑ€., 12/50', 70),
('ÐžÐºÐµÐ°Ð½', 'oceanbar.ru', ' 8 (903) 145-83-78', 'ÐœÐ¾ÑÐºÐ²Ð°', 'Ð¿Ñ€-Ñ‚ ÐœÐ¸Ñ€Ð°, 91, Ðº.3', 200),
('ÐœÑƒÐ· ÐŸÐ°Ð±', '-', '8 (495) 937-54-19', 'ÐœÐ¾ÑÐºÐ²Ð°', 'ÐšÐ°Ð»Ð°Ð½Ñ‡ÐµÐ²ÑÐºÐ°Ñ ÑƒÐ»., 33', 500),
('ÐšÐ»ÑƒÐ± Ð“Ð¾Ñ€Ð¾Ð´ (Ð±Ð¾Ð»ÑŒÑˆÐ¾Ð¹ Ð·Ð°Ð»)', ' gorod.club', '8 (915) 242-22-66', 'ÐœÐ¾ÑÐºÐ²Ð°', 'Ð¡Ñ‚Ð°Ñ€Ð°Ñ Ð‘Ð°ÑÐ¼Ð°Ð½Ð½Ð°Ñ ÑƒÐ»., 20Ñ1', 700),
('ÐšÐ»ÑƒÐ± Ð“Ð¾Ñ€Ð¾Ð´ (Ð¼Ð°Ð»Ñ‹Ð¹ Ð·Ð°Ð»)', 'gorod.club', '8 (915) 242-22-66', 'ÐœÐ¾ÑÐºÐ²Ð°', 'Ð¡Ñ‚Ð°Ñ€Ð°Ñ Ð‘Ð°ÑÐ¼Ð°Ð½Ð½Ð°Ñ ÑƒÐ»., 20Ñ1', 200),
('ÐšÐ»ÑƒÐ± \"ÐœÑŒÑŽÐ·\"', 'http://www.musebar.ru/', '+7 903 770 32 32', 'ÐœÐ¾ÑÐºÐ²Ð°', 'ÐÐ¸ÐºÐ¾Ð»Ð¾ÑÐ¼ÑÐºÐ°Ñ ÑƒÐ»., 23, ÐœÐ¾ÑÐºÐ²Ð°', 200),
('Ð’Ð¸Ð½Ð¸Ð»Ð¾Ð²Ð¾Ðµ ÐÐµÐ±Ð¾', 'vinyllasky.ru', '8 (812) 764-63-44', 'Ð¡Ð°Ð½ÐºÑ‚-ÐŸÐµÑ‚ÐµÑ€Ð±ÑƒÑ€Ð³', 'Ð›Ð¸Ð³Ð¾Ð²ÑÐºÐ¸Ð¹ Ð¿Ñ€., 81', 300),
('Ð¦Ð¾ÐºÐ¾Ð»ÑŒ', 'zoccolo.ru', '8 (812) 274-94-67', 'Ð¡Ð°Ð½ÐºÑ‚-ÐŸÐµÑ‚ÐµÑ€Ð±ÑƒÑ€Ð³', ' ÑƒÐ». 3-Ñ Ð¡Ð¾Ð²ÐµÑ‚ÑÐºÐ°Ñ Ð´.2/3', 200),
('Ð“Ñ€Ð¸Ð±Ð¾ÐµÐ´Ð¾Ð² ÐšÐ»ÑƒÐ±', 'griboedovclub.ru', '8 (812) 764-43-55', 'Ð¡Ð°Ð½ÐºÑ‚-ÐŸÐµÑ‚ÐµÑ€Ð±ÑƒÑ€Ð³', 'ÑƒÐ». Ð’Ð¾Ñ€Ð¾Ð½ÐµÐ¶ÑÐºÐ°Ñ, 2Ð°', 500),
('Ð°Ñ€Ñ‚-ÐºÐ»ÑƒÐ± \"ÐœÐ°Ð½Ñ…ÑÑ‚Ñ‚ÐµÐ½\"', 'manhattanclub.ru', '+7 (812) 713-1945 ', 'Ð¡Ð°Ð½ÐºÑ‚-ÐŸÐµÑ‚ÐµÑ€Ð±ÑƒÑ€Ð³', 'Ð½Ð°Ð±. Ð¤Ð¾Ð½Ñ‚Ð°Ð½ÐºÐ¸, 90', 250),
('ÐšÐ¸Ñ‚Ð°Ð¹ÑÐºÐ¸Ð¹ Ð»Ñ‘Ñ‚Ñ‡Ð¸Ðº Ð”Ð¶Ð°Ð¾ Ð”Ð°', 'jao-da.ru', '+7 (495) 624-56-11', 'ÐœÐ¾ÑÐºÐ²Ð°', 'Ð›ÑƒÐ±ÑÐ½ÑÐºÐ¸Ð¹ Ð¿Ñ€-Ð·Ð´, 25', 250),
('Ð¥Ð¾Ð»Ð» W St. Petersburg', 'wstpetersburg.ru', '8 (812) 610-61-60', 'Ð¡Ð°Ð½ÐºÑ‚-ÐŸÐµÑ‚ÐµÑ€Ð±ÑƒÑ€Ð³', 'Ð’Ð¾Ð·Ð½ÐµÑÐµÐ½ÑÐºÐ¸Ð¹ Ð¿Ñ€Ð¾ÑÐ¿ÐµÐºÑ‚, Ð´. 6', 100),
('', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `name` text COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `musicians`
--

CREATE TABLE `musicians` (
  `FirstName` text COLLATE utf8_bin NOT NULL,
  `LastName` text COLLATE utf8_bin NOT NULL,
  `MusInst` text COLLATE utf8_bin NOT NULL,
  `link` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `city` text COLLATE utf8_bin NOT NULL,
  `genre` text COLLATE utf8_bin NOT NULL,
  `subgenre` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

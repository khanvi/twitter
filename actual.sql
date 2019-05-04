-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 04 2019 г., 07:08
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hv`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actual`
--

CREATE TABLE `actual` (
  `id` int(10) NOT NULL,
  `name` varchar(355) NOT NULL,
  `link` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `actual`
--

INSERT INTO `actual` (`id`, `name`, `link`) VALUES
(1, '#phone', 'https://www.google.ru/search?q=%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%87%D0%B8%D0%BA&oq=gtht&aqs=chrome.1.69i57j0l5.1450j0j7&sourceid=chrome&ie=UTF-8'),
(2, '#Blizzard', 'https://www.google.ru/search?q=%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%87%D0%B8%D0%BA&oq=gtht&aqs=chrome.1.69i57j0l5.1450j0j7&sourceid=chrome&ie=UTF-8'),
(3, '#air', 'https://www.google.ru/search?q=%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%87%D0%B8%D0%BA&oq=gtht&aqs=chrome.1.69i57j0l5.1450j0j7&sourceid=chrome&ie=UTF-8'),
(4, '#FTL', 'https://www.google.ru/search?q=%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%87%D0%B8%D0%BA&oq=gtht&aqs=chrome.1.69i57j0l5.1450j0j7&sourceid=chrome&ie=UTF-8');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `actual`
--
ALTER TABLE `actual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `actual`
--
ALTER TABLE `actual`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

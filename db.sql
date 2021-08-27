-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 27 2021 г., 11:13
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `record`
--

CREATE TABLE `record` (
  `id` int NOT NULL,
  `name` varchar(18) NOT NULL,
  `target` varchar(25) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Дамп данных таблицы `record`
--

INSERT INTO `record` (`id`, `name`, `target`, `time`, `status`) VALUES
(18, 'Ольга', '2', '2021-08-25 07:50:03', '2'),
(19, 'Настя', '1', '2021-08-25 07:50:15', '0'),
(20, 'Олег', '3', '2021-08-25 07:50:24', '2'),
(21, 'oleg', '1', '2021-08-25 07:50:28', '0'),
(22, 'Максим', '2', '2021-08-25 07:50:41', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(18) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `role`, `time`) VALUES
(82, 'Вадим', '698d51a19d8a121ce581499d7b701668', '1', '2021-08-20 07:59:41'),
(83, 'Настя', '698d51a19d8a121ce581499d7b701668', '2', '2021-08-20 07:59:49'),
(84, 'Алексей', '698d51a19d8a121ce581499d7b701668', '3', '2021-08-20 08:00:00'),
(94, 'Анна', 'c8837b23ff8aaa8a2dde915473ce0991', '1', '2021-08-27 06:57:15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `record`
--
ALTER TABLE `record`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

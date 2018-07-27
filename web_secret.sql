-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 27 2018 г., 19:41
-- Версия сервера: 5.7.20-log
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web_secret`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(31, 'Отдел закупок'),
(32, 'Отдел продаж'),
(33, 'PR отдел'),
(34, 'Отдел разработки'),
(35, 'Отдел маркетинга');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `third_name` varchar(255) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `name`, `last_name`, `third_name`, `sex`, `salary`) VALUES
(27, 'Иван', 'Иванов', 'Иванович', 2, 2000),
(28, 'Полина', 'Черныш', 'Андреевна', 1, 2000),
(29, 'Ангелина', 'Сильваненько', 'Сергеевна', 1, 1700),
(30, 'Даниил', 'Петров', 'Дмитриевич', 2, 4000),
(31, 'Артем', 'Шклярик', 'Сергеевич', 2, 4500);

-- --------------------------------------------------------

--
-- Структура таблицы `worker_department`
--

CREATE TABLE `worker_department` (
  `worker_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `worker_department`
--

INSERT INTO `worker_department` (`worker_id`, `department_id`) VALUES
(27, 32),
(27, 35),
(28, 31),
(28, 35),
(29, 33),
(30, 34),
(31, 33),
(31, 34);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `worker_department`
--
ALTER TABLE `worker_department`
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `worker_department`
--
ALTER TABLE `worker_department`
  ADD CONSTRAINT `worker_department_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `worker_department_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

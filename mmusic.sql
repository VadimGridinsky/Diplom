-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2020 г., 23:50
-- Версия сервера: 5.7.29-log
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mmusic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `raiting`
--

CREATE TABLE `raiting` (
  `id` int(11) NOT NULL,
  `amount` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `track_name` text CHARACTER SET utf8 NOT NULL,
  `Author` text CHARACTER SET utf8 NOT NULL,
  `audio` text,
  `image` text,
  `id_user` int(11) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `track`
--

INSERT INTO `track` (`id`, `track_name`, `Author`, `audio`, `image`, `id_user`, `id_genre`) VALUES
(16, 'woke the fuck up', 'jon bellion', 'uploads/tracks/1589627225Jon Bellion - Woke The Fuck Up (Afterfab X Airmow Remix).mp3', 'uploads/tracksphoto/15896272256Zd3Y70pHTI.jpg', 24, NULL),
(17, 'woke the fuck up', 'jon bellion', 'uploads/tracks/1589627247Jon Bellion - Woke The Fuck Up (Afterfab X Airmow Remix).mp3', 'uploads/tracksphoto/15896272476Zd3Y70pHTI.jpg', 24, NULL),
(18, 'woke the fuck up', 'jon bellion', 'uploads/tracks/1589628343Jon Bellion - Woke The Fuck Up (Afterfab X Airmow Remix).mp3', 'uploads/tracksphoto/15896283436Zd3Y70pHTI.jpg', 11, NULL),
(19, '', '', 'uploads/tracks/1589629367', 'uploads/tracksphoto/1589629367', 11, NULL),
(20, 'Undeadsong', 'Undead', 'uploads/tracks/1589629888Jon Bellion - Woke The Fuck Up (Afterfab X Airmow Remix).mp3', 'uploads/tracksphoto/1589629888Avatar.jpg', 25, NULL),
(21, 'seen it all', 'Mushroomhead', 'uploads/tracks/1590353056Mushroomhead - Seen It All.mp3', 'uploads/photo/tracksphoto1590353056', 32, NULL),
(22, '444', '123', 'uploads/tracks/1590353220Mushroomhead - Seen It All.mp3', 'uploads/photo/tracksphoto/1590353220', 32, NULL),
(23, '333', '1111', 'uploads/tracks/1590353278Mushroomhead - Seen It All.mp3', 'uploads/tracksphoto/1590353278', 32, NULL),
(24, '1233', '123', 'uploads/tracks/1590353372Mushroomhead - Seen It All.mp3', 'uploads/tracksphoto/1590353372Screenshot_3.png', 32, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `nickname`, `email`, `avatar`) VALUES
(11, 'vadim', '202cb962ac59075b964b07152d234b70', '', 'goldencobra228@yandex.ru', 'uploads/1587641403DMwODihWkp0.jpg'),
(23, 'Vadim', '202cb962ac59075b964b07152d234b70', 'Undead', 'goldencobra228@yandex.ru', 'uploads/photo/15891338621.jpg'),
(24, 'fff', '343d9040a671c45832ee5381860e2996', 'fff', 'fff@fff.ru', 'uploads/photo/1589625628'),
(25, 'ffff', 'ece926d8c0356205276a45266d361161', 'ffff', 'ffff@ffff.ru', 'uploads/photo/15896297621.jpg'),
(26, '123', '19f1f8a17103c6260cd144849b1ea771', '123', 'goldencobra228@yandex.ru', 'uploads/photo/1590242815DMwODihWkp0.jpg'),
(27, '123', '202cb962ac59075b964b07152d234b70', '123', 'golden@golden.ru', 'uploads/photo/1590242830DMwODihWkp0.jpg'),
(28, '12344', '202cb962ac59075b964b07152d234b70', '123444', 'golden@golden.com', 'uploads/photo/1590244171Avatar.jpg'),
(29, '111111', 'd41d8cd98f00b204e9800998ecf8427e', '111111', 'goldencobra228@Yandex.ru', 'uploads/photo/1590245066DMwODihWkp0.jpg'),
(30, '111111', 'd41d8cd98f00b204e9800998ecf8427e', '111111', 'goldencobra228@Yandex.ru', 'uploads/photo/1590245097DMwODihWkp0.jpg'),
(31, '11111', '202cb962ac59075b964b07152d234b70', '11111', 'golden@golden.ru', 'uploads/photo/1590245663Avatar.jpg'),
(32, '123456', '202cb962ac59075b964b07152d234b70', '1234567', 'goldencobra228@yandex.ru', 'uploads/photo/1590352719Screenshot_2.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `raiting`
--
ALTER TABLE `raiting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `raiting`
--
ALTER TABLE `raiting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `raiting`
--
ALTER TABLE `raiting`
  ADD CONSTRAINT `raiting_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `track_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `track_ibfk_2` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

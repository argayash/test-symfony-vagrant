--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `description`) VALUES
(1, 'Goods №1', 'Description of goods №1'),
(2, 'Goods №2', 'Description of goods №2'),
(3, 'Goods №3', 'Description of goods №3');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL,
  `basename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `goods_id`, `basename`) VALUES
(1, 1, 'Images/goods_1.jpeg'),
(2, 1, 'Images/goods_2.jpeg'),
(3, 2, 'Images/goods_3.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `price_type_id` int(10) unsigned NOT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`price_type_id`,`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`price_type_id`, `goods_id`, `price`) VALUES
(1, 1, 10),
(1, 2, 20),
(1, 3, 30),
(2, 1, 40),
(2, 2, 50);

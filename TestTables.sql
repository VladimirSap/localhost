-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.37-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных ImageStorage
CREATE DATABASE IF NOT EXISTS `imagestorage` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ImageStorage`;


-- Дамп структуры для таблица ImageStorage.albums
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ImageStorage.albums: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` (`id`, `name`, `description`) VALUES
	(1, 'Альбом', 'Описание альбома');
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;


-- Дамп структуры для таблица ImageStorage.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(50) NOT NULL,
  `album_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ImageStorage.images: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `link`, `album_id`) VALUES
	(24, 'Перед росписью', 1),
	(25, 'Роспись', 1),
	(27, 'Фото на природе', 1),
	(28, 'Фото в замке', 1),
	(30, 'Подарки на ужине', 1),
	(31, 'Ужин', 1),
	(32, 'Шоу', 1);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;


-- Дамп структуры для таблица ImageStorage.imgToTags
CREATE TABLE IF NOT EXISTS `imgToTags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_id` int(11) NOT NULL,
  `tag_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `img_id` (`img_id`),
  KEY `tag_id` (`tag_id`),
  CONSTRAINT `imgtotags_ibfk_1` FOREIGN KEY (`img_id`) REFERENCES `images` (`id`),
  CONSTRAINT `imgtotags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ImageStorage.imgToTags: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `imgToTags` DISABLE KEYS */;
/*!40000 ALTER TABLE `imgToTags` ENABLE KEYS */;


-- Дамп структуры для таблица ImageStorage.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tags_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ImageStorage.tags: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `name`) VALUES
	(1, 'Дворец'),
	(2, 'Деревья'),
	(3, 'Бокалы'),
	(4, 'Фейерверк');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- --------------------------------------------------------
-- ホスト:                          127.0.0.1
-- サーバーのバージョン:                   10.4.14-MariaDB - mariadb.org binary distribution
-- サーバー OS:                      Win64
-- HeidiSQL バージョン:               11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- u22 のデータベース構造をダンプしています
DROP DATABASE IF EXISTS `u22`;
CREATE DATABASE IF NOT EXISTS `u22` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `u22`;

--  テーブル u22.questions の構造をダンプしています
DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `weight` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- テーブル u22.questions: ~5 rows (約) のデータをダンプしています
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `description`, `weight`) VALUES
	(1, '元気ですか？', 0),
	(2, '１です', 1),
	(3, '２です', 2),
	(4, '３です', 3),
	(5, '４です', 4);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

--  テーブル u22.users の構造をダンプしています
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `theme` char(6) NOT NULL DEFAULT '1a1a1a',
  `genders_id` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- テーブル u22.users: ~0 rows (約) のデータをダンプしています
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `theme`, `genders_id`) VALUES
	(1, 'test_user', '12345', NULL, '1a1a1a', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--  テーブル u22.users_answers_questions の構造をダンプしています
DROP TABLE IF EXISTS `users_answers_questions`;
CREATE TABLE IF NOT EXISTS `users_answers_questions` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `users_id` int(4) NOT NULL,
  `questions_id` int(4) NOT NULL,
  `answerdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `choice` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_answers_questions_users` (`users_id`),
  CONSTRAINT `FK_users_answers_questions_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4;

-- テーブル u22.users_answers_questions: ~0 rows (約) のデータをダンプしています
/*!40000 ALTER TABLE `users_answers_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_answers_questions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

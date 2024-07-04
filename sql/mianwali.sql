-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for store-name
CREATE DATABASE IF NOT EXISTS `store-name` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `store-name`;

-- Dumping structure for table store-name.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `details` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` varchar(100) NOT NULL DEFAULT '0',
  `type` enum('STARTERS','CHICKEN','LAMB','BEEF','FISH','VEGETERIAN','CHILDREN','NAAN','RICE','DESERT','BUFFET','TAKEAWAY') NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- Dumping data for table store-name.menus: ~74 rows (approximately)
INSERT INTO `menus` (`id`, `name`, `details`, `price`, `type`, `status`, `updated_at`, `created_at`) VALUES
	(1, 'Indian Salad', 'Concombres, oignons, tomates et piments verts', '10', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(2, 'Samosa', 'Triangle de pâte farcie aux légumes', '10', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(3, 'Pakora', 'Assortiments de beignets aux légumes', '10', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(4, 'Raita', 'Yogourt aux légumes, aromatisés à la menthe fraîche', '10', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(5, 'Seekh  Kebab', 'Brochettes de viandes hachée de bœuf et épicée', '15', 'STARTERS', 1, '2022-10-29 11:04:50', '2017-12-14 00:02:57'),
	(6, 'Chicken Tikka', 'Blanc de poulet mariné et grillé au tandoorFour)', '15', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(7, 'Chicken Tandoori', 'Cuisse de Poulet mariné et grillé au tandoor(four)', '15', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(8, 'Gambas Tandoori', 'Crevettes géantes grillées aux épices', '25', 'STARTERS', 1, '2022-10-29 12:00:12', '2017-12-14 00:02:57'),
	(9, 'Machi Pakoda', 'Beignets de poisson aux épices  indiennes', '15', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(10, 'Mixed Grill', 'Plat composé de viandes et fruit de mer marinées grillé', '29', 'STARTERS', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(11, 'Murg Curry', 'Poulet à la sauce curry', '26', 'CHICKEN', 1, '2022-10-29 10:57:34', '2017-12-14 00:02:57'),
	(12, 'Murg Madras', 'Poulet marinés et sauce Madras curry', '27', 'CHICKEN', 1, '2022-10-29 11:02:48', '2017-12-14 00:02:57'),
	(13, 'Murg Jalfrezi', 'Poulet et sauce tomate, oignons et poivrons', '27', 'CHICKEN', 1, '2022-10-29 10:56:56', '2017-12-14 00:02:57'),
	(14, 'Murg Korma', 'Poulet et curry de noix de cajou, amandes et raisins secs', '27', 'CHICKEN', 1, '2022-10-29 11:03:20', '2017-12-14 00:02:57'),
	(15, 'Butter Chicken', 'Poulet sauté au beurre curry et sauce à la tomate raffinée', '27', 'CHICKEN', 1, '2022-10-29 10:46:56', '2017-12-14 00:02:57'),
	(16, 'Chicken Tikka Masala', 'Poulet grillé et sauce tomate, oignons, poivrons et épicés', '27', 'CHICKEN', 1, '2022-10-29 10:52:28', '2017-12-14 00:02:57'),
	(17, 'Chilli Chicken', 'Poulet sauté aux poivrons, oignons.et piments verts', '27', 'CHICKEN', 1, '2022-10-29 10:50:40', '2017-12-14 00:02:57'),
	(18, 'Murg saagwala', 'Poulet et épinards aux épices fraiches', '28', 'CHICKEN', 1, '2022-10-29 11:01:54', '2017-12-14 00:02:57'),
	(19, 'Chicken Biryani', 'Poulet et riz basmati épicée ', '30', 'CHICKEN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(20, 'Gosth Curry', 'Agneau à la sauce curry', '27', 'LAMB', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(21, 'Gosth Saagwala', 'Agneau et épinards hachés façon punjabi', '27', 'LAMB', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(22, 'Gosth Vindaloo', 'Agneau et pommes de terre épicé et sauce vindaloo (piquante)', '28', 'LAMB', 1, '2022-10-29 10:55:52', '2017-12-14 00:02:57'),
	(23, 'Daal Gosth', 'Agneau et lentilles parfumé aux épices', '27', 'LAMB', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(24, 'Gosth Korma', 'Agneau et curry de noix de cajou, amandes et raisins secs', '29', 'LAMB', 1, '2022-10-29 10:55:21', '2017-12-14 00:02:57'),
	(25, 'Gosth Biryani', 'Agneau  et riz basmati  et divers épices ', '35', 'LAMB', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(26, 'Gosth Achari', 'Gigot d’agneau à la sauce Piquante', '28', 'LAMB', 1, '2022-10-29 10:53:30', '2017-12-14 00:02:57'),
	(27, 'Gosth Methi Malai', 'Agneau et curry arrosé à la feuilles de fenugrec', '29', 'LAMB', 1, '2022-10-29 10:56:20', '2017-12-14 00:02:57'),
	(28, 'Gosth Royal', 'Proposition du chef', '35', 'LAMB', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(29, 'Beef Curry', 'Bœuf à la sauce curry', '28', 'BEEF', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(30, 'Beef Saagwala', 'Bœuf et épinards hachés et épices', '28', 'BEEF', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(31, 'Beef Vindaloo', 'Bœuf et pommes de terre avec sauce vindaloo (piquante)', '28', 'BEEF', 1, '2022-07-30 07:06:56', '2017-12-14 00:02:57'),
	(32, 'Beef Rogan josh', 'Bœuf avec sauce tomate, ail, oignons et épices ', '28', 'BEEF', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(33, 'Beef Biryani', 'Bœuf et riz basmati avec divers épices', '35', 'BEEF', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(34, 'Beef Achari', 'Bœuf et sauce piquante', '28', 'BEEF', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(35, 'Beef Pudina', 'Bœuf à la sauce de menthe et épices', '28', 'BEEF', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(36, 'Beef Royal', 'Proposition du Chef', '35', 'BEEF', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(37, 'Gambas à l’Ail', 'Crevettes marinée à l’ail  grillées et sauce curry', '32', 'FISH', 1, '2022-10-29 10:54:34', '2017-12-14 00:02:57'),
	(38, 'Gambas Vindaloo', 'Crevettes marinée et sauce vindaloo piquante', '27', 'FISH', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(39, 'Gambas Coco', 'Crevettes grillées à la sauce noix de coco', '27', 'FISH', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(40, 'Machli Curry', 'Filets de saumon grillé et  sauce curry', '32', 'FISH', 1, '2022-10-29 10:59:05', '2017-12-14 00:02:57'),
	(41, 'Machli Jalfrezi', 'Filets de saumon grillé et sauce tomates et poivrons et épices', '32', 'FISH', 1, '2022-10-29 10:58:41', '2017-12-14 00:02:57'),
	(42, 'Machli Ajwaini', 'Filets de saumon marinés sauce curry et graine de livèche', '32', 'FISH', 1, '2022-10-29 10:59:28', '2017-12-14 00:02:57'),
	(43, 'Shahi Veg Malai Kofta', 'Boulettes de légumes et fromage indien à la sauce noix de cajou', '23', 'VEGETERIAN', 1, '2022-10-29 11:56:34', '2017-12-14 00:02:57'),
	(44, 'Mix Veg', 'Plats traditionnels aux légumes frais', '22', 'VEGETERIAN', 1, '2022-10-29 10:58:14', '2017-12-14 00:02:57'),
	(45, 'Aloo Gobi', 'Pommes de terre et choux fleur aux épices', '22', 'VEGETERIAN', 1, '2022-10-29 10:45:16', '2017-12-14 00:02:57'),
	(46, 'Chana Masala', 'Pois chiches parfumés  à la coriandre, gingembre et épices', '23', 'VEGETERIAN', 1, '2022-10-29 10:48:04', '2017-12-14 00:02:57'),
	(47, 'Dall Tadka', 'Lentilles jaunes légèrement épicées ', '19', 'VEGETERIAN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(48, 'Palak Paneer', 'Plat d’épinards au fromage indien', '25', 'VEGETERIAN', 1, '2022-10-29 11:00:03', '2017-12-14 00:02:57'),
	(49, 'Baingan Bartha', 'Caviar d’aubergines aux tomates, oignons et coriandre', '24', 'VEGETERIAN', 1, '2022-10-29 10:45:48', '2017-12-14 00:02:57'),
	(50, 'Cheese chilli', 'Poivrons, oignons, tomates et fromage  indienne sauté et épices', '25', 'VEGETERIAN', 1, '2022-10-29 10:49:03', '2017-12-14 00:02:57'),
	(51, 'Navrattan Korma', 'Légumes fraiche  à la sauce coco et curry ', '20', 'VEGETERIAN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(52, 'Punjabi saag', 'Feuilles de moutard hachée épicée au gingembre ,ail, oignons', '22', 'VEGETERIAN', 1, '2022-10-29 11:38:42', '2017-12-14 00:02:57'),
	(53, 'Chicken Malai', 'Emincé de poulet à la crème avec lait de coco et curry doux', '15', 'CHILDREN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(54, 'Crevettes Makhni', 'Crevettes grillées au beurre et au citron avec riz', '15', 'CHILDREN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(55, 'Naan nature', 'galette de farine', '5', 'NAAN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(56, 'Garlic naan', 'galette de farine à l’ail', '6', 'NAAN', 1, '2022-10-29 10:53:57', '2017-12-14 00:02:57'),
	(57, 'Chilli naan', 'galette de farine aux piments verts', '5', 'NAAN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(58, 'Onion Naan', 'galette de farine aux oignons', '6', 'NAAN', 1, '2022-10-29 11:00:30', '2017-12-14 00:02:57'),
	(59, 'Naan Parantha', 'galette de farine aux légumes', '8', 'NAAN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(60, 'Naan au fromage', 'galette de farine au fromage', '8', 'NAAN', 1, '2022-10-29 11:01:20', '2017-12-14 00:02:57'),
	(61, 'Chapati', 'Galette traditionnels Indienne au farine de blé', '7', 'NAAN', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(62, 'Riz basmati nature', '--', '5', 'RICE', 1, '2017-12-20 03:41:52', '2017-12-14 00:02:57'),
	(63, 'Riz basmati aux petits pois', '--', '6', 'RICE', 1, '2022-10-29 11:07:19', '2017-12-14 00:02:57'),
	(64, 'Riz basmati sauté au citron', 'Riz basmati sauté au citron', '6', 'RICE', 1, '2022-10-29 11:06:49', '2017-12-14 00:02:57'),
	(65, 'Riz basmati sauté au cumin', 'riz basmatisauté au cumin', '6', 'RICE', 1, '2022-10-29 11:05:38', '2017-12-14 00:02:57'),
	(66, 'Riz au fruits secs', 'riz basmati', '8', 'RICE', 1, '2022-10-29 11:10:44', '2017-12-14 00:02:57'),
	(67, 'Riz pulao sauté aux légumes', '', '7', 'RICE', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(68, 'Gulab Jamun', 'Boulettes de farine et eau de rose et cardamone', '8', 'DESERT', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(69, 'Halwa', 'Gâteau indien aux carottes et cardamone', '8', 'DESERT', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(70, 'Kulfi', 'Glace traditionnelle au lait parfumé au cardamones et amendes', '8', 'DESERT', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(71, 'Mango Cream', 'Crème de mangue parfumée aux fraise', '8', 'DESERT', 1, '2017-12-14 00:02:57', '2017-12-14 00:02:57'),
	(74, 'Midday Buffet/Midi Buffet à volonté', 'Midday Buffet/  Midi Buffet à volonté', '21.90', 'BUFFET', 1, '2022-10-29 12:01:36', '2017-12-14 08:27:07'),
	(75, 'Menus du jour à lêmporter', 'Midday menu take away.', 'dès 13', 'TAKEAWAY', 1, '2023-04-04 06:57:03', '2017-12-14 08:30:10'),
	(76, 'SaturdayMidday Buffet/Samedi  Midi Buffet à volonté', 'SaturdayMidday Buffet/Samedi  Midi Buffet à volonté', '23.90', 'BUFFET', 1, '2017-12-20 03:39:04', '2017-12-14 08:40:29');

-- Dumping structure for table store-name.site_users
CREATE TABLE IF NOT EXISTS `site_users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `remember_token` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table store-name.site_users: ~1 rows (approximately)
INSERT INTO `site_users` (`id`, `username`, `password`, `role`, `status`, `remember_token`, `updated_at`, `created_at`) VALUES
	(0, 'admin', '$2y$10$hoUUOsso3ge51cj9w5E7su3jrrhygP2.VNLKTltncSG6UjuIQ4Spa', 'ADMIN', 1, 'r3yD7PNnbDw8iXFxgXEHEEXa9RWuGLSLODUzdBZ5Y2U8bUJkwQxYZLMisv1B', '2017-12-19 21:12:22', '2017-12-13 23:52:26');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

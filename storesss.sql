-- phpMyAdmin SQL 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `storesss`

-- --------------------------------------------------------

-- Table structure for table `items`

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Necklace with cyanotype ', 20),
(2, 'Necklace with cyanotype ', 20),
(3, 'Earrings with cyanotype ', 20),
(4, 'Earrings with cyanotype ', 20),
(5, 'Pin with cyanotype ', 15),
(6, 'Safety pin with cyanotype ', 15),
(7, 'Pegs with cyanotype ', 15),
(8, 'Pin with cyanotype ', 15),
(9, 'Necklace with cyanotype ', 15),
(10, 'Totebag with image transfer and collage ', 30);
(11, 'Totebag with cyanotype ', 30);
(12, 'Totebag with image transfer and collage ', 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'ana', 'ana22@gmail.com', '987654', '9899898988', 'ka', 'kaa');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 2, 'Confirmed'),
(2, 11, 2, 'Confirmed'),
(5, 12, 1, 'Confirmed'),
(6, 12, 2, 'Confirmed'),
(8, 13, 1, 'Confirmed'),
(9, 13, 2, 'Confirmed'),
(12, 14, 1, 'Added to cart'),
(13, 14, 2, 'Added to cart'),
(16, 20, 1, 'Confirmed'),
(17, 21, 1, 'Added to cart'),
(18, 21, 2, 'Added to cart'),
(20, 22, 1, 'Added to cart'),
(21, 22, 2, 'Added to cart');

-- Constraints for dumped tables
-- Constraints for table `users_items`

ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 11:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_to_your_heart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deserts_categories`
--

CREATE TABLE `tbl_deserts_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_deserts_categories`
--

INSERT INTO `tbl_deserts_categories` (`id`, `type`) VALUES
(1, 'Baking'),
(2, 'Non Baking'),
(3, 'Frozen'),
(4, 'Pastries');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desserts`
--

CREATE TABLE `tbl_desserts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_desserts`
--

INSERT INTO `tbl_desserts` (`id`, `name`, `description`, `image_url`, `categories_id`) VALUES
(2, 'Apple Cake db', 'Step 1 Beat 2 1/4 cup flour, milk, 1/4 cup sugar, yeast, 6 tablespoons butter, vanilla extract, and 1 pinch salt in a large bowl with an electric mixer on high until dough is smooth, about 5 minutes; spread into baking dish and press dough up the sides. Press apple slices into dough', 'FOTO/Desserts/1b.jpg', 1),
(3, 'Chocoloate Cake', 'Preheat oven to 350 degress F(175 degress C).Grease and flour a 9x13-inch pan.In a large bowl,combine 2 cups all-purpose flour,2 cups white sugar,A cup unsweetened cocoa,2 teaspoons baking soda.', 'FOTO/Desserts/2b.jpg', 1),
(4, 'Classis Tiramisu', 'Combine egg yolks and sugar in the top of a double boiler, iver boiling water. Reducee heat to low and cook for about 10 minutes, stirring constantly. Remove from heat and whip yolks until thick and lemon colored.', 'FOTO/Desserts/1nb.jpg', 2),
(5, 'Zebra Cake', 'In separate bowls, prepare each pudding mix, using only one cup of milk per box. Let stand for about 5 minutes until slightly firm, then fold 1/2 of the whipped topping into each one. Place a layer of graham crackers in the bottom of an 8x8 inch pan.', 'FOTO/Desserts/3nb.jpg', 2),
(6, 'Yogurt ice pops', 'Place the mixed blueberries, raspberries, strawberries, sliced bananas, yogurt, and sugar into a blender. Cover, and blend until fruit is chunky or smooth, as desired. ', 'FOTO/Desserts/2f.jpg', 3),
(8, 'Avocado paletas', 'Bring water and sugar to a boil together in a saucepan; stir continually until sugar dissolves. Set aside to cool. Pour sugar-water mixture into a blender with avocados, lime juice.', 'FOTO/Desserts/4f.jpg', 3),
(9, 'Cinammon rolls ', 'In the pan of your bread machine, combine water, 1/4 cup melted butter, vanilla pudding, 1 cup warm milk, egg, 1 tablespoon sugar, salt, bread flour, and yeast. Set machine to Dough cycle; press Start. When Dough cycle has finished, turn dough out onto a lightly floured surface.', 'FOTO/Desserts/1p.jpg', 4),
(10, 'Pinwheels', 'Dust a flat work surface lightly with flour. Unroll puff pastry and roll out to a rectangle. Spread a thin layer of herbed cream cheese over the puff pastry. Cover with Swiss cheese slices.', 'FOTO/Desserts/3p.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `password`) VALUES
(1, 'medine.hajredini@student.uni-pr.edu', 'test1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_deserts_categories`
--
ALTER TABLE `tbl_deserts_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_desserts`
--
ALTER TABLE `tbl_desserts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_deserts_categories`
--
ALTER TABLE `tbl_deserts_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_desserts`
--
ALTER TABLE `tbl_desserts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_desserts`
--
ALTER TABLE `tbl_desserts`
  ADD CONSTRAINT `tbl_desserts_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `tbl_deserts_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

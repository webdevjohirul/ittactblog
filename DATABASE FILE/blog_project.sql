-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 12:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Johirul Islam', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `category_id` int(255) NOT NULL,
  `category_name` text NOT NULL,
  `category_descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`category_id`, `category_name`, `category_descrip`) VALUES
(1, 'Travel', 'This is travel category description.'),
(2, 'Food', 'This is foot category description.'),
(8, 'Nature', 'This is nature category description.'),
(10, 'Sports', 'This is sports category description.'),
(11, 'Programming', 'This is programming category description.'),
(17, 'Technology', 'This is tech category description.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(150) NOT NULL,
  `post_category` int(255) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_summary` varchar(200) NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_author` varchar(60) NOT NULL,
  `post_date` date NOT NULL,
  `post_comment` int(255) NOT NULL,
  `post_status` tinyint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_category`, `post_tag`, `post_content`, `post_summary`, `post_img`, `post_author`, `post_date`, `post_comment`, `post_status`) VALUES
(2, 'How to learn  jQuery framwork', 15, 'jQuery', 'Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose.', 'jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.', 'hero_11.jpg', 'Admin', '2021-10-03', 3, 1),
(4, 'Node Js', 15, 'Node Js', 'Node. js (Node) is an open source development platform for executing JavaScript code server-side. Node is useful for developing applications that require a persistent connection from the browser to the server and is often used for real-time applications such as chat, news feeds and web push notifications.', 'Node. js (Node) is an open source development platform for executing JavaScript code server-side.', 'hero_17.jpg', 'Admin', '2021-10-04', 3, 1),
(8, 'first user post', 8, 'citis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse,', 'image-11.jpg', 'User', '2021-10-06', 3, 1),
(9, 'second user post', 11, 'software', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse', 'image-5.jpg', 'User', '2021-10-06', 3, 1),
(10, 'first admin post', 2, 'coffe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse', 'image-4.jpg', 'Admin', '2021-10-07', 3, 1),
(11, 'Third user post', 11, 'python', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi', 'image-6.jpg', 'User', '2021-10-07', 3, 1),
(12, 'Fourth user post', 1, 'Entertainment', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi', 'image-1.jpeg', 'User', '2021-10-07', 3, 1),
(14, 'Five user post', 10, 'design', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse', 'image-5.jpeg', 'User', '2021-10-07', 3, 1),
(15, 'Two admin post', 11, 'PHP', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse', 'image-3.jpg', 'Admin', '2021-10-07', 3, 1),
(16, 'Six uer post', 10, 'headphone', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum', 'image-2.jpeg', 'User', '2021-10-07', 3, 1),
(17, 'Three admin post', 10, 'football', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur', 'image-8.jpeg', 'Admin', '2021-10-07', 3, 1),
(18, 'Seven user post', 10, 'football', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque laborum sit excepturi esse, aperiam placeat iste a qui accusamus consectetur eius voluptas veritatis veniam quas eum quia vel culpa fugit optio ea similique officiis. Commodi laudantium quae quo dicta adipisci sapiente iusto, molestiae quos ex consequatur repellendus vel optio animi! Nihil, ipsum perspiciatis. Necessitatibus porro unde ad et, facilis eum, similique placeat eligendi aliquid voluptatibus provident cum laudantium alias sunt, sed quibusdam quasi quae mollitia expedita voluptates. Laborum nostrum deserunt natus culpa praesentium ducimus beatae tempora, aliquam reiciendis. Aliquid commodi eius illo dolore molestias aspernatur ullam ratione nam nemo provident, quisquam odio, corporis amet autem aut perferendis quae. Nihil doloremque esse quam laudantium, neque tenetur harum veniam dicta magnam nobis, rem perspiciatis nemo alias quae architecto quis et nulla cupiditate. Vel veritatis provident alias, quia pariatur, fugit nihil ipsa aut omnis, quos ratione hic quod cumque. Ullam, dolore qui necessitatibus sapiente autem voluptates, a cum fugiat mollitia nulla repellendus obcaecati, eaque consequuntur nisi cumque dicta inventore veritatis tempora aperiam animi error cupiditate odit molestiae labore. Praesentium, ipsam dolores provident corporis atque nesciunt dolorum repellat natus maiores a amet, fuga distinctio fugit sequi quisquam quam ut dolor odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima beatae pariatur neque', 'image-10.jpeg', 'User', '2021-10-07', 3, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_with_category`
-- (See below for the actual view)
--
CREATE TABLE `post_with_category` (
`post_id` int(255)
,`post_title` varchar(150)
,`post_tag` varchar(255)
,`post_content` longtext
,`post_summary` varchar(200)
,`post_img` varchar(255)
,`post_author` varchar(60)
,`post_date` date
,`post_comment` int(255)
,`post_status` tinyint(30)
,`category_id` int(255)
,`category_name` text
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_confirm_password`) VALUES
(1, 'Samin', 'Islam', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure for view `post_with_category`
--
DROP TABLE IF EXISTS `post_with_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_with_category`  AS SELECT `posts`.`post_id` AS `post_id`, `posts`.`post_title` AS `post_title`, `posts`.`post_tag` AS `post_tag`, `posts`.`post_content` AS `post_content`, `posts`.`post_summary` AS `post_summary`, `posts`.`post_img` AS `post_img`, `posts`.`post_author` AS `post_author`, `posts`.`post_date` AS `post_date`, `posts`.`post_comment` AS `post_comment`, `posts`.`post_status` AS `post_status`, `categorys`.`category_id` AS `category_id`, `categorys`.`category_name` AS `category_name` FROM (`posts` join `categorys` on(`posts`.`post_category` = `categorys`.`category_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

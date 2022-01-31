-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.0.100
-- Generation Time: Jan 31, 2022 at 01:32 AM
-- Server version: 8.0.26-16
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashema2_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int NOT NULL,
  `author_first_name` varchar(50) DEFAULT NULL,
  `author_last_name` varchar(50) DEFAULT NULL,
  `about_author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_first_name`, `author_last_name`, `about_author`) VALUES
(1, 'John', 'Koeing', 'John Koenig is a video maker, voice actor, graphic designer, and writer. Born in Idaho and raised in Geneva, Switzerland, he created The Dictionary of Obscure Sorrows in 2009, first as a blog at DictionaryofObscureSorrows.com before expanding the project to YouTube. He lives in Minneapolis with his wife and daughter.'),
(2, 'Guinness', 'World Records', 'Casandra Brene Brown is an American research professor, lecturer, author, and podcast host. Brown is known in particular for her research on shame, vulnerability, and leadership. A long-time researcher and academic, Brown became famous following a widely-viewed TED talk in 2010.'),
(3, 'Brene', 'Brown', 'Casandra Brene Brown is an American research professor, lecturer, author, and podcast host. Brown is known in particular for her research on shame, vulnerability, and leadership. A long-time researcher and academic, Brown became famous following a widely-viewed TED talk in 2010.'),
(4, 'James', 'Clear', 'James Clear is an American author or journalist who is best known for his book Atomic Habits. By profession, James is an author of the New York Times. He has written many books in which Atomic Habits was the best-selling book that sold more than 5 million of its copies worldwide.'),
(5, 'Colleen', 'Hoover', 'Colleen Hoover is an author of young adult fiction and romance novels. She published her first novel, Slammed, in January 2012. In December 2012, she published Hopeless, which rose to the top of the New York Times best seller list.'),
(6, 'James', 'Patterson', 'jamespatterson.com\r\nJames Brendan Patterson is an American author and philanthropist. Among his works are the Alex Cross, Michael Bennett, Women\'s Murder Club, Maximum Ride, Daniel X, NYPD Red, Witch and Wizard, and Private series, as well as many stand-alone thrillers, non-fiction, and romance novels.');

-- --------------------------------------------------------

--
-- Table structure for table `best_seller`
--

CREATE TABLE `best_seller` (
  `book_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_seller`
--

INSERT INTO `best_seller` (`book_id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  `image` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `price`, `category_id`, `author_id`, `image`, `description`) VALUES
(1, 'Angela Davis', 10, 7, 1, 'images/booksImages/1.jpg', 'A powerful and commanding account of the life of trailblazing political activist Angela DavisEdited by Toni Morrison and first published in 1974, An Autobiography is a classic of the Black Liberation era which resonates just as powerfully today.'),
(2, 'Guinness World Records 2022', 15, 1, 2, 'images/booksImages/3.jpg', 'Fully revised and updated, and with a bright new design, Guinness World Records 2022 provides a fascinating snapshot of our world today.'),
(3, 'Atlas of Heart', 20, 7, 3, 'images/booksImages/2.jpg', 'Atlas of the Heart is a 2021 non-fiction book written by Brene Brown. The book describes human emotions and experiences and the language used to understand them. It is a USA Today bestseller and developed into an eight episode series for HBO Max.'),
(4, 'It Ends With Us', 4, 1, 3, 'images/booksImages/5.jpg', 'In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times '),
(5, 'Atomic Habits', 9, 4, 5, 'images/booksImages/4.jpg', 'Google users\r\nThe #1 New York Times bestseller. Over 3 million copies sold!Tiny Changes, Remarkable ResultsNo matter your goals, Atomic Habits offers a proven framework for improving--every day.'),
(6, 'Katt Loves Dogg', 5, 3, 6, 'images/booksImages/6.jpg', 'In this funny and paw-some story, lifelong rivals Molly and Oscar are forced to team up and brave the great outdoors and help their families before it’s too late. Wilderness adventurers and expert trackers Molly the katt and Oscar the dogg go camping with their'),
(7, 'Will', 10, 1, 6, 'images/booksImages/7.jpg', 'Google users The #1 New York Times bestseller. Over 3 million copies sold!Tiny Changes, Remarkable ResultsNo matter your goals, Atomic Habits offers a proven framework for improving--every day.'),
(8, 'Things We Never Got Over', 3, 5, 1, 'images/booksImages/8.jpg', 'In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times '),
(9, 'Great Reset', 3.5, 2, 1, 'images/booksImages/9.jpg', 'In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times In this brave and '),
(10, 'Sold on a Monday', 6, 2, 4, 'images/booksImages/10.jpg', 'zIn this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times In this brave and '),
(11, 'The Raven Spell', 29, 3, 1, 'images/booksImages/11.jpg', 'Atlas of the Heart is a 2021 non-fiction book written by Brene Brown. The book describes human emotions and experiences and the language used to understand them. It is a USA Today bestseller and developed into an eight episode series for HBO Max.Atlas of '),
(12, 'The Lincoln Highway', 33, 2, 1, 'images/booksImages/12.jpg', 'Atlas of the Heart is a 2021 non-fiction book written by Brene Brown. The book describes human emotions and experiences and the language used to understand them. It is a USA Today bestseller and developed into an eight episode series for HBO Max.'),
(13, 'Harry Potter', 3, 3, 1, 'images/booksImages/13.jpg', 'Atlas of the Heart is a 2021 non-fiction book written by Brene Brown. The book describes human emotions and experiences and the language used to understand them. It is a USA Today bestseller and developed into an eight episode series for HBO Max.'),
(14, 'Deep Sleep', 6, 7, 6, 'images/booksImages/13.jpg', 'Atlas of the Heart is a 2021 non-fiction book written by Brene Brown. The book describes human emotions and experiences and the language used to understand them. It is a USA Today bestseller and developed into an eight episode series for HBO Max.'),
(15, 'Deep Sleep', 6.5, 4, 5, 'images/booksImages/14.jpg', 'zIn this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times '),
(16, 'Ugly Love', 7, 6, 4, 'images/booksImages/15.jpg', 'In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times '),
(17, 'If You Tell', 4.5, 4, 3, 'images/booksImages/16.jpg', 'In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times '),
(18, 'The Real Anthony Fauci', 29, 5, 3, 'images/booksImages/17.jpg', 'In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times In this brave and heartbreaking novel that digs its claws into you and does not let go, long after you have finished it (Anna Todd, New York Times bestselling author) from the #1 New York Times ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `book_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Romance'),
(2, 'History'),
(3, 'For Children'),
(4, 'Scienctific'),
(5, 'Biography'),
(6, 'Humor & Games'),
(7, 'Poetry');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `street_name` varchar(50) DEFAULT NULL,
  `building_number` int DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `place`, `street_name`, `building_number`, `city`) VALUES
(13, 'Hashem', 'Tabbaa', 'test@gmail.com', '0797308555', '12345678', 'Tla Al Ali', 'rifaa al ansari', 16, 'Amman'),
(14, 'Hashem', 'Tabbaa', 'test2@gmail.com', '0797308555', '12345678', 'Tla Al Ali', 'tlaa al ali', 123, 'Amman');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `book_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`book_id`) VALUES
(1),
(2),
(3),
(6),
(10),
(12),
(14),
(15),
(17);

-- --------------------------------------------------------

--
-- Table structure for table `new_books`
--

CREATE TABLE `new_books` (
  `book_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_books`
--

INSERT INTO `new_books` (`book_id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(10),
(12),
(14),
(15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `best_seller`
--
ALTER TABLE `best_seller`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `FK1_book` (`category_id`),
  ADD KEY `FK2_book` (`author_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`book_id`,`customer_id`,`confirmed`) USING BTREE,
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `new_books`
--
ALTER TABLE `new_books`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `best_seller`
--
ALTER TABLE `best_seller`
  ADD CONSTRAINT `best_seller_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `FK1_book` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `FK2_book` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `new_books`
--
ALTER TABLE `new_books`
  ADD CONSTRAINT `new_books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

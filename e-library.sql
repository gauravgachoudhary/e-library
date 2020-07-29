-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 04:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `User_Name`, `password`) VALUES
(1, 'Bhavesh Suthar', 'victorskillbs@gmail.com', 'victor00');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Id` int(11) NOT NULL,
  `Book_Location` varchar(100) NOT NULL,
  `book_image` varchar(50) NOT NULL,
  `book_Name` varchar(50) NOT NULL,
  `Author_Name` varchar(50) NOT NULL,
  `Book_Description` text NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `User_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Id`, `Book_Location`, `book_image`, `book_Name`, `Author_Name`, `Book_Description`, `Category`, `Edition`, `User_Id`) VALUES
(1, 'book1636369221.pdf', 'book1780154398.jpg', 'python 3', 'Guido van Rossum', 'New python notes for fresher help in better understanding and better learning ideas', 'Academic', '2018', 4),
(2, 'book1923997020.pdf', 'book1395130530.jpg', 'Games of Throne', 'George R.R. Martin', 'It is fictional story line book ', 'Friction', '2018', 4),
(3, 'book11490979217.pdf', 'book1293288031.jpg', 'Mythology Book', 'EDITH HAMILTON', 'It is non fiction book which is written by Edith Hamilton which is famous novelist', 'Non-Friction', '2018', 4),
(4, 'book1972131491.pdf', 'book11219800376.jpg', 'the-hitchhikers-guide-to-the-galaxy', 'douglas-adams', 'This is fictional book', 'Friction', '2018', 4),
(5, 'book1716076637.pdf', 'book1389348050.jpg', 'Adventure of Sherlock Homes', 'Adventure of Sherlock Homes', 'It is fictional story line book  which written by Famous story writer Sherlock Homes', 'Friction', '2003', 4),
(6, 'book1158610495.pdf', 'book11566565582.jpg', 'Fox And Grapes', 'Aesop Fables', 'It is famous story we read in our childhood Fox and Grapes written by Aesop fables', 'Friction', '1989', 4),
(7, 'book11156811703.pdf', 'book11791240690.jpg', 'The Lion and the mouse', 'Aesop Fables', 'This is fictional book', 'Friction', '1987', 4),
(8, 'book11946405381.pdf', 'book12011147367.jpg', 'E-AGRICUTURE IN ACTION', 'the Food and Agriculture Organization of the Unite', 'The designations employed and the presentation of material in this information product do not imply the expression of any opinion whatsoever on the part of the Food and Agriculture Organization of the United Nations (FAO), or of the International Telecommunication Union (ITU) concerning the legal or development status of any country, territory, city or area or of its authorities, or concerning the delimitation of its frontiers or boundaries. The mention of specific companies or products of manufacturers, whether or not these have been patented, does not imply that these have been endorsed or recommended by FAO, or the ITU in preference to others of a similar nature that are not mentioned. The views expressed in this information product are those of the author(s) and do not necessarily reflect the views or policies of FAO, or the ITU.', 'Non-Friction', '2017', 4),
(9, 'book11640464464.pdf', 'book1745697541.jpg', 'The Three Reason ', 'JAY ASHER', 'This is fictional book', 'Friction', '2017', 4),
(10, 'book1877591646.pdf', 'book1705736258.jpg', 'Madame de Villeneuve', 'Madame de Villeneuve', 'While returning home to his family, a merchant plucks a rose from a garden and is confronted by the Beast, who demands that the merchant send him one of his daughters in payment for his theft. As the rose was meant to be a gift for his daughter Beauty, she volunteers to go to the Beast. Once she arrives in the Beast’s castle, she begins to have a recurrent dream in which a handsome prince beckons her. She wonders who he is, and what his connection is to the Beast. Beauty’s questions are answered when she learns not to trust appearances', 'Non-Friction', '2011', 4),
(11, 'book11001710582.pdf', 'book1520164716.jpg', 'The Fault In Our Star', 'John Green', 'Late in the winter of my seventeenth year, my mother decided I was depressed, presumably because I rarely left the house, spent quite a lot of time in bed, read the same book over and over, ate infrequently, and devoted quite a bit of my abundant free time to thinking about death.', 'Friction', '2012', 4),
(12, 'book11591210484.pdf', 'book11690058825.jpg', 'MIKHAIL BULGAKOV MASTER AND MARGARITA', 'CHARLIE STONE', '1The epigraph comes from the scene entitled ‘Faust’s Study’ in the first part of the drama Faust by Johann Wolfgang von Goethe (1749–1842). The question is asked by Faust; the answer comes from the demon Mephistopheles. Bulgakov originally considered including the epigraph from Goethe’s Faust in the original German. The line comes shortly after Mephistopheles appears in Faust’s study, having followed him in as a black poodle.', 'Non-Friction', '2008', 4),
(13, 'book171157063.pdf', 'book12063225303.jpg', 'D ’A U L A I R E S ’ B O O K O F NORSE MYTHS', 'I N G R I a n d E D G A R P A R I N D ’ A U L A I ', 'I was in the third grade when I first read this book, and already suffering the changes, the horns, wings, and tusks that grow on your imagination when you thrive on a steady diet of myths and fairy tales. I had read its predecessor, d’Aulaires’ Book of Greek Myths (1961), and I knew my Old Testament pretty well, from the Creation more or less down to Ruth. There was rape and murder in those other books, revenge, cannibalism, folly, madness, incest, and deceit. And I thought all that was great stuff. (Maybe that says something about me, or about eight-year-old boys generally. I don’t really care either way.) Joseph’s brothers, enslaving him to some Ishmaelites and then soaking his florid coat in animal blood to horrify their father: great stuff. Orpheus’ head, torn off by a raving pack of women, continuing to sing as it floats down the Hebrus River to the sea: that was great stuff, too. Every splendor in those tales had its shadow; every blessing its curse.', 'Friction', '1967', 4),
(14, 'book11309851108.pdf', 'book1512412529.jpg', 'The Girl With Dragon Tattoo', 'ALFRED A. KNOPF', 'A Friday in November It happened every year, was almost a ritual. And this was his eighty- second birthday. When, as usual, the flower was delivered, he took off the wrapping paper and then picked up the telephone to call Detective Superintendent Morell who, when he retired, had moved to Lake Siljan in Dalarna. They were not only the same age, they had been born on the same day—which was something of an irony under the circumstances. The old policeman was sitting with his coffee, waiting, expecting the call.', 'Non-Friction', '2008', 4),
(15, 'book11742740357.pdf', 'book1978254000.jpg', 'Waiting for God ', 'Samuel Beckett', 'Estragon, sitting on a low mound, is trying to take off his boot. He pulls at it with both hands, panting. # Image', 'Non-Friction', '1990', 4),
(19, 'book126292713.pdf', 'book11774799027.jpg', 'The tragedy Of Hamlet, Prince of Denmark', 'Jon Bosak', 'Agatha Christie is the world’s best known mystery ', 'Friction', '1992', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bookrquest`
--

CREATE TABLE `bookrquest` (
  `Id` int(11) NOT NULL,
  `Book_Location` varchar(100) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_Name` varchar(50) NOT NULL,
  `Author_Name` varchar(50) NOT NULL,
  `Book_Description` varchar(50) NOT NULL,
  `Category` varchar(5000) NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Phone` bigint(15) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `img_status` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Id`, `First_Name`, `Last_Name`, `Email`, `Phone`, `Password`, `img_status`) VALUES
(1, 'Bhavesh', 'Suthar', 'victor.skill.bs@gmail.com', 123456789, 'victor00', 0),
(2, 'Rohan', 'Sharma', 'Rohan@gmail.com', 13223243, '123', 0),
(3, 'Divesh', 'Sisodiya', 'divesh123@gmail.com', 123, '1234', 0),
(4, 'Gaurav', 'Choudhary', 'choudharygaurav223@gmail.com', 9928862273, '123', 0),
(5, 'Shalini', 'Patel', 'shalini123@gmail.com', 121321343, '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bookrquest`
--
ALTER TABLE `bookrquest`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

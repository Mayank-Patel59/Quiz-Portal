-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 06:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(4) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `name`) VALUES
(1, 'PHP'),
(2, 'C'),
(3, 'CPP'),
(4, 'GK'),
(5, 'C#');

-- --------------------------------------------------------

--
-- Table structure for table `quest`
--

CREATE TABLE `quest` (
  `id` int(11) NOT NULL,
  `q` varchar(255) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL,
  `op4` varchar(255) NOT NULL,
  `ans` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quest`
--

INSERT INTO `quest` (`id`, `q`, `op1`, `op2`, `op3`, `op4`, `ans`, `cat_id`) VALUES
(1, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Personal Hypertext Preprocessor', 'Private Home Page', 'PHP', 0, 1),
(2, 'How do you write &quot;Hello World&quot; in PHP', '&quot;Hello World&quot;;', 'echo \"Hello World\";', 'Document.Write(&quot;Hello World&quot;);', 'print &quot;Hello World&quot;;', 1, 1),
(3, 'All variables in PHP start with which symbol?', '!', '@', '&amp;', '$', 3, 1),
(4, 'The PHP syntax is most similar to:', 'Java', 'Vbcript', 'JavaScript', 'C', 2, 1),
(5, 'How do you get information from a form that is submitted using the &quot;get&quot; method?', 'Request.Form;', '$_SERVER[];', '$_GET[];', '$_POST[];', 2, 1),
(6, 'What is the correct way to create a function in PHP?', 'new_function myFunction()', ' myFunction()', 'function myFunction()', 'new function()', 2, 1),
(7, 'What is the correct way to open the file &quot;time.txt&quot; as readable?', 'open(&quot;time.txt&quot;);', 'open(time.txt);', 'fopen(&quot;time.txt&quot;,&quot;r+&quot;);', 'fopen(&quot;time.txt&quot;,&quot;r&quot;);', 3, 1),
(8, 'Which superglobal variable holds information about headers, paths, and script locations?', '$_GET', '$_GLOBALS', '$_SERVER', '$_SESSION', 1, 1),
(9, 'What is the correct way to add 1 to the $count variable?', '$count =+1;', 'count =+1;', 'count++;', '$count++;', 3, 1),
(10, 'Which one of these variables has an illegal name?', '$my_Var', '$my-Var', '$myVar', '$my', 1, 1),
(11, 'The explicit keyword is an optional decoration for the constructors that takes exactly_____argument.', 'No argument ', 'Two', 'Three', 'One', 3, 3),
(12, 'A class can contain objects of other classes and this phenomenon is called_________ .', 'Relationship', 'Object Association ', 'Containership ', 'None of these ', 2, 3),
(13, 'If a class contains pure virtual function, then it is termed as____________________ .', 'Virtual class ', 'Sealed class ', 'Pure Local class ', 'Abstract Class ', 3, 3),
(14, 'If inner catch handler is not able to handle the exception then__________ .', 'Compiler will look for outer try handler', 'Program terminates abnormally', 'Compiler will check for appropriate catch handler of outer try block', 'None of these', 2, 3),
(15, 'Generic catch handler is represented by ______________ .', 'catch(..,) ', 'catch(---)', 'catch(&hellip;) ', 'catch( void x)', 2, 3),
(16, 'Which one is suitable syntax for function template?', 'template&lt; class T&gt; return_type Function_Name(parameters)', 'template&lt; typename T&gt; return_type Function_Name(parameters)', 'both a and b ', 'None of these', 2, 3),
(17, 'While overloading binary operators using member function, it requires ___ argument/s.', 'Zero', 'one', 'two', 'three', 1, 3),
(18, 'If abstract class is inherited by derived class, then_______________ .', 'Derived class should provide definition for all the pure virtual functions', 'Derived class also become abstract if fails to implement pure virtual functions', 'Objects of derived class can&rsquo;t be created if it fails to implement pure virtual functions', 'All of these', 3, 3),
(19, 'By default, all the files are opened in ___________mode .', 'Binary', 'Text', 'both a and b', 'None of these', 1, 3),
(20, '_____________are used for generic programming.', 'Inheritance', 'Virtual functions', 'Templates', 'None', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email_id`, `name`, `gender`, `password`, `date_created`) VALUES
('a@gmail.com', 'a a', 'male', '', '2017-11-28 07:00:06'),
('a@yahoo.com', 'Abhishek Chilka', 'male', '123', '2017-11-28 06:57:27'),
('abhigeorge@gmail.com', 'Abhi George', 'male', '12345', '2017-11-21 11:32:52'),
('abhishekchilka@gmail.com', 'Abhishek Chilka', 'male', '123', '2017-11-19 21:42:55'),
('abhishekchilka@yahoo.com', 'Abhishek Chilka', 'male', '12345678', '2017-11-20 19:59:13'),
('fdgd@gmail.com', 'fesfr dvr', 'female', '', '2018-06-16 19:08:18'),
('melvin89@gmail.com', 'Manu George', 'male', 'manu', '2017-11-21 10:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_result`
--

CREATE TABLE `user_result` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `marks` float NOT NULL,
  `gdatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_result`
--

INSERT INTO `user_result` (`id`, `email_id`, `subject`, `marks`, `gdatetime`) VALUES
(30, 'abhishekchilka@gmail.com', 'PHP', 50, '2017-11-19 16:57:58'),
(31, 'abhishekchilka@gmail.com', 'PHP', 100, '2017-11-19 17:18:41'),
(33, 'abhishekchilka@gmail.com', 'PHP', 30, '2017-11-19 17:24:53'),
(34, 'abhishekchilka@gmail.com', 'PHP', 50, '2017-11-19 17:25:51'),
(40, 'melvin89@gmail.com', 'PHP', 60, '2017-11-21 10:58:42'),
(41, 'abhishekchilka@gmail.com', 'PHP', 40, '2017-11-21 11:01:58'),
(42, 'melvin89@gmail.com', 'PHP', 30, '2017-11-21 11:06:06'),
(43, 'abhigeorge@gmail.com', 'PHP', 60, '2017-11-21 11:37:11'),
(44, 'abhigeorge@gmail.com', 'C', 10, '2017-11-21 11:38:27'),
(45, 'abhigeorge@gmail.com', 'CPP', 40, '2017-11-21 11:39:46'),
(46, 'abhigeorge@gmail.com', 'PHP', 50, '2017-11-21 11:40:36'),
(47, 'abhishekchilka@gmail.com', 'CPP', 100, '2017-11-28 07:30:02'),
(48, 'abhishekchilka@gmail.com', 'PHP', 20, '2017-11-28 12:12:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `user_result`
--
ALTER TABLE `user_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `quest`
--
ALTER TABLE `quest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_result`
--
ALTER TABLE `user_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `quest`
--
ALTER TABLE `quest`
  ADD CONSTRAINT `quest_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cat` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_result`
--
ALTER TABLE `user_result`
  ADD CONSTRAINT `user_result_ibfk_1` FOREIGN KEY (`email_id`) REFERENCES `user` (`email_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

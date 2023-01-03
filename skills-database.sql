-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2023 at 08:26 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `appuser`
--

CREATE TABLE `appuser` (
  `id` int NOT NULL,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `privilege_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appuser`
--

INSERT INTO `appuser` (`id`, `username`, `password`, `privilege_id`) VALUES
(1, 'admin', 'a29c57c6894dee6e8251510d58c07078ee3f49bf', 1),
(2, 'invited', '6d8f3b24c09682ee9dfef083cffda71534735f11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `description`, `item_id`) VALUES
(8, 'Factory', 'Design pattern', 8),
(9, 'Fluent', 'Design Pattern', 55),
(12, 'DIC', 'Dependency Injection Container Pattern', 69),
(13, 'Hint', 'The type hints ensure that PHP will check the type of a value at the call time and throw a TypeError if there is a mismatch.', 74);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `further` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'pdf, images, txt...',
  `skill_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `further`, `skill_id`) VALUES
(4, 'Foreign key', 'ALTER TABLE urls ADD CONSTRAINT fk_urls_skill_id FOREIGN KEY (skill_id) REFERENCES skill(id);', 'https://www.w3schools.com/sql/sql_ref_foreign_key.asp', 5),
(8, 'Factory Design pattern', 'The Factory Design Pattern provides a way to create objects. It involves a factory class that has a method that receives parameters and returns an object of a class.', 'https://www.geeksforgeeks.org/factory-method-design-pattern-in-java/', 4),
(11, 'Cheat-Sheet', '', 'php-cheat-sheet.pdf', 1),
(16, 'Rename Table', 'RENAME TABLE old_table TO new_table;', 'https://mariadb.com/kb/en/rename-table/', 5),
(17, 'Current directory path', '__DIR__', 'https://www.tutorialspoint.com/how-to-use-dir-in-php', 1),
(18, 'Website root path', 'ROOTDIR', 'https://www.php.net/manual/en/reserved.variables.server.php', 1),
(19, 'Reference website OpenAI', 'Text completion, Generate and edit text, Image generation, Train a model for your use case...', 'https://beta.openai.com/docs/quickstart/start-with-an-instruction', 6),
(20, 'W3schools', 'Php, Css, Html, SQL, AI, Javascript...', 'https://www.w3schools.com/default.asp', 36),
(21, 'php.net', 'Only PHP', 'https://www.php.net/', 36),
(22, 'Grafikart', 'Tutorial Php, JS, TS, Html, Css, Vue', 'https://grafikart.fr', 36),
(23, 'W3docs', 'Tutorial Html5, Css, Git, JS, PHP', 'https://www.w3docs.com/', 36),
(24, 'Icon library', 'Free icons library', 'https://icon-library.com/', 7),
(27, 'Github', 'Git Versioning projects', 'https://github.com', 36),
(28, 'jsfiddle', 'Html, css and javascript sandbox', 'http://jsfiddle.net', 36),
(29, 'geeksforgeeks', 'Tutorials AI, Java, Python, C++, Data-Science, JS, Machine-learning', 'https://www.geeksforgeeks.org/', 36),
(31, 'Google Sandbox', 'Python Sandbox', 'https://colab.research.google.com/drive/1PZShdlNNsHHE__y1SiWB_EVh-EDBjMXS?authuser=1#scrollTo=C4HZx7Gndbrh', 2),
(32, 'Google sheet lessons', 'David Ross English learning', 'https://docs.google.com/document/d/1aKVpX0sTRICmfq1N-3dEne7MSrXrIJvU4fZKwqZiFdw/edit', 38),
(35, 'Title attribute', 'Improve display', 'https://www.manalite.com/goodies/title.php', 7),
(36, 'Udemy', 'Paid IT training', 'https://www.udemy.com', 36),
(37, 'PluralSight', 'Paid IT training plateform', 'https://www.pluralsight.com', 36),
(38, 'SentenceChecker', 'Check english written sentences', 'https://sentencechecker.com/', 38),
(39, 'Wordtune', 'Checks Sentences, corrects and offers variants', 'https://app.wordtune.com/editor/', 38),
(42, 'englisch-hilfen', 'Grammer exercises, tests', 'https://www.englisch-hilfen.de/en', 38),
(43, 'deepl', 'Translation', 'https://www.deepl.com/translator', 38),
(44, 'Reverso', 'Translation', 'https://www.reverso.net/text-translation', 38),
(46, 'Linguee', 'Translation', 'https://www.linguee.fr/', 38),
(47, 'Quillbot', 'Sentence Checker and variant', 'https://quillbot.com/', 38),
(48, 'Roadmap', 'Guides and other educational content for developers', 'https://roadmap.sh', 36),
(49, 'Hackerrank', 'Coding Test', 'https://www.hackerrank.com/', 36),
(50, 'App.programiz.pro', 'Tutorial', 'https://app.programiz.pro/', 2),
(51, 'OPenclassroom', 'Tutorial', 'https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7857178-creez-votre-premier-data-frame-avec-pandas', 2),
(52, 'Linode', 'Cheat in command line', 'https://www.linode.com/docs/guides/linux-cheat-command/', 3),
(53, 'Sheetformula', 'AI Excel Formula ', 'https://sheetformula.com/genformula.html', 40),
(54, 'Copocorp', 'Html Special characters', 'http://copocorp.free.fr/caracteresSpeciaux/', 7),
(55, 'Fluent', 'Design pattern', 'https://designpatternsphp.readthedocs.io/en/latest/Structural/FluentInterface/README.html', 4),
(56, 'Alwasdata', 'Web Hosting, Administration, Api', 'https://admin.alwaysdata.com/', 36),
(57, 'Demo.filestash.app', 'Ftp online', 'https://demo.filestash.app/files/', 36),
(58, 'Reqbin.com', 'Curl, Rest & SOAP API Online, Python, PHP, Javascript, Java, Xml, Json', 'https://reqbin.com/curl', 36),
(59, 'Httpie', 'Api Test', 'https://httpie.io/', 36),
(60, 'OpenClassRoom', 'Tutoriel micro-services', 'https://openclassrooms.com/fr/courses/4668056-construisez-des-microservices', 36),
(61, 'Analyse-innovation-solution', 'Curl Tutorial', 'https://analyse-innovation-solution.fr/publication/fr/php/curl-post-get-proxy-https', 36),
(62, 'packagist.org Curl', 'Php Curl', 'https://packagist.org/packages/curl/curl', 1),
(63, 'OpenClassRoom', 'Api Tutorial', 'https://openclassrooms.com/fr/courses/6573181-adoptez-les-api-rest-pour-vos-projets-web', 36),
(64, 'Switch to a different PHP version', 'sudo a2dismod php8.1; sudo a2enmod php8.2;', '', 3),
(66, 'waytolearnx', 'Rest Api Tutorial', 'https://waytolearnx.com/2019/07/creer-et-utiliser-une-api-rest-en-php.html', 1),
(67, 'waytolearnx', 'PHP Curl Tutorial', 'https://waytolearnx.com/2020/01/tutoriel-curl-en-php.html', 1),
(69, 'Dependency Injection', 'Design Pattern', 'https://php.developpez.com/tutoriels/php-la-bonne-pratique/?page=injection-de-dependances', 4),
(70, 'Chmod', 'Online Chmod Calculator', 'https://chmod-calculator.com/', 3),
(71, 'Chown', 'Chown', 'https://www.computerhope.com/unix/uchown.htm\r\n', 3),
(72, 'Diplay errors', 'Diplay PHP errors', 'https://stackify.com/display-php-errors/', 1),
(73, 'Ebale or disable an apache Module', 'a2enmod, a2dismod - enable or disable an apache2 module', 'https://manpages.ubuntu.com/manpages/trusty/man8/a2enmod.8.html', 44),
(74, 'Hint', 'The type hints ensure that PHP will check the type of a value at the call time and throw a TypeError if there is a mismatch.', 'https://www.phptutorial.net/php-tutorial/php-type-hints/', 1),
(75, 'mixed type', 'All of these types: object|resource|array|string|int|float|bool|null\r\nThe mixed type accepts every value. (equivalent to the union type) object|resource|array|string|float|int|bool|null. Available as of PHP 8.0.0. ', 'https://www.php.net/manual/en/language.types.mixed.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `name`, `description`) VALUES
(1, 'English', 'practice one hour each day.'),
(2, 'R&D', 'review the Java part project architecture'),
(3, 'PHP', 'Project Tips&Notes, OOP Grafikart, Udemy OOP'),
(11, 'Exercise', 'Do physical exercise each day, at least half an hour'),
(14, 'Project Skills Review', '. Add Urls to skills and not to Items'),
(15, 'Program', '<ul><li>Microservices</li><li>New in Php8</li><li>Patterns</li><li>Router</li><li>Dependance container</li><li>Api Authentication</li><li>SOLID</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int NOT NULL,
  `name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `name`, `description`) VALUES
(1, 'master', 'All Privileges'),
(2, 'Invited', 'Reading Only');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `name`, `logo`) VALUES
(1, 'PHP', 'php.png'),
(2, 'Python', 'python.png'),
(3, 'Linux', 'linux.png'),
(4, 'OOP', 'oop.webp'),
(5, 'MySQL', 'mysql.png'),
(6, 'AI', 'ai.png'),
(7, 'HTML', 'html-logo.svg'),
(36, 'IT', 'IT.png'),
(37, 'Java', 'java.png'),
(38, 'English', 'english-learning.png'),
(40, 'Excel', 'excel.png'),
(44, 'Apache', 'apache.png');

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id`, `name`, `url`) VALUES
(1, 'Dependency Injection Design Pattern', 'https://connect.ed-diamond.com/GNU-Linux-Magazine/glmf-208/demystifier-l-injection-de-dependances-en-php'),
(2, 'Dependency Injection Design Pattern Php-DI', 'https://php-di.org/'),
(3, 'Closure', 'https://tuto2.dev/tutoriel/qu-est-ce-qu-une-closure');

-- --------------------------------------------------------

--
-- Table structure for table `url_skill_item`
--

CREATE TABLE `url_skill_item` (
  `id` int NOT NULL,
  `url_id` int NOT NULL,
  `skill_id` int DEFAULT NULL,
  `item_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `url_skill_item`
--

INSERT INTO `url_skill_item` (`id`, `url_id`, `skill_id`, `item_id`) VALUES
(3, 3, 1, NULL),
(4, 1, 4, NULL),
(5, 2, 4, NULL),
(6, 1, 1, NULL),
(7, 2, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appuser`
--
ALTER TABLE `appuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_appuser_privilege_id` (`privilege_id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_demo_item_id` (`item_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `url_skill_item`
--
ALTER TABLE `url_skill_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_url_skill_item_skill_id` (`skill_id`),
  ADD KEY `fk_url_skill_item_item_id` (`item_id`),
  ADD KEY `fk_url_skill_item_url_id` (`url_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appuser`
--
ALTER TABLE `appuser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `url_skill_item`
--
ALTER TABLE `url_skill_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appuser`
--
ALTER TABLE `appuser`
  ADD CONSTRAINT `fk_appuser_privilege_id` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`);

--
-- Constraints for table `demo`
--
ALTER TABLE `demo`
  ADD CONSTRAINT `fk_demo_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `url_skill_item`
--
ALTER TABLE `url_skill_item`
  ADD CONSTRAINT `fk_url_skill_item_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `fk_url_skill_item_skill_id` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`),
  ADD CONSTRAINT `fk_url_skill_item_url_id` FOREIGN KEY (`url_id`) REFERENCES `url` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

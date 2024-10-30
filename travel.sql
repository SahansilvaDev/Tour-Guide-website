-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 09:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `username`, `email`, `password`, `date`, `last_login`, `profile_img`) VALUES
(1, 'PREFIX09b02', 'admin123', 'admin123@gmail.com', '$2y$10$nsZfUdTrCpyTQyb/FH', '2023-08-07 12:49:30', '0000-00-00 00:00:00', ''),
(2, 'PREFIX09f85', 'admin123', 'admin@gmail.com', '123', '2023-08-07 13:08:45', '2023-10-02 10:35:41', '1852814400_1691393925.jpeg'),
(3, 'PREFIXa55b7', 'chathuranga0', 'chathu19990702@gmail.com', '123', '2023-10-02 11:01:35', '0000-00-00 00:00:00', '429429830_1696224695.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `all_location`
--

CREATE TABLE `all_location` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_location`
--

INSERT INTO `all_location` (`id`, `location`, `date`) VALUES
(1, 'colombo', '2023-09-25 15:04:50'),
(2, 'gampha', '2023-09-25 15:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `best_hotels_and_resourt`
--

CREATE TABLE `best_hotels_and_resourt` (
  `id` int(11) NOT NULL,
  `hotel_img` varchar(255) NOT NULL,
  `hotel_name` varchar(55) NOT NULL,
  `text` varchar(255) NOT NULL,
  `hotel_price` varchar(55) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `best_hotels_and_resourt`
--

INSERT INTO `best_hotels_and_resourt` (`id`, `hotel_img`, `hotel_name`, `text`, `hotel_price`, `date`) VALUES
(1, '2131346458_1695713259.jpeg', '', 'test', '21', '2023-09-26 12:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city` varchar(55) NOT NULL,
  `M_img1` varchar(255) NOT NULL,
  `M_img2` varchar(255) NOT NULL,
  `M_img3` varchar(255) NOT NULL,
  `M_img4` varchar(255) NOT NULL,
  `M_img5` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city`, `M_img1`, `M_img2`, `M_img3`, `M_img4`, `M_img5`, `about`, `date`) VALUES
(0, 'colombo', '4461286_1695788455.jpeg', '1967593280_1695788455.jpeg', '1598167009_1695788455.jpeg', '1779464117_1695788455.jpeg', '387086271_1695788455.jpeg', 'colombo test', '2023-09-27 09:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `cityies`
--

CREATE TABLE `cityies` (
  `id` int(11) NOT NULL,
  `city` varchar(55) NOT NULL,
  `M_img1` varchar(255) NOT NULL,
  `M_img2` varchar(255) NOT NULL,
  `M_img3` varchar(255) NOT NULL,
  `M_img4` varchar(255) NOT NULL,
  `M_img5` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cityies`
--

INSERT INTO `cityies` (`id`, `city`, `M_img1`, `M_img2`, `M_img3`, `M_img4`, `M_img5`, `about`, `date`) VALUES
(1, 'kandy', '496661121_1695788745.jpeg', '740689772_1695788745.jpeg', '1083438305_1695788745.jpeg', '138443254_1695788745.jpeg', '1588994771_1695788745.jpeg', 'test kandy', '2023-09-27 09:55:45'),
(2, 'colombo', '554449198_1695788906.jpeg', '2032335495_1695788906.jpeg', '1002051207_1695788906.jpeg', '1172034791_1695788906.jpeg', '823668340_1695788906.jpeg', 'colombo test', '2023-09-27 09:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `colombo`
--

CREATE TABLE `colombo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colombo`
--

INSERT INTO `colombo` (`id`, `name`) VALUES
(1, 'colombo'),
(2, 'gampha');

-- --------------------------------------------------------

--
-- Table structure for table `colombo_hotels`
--

CREATE TABLE `colombo_hotels` (
  `id` int(11) NOT NULL,
  `c_hotel_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colombo_hotels`
--

INSERT INTO `colombo_hotels` (`id`, `c_hotel_name`) VALUES
(1, 'marino beach');

-- --------------------------------------------------------

--
-- Table structure for table `eat`
--

CREATE TABLE `eat` (
  `id` int(11) NOT NULL,
  `eat_city` varchar(255) NOT NULL,
  `eat_hed` varchar(100) NOT NULL,
  `eat_img` varchar(255) NOT NULL,
  `eat_price` varchar(50) NOT NULL,
  `eat_main_img` varchar(255) NOT NULL,
  `eat_img1` varchar(255) NOT NULL,
  `eat_img2` varchar(255) NOT NULL,
  `eat_img3` varchar(255) NOT NULL,
  `eat_img4` varchar(255) NOT NULL,
  `eat_img5` varchar(255) NOT NULL,
  `eat_img6` varchar(255) NOT NULL,
  `eat_img7` varchar(255) NOT NULL,
  `eat_img8` varchar(255) NOT NULL,
  `eat_img9` varchar(255) NOT NULL,
  `eat_img10` varchar(255) NOT NULL,
  `eat_img_text` varchar(5000) NOT NULL,
  `eat_img_url` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eat`
--

INSERT INTO `eat` (`id`, `eat_city`, `eat_hed`, `eat_img`, `eat_price`, `eat_main_img`, `eat_img1`, `eat_img2`, `eat_img3`, `eat_img4`, `eat_img5`, `eat_img6`, `eat_img7`, `eat_img8`, `eat_img9`, `eat_img10`, `eat_img_text`, `eat_img_url`, `date`) VALUES
(1, 'colombo', 'c', '1059153412_1696100951.jpeg', '8', '1355220853_1696100951.jpeg', '2099966206_1696100951.jpeg', '1997989638_1696100951.jpeg', '564581943_1696100951.jpeg', '2086931003_1696100951.jpeg', '477802708_1696100951.jpeg', '951036789_1696100951.jpeg', '1244532481_1696100951.jpeg', '1598908153_1696100951.jpeg', '941465041_1696100951.jpeg', '723024037_1696100951.jpeg', '<p>colombo foods</p>', ' https://www.google.com/search?client=firefox-b-d&q=colombo+foods', '2023-09-30 19:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `gampha`
--

CREATE TABLE `gampha` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gampha`
--

INSERT INTO `gampha` (`id`, `name`) VALUES
(1, 'g1');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotel_id` varchar(11) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `hotel_name1` varchar(255) NOT NULL,
  `location1` varchar(50) NOT NULL,
  `hotel_description1` varchar(255) NOT NULL,
  `text1` varchar(50) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `hotel_name2` varchar(50) NOT NULL,
  `location2` varchar(50) NOT NULL,
  `hotel_description2` varchar(255) NOT NULL,
  `text2` varchar(50) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `hotel_name3` varchar(50) NOT NULL,
  `location3` varchar(50) NOT NULL,
  `hotel_description3` varchar(50) NOT NULL,
  `text3` varchar(50) NOT NULL,
  `file4` varchar(255) NOT NULL,
  `hotel_name4` varchar(50) NOT NULL,
  `location4` varchar(50) NOT NULL,
  `hotel_description4` varchar(50) NOT NULL,
  `text4` varchar(50) NOT NULL,
  `file5` varchar(255) NOT NULL,
  `hotel_name5` varchar(50) NOT NULL,
  `location5` varchar(50) NOT NULL,
  `hotel_description5` varchar(50) NOT NULL,
  `text5` varchar(50) NOT NULL,
  `file6` varchar(255) NOT NULL,
  `hotel_name6` varchar(50) NOT NULL,
  `location6` varchar(50) NOT NULL,
  `hotel_description6` varchar(50) NOT NULL,
  `text6` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_id`, `file1`, `hotel_name1`, `location1`, `hotel_description1`, `text1`, `file2`, `hotel_name2`, `location2`, `hotel_description2`, `text2`, `file3`, `hotel_name3`, `location3`, `hotel_description3`, `text3`, `file4`, `hotel_name4`, `location4`, `hotel_description4`, `text4`, `file5`, `hotel_name5`, `location5`, `hotel_description5`, `text5`, `file6`, `hotel_name6`, `location6`, `hotel_description6`, `text6`, `date`) VALUES
(0, 'hotel - 1d2', '2111177935_1692521126.jpeg', 'The Fortress Resort & Spa', 'Galle', ' Known for its distinctive architecture, this beac', 'The Fortress Resort & Spa', '1179311421_1692521126.jpeg', 'Ceylon Tea Trails', 'Hatton', 'Set amidst the stunning tea plantations of Hatton,', 'Ceylon Tea Trails', '1606360803_1692521126.jpeg', 'Jetwing Vil Uyana ', 'Sigiriya', 'This eco-friendly luxury resort near Sigiriya feat', 'Jetwing Vil Uyana ', '200089587_1692521126.jpeg', 'Cinnamon Grand ', 'Colombo', 'A well-known luxury hotel in Colombo, offering ele', 'Cinnamon Grand ', '214564803_1692521126.jpeg', 'Cape ', 'Weligama', 'Situated in Weligama, this luxury resort offers be', 'Cape ', '1248791528_1692521126.jpeg', 'Heritance ', 'Dambulla ', 'Renowned for its architecture and eco-friendly pra', 'Heritance Kandalama', '2023-08-20 14:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `hotels_and_resourt`
--

CREATE TABLE `hotels_and_resourt` (
  `id` int(11) NOT NULL,
  `hotels_and_resourt_city` varchar(255) NOT NULL,
  `hotels_and_resourt_img` varchar(255) NOT NULL,
  `hotels_and_resourt_hed` varchar(255) NOT NULL,
  `hotels_and_resourt_address` varchar(255) NOT NULL,
  `hotels_and_resourt_price` varchar(255) NOT NULL,
  `hotels_and_resourt_main_img` varchar(255) NOT NULL,
  `hotels_and_resourt_img1` varchar(255) NOT NULL,
  `hotels_and_resourt_img2` varchar(255) NOT NULL,
  `hotels_and_resourt_img3` varchar(255) NOT NULL,
  `hotels_and_resourt_img4` varchar(255) NOT NULL,
  `hotels_and_resourt_img5` varchar(255) NOT NULL,
  `hotels_and_resourt_img6` varchar(255) NOT NULL,
  `hotels_and_resourt_img7` varchar(255) NOT NULL,
  `hotels_and_resourt_img8` varchar(255) NOT NULL,
  `hotels_and_resourt_img9` varchar(255) NOT NULL,
  `hotels_and_resourt_img10` varchar(255) NOT NULL,
  `hotels_and_resourt_text` varchar(5000) NOT NULL,
  `hotels_and_resourt_url` varchar(2550) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hotels_and_resourt_book_url` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels_and_resourt`
--

INSERT INTO `hotels_and_resourt` (`id`, `hotels_and_resourt_city`, `hotels_and_resourt_img`, `hotels_and_resourt_hed`, `hotels_and_resourt_address`, `hotels_and_resourt_price`, `hotels_and_resourt_main_img`, `hotels_and_resourt_img1`, `hotels_and_resourt_img2`, `hotels_and_resourt_img3`, `hotels_and_resourt_img4`, `hotels_and_resourt_img5`, `hotels_and_resourt_img6`, `hotels_and_resourt_img7`, `hotels_and_resourt_img8`, `hotels_and_resourt_img9`, `hotels_and_resourt_img10`, `hotels_and_resourt_text`, `hotels_and_resourt_url`, `date`, `hotels_and_resourt_book_url`) VALUES
(2, 'colombo', '1245376006_1696182382.jpeg', 'Marino Beach Colombo', 'c', '8', '1663676924_1696182382.jpeg', '487852317_1696182382.jpeg', '481076449_1696182382.jpeg', '1776615078_1696182382.jpeg', '1148411560_1696182382.jpeg', '306727875_1696182382.jpeg', '1831893486_1696182382.jpeg', '595477332_1696182382.jpeg', '106420496_1696182382.jpeg', '1258179990_1696182382.jpeg', '2038815196_1696182382.jpeg', 'Marino Beach Colombo is a luxurious beachfront hotel located in Colombo, the capital city of Sri Lanka.', 'https://www.cinemalks.com/', '2023-10-01 17:47:36', 'https://www.cinemalks.com/');

-- --------------------------------------------------------

--
-- Table structure for table `hotels_and_resourt_name`
--

CREATE TABLE `hotels_and_resourt_name` (
  `id` int(11) NOT NULL,
  `hotel_city` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels_and_resourt_name`
--

INSERT INTO `hotels_and_resourt_name` (`id`, `hotel_city`, `hotel_name`) VALUES
(1, 'colombo', 'Marino Beach Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `kaluthara`
--

CREATE TABLE `kaluthara` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kaluthara`
--

INSERT INTO `kaluthara` (`id`, `name`) VALUES
(1, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `place_city` varchar(255) NOT NULL,
  `place_hed` varchar(55) NOT NULL,
  `place_img` varchar(255) NOT NULL,
  `place_price` varchar(2550) NOT NULL,
  `date` datetime NOT NULL,
  `pl_img1` varchar(255) NOT NULL,
  `pl_img2` varchar(255) NOT NULL,
  `pl_img3` varchar(255) NOT NULL,
  `pl_img4` varchar(255) NOT NULL,
  `pl_img5` varchar(255) NOT NULL,
  `pl_img6` varchar(255) NOT NULL,
  `pl_img7` varchar(255) NOT NULL,
  `pl_img8` varchar(255) NOT NULL,
  `pl_img9` varchar(255) NOT NULL,
  `pl_img10` varchar(255) NOT NULL,
  `pl_text` varchar(5000) NOT NULL,
  `pl_map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `place_city`, `place_hed`, `place_img`, `place_price`, `date`, `pl_img1`, `pl_img2`, `pl_img3`, `pl_img4`, `pl_img5`, `pl_img6`, `pl_img7`, `pl_img8`, `pl_img9`, `pl_img10`, `pl_text`, `pl_map`) VALUES
(1, 'colombo', 'Gangaramaya Buddhist Temple', '921408140_1696052373.jpeg', '10', '2023-09-30 11:09:33', '939837536_1696052373.jpeg', '1376098254_1696052373.jpeg', '1156543642_1696052373.jpeg', '1395459836_1696052373.jpeg', '1292294925_1696052373.jpeg', '792055307_1696052373.jpeg', '1718839717_1696052373.jpeg', '424555134_1696052373.jpeg', '1517348159_1696052373.jpeg', '409085492_1696052373.jpeg', '<p>The Gangaramaya Temple, also known as Gangaramaya Buddhist Temple, is one of the most famous and prominent temples in Colombo, Sri Lanka. It is not specifically located in Colombo but rather in the city of Colombo itself. The temple is situated near Beira Lake in the heart of Colombo and is known for its cultural and religious significance.</p><p>&nbsp;</p><p>Here are some key details about the Gangaramaya Temple:</p><p>&nbsp;</p><p>1. History: The temple was founded in the late 19th century by Venerable Hikkaduwe Sri Sumangala Nayaka Thera. Over the years, it has grown in size and importance.</p><p>&nbsp;</p><p>2. **Architecture**: The Gangaramaya Temple features a blend of architectural styles, including Sri Lankan, Thai, Indian, and Chinese influences. The main hall, or \"Vihara Mandiraya,\" is the central shrine, and it houses a large collection of Buddha statues from various countries.</p><p>&nbsp;</p><p>3. **Museum**: The temple complex includes a museum that showcases a wide range of artifacts, including ancient swords, jewelry, and cultural relics. It offers visitors a chance to learn about Sri Lanka\'s history and culture.</p><p>&nbsp;</p><p>4. **Religious Significance**: The Gangaramaya Temple is a place of worship and meditation for Buddhists. It also serves as a center for Buddhist learning and has played a significant role in the promotion of Buddhism in Sri Lanka.</p><p>&nbsp;</p><p>5. Annual Perahera: One of the highlights of the temple is the annual Navam Perahera, a colorful and grand procession featuring traditional dancers, drummers, and elephants. This event typically takes place in February and attracts many visitors.</p><p>&nbsp;</p><p>6. Boat Ride : Visitors can take a boat ride on Beira Lake, which surrounds the temple. This offers a unique perspective of the temple and its surroundings.</p><p>&nbsp;</p><p>7. Cultural Events: The temple hosts various cultural events and exhibitions throughout the year, making it a vibrant hub for cultural and religious activities.</p><p>&nbsp;</p><p>The Gangaramaya Temple is not only a place of worship but also a significant cultural and tourist attraction in Colombo, drawing visitors from around the world who come to admire its architecture, learn about Buddhism, and experience the rich cultural heritage of Sri Lanka.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58638726252!2d79.77380267607305!3d6.922001982008282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v169623865'),
(2, 'kandy', 'Kandy Temple', '2098130270_1696242597.jpeg', 'Kandy Temple, also known as the  is a UNESCO World Heritage site in Sri Lanka,', '2023-10-02 15:59:58', '175116418_1696242597.jpeg', '597024340_1696242597.jpeg', '865639408_1696242597.jpeg', '227106424_1696242597.jpeg', '519100814_1696242597.jpeg', '1144689030_1696242597.jpeg', '1664112309_1696242597.jpeg', '578845938_1696242597.jpeg', '156007186_1696242597.jpeg', '2092808868_1696242597.jpeg', '<p>Kandy Temple article</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.39450249314!2d80.58458130152125!3d7.2947951192505425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2slk!4v169624');

-- --------------------------------------------------------

--
-- Table structure for table `resturent`
--

CREATE TABLE `resturent` (
  `id` int(11) NOT NULL,
  `resturent_city` varchar(255) NOT NULL,
  `resturent_hed` varchar(255) NOT NULL,
  `resturent_img` varchar(255) NOT NULL,
  `resturent_price` varchar(255) NOT NULL,
  `resturent_main_img` varchar(255) NOT NULL,
  `resturent_main_img1` varchar(255) NOT NULL,
  `resturent_main_img2` varchar(255) NOT NULL,
  `resturent_main_img3` varchar(255) NOT NULL,
  `resturent_main_img4` varchar(255) NOT NULL,
  `resturent_main_img5` varchar(255) NOT NULL,
  `resturent_main_img6` varchar(255) NOT NULL,
  `resturent_main_img7` varchar(255) NOT NULL,
  `resturent_main_img8` varchar(255) NOT NULL,
  `resturent_main_img9` varchar(255) NOT NULL,
  `resturent_main_img10` varchar(255) NOT NULL,
  `resturent_main_text` varchar(5000) NOT NULL,
  `resturent_main_img_url` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resturent`
--

INSERT INTO `resturent` (`id`, `resturent_city`, `resturent_hed`, `resturent_img`, `resturent_price`, `resturent_main_img`, `resturent_main_img1`, `resturent_main_img2`, `resturent_main_img3`, `resturent_main_img4`, `resturent_main_img5`, `resturent_main_img6`, `resturent_main_img7`, `resturent_main_img8`, `resturent_main_img9`, `resturent_main_img10`, `resturent_main_text`, `resturent_main_img_url`, `date`) VALUES
(1, 'colombo', 'Exploring Culinary Delights on a Street Food Tour in Colombo, Sri Lanka', '1456700891_1696223472.jpeg', '8', '1626715648_1696223472.jpeg', '962701009_1696223472.jpeg', '1702149082_1696223472.jpeg', '1946160398_1696223472.jpeg', '1177709058_1696223472.jpeg', '173204628_1696223472.jpeg', '1765465100_1696223472.jpeg', '1505740462_1696223472.jpeg', '586339684_1696223472.jpeg', '2002961118_1696223472.jpeg', '1707221746_1696223472.jpeg', '<p>this is colombo resturent</p>', ' https://www.google.com/search?client=firefox-b-d&q=colombo+foods', '2023-10-02 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

CREATE TABLE `stay` (
  `id` int(11) NOT NULL,
  `stay_city` varchar(255) NOT NULL,
  `stay_hed` varchar(100) NOT NULL,
  `stay_img` varchar(255) NOT NULL,
  `stay_price` varchar(55) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stay`
--

INSERT INTO `stay` (`id`, `stay_city`, `stay_hed`, `stay_img`, `stay_price`, `date`) VALUES
(1, 'colombo', 'hed colombo', '1876824636_1695792981.jpeg', '50', '2023-09-27 11:06:21'),
(2, 'colombo', 'colombo test', '1716594298_1695809448.jpeg', '80', '2023-09-27 15:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `things_to_do`
--

CREATE TABLE `things_to_do` (
  `id` int(11) NOT NULL,
  `things_to_do_city` varchar(225) NOT NULL,
  `things_to_do_img` varchar(255) NOT NULL,
  `things_to_do_hed` varchar(100) NOT NULL,
  `things_to_do_price` varchar(11) NOT NULL,
  `things_to_do_main_img` varchar(255) NOT NULL,
  `things_to_do_img1` varchar(255) NOT NULL,
  `things_to_do_img2` varchar(255) NOT NULL,
  `things_to_do_img3` varchar(255) NOT NULL,
  `things_to_do_img4` varchar(255) NOT NULL,
  `things_to_do_img5` varchar(255) NOT NULL,
  `things_to_do_img6` varchar(255) NOT NULL,
  `things_to_do_img7` varchar(255) NOT NULL,
  `things_to_do_img8` varchar(255) NOT NULL,
  `things_to_do_img9` varchar(255) NOT NULL,
  `things_to_do_img10` varchar(255) NOT NULL,
  `things_to_do_img_text` text NOT NULL,
  `things_to_do_url` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `things_to_do`
--

INSERT INTO `things_to_do` (`id`, `things_to_do_city`, `things_to_do_img`, `things_to_do_hed`, `things_to_do_price`, `things_to_do_main_img`, `things_to_do_img1`, `things_to_do_img2`, `things_to_do_img3`, `things_to_do_img4`, `things_to_do_img5`, `things_to_do_img6`, `things_to_do_img7`, `things_to_do_img8`, `things_to_do_img9`, `things_to_do_img10`, `things_to_do_img_text`, `things_to_do_url`, `date`) VALUES
(1, 'colombo', '914074498_1696022616.jpeg', 'Exploring Culinary Delights on a Street Food Tour in Colombo, Sri Lanka', '8', '1416374714_1696022616.jpeg', '870483111_1696022616.jpeg', '1080387816_1696022616.jpeg', '1642987100_1696022616.jpeg', '40216160_1696022616.jpeg', '709309926_1696022616.jpeg', '1128515727_1696022616.jpeg', '797698176_1696022616.jpeg', '1766778174_1696022616.jpeg', '820498171_1696022616.jpeg', '1208819465_1696022616.jpeg', 'Going on a street food tour in Colombo, Sri Lanka is a fantastic way to explore the local culture and indulge in some delicious dishes. Sri Lankan cuisine is known for its bold flavors and diverse range of dishes. Here are some things to do and street foo Going on a street food tour in Colombo, Sri Lanka is a fantastic way to explore the local culture and indulge in some delicious dishes. Sri Lankan cuisine is known for its bold flavors and diverse range of dishes. Here are some things to do and', 'https://www.w3schools.com/', '2023-09-30 02:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `things_to_do1`
--

CREATE TABLE `things_to_do1` (
  `id` int(11) NOT NULL,
  `things_to_do_city` varchar(225) NOT NULL,
  `things_to_do_img` varchar(255) NOT NULL,
  `things_to_do_hed` varchar(100) NOT NULL,
  `things_to_do_price` varchar(11) NOT NULL,
  `things_to_do_main_img` varchar(255) NOT NULL,
  `things_to_do_img1` varchar(255) NOT NULL,
  `things_to_do_img2` varchar(255) NOT NULL,
  `things_to_do_img3` varchar(255) NOT NULL,
  `things_to_do_img4` varchar(255) NOT NULL,
  `things_to_do_img5` varchar(255) NOT NULL,
  `things_to_do_img6` varchar(255) NOT NULL,
  `things_to_do_img7` varchar(255) NOT NULL,
  `things_to_do_img8` varchar(255) NOT NULL,
  `things_to_do_img9` varchar(255) NOT NULL,
  `things_to_do_img10` varchar(255) NOT NULL,
  `things_to_do_img_text` varchar(500) DEFAULT NULL,
  `things_to_do_url` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `things_to_do1`
--

INSERT INTO `things_to_do1` (`id`, `things_to_do_city`, `things_to_do_img`, `things_to_do_hed`, `things_to_do_price`, `things_to_do_main_img`, `things_to_do_img1`, `things_to_do_img2`, `things_to_do_img3`, `things_to_do_img4`, `things_to_do_img5`, `things_to_do_img6`, `things_to_do_img7`, `things_to_do_img8`, `things_to_do_img9`, `things_to_do_img10`, `things_to_do_img_text`, `things_to_do_url`, `date`) VALUES
(1, 'colombo', '755646661_1695967130.jpeg', ' Go On a Street Food Tour', '2', '1925243892_1695967130.jpeg', '1969219976_1695967130.jpeg', '1900572659_1695967130.jpeg', '972648111_1695967130.jpeg', '200014871_1695967130.jpeg', '1819235405_1695967130.jpeg', '518512469_1695967130.jpeg', '1517536355_1695967130.jpeg', '1632243353_1695967130.jpeg', '1048366550_1695967130.jpeg', '954041326_1695967130.jpeg', 'Going on a street food tour in Colombo, Sri Lanka is a fantastic way to explore the local culture and indulge in some delicious dishes. Sri Lankan cuisine is known for its bold flavors and diverse range of dishes. Here are some things to do and street foo Going on a street food tour in Colombo, Sri Lanka is a fantastic way to explore the local culture and indulge in some delicious dishes. Sri Lankan cuisine is known for its bold flavors and diverse range of dishes. Here are some things to do and', 'https://www.youtube.com', '2023-09-29 11:28:50'),
(2, 'colombo', '1921098357_1695970700.jpeg', 'Exploring Culinary Delights on a Street Food Tour in Colombo, Sri Lanka', '2', '1872428175_1695970700.jpeg', '1310533555_1695970700.jpeg', '1040473591_1695970700.jpeg', '1792164431_1695970700.jpeg', '2020551369_1695970700.jpeg', '527727554_1695970700.jpeg', '1746315768_1695970700.jpeg', '818322111_1695970700.jpeg', '1722295963_1695970700.jpeg', '1068115596_1695970700.jpeg', '1467923638_1695970700.jpeg', 'Title: Exploring Culinary Delights on a Street Food Tour in Colombo, Sri Lanka\r\n\r\nIntroduction\r\n\r\nColombo, the bustling capital city of Sri Lanka, is a place where culture, history, and gastronomy converge. One of the most exciting and mouthwatering ways to experience this vibrant city is by embarking on a street food tour. Colombo\'s street food scene is a sensory adventure that allows you to explore the rich flavors, diverse cuisine, and warm hospitality of the island nation. In this essay, we ', 'https://www.cinemalks.com/', '2023-09-29 12:28:20'),
(3, 'colombo', '789375636_1695974105.jpeg', 'Exploring Culinary Delights on a Street Food Tour in Colombo, Sri Lanka', '1', '459584585_1695974105.jpeg', '2086389179_1695974105.jpeg', '1311684028_1695974105.jpeg', '281787966_1695974105.jpeg', '2037924371_1695974105.jpeg', '770182281_1695974105.jpeg', '1474578241_1695974105.jpeg', '1001029866_1695974105.jpeg', '1897963367_1695974105.jpeg', '630043120_1695974105.jpeg', '1015376922_1695974105.jpeg', 'The first stop on our street food tour is at Galle Face Green, a popular seaside promenade. Here, the salty sea breeze mingles with the enticing aroma of street food, creating a captivating atmosphere. As we stroll along, we encounter the iconic \"kottu roti\" stalls. Kottu roti, a dish made from shredded roti bread, vegetables, and spices, sizzles on hot griddles. The rhythmic chopping of the ingredients by skilled street chefs is a sight to behold, and the resulting dish is a symphony of flavors', 'https://www.w3schools.com/', '2023-09-29 13:25:05'),
(4, 'colombo', '789375636_1695974105.jpeg', 'Exploring Culinary Delights on a Street Food Tour in Colombo, Sri Lanka', '1', '459584585_1695974105.jpeg', '2086389179_1695974105.jpeg', '1311684028_1695974105.jpeg', '281787966_1695974105.jpeg', '2037924371_1695974105.jpeg', '770182281_1695974105.jpeg', '1474578241_1695974105.jpeg', '1001029866_1695974105.jpeg', '1897963367_1695974105.jpeg', '630043120_1695974105.jpeg', '1015376922_1695974105.jpeg', 'The first stop on our street food tour is at <b>Galle Face </b>Green, a popular seaside promenade. Here, the salty sea breeze mingles with the enticing aroma of street food, creating a captivating atmosphere. As we stroll along, we encounter the iconic \"kottu roti\" stalls. Kottu roti, a dish made from shredded roti bread, vegetables, and spices, sizzles on hot griddles. The rhythmic chopping of the ingredients by skilled street chefs is a sight to behold, and the resulting dish is a symphony of ', 'https://www.w3schools.com/', '2023-09-29 13:25:05'),
(5, 'colombo', '789375636_1695974105.jpeg', 'Exploring Culinary Delights on a Street Food Tour in Colombo, Sri Lanka', '1', '459584585_1695974105.jpeg', '2086389179_1695974105.jpeg', '1311684028_1695974105.jpeg', '281787966_1695974105.jpeg', '2037924371_1695974105.jpeg', '770182281_1695974105.jpeg', '1474578241_1695974105.jpeg', '1001029866_1695974105.jpeg', '1897963367_1695974105.jpeg', '630043120_1695974105.jpeg', '1015376922_1695974105.jpeg', 'The first stop on our street food tour is at Galle Face Green, a popular seaside promenade. Here, the salty sea breeze mingles with the enticing aroma of street food, creating a captivating atmosphere. As we stroll along, we encounter the iconic \"kottu roti\" stalls. Kottu roti, a dish made from shredded roti bread, vegetables, and spices, sizzles on hot griddles. <b>The rhythmic chopping</b> of the ingredients by skilled street chefs is a sight to behold, and the resulting dish is a symphony of ', 'https://www.w3schools.com/', '2023-09-29 13:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `country`, `email`, `password`, `date`, `last_login`, `profile_img`) VALUES
(1, 'PREFIX09836', 'chathuranga', 'sri lanka', 'chathu19990702@gmail.com', '$2y$10$1Ip2K.SGTTQ85', '2023-08-07 12:37:34', '2023-09-01 19:28:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_blog`
--

CREATE TABLE `user_blog` (
  `id` int(255) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `blog_title1` varchar(255) NOT NULL,
  `discription1` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_blog`
--

INSERT INTO `user_blog` (`id`, `file1`, `blog_title1`, `discription1`, `date`) VALUES
(1, '249533365_1692773208.jpeg', 'The Fortress Resort & Spa, ', 'Situated near Galle, this hotel offers a blend of modern luxury and historic charm, with a strong focus on relaxation and wellness.', '2023-08-23 12:16:48'),
(2, '857482541_1692773650.jpeg', 'Cinnamon Grand Colombo ', 'Located in the heart of Colombo, this upscale hotel is known for its elegant design, dining options, and central location.', '2023-08-23 12:24:10'),
(3, '187168797_1692773973.jpeg', 'Tea Trails', 'A unique collection of luxury bungalows set amidst Sri Lanka\'s scenic tea plantations in the central highlands.', '2023-08-23 12:29:33'),
(6, '356751639_1692777817.jpeg', 'Cape Weligama', 'A luxurious resort overlooking the Indian Ocean, offering private villas, infinity pools, and impeccable service.', '2023-08-23 13:33:37'),
(7, '384484729_1692777927.jpeg', 'Jetwing Vil Uyana ', 'Known for its eco-friendly approach, this hotel offers unique accommodations in the form of stilted villas set amidst wetlands and forests.', '2023-08-23 13:35:27'),
(8, '1203437044_1692777985.jpeg', 'Heritance Kandalama', 'Designed by the renowned architect Geoffrey Bawa, this hotel seamlessly blends with its natural surroundings and offers breathtaking views of the Sigiriya Rock Fortress.', '2023-08-23 13:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_destination`
--

CREATE TABLE `user_destination` (
  `id` int(11) NOT NULL,
  `destination_id` varchar(11) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `place1` varchar(50) NOT NULL,
  `people1` int(11) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `place2` varchar(50) NOT NULL,
  `people2` int(11) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `place3` varchar(50) NOT NULL,
  `people3` int(11) NOT NULL,
  `file4` varchar(255) NOT NULL,
  `place4` varchar(50) NOT NULL,
  `people4` int(11) NOT NULL,
  `file5` varchar(255) NOT NULL,
  `place5` varchar(50) NOT NULL,
  `people5` int(11) NOT NULL,
  `file6` varchar(255) NOT NULL,
  `place6` varchar(25) NOT NULL,
  `people6` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_destination`
--

INSERT INTO `user_destination` (`id`, `destination_id`, `file1`, `place1`, `people1`, `file2`, `place2`, `people2`, `file3`, `place3`, `people3`, `file4`, `place4`, `people4`, `file5`, `place5`, `people5`, `file6`, `place6`, `people6`, `date`) VALUES
(1, '', '244461006_1692263394.jpeg', 'Colombo', 12, '2119646781_1692263394.jpeg', 'Kandy', 12, '160196936_1692263394.jpeg', 'Sigiriya', 9, '1616076850_1692263394.jpeg', 'Colombo', 13, '80842367_1692263394.jpeg', 'Kandy', 5, '1561960161_1692263394.jpeg', 'Sigiriya', 8, '2023-08-17 14:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_main`
--

CREATE TABLE `user_main` (
  `id` int(11) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `place1` varchar(255) NOT NULL,
  `location_name1` varchar(255) NOT NULL,
  `people1` int(11) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `place2` varchar(255) NOT NULL,
  `location_name2` varchar(255) NOT NULL,
  `people2` int(11) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `place3` varchar(255) NOT NULL,
  `location_name3` varchar(255) NOT NULL,
  `people3` int(11) NOT NULL,
  `file4` varchar(255) NOT NULL,
  `place4` varchar(255) NOT NULL,
  `location_name4` varchar(255) NOT NULL,
  `people4` int(11) NOT NULL,
  `file5` varchar(255) NOT NULL,
  `place5` varchar(255) NOT NULL,
  `location_name5` varchar(255) NOT NULL,
  `people5` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_main`
--

INSERT INTO `user_main` (`id`, `file1`, `place1`, `location_name1`, `people1`, `file2`, `place2`, `location_name2`, `people2`, `file3`, `place3`, `location_name3`, `people3`, `file4`, `place4`, `location_name4`, `people4`, `file5`, `place5`, `location_name5`, `people5`, `date`) VALUES
(2, '246666067_1692178347.jpeg', 'Sigiriya', 'Sigiriya', 12, '1923177504_1692178347.jpeg', 'Sri Lanka', 'Sri Lanka', 12, '1152058353_1692178347.jpeg', 'Unawatuna', 'Unawatuna', 9, '300437196_1692178347.jpeg', 'Dambulla', 'Dambulla', 9, '130065217_1692178347.jpeg', 'Yala Park', 'Yala Park', 5, '2023-08-16 15:02:27'),
(3, '708071732_1695787398.jpeg', 'kandy', '', 0, '444543703_1695787398.jpeg', '', '', 0, '612997652_1695787398.jpeg', '', '', 0, '1549922908_1695787398.jpeg', '', '', 0, '367488024_1695787398.jpeg', '', '', 0, '2023-09-27 09:33:18'),
(4, '605005612_1695787564.jpeg', 'kandy', '', 0, '1969266123_1695787564.jpeg', '', '', 0, '139182140_1695787564.jpeg', '', '', 0, '909548731_1695787564.jpeg', '', '', 0, '1399478391_1695787564.jpeg', '', '', 0, '2023-09-27 09:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_travel_places`
--

CREATE TABLE `user_travel_places` (
  `id` int(11) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `place1` varchar(255) NOT NULL,
  `location_name1` varchar(255) NOT NULL,
  `people1` int(11) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `place2` varchar(255) NOT NULL,
  `location_name2` varchar(255) NOT NULL,
  `people2` int(11) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `place3` varchar(255) NOT NULL,
  `location_name3` varchar(255) NOT NULL,
  `people3` int(11) NOT NULL,
  `file4` varchar(255) NOT NULL,
  `place4` varchar(255) NOT NULL,
  `location_name4` varchar(255) NOT NULL,
  `people4` int(11) NOT NULL,
  `file5` varchar(255) NOT NULL,
  `place5` varchar(255) NOT NULL,
  `location_name5` varchar(255) NOT NULL,
  `people5` int(11) NOT NULL,
  `file6` varchar(255) NOT NULL,
  `place6` varchar(255) NOT NULL,
  `location_name6` varchar(255) NOT NULL,
  `people6` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_travel_places`
--

INSERT INTO `user_travel_places` (`id`, `file1`, `place1`, `location_name1`, `people1`, `file2`, `place2`, `location_name2`, `people2`, `file3`, `place3`, `location_name3`, `people3`, `file4`, `place4`, `location_name4`, `people4`, `file5`, `place5`, `location_name5`, `people5`, `file6`, `place6`, `location_name6`, `people6`, `date`) VALUES
(0, '814691170_1692300060.jpeg', 'Colombo', 'Colombo', 12, '393042913_1692300060.jpeg', 'Kandy', 'Kandy', 10, '1021431560_1692300060.jpeg', 'Sigiriya', 'Sigiriya', 8, '24050942_1692300060.jpeg', 'Colombo', 'Colombo', 7, '1680976682_1692300060.jpeg', 'Kandy', 'Kandy', 6, '628519667_1692300060.jpeg', 'Sigiriya', 'Sigiriya', 5, '2023-08-18 00:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `u_main_slide`
--

CREATE TABLE `u_main_slide` (
  `id` int(11) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `change_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_main_slide`
--

INSERT INTO `u_main_slide` (`id`, `file1`, `file2`, `file3`, `change_date`) VALUES
(3, '424618770_1691494239.jpeg', '472008779_1691494239.jpeg', '1921250340_1691494239.jpeg', '2023-08-08 17:00:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_location`
--
ALTER TABLE `all_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_hotels_and_resourt`
--
ALTER TABLE `best_hotels_and_resourt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `cityies`
--
ALTER TABLE `cityies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `colombo`
--
ALTER TABLE `colombo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colombo_hotels`
--
ALTER TABLE `colombo_hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eat`
--
ALTER TABLE `eat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gampha`
--
ALTER TABLE `gampha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels_and_resourt`
--
ALTER TABLE `hotels_and_resourt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotels_and_resourt_hed` (`hotels_and_resourt_hed`);

--
-- Indexes for table `hotels_and_resourt_name`
--
ALTER TABLE `hotels_and_resourt_name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_name` (`hotel_name`);

--
-- Indexes for table `kaluthara`
--
ALTER TABLE `kaluthara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturent`
--
ALTER TABLE `resturent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `things_to_do`
--
ALTER TABLE `things_to_do`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `things_to_do1`
--
ALTER TABLE `things_to_do1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `user name` (`username`);

--
-- Indexes for table `user_blog`
--
ALTER TABLE `user_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_destination`
--
ALTER TABLE `user_destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `user_main`
--
ALTER TABLE `user_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_main_slide`
--
ALTER TABLE `u_main_slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_location`
--
ALTER TABLE `all_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `best_hotels_and_resourt`
--
ALTER TABLE `best_hotels_and_resourt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cityies`
--
ALTER TABLE `cityies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colombo`
--
ALTER TABLE `colombo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colombo_hotels`
--
ALTER TABLE `colombo_hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eat`
--
ALTER TABLE `eat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gampha`
--
ALTER TABLE `gampha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels_and_resourt`
--
ALTER TABLE `hotels_and_resourt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kaluthara`
--
ALTER TABLE `kaluthara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resturent`
--
ALTER TABLE `resturent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stay`
--
ALTER TABLE `stay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `things_to_do`
--
ALTER TABLE `things_to_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `things_to_do1`
--
ALTER TABLE `things_to_do1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_blog`
--
ALTER TABLE `user_blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_destination`
--
ALTER TABLE `user_destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_main`
--
ALTER TABLE `user_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `u_main_slide`
--
ALTER TABLE `u_main_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

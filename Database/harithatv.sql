-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.byetcluster.com
-- Generation Time: Dec 04, 2023 at 04:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezyro_35552994_harithatv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_pwd` varchar(100) NOT NULL,
  `admin_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_pwd`, `admin_name`) VALUES
(2, 'admin@harithatv.com', 'admin', 'Dhanilka '),
(4, 'dhanilka@x.com', 'dhanilka', 'Dhanilka Dasanayaka');

-- --------------------------------------------------------

--
-- Table structure for table `contact_requests`
--

CREATE TABLE `contact_requests` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_subject` text NOT NULL,
  `user_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` text NOT NULL,
  `event_desc` text NOT NULL,
  `event_img` text NOT NULL,
  `event_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_desc`, `event_img`, `event_date`) VALUES
(4, 'GREEN FIESTA \'23', '\"Green Fiesta, the pinnacle of musical extravagance at NSBM Green University, is a maximal celebration of vibrant rhythms and pulsating beats that unite the entire university community. This annual music festival epitomizes the spirit of diversity and revelry, bringing together students from all walks of life to immerse themselves in an electrifying fusion of genres. As the campus transforms into a lively symphony of green, participants experience the sheer exuberance of the Max Vegenza Music Festival. With a kaleidoscope of performances by talented artists, the event creates an atmosphere of pure jubilation, fostering connections and memories that last a lifetime. Green Fiesta stands as a testament to NSBM Green University\'s commitment to fostering a dynamic and harmonious campus culture through the universal language of music.\".', 'img/events/greenfiesta.jpg', '2023-12-04'),
(5, 'BHAAWA\'23', '\"Bhaawa, an enchanting musical event, unfolds as a mesmerizing tapestry of cultural richness and artistic expression. Hosted with fervor and flair, Bhaawa transcends the boundaries of conventional music events, immersing its audience in a unique experience that celebrates diversity and creativity. This distinctive showcase at NSBM Green University captures the essence of various genres, weaving together a harmonious blend of melodies that resonate with the soul. As the vibrant tunes echo through the venue, Bhaawa becomes a platform for both established and emerging talents to showcase their musical prowess, captivating the audience with every note. The event not only entertains but also fosters a sense of unity and appreciation for the arts, making Bhaawa a cultural phenomenon that leaves an indelible mark on the hearts and minds of those fortunate enough to attend.\"', 'img/events/bhwa.jpg', '2023-12-04'),
(6, 'YAKARI\'23', '\"Yakari, an extraordinary culinary spectacle, transforms into a gastronomic haven where flavors, aromas, and tastes converge in a celebration of diverse cuisines. This food festival at NSBM Green University transcends the ordinary, offering a delectable journey through a myriad of culinary delights. Yakari is a feast for the senses, where students and food enthusiasts alike can indulge in a tantalizing array of dishes that showcase the richness of global cuisines. From savory delights to sweet temptations, Yakari is a melting pot of culinary creativity, bringing together chefs, food artisans, and enthusiasts to share their passion for gastronomy. With a lively atmosphere, music, and the aroma of delicious fare filling the air, Yakari creates a memorable experience that not only satiates the palate but also fosters a sense of community and appreciation for the art of food.\"', 'img/events/yakari.jpg', '2023-12-04'),
(7, 'RANGAHALA\'23', '\"Rangahala, a captivating drama event, unfolds as a stage where stories come to life with compelling narratives, artistic flair, and thespian brilliance. At NSBM Green University, Rangahala serves as a platform for the expression of creativity and the exploration of diverse themes through the art of theater. This annual spectacle showcases a spectrum of dramatic performances, from thought-provoking plays to lighthearted comedies, each presented with meticulous attention to detail and a commitment to storytelling excellence. As the curtains rise, Rangahala transforms the auditorium into a realm of emotions, where actors breathe life into characters, and the audience is transported into the realms of imagination. More than just a showcase of talent, Rangahala is a cultural celebration that brings the university community together, fostering an appreciation for the performing arts and leaving a lasting impact on the hearts and minds of those who experience its theatrical magic.\"', 'img/events/rng.jpg', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` text NOT NULL,
  `news_desc` text NOT NULL,
  `news_date` date NOT NULL DEFAULT current_timestamp(),
  `news_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_desc`, `news_date`, `news_img`) VALUES
(6, '\"\"', 'The inaugural Science Research Symposium, organised by\r\nthe Faculty of Science at NSBM Green University on October 11th, 2023, was a resounding success..', '2023-12-04', 'img/news/Inaugural-Science-Research-Symposium-of-Faculty-of-Science3-1037x600.jpg'),
(7, '\"\"\"\"', 'The orientation program of the NSBM Green Universityâ€™s newest undergraduate intake October 2023 Intake commenced with great excitement on 11th October 2023 at the Green University premises.', '2023-12-04', 'img/news/Orientation-Program-for-October-2023-Intake-1037x600.jpg'),
(8, '\"\"', 'NSBM Green University hosted the Inauguration Ceremony to ceremoniously mark the commencement of the newest batch of students enrolled in the undergraduate degrees for the October 2023 Intake.', '2023-12-04', 'img/news/October-2023-Intake-inaguration-1037x600.jpg'),
(9, '\"\"', 'The womenâ€™s and menâ€™s\r\nvolleyball teams of NSBM Green University have emerged as\r\nthe CHAMPIONS of the Inter-University Volleyball\r\nChampionship of\r\nUSports 2023.', '2023-12-04', 'img/news/NSBM-Volleyball-Teams-Emerge-Champions-of-USports10-1037x600.jpg'),
(10, '\"\"', 'The preliminary\r\nrounds of the NSBM Vivada â€™23 inter-school debating tournament\r\nwere successfully held at the university premises on 7th October 2023.', '2023-12-04', 'img/news/NSBM-Vivada-23-Inter-school-Debating-Tournament7-1037x600.jpg'),
(11, '\"\"', 'Chapter 06 of the LOGENSUE guest lecture series organized by the Logistics Circle of NSBM Green University was held on 5th October 2023 on the topic of â€œExploring the Dynamics of Logisticsâ€.', '2023-12-04', 'img/news/LOGENSUE-Guest-Lecture-Series-of-NSBM-Logistics-Circle2-1037x600.jpg'),
(12, '\"\"', 'Celebrating an incredible\r\nvictory at the Inter-University Badminton Championship of USports 2023!The menâ€™s Badminton team of NSBM Green University reigns as the defending champions for the year 2023.', '2023-12-04', 'img/news/NSBM-Badminton-Team-USports-2023-1-1037x600.jpg'),
(13, '\"\"', 'Department of Accounting and Finance\r\nof NSBM Green University hosted â€œCollege to Corporateâ€ workshop recently in partnership with the ACCA Institute.', '2023-12-04', 'img/news/College-to-Corporate-workshop-of-Department-of-Accounting-and-Finance2-1037x600.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_requests`
--
ALTER TABLE `contact_requests`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_requests`
--
ALTER TABLE `contact_requests`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2025 at 11:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nara_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `d_id` int(11) NOT NULL,
  `desig_name` int(11) NOT NULL,
  `desig_satus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `div_id` int(10) NOT NULL,
  `div_name` varchar(100) NOT NULL,
  `div_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `epf_no` varchar(11) NOT NULL,
  `emp_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `dep_name` varchar(255) DEFAULT NULL,
  `iponment_date` date DEFAULT NULL,
  `emp_Address_per` varchar(255) DEFAULT NULL,
  `emp_Address_resident` varchar(255) DEFAULT NULL,
  `contact_num_per` varchar(255) DEFAULT NULL,
  `contact_num_off` varchar(255) DEFAULT NULL,
  `email_per` varchar(255) DEFAULT NULL,
  `email_off` varchar(255) DEFAULT NULL,
  `emp_img` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`epf_no`, `emp_name`, `designation`, `dep_name`, `iponment_date`, `emp_Address_per`, `emp_Address_resident`, `contact_num_per`, `contact_num_off`, `email_per`, `email_off`, `emp_img`, `status`) VALUES
('', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0'),
('E0', 'Dinudu', 'SA', '', '0000-00-00', '', '', '', '', '', '', '1761343752_finance.jpg', '1'),
('E03', 'fghfghfh', 'dsfsfs', '', '0000-00-00', '', '', '', '', '', '', '1761343772_1729098618504.jfif', '1'),
('E1', 'mmm', 'fggggggggggh', '', '0000-00-00', '', '', '', '', '', '', '1761341940_ai-generated-9076172_1280.jpg', '1'),
('E2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `category` enum('News','NARA in Media','Blog Post','Session') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `publish_date`, `category`, `image`, `content`, `created_at`) VALUES
(1, 'A Day of Discovery at the Mangrove Forest', '2025-10-06', 'NARA in Media', 'uploads/1759950600_ns0.jpg', 'A group of curious minds from Maris Stella College, Negombo, recently embarked on an unforgettable journey to the NARA Kadolkale Regional Research Center. It wasn\'t just any school trip, it was an adventure into the vibrant, mysterious world of mangrove ecosystems. Grade 6 students and their two teachers dived deep into the secrets of these incredible coastal forests. The day began with an engaging workshop that provided a fascinating overview of mangrove life. Attendees learned about the unique adaptations that allow these resilient plants to thrive in salty, swampy conditions. The real highlight was the hands-on field session conducted by Ms. Nisanasala Jayasundara, Scientist, NARA. The students transformed into junior researchers, identifying different species of true mangroves and their associated plants. They got an up-close look at the intricate root systems and leaf adaptations, seeing firsthand how these plants survive in such a challenging environment. It was an inspiring moment of connection with nature.\r\n\r\nStudents learned about the threats facing these vital ecosystems and the legal frameworks in place to conserve them. The event instilled a powerful sense of responsibility, showing them that they can be champions for conservation. This extraordinary day sparked a passion for nature in a new generation of environmental stewards, proving that learning can be an exciting adventure.', '2025-10-08 18:17:34'),
(2, 'NARA and NAQDA join Forces for New Research Centre', '2025-10-17', 'NARA in Media', 'uploads/1759950653_ns1.png', 'Marine Species Breeding and Aquaculture Research Centre has been established in Kusala Bangadeniya, Northwestern Province, through a partnership between the National Aquatic Resources Research and Development Agency (NARA) and the National Aquaculture Development Authority (NAQDA). The recent Memorandum of Understanding (MoU) was signed by Prof. Sanath Hettiarachchi, Chairman of NARA, and the Mr. Kithsiri Dharmapriya, Chairman of NAQDA for this collaborations.\r\n\r\nThe center\'s primary goals are to:\r\n\r\nStrengthen the marine aquaculture industry by breeding high-demand marine species and producing high-quality fish larvae\r\nDevelop practical, science-based breeding methods\r\nThe center will focus on high-value species such as marine ornamental fish, shrimp, corals, and edible animals like crabs, lobsters, and sea cucumbers. A special emphasis will be placed on breeding green mussels (Perna viridis). The center will also study live feeds (phytoplankton and zooplankton) and water quality management to improve larval growth and survival.\r\n\r\nThe center will share its developed breeding techniques with entrepreneurs to help them create sustainable aquaculture businesses, boosting the national economy. Additionally, it will support academic development by offering research facilities and accommodation to university students for their final-year theses. The operational activities are a three-year initiative scheduled to begin in end of August 2025.', '2025-10-08 18:30:35'),
(3, 'National Workshop on Fishery Management Inventory', '2025-10-07', 'News', 'uploads/1759950805_ns2.png', 'The National Aquatic Resources Research and Development Agency (NARA) hosted the National Workshop on Fishery Management Inventory (FMInv) from August 4th to 6th, 2025, in Colombo. The workshop brought together national and international fisheries experts, scientists, academia, fisheries officers, and fishing community representatives to strengthen sustainable fisheries management in Sri Lanka.\r\n\r\nFacilitators included Dr. Nicolas Gutierrez (Senior Fishery Officer, NFIFM Assessment and Management, FAO Rome), Dr. E. Vivekanandan (Senior Scientific Consultant, BOBP-IGO, Chennai), Dr. K. Suni Mohamed (Chair, Sustainable Seafood Network of India, Kochi), and Dr. P.S. Ananthan (BOBP Fellow – Social Science, and Principal Scientist, ICAR–CIFE, Mumbai).\r\n\r\nThe workshop focused on developing three key management plans viz, Sea cucumber fishery in Northern Sri Lanka, Puttalam Lagoon fishery, and Small pelagic fishery in the Southwest coast of Sri Lanka.\r\n\r\nThe event was attended by Prof. Sanath Hettiarachchi, Chairman of NARA; Dr. K. Arulananthan, Director General of NARA; Dr. K.M.L. Amaralal, Deputy Director General of NARA; and Mr. Dhammika Ranathunga, Additional Secretary of the Ministry of Fisheries, Aquatic and Ocean Resources.\r\n\r\nThis initiative represents an important move towards enhancing fisheries management and safeguarding the long-term sustainability of Sri Lanka’s vital marine resources.', '2025-10-08 19:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_board_member`
--

CREATE TABLE `tbl_board_member` (
  `bm_id` int(11) NOT NULL,
  `bm_name` varchar(255) NOT NULL,
  `bm_address` varchar(255) NOT NULL,
  `bm_contact` varchar(255) NOT NULL,
  `bm_email` varchar(255) NOT NULL,
  `bm_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_board_member`
--

INSERT INTO `tbl_board_member` (`bm_id`, `bm_name`, `bm_address`, `bm_contact`, `bm_email`, `bm_status`) VALUES
(1, 'Nuwan', 'Colombo', '07777781', 'd@gmail.com', '1'),
(2, 'test User', 'Colombo 15', '888888888', 't@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_directmsg`
--

CREATE TABLE `tbl_directmsg` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_subject` varchar(255) NOT NULL,
  `m_msg` varchar(255) NOT NULL,
  `m_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_directmsg`
--

INSERT INTO `tbl_directmsg` (`m_id`, `m_name`, `m_email`, `m_subject`, `m_msg`, `m_status`) VALUES
(1, 'Dinudu Lakshan', 'dinudu7@gmail.com', 'Test', 'Test', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `epf_no` varchar(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_img` varchar(255) NOT NULL,
  `emp_Address_per` varchar(255) NOT NULL,
  `emp_Address_resident` varchar(255) NOT NULL,
  `contact_num_per` varchar(255) NOT NULL,
  `contact_num_off` varchar(255) NOT NULL,
  `email_per` varchar(255) NOT NULL,
  `email_off` varchar(255) NOT NULL,
  `dep_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `iponment_date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`epf_no`, `emp_name`, `emp_img`, `emp_Address_per`, `emp_Address_resident`, `contact_num_per`, `contact_num_off`, `email_per`, `email_off`, `dep_name`, `designation`, `iponment_date`, `status`) VALUES
('E1', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'naraadmin', 'b885e441fc0f0f77494e4751efd2ecfb');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `job_title`, `publish_date`, `closing_date`, `image`, `pdf`, `created_at`) VALUES
(1, 'Scientist FTD', '2025-10-09', '2025-10-16', 'uploads/1760028627_vacancy3.jpg', 'uploads/1760028627_NARA-Enactment-Sinhala.pdf', '2025-10-09 16:50:27'),
(2, 'Account', '2025-10-12', '2025-10-05', 'uploads/1760029015_vacancy2.jpg', 'uploads/1760029015_NARA-Enactment-English.pdf', '2025-10-09 16:56:55'),
(3, 'HR Assistant1', '2025-10-10', '2025-10-30', 'uploads/1760029419_vacancy.jpg', 'uploads/1760029419_Guidline.pdf', '2025-10-09 17:03:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`div_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`epf_no`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_board_member`
--
ALTER TABLE `tbl_board_member`
  ADD PRIMARY KEY (`bm_id`);

--
-- Indexes for table `tbl_directmsg`
--
ALTER TABLE `tbl_directmsg`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`epf_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `div_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_board_member`
--
ALTER TABLE `tbl_board_member`
  MODIFY `bm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_directmsg`
--
ALTER TABLE `tbl_directmsg`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

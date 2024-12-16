-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 07:28 AM
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
-- Database: `dynamicp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `paragraph` varchar(2000) NOT NULL,
  `sub_paragraph` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `paragraph`, `sub_paragraph`) VALUES
(1, 'Gargi PaperKraft', 'Since its inception five years ago, Gargi PaperKraft was laid on foundation of Enterprise, Integrity and Innovation. Gargi PaperKraft is a premier manufacturer & supplier of different kind of Paper Bags. On the strength of its quality, competitiveness and ability to meet the need based delivery, we serve our clients at pan India level and overseas catering several industries such as Pharma, Opticians, Bakers, Jewellers, Corporates, Hotels, Schools and Classes, Sweet and Dry fruit shops, Departmental Stores, Grocery Stores, Footwear or Shoe shops, Event Managements, Builders, Book Shops, Garment Industry, Restaurants, Individual Gifting and much more.', 'Innovativeness and customization is highly in trend these days and we can say that Gargi PaperKraft mastered the art of it. We have been truly active in providing our customers with creative and stylish products that may include bags, and other packaging products as per trending demand. Our entire sales team and manufacturing unit is well facilitated that allows us to reach globally in given time limit. Above all, we have never compromised when it comes to durability and quality and that is one of the features why our clients never leave us.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `image`, `account_name`, `username`, `password`) VALUES
(1, 'CIRCULARGARGILOGO.png', 'Administrator', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `image`) VALUES
(2, 'gargi-paperkraft-bags-manufaturer-lucknow-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`) VALUES
(3, '1.png'),
(4, 'logo2.jpeg'),
(5, 'logo2.jpeg'),
(6, 'BIRLA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(3, 'sudhakar', 'sudhakar@whiz-solutions.com', 'sdfas', 'dfgdf', '2022-11-29 14:26:34'),
(4, 'test', 'test@gmail.com', '9454792352', 'fcvgbhnjmk,', '2023-02-02 01:12:58'),
(5, 'Mr. Castilo', 'castilocilo@gmail.com', '83832877798', 'The CEO, \r\nWe are Adventure Finance UK Ltd, we offer business funding such as JV and debt Loans. Borrowers can secure from 10M up to 3B with us. Our platform also offers Banking Instruments such as BG/SBLC, BD, LC and Monetizations from A-rated banks. \r\nLet us know your needs and we will be delighted to serve. \r\nReply-to Email: castilocilo@gmail.com \r\nRegards, \r\nMr. Castilo', '2023-02-02 01:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flat_bottom`
--

CREATE TABLE `flat_bottom` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flat_bottom`
--

INSERT INTO `flat_bottom` (`id`, `name`, `image`) VALUES
(0, 'Laundry Bags', '28958724_187211562055758_529572800491421696_n.jpg'),
(0, 'Laundry Bags', '36576178_246626276114286_80467676874407936_n.jpg'),
(0, 'Medical Bags', '41cQECCNc7L.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flat_bottom_design`
--

CREATE TABLE `flat_bottom_design` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flat_bottom_design`
--

INSERT INTO `flat_bottom_design` (`id`, `name`, `image`) VALUES
(1, 'Grocerry Bags', 'flatbottombagsforgrocerry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flutter`
--

CREATE TABLE `flutter` (
  `id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `pincode` int(50) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flutter`
--

INSERT INTO `flutter` (`id`, `area`, `city_name`, `pincode`, `state`) VALUES
(2, 'B-33 Dayal Green Phase-I, Deva Road', 'Near Kunwar Global Public School, Lucknow', 226019, 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `social_media` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `email_id`, `contact_number`, `social_media`) VALUES
(8, 'info@gargipaperkraft.com', '+91 99182 80347', '');

-- --------------------------------------------------------

--
-- Table structure for table `industrial`
--

CREATE TABLE `industrial` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `paragraph` varchar(200) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industrial`
--

INSERT INTO `industrial` (`id`, `heading`, `paragraph`, `image`) VALUES
(12, 'FLAT-BOTTOM BAGS', 'Paperkraft Bags', 'IMG_20230306_163846134.jpg'),
(13, 'V-BOTTOM BAGS', 'PaperKraft Bags', 'Low-Cost-Food-Full-Automatic-V-Bottom-Kraft-Paper-Bag-Production-Manufacturing-Making-Machine-Price.jpg'),
(15, 'SQUARE-BOTTOM BAGS', 'PaperKraft Bags', 'sqauere_bottom_bags.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(3, 'gargipaperkraft.png');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `image`) VALUES
(1, 'Grocerry Bags', 'grocerrybags.jpeg'),
(2, 'Laundry Bags', 'IMG_20230306_163846134.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `people_say`
--

CREATE TABLE `people_say` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `paragraph` varchar(200) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people_say`
--

INSERT INTO `people_say` (`id`, `name`, `designation`, `paragraph`, `image`) VALUES
(1, 'sudhakarr', 'developerr', ' hi  this is paragrpahhr', 'bg2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `image`, `heading`, `title`) VALUES
(1, '1.jpg', 'poject1', 'this is '),
(2, 'logo.jpg', 'p2', 'jhvjh');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `paragraph` varchar(300) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading`, `paragraph`, `image`) VALUES
(19, 'DENIM JEANS & LEGINGS ', 'MEN, WOMEN, BOYS, GIRLS JEANS & LEGINGS', '1-MEN & WOMEN DENIM FIBRE JEANS.jpg'),
(21, 'DEIM FIBRE SHIRTS & T-SHIRTS', 'FOR ALL ', '2-MEN & WOMEN DENIM FIBRE SHIRTS.png'),
(22, 'DENIM FIBRE SHORTS, SKIRTS & UNDER GARMENTS', 'FOR LADIES & GIRLS', '3-GIRLS DENIM FIBRE SHORTS,  SKIRTS & UNDER GARMENTS.jpg'),
(23, 'DENIM MEN & WOMEN FOOT WEAR', 'FOR ALL', '4-DENIM MEN & WOMEN FOOTWEAR.png'),
(24, 'DENIM FIBRE OTHER PRODUCTS', 'FOR ALL ', '5-DENIM FIBRE OTHER PRODUCTS.png'),
(25, 'SPORTSWEAR PRODUCTS', 'SPORT TRACK SHOOTS, JACKET, FOOTWEAR ETC', '52.jpg'),
(26, 'PICKELS', 'ALL TYPE OF PICKELS', '1-PICKELS.png'),
(27, 'CHIPS', 'ALL TYPES CHIPS', '2-CHIPS.png'),
(28, 'BAKERY', 'PACKAGED BAKERY PRODUCTS', '3-BAKERY.png'),
(29, 'SOUCE', 'ALL TYPE OD SOUCE', '4-SOUCE.png'),
(30, 'PAPAD', 'ALL TYPE OF PAPAD', '5-PAPAD.png'),
(31, 'SPORTWEAR', 'FOR ALL', '1-MEN & WOMEN SPORTWEAR.png'),
(32, 'SPORT FOOTWEAR', 'FOR ALL', '2-MEN & WOMEN SPORT FOOTWEAR.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `sub_heading` varchar(50) NOT NULL,
  `paragraph` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `heading`, `sub_heading`, `paragraph`) VALUES
(7, 'inddophouseslider0.jpg', 'INDDOP HOUSE', 'MANUFACTURER & TRADER OF INDUSTRIAL & DOMESTIC PRO', 'THE BEST INDUSTRIAL PRODUCTS FOR ALL '),
(8, 'seen-5.png', 'INDDOP HOUSE', 'MANUFACTURER & TRADER OF INDUSTRIAL & DOMESTIC PRO', 'WE SUPPLY THE BEST DOMESTIC PRODUCTS........'),
(10, 'seen-3.png', 'INDDOP HOUSE', 'MANUFACTURER & TRADER OF INDUSTRIAL & DOMESTIC PRO', '100% PURE, MADE IN INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `slieder`
--

CREATE TABLE `slieder` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `sub_heading` varchar(50) NOT NULL,
  `paragraph` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `square_bottom`
--

CREATE TABLE `square_bottom` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `square_bottom`
--

INSERT INTO `square_bottom` (`id`, `name`, `image`) VALUES
(1, 'Cloths  & Apparels', 'squarebottombags_gargi_paperkraft_lko.jpg'),
(2, 'Malls & Stores', 'Girls_shopping.jpg'),
(3, 'Groceries', 'square-bottom-paper-bags-732.jpg'),
(4, 'All Purpose Bags', 'theme.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `square_bottom_design`
--

CREATE TABLE `square_bottom_design` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `square_bottom_design`
--

INSERT INTO `square_bottom_design` (`id`, `name`, `image`) VALUES
(1, 'Packaging Bags', 'squarebottompackingbags.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `image`) VALUES
(1, '', 'php', 'project-img3.jpg'),
(17, 'Prashant Singh', 'Marketing Head', '8.jpg'),
(23, 'Pratap Narayan Singh', 'Founder and CEO', '20210206_144013.jpg'),
(25, 'MEMBER1', 'php', '01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `v_bottom`
--

CREATE TABLE `v_bottom` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `v_bottom`
--

INSERT INTO `v_bottom` (`id`, `name`, `image`) VALUES
(1, 'Grocerry Bags', 'Low-Cost-Food-Full-Automatic-V-Bottom-Kraft-Paper-Bag-Production-Manufacturing-Making-Machine-Price.jpg'),
(2, 'Fast Food Packaging', '77431111_567779477332296_3661582485969436672_n.jpg'),
(3, 'All Purpose Bags', '39920064_297885070988406_2362462317536346112_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `v_bottom_design`
--

CREATE TABLE `v_bottom_design` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `v_bottom_design`
--

INSERT INTO `v_bottom_design` (`id`, `name`, `image`) VALUES
(1, 'Food Bags', 'vbottomdesignbagsforfoods.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_bottom_design`
--
ALTER TABLE `flat_bottom_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flutter`
--
ALTER TABLE `flutter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial`
--
ALTER TABLE `industrial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_say`
--
ALTER TABLE `people_say`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slieder`
--
ALTER TABLE `slieder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `square_bottom`
--
ALTER TABLE `square_bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `square_bottom_design`
--
ALTER TABLE `square_bottom_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `v_bottom`
--
ALTER TABLE `v_bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `v_bottom_design`
--
ALTER TABLE `v_bottom_design`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flat_bottom_design`
--
ALTER TABLE `flat_bottom_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flutter`
--
ALTER TABLE `flutter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `industrial`
--
ALTER TABLE `industrial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `people_say`
--
ALTER TABLE `people_say`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slieder`
--
ALTER TABLE `slieder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `square_bottom`
--
ALTER TABLE `square_bottom`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `square_bottom_design`
--
ALTER TABLE `square_bottom_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `v_bottom`
--
ALTER TABLE `v_bottom`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `v_bottom_design`
--
ALTER TABLE `v_bottom_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

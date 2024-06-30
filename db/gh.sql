-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 07:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gh`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `homepage_description` varchar(750) NOT NULL,
  `description` mediumtext NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `homepage_description`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(8, 'About Snow White Retreat', '<h2>Welcome to Snow White Retreat</h2>\r\n\r\n<p>At Snow White Retreat, we believe that hospitality is about more than just providing a place to stay. Our dedicated team of staff is the heart and soul of our retreat. From the warm smiles that greet you upon arrival to the attentive service that ensures every aspect of your stay is seamless, our staff is committed to making your experience truly memorable.</p>\r\n\r\n<h3>Discover Gangtok and Snow White Retreat</h3>\r\n\r\n<p>Nestled in the heart of the enchanting town of Gangtok, Snow White Retreat offers a serene haven amidst the breathtaking landscapes of East Sikkim. Surrounded by misty mountains, lush forests, and vibrant culture, our retreat is the perfect gateway to a tranquil getaway.</p>', '<h1 style=\"text-align:center\"><span style=\"font-size:24px\"><span style=\"color:#8d0336\">Snow White Retreat:&nbsp;</span>Your Home Away from Home</span></h1>\r\n\r\n<p style=\"text-align:justify\">At Snow White Retreat, we believe that hospitality is about more than just providing a place to stay. Our dedicated team of staff is the heart and soul of our retreat. From the warm smiles that greet you upon arrival to the attentive service that ensures every aspect of your stay is seamless, our staff is committed to making your experience truly memorable.</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:16px\">Discover Gangtok and <span style=\"color:#8d0336\">Snow White Retreat</span></span></h3>\r\n\r\n<p style=\"text-align:justify\">Nestled in the heart of the enchanting town of Gangtok, Snow White Retreat offers a serene haven amidst the breathtaking landscapes of East Sikkim. Surrounded by misty mountains, lush forests, and vibrant culture, our retreat is the perfect gateway to a tranquil getaway.</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#8d0336\">About&nbsp;</span>Gangtok</span></h3>\r\n\r\n<p style=\"text-align:justify\">Gangtok, the capital and the largest town of Sikkim is a picturesque destination known for its natural beauty and rich cultural heritage. Perched in the Himalayan range, this town offers a unique blend of tradition and modernity. Explore the bustling markets, visit ancient monasteries, and soak in the panoramic views of the Himalayas that Gangtok has to offer.</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:16px\">Dedicated&nbsp;<span style=\"color:#8d0336\">Staff</span></span></h3>\r\n\r\n<p style=\"text-align:justify\">Gangtok, the capital and the largest town of Sikkim is a picturesque destination known for its natural beauty and rich cultural heritage. Perched in the Himalayas</p>', 'fgsZcXqAZktx9MPZqnqTyb4NwsRs8uNiGzANTF6Z.jpg', '2023-11-14 05:23:01', '2023-11-13 23:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(11) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `room_id`, `amenities`, `created_at`, `updated_at`) VALUES
(1, 1, '24 Hour Reception', '2023-10-26 10:48:52', '2023-10-26 10:48:52'),
(3, 2, 'Parking', '2023-10-26 10:49:26', '2023-10-26 10:49:26'),
(4, 2, '24 Hour Reception', '2023-10-26 10:49:26', '2023-10-26 10:49:26'),
(5, 1, 'Pets Allowed', NULL, NULL),
(6, 1, 'Power Generator', NULL, NULL),
(7, 3, '24 Hour Reception Fecilities', '2023-10-28 10:40:46', '2023-10-28 10:40:46'),
(8, 3, '24 Hour Reception', '2023-10-28 10:40:46', '2023-10-28 10:40:46'),
(9, 3, '24 Hour Reception Fecilities', '2023-10-28 10:40:46', '2023-10-28 10:40:46'),
(10, 5, 'New', '2024-06-30 07:55:45', '2024-06-30 07:55:45'),
(11, 5, 'New', '2024-06-30 07:55:45', '2024-06-30 07:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(5, 'asd', 'demouser@user.com', 9876543210, 'sadasd', '2023-11-14 09:27:14', '2023-11-14 09:27:14'),
(6, 'demo', 'demouser@user.com', 9876543210, 'asdasd', '2023-11-14 09:27:50', '2023-11-14 09:27:50'),
(7, 'demo', 'demouser@user.com', 9876543210, 'asdasd', '2023-11-14 09:28:29', '2023-11-14 09:28:29'),
(8, 'demo', 'demouser@user.com', 9876543210, 'sadasd', '2023-11-14 09:43:59', '2023-11-14 09:43:59'),
(9, 'Manoj Tamang', 'demouser@user.com', 9876543210, 'asdasd', '2023-11-14 09:56:00', '2023-11-14 09:56:00'),
(10, 'Manoj Tamang', 'demouser@user.com', 9876543210, 'asdasd', '2023-11-14 10:00:32', '2023-11-14 10:00:32'),
(11, 'asd', 'demouser@abc.com', 234234, 'fsdfsdf', '2024-06-30 11:30:51', '2024-06-30 11:30:51'),
(12, 'werewr', 'demouser@abc.com', 23432, '4fsdfsdf', '2024-06-30 11:31:19', '2024-06-30 11:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `photo`, `title`, `created_at`, `updated_at`) VALUES
(5, 'mrVgNzHSW53pZw0SIhRaIJlBRcpd9nyYSEDaFYQU.jpg', 'a', '2023-10-29 00:29:28', '2023-10-29 00:29:28'),
(6, 'tk1slUk6oTzN8KpVbZPEmTXY6jMMwSUe6cJmIEtG.jpg', 'Add Photos To Gallery', '2023-10-29 00:37:29', '2023-10-29 00:37:29'),
(7, 'JNvRC2TDV2CqOs3LWgjwBPhLgskYIkLcW3allfGP.jpg', 'Add Photos To Gallery', '2023-10-29 00:37:33', '2023-10-29 00:37:33'),
(8, 'l7Ki5Pjynbc0B6rHNs02fOU8OVdMdvCYYY2HkXxS.jpg', 'Add Photos To Gallery', '2023-10-29 00:37:38', '2023-10-29 00:37:38'),
(9, 'JSTN95RcXLAamKoy9q3IByw9YJ9VPAjdaG1ljGN3.jpg', 'Gtk', '2023-11-14 11:15:25', '2023-11-14 11:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_14_110126_create_bookings_table', 2),
(5, '2021_07_14_110154_create_galleries_table', 2),
(6, '2021_07_14_110210_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nearby_attractions`
--

CREATE TABLE `nearby_attractions` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `place` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nearby_attractions`
--

INSERT INTO `nearby_attractions` (`id`, `title`, `place`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'sad', 'Ravangla', '<p>asd</p>', 'KkqG4lTLdyxLvSSgFPXKu4WoqH7Qu87wyboxYDse.jpg', '2023-11-13 15:32:56', '2023-11-13 10:02:56'),
(3, 'asd', 'Lachung', '<p>asd</p>', 'LH3DAcphKfcv1R1CUIDuKmvgH2cbtVCILMh4sIF6.jpg', '2023-11-13 15:33:13', '2023-11-12 12:50:21'),
(4, 'Sikkim', 'Gangtok', '<p>d</p>', 'fFzJEEYnDWmNfZdpvk3J2KkiaIE6vlwLINwKj6qp.jpg', '2023-11-13 10:11:28', '2023-11-13 10:11:28'),
(5, 'Sikkim', 'M.g Marg', '<h2>Nearby Adventures and Attractions</h2>\r\n\r\n<h3>Nathula Pass</h3>\r\n\r\n<p>Nestled in the heart of the enchanting town of Gangtok, Snow White Retreat offers a serene haven amidst the breathtaking landscapes of East Sikkim. Surrounded by misty mountains, lush forests, and vibrant culture, our retreat is the perfect gateway to a tranquil getaway.</p>\r\n\r\n<h3>MG Marg</h3>\r\n\r\n<p>Stroll along this pedestrian-only street, lined with charming shops, cafes, and boutiques. It&#39;s the perfect place to soak in the local culture and pick up unique souvenirs.</p>\r\n\r\n<h3>Rumtek Monastery</h3>\r\n\r\n<p>Immerse yourself in the spiritual serenity of one of Sikkim&#39;s most significant monasteries, known for its intricate architecture and vibrant Buddhist culture.</p>\r\n\r\n<h3>Himalayan Zoological Park</h3>\r\n\r\n<p>Encounter the diverse wildlife of the Himalayas in this picturesque park, home to rare species like the Red Panda, Snow Leopard etc.</p>\r\n\r\n<h3>Ropeway</h3>\r\n\r\n<p>Soar above the scenic landscapes of Gangtok on the ropeway, providing a bird&#39;s-eye view of the town and its surrounding beauty. This exhilarating ride offers a unique perspective of the Himalayan foothills.</p>\r\n\r\n<h2>Nearby Means of Transportation</h2>\r\n\r\n<h3>Local Taxis</h3>\r\n\r\n<p>Easily accessible from Snow White Retreat, local taxis are a convenient way to explore Gangtok and its surrounding areas. Our staff can assist you in arranging transportation for your sightseeing adventures.</p>\r\n\r\n<h3>Shared Jeeps</h3>\r\n\r\n<p>A popular mode of transport in the region, shared jeeps provide a cost-effective and efficient way to navigate through the hills and valleys of Sikkim.</p>\r\n\r\n<h3>Rentals</h3>\r\n\r\n<p>For those who prefer more independence, rental cars are available for self-driven exploration. Our team can help you arrange a rental vehicle tailored to your needs.</p>\r\n\r\n<h2>Nearest Transportation Hubs</h2>\r\n\r\n<h3>Nearest Airport</h3>\r\n\r\n<p>Bagdogra Airport, located approximately 125 kilometers from Gangtok, is the nearest major airport providing domestic and international connections.</p>\r\n\r\n<h3>Nearest Railway Station</h3>\r\n\r\n<p>New Jalpaiguri Railway Station (NJP), situated around 120 kilometers away, serves as a major railhead for the region.</p>\r\n\r\n<h3>Nearest Bus Station</h3>\r\n\r\n<p>Gangtok Bus Stand, also known as SNT Bus Stand, is the primary bus terminal in Gangtok, facilitating road transportation within the state.</p>\r\n\r\n<h2>Activities</h2>\r\n\r\n<p>From exploring the local markets to embarking on adventurous treks, there&#39;s something for everyone at Snow White Retreat. Discover the rich culture and history of Sikkim, or simply relax in our garden area with a book in hand.</p>\r\n\r\n<h2>Location</h2>\r\n\r\n<p>Snow White Retreat is strategically located, offering easy access to popular attractions like MG Marg, Nathula Pass, Rumtek Monastery and many other tourist attractions. Our staff is always ready to assist you in planning your itinerary and ensuring that you make the most of your stay.</p>', 'ZdIQVYv2O98mAbf2pZ3KoHP5tKV5VibUvhrl607p.jpg', '2023-11-14 05:37:02', '2023-11-14 00:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Operator', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `about_rooms` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `photo`, `price`, `about_rooms`, `created_at`, `updated_at`) VALUES
(1, 'Terrace Double  Deluxe', 'mphKWSo3jHma8WKOmzkUzYcdXmEI9pMGTyEuAa0u.jpg', '96000', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>', '2023-10-26 10:48:52', '2023-10-26 11:07:10'),
(2, 'Double Deluxe', '3JfauHEafhydoEXrRSHJOImMib4CuxVeYzxOlJSX.jpg', '20000', '<h1>&nbsp;</h1>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h1>&nbsp;</h1>', '2023-10-26 10:49:26', '2023-10-27 11:07:34'),
(3, 'Premium Rooms', 'AWYG08J2CHnh7uExPZN7PYFDDdAntDECja2xVDOC.jpg', '60000', NULL, '2023-10-28 10:40:46', '2023-10-28 10:40:46'),
(4, 'Standard Rooms', 'SoqC2t4JFgXpFuv4cfd0RFHVzX8Il7a0h9oHamAm.jpg', '1000', '<p>Cheap Rooms</p>', '2023-10-28 12:02:21', '2023-10-28 12:02:21'),
(5, 'New Rom', '9G21BJAEXJCgid0fQnRqQlssEbyX5OvrPRc15ex3.jpg', '6000', '<p>Ok</p>', '2024-06-30 07:55:44', '2024-06-30 07:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `room_enquiries`
--

CREATE TABLE `room_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(20) NOT NULL,
  `message` varchar(200) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_enquiries`
--

INSERT INTO `room_enquiries` (`id`, `room_id`, `name`, `email`, `contact`, `message`, `check_in`, `check_out`, `no_of_rooms`, `children`, `adult`, `created_at`, `updated_at`) VALUES
(1, 2, 'demo', 'demo@gov2.in', 9876543210, 'ddd', '2023-11-11', '2023-11-17', 3, 3, 2, '2023-11-11 02:42:27', '2023-11-11 02:42:27'),
(4, 2, 'demo', 'demouser@user.com', 9876543210, 'asdasdasd', '2023-11-14', '2023-11-23', 2, 3, 1, '2023-11-14 10:03:18', '2023-11-14 10:03:18'),
(5, 2, 'demo', 'demouser@user.com', 9876543210, 'asdasdasd', '2023-11-14', '2023-11-23', 2, 3, 1, '2023-11-14 10:04:01', '2023-11-14 10:04:01'),
(6, 3, 'asd', 'demouser@abc.com', 23123, 'asdasd', '2024-06-19', '2024-07-05', 3, 2, 2, '2024-06-30 09:38:43', '2024-06-30 09:38:43'),
(7, 2, 'asd', 'demouser@abc.com', 1312, 'asdasd', '2024-06-20', '2024-06-26', 3, 2, 3, '2024-06-30 09:41:25', '2024-06-30 09:41:25'),
(8, 2, 'wqe', 'demouser@abc.com', 21312, 'sadasd', '2024-06-30', '2024-07-04', 3, 2, 2, '2024-06-30 09:46:24', '2024-06-30 09:46:24'),
(9, 3, 'asd', 'demouser@abc.com', 23123, 'asdasd', '2024-06-19', '2024-07-05', 3, 2, 2, '2024-06-30 10:32:46', '2024-06-30 10:32:46'),
(10, 1, 'demo user', 'demouser@abc.com', 4324, 'rwerwer', '2024-06-14', '2024-07-05', 3, 2, 2, '2024-06-30 10:39:38', '2024-06-30 10:39:38'),
(11, 3, 'demo user', 'demouser@abc.com', 234234, 'dfsd', '2024-06-20', '2024-07-05', 3, 2, 1, '2024-06-30 11:03:15', '2024-06-30 11:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `room_galleries`
--

CREATE TABLE `room_galleries` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `photos` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_galleries`
--

INSERT INTO `room_galleries` (`id`, `room_id`, `photos`, `created_at`, `updated_at`) VALUES
(2, 1, '3roDFLJWa3r44EjxQjQX8neNeeXf4y9vN5f3KnUT.jpg', '2023-10-26 16:18:52', '2023-10-26 16:18:52'),
(3, 2, 'WpdOk6KC4K7qUpAOXeiRlESzHMmDe46IIaMi2K9m.jpg', '2023-10-26 16:19:26', '2023-10-26 16:19:26'),
(4, 2, 'IuyurOOI650IqTLm36fgrciD9VjW8nHOqorXINOS.jpg', '2023-10-26 16:19:26', '2023-10-26 16:19:26'),
(5, 1, 'A5SfXzbZEpvKbgyaHLXmJ4Mrcnzp334qjVWrb1Cz.jpg', '2023-10-26 16:37:10', '2023-10-26 16:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `title`, `sub_title`, `created_at`, `updated_at`) VALUES
(4, 'xfs7OQ7QkDNzy1GUNp6b5pX0yYBmuvRfimdFzHCW.jpg', 'Welcome To Snow White Retreat', 'A memorable stay at Snow White Retreat', '2023-10-26 16:17:32', '2023-10-26 16:17:32'),
(5, 'biDpzpkmrxduNB33kbqDJNTQZGiFkebd0oRZ61sL.jpg', 'Welcome To Snow White Retreat', 'A memorable stay at Snow White Retreat', '2023-10-26 16:17:40', '2023-10-26 16:17:40'),
(6, 'Rs1F2p72Z3eNIzX92x9uVjdir9skxPoEsKVXsEf3.jpg', 'Welcome To Snow White Retreat', 'A memorable stay at Snow White Retreat', '2023-10-27 15:57:37', '2023-10-27 15:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `photo` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `photo`, `rating`, `created_at`, `updated_at`) VALUES
(6, 'Demo User123', 'Aliquam Abc dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.', 'yHMOySTcfh1P0fRaNk1bQ07ITDiSQyacW59YAlk8.jpg', 2, '2023-11-14 06:48:45', '2023-11-14 01:18:45'),
(7, 'Next User', 'We collect reviews from our guests so that you can obtain an honest opinion of what our hotel is truly like', 'RVwnDvkv2yH05T17b4lORaSTDx1Pm2T1wKukqX4s.jpg', 4, '2023-11-14 01:35:00', '2023-11-14 01:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hotel Admin', 'traveladmin@supermantoursandtravels.com', NULL, '$2y$10$uRyO0ld4NtBGBYyoW1IRvei5LuaulTr1G.jR64bg1k/EMYQEfpXkW', NULL, '2021-07-14 00:34:22', '2022-02-27 04:01:26'),
(4, 'Demo Admin', 'demoadmin@supermantoursandtravels.com', NULL, '$2y$10$hO.wK5HFDDjYqDpcmWzxjemOGJuMit2HN9l/HyDq0SFl9EU1fsNKu', NULL, '2022-02-27 04:01:56', '2022-02-27 04:01:56'),
(5, 'Green Hamlet Admin', 'ghadmin@greenhamlet.com', NULL, '$2y$10$o/r1yRG25KR7gaUTC2CH3O/086BATlNoaVrRgfkA7qBD/C56LlhgO', NULL, '2024-06-30 07:54:51', '2024-06-30 07:54:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearby_attractions`
--
ALTER TABLE `nearby_attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_enquiries`
--
ALTER TABLE `room_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_galleries`
--
ALTER TABLE `room_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nearby_attractions`
--
ALTER TABLE `nearby_attractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room_enquiries`
--
ALTER TABLE `room_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `room_galleries`
--
ALTER TABLE `room_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

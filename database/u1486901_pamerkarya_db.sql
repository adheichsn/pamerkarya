-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2024 at 02:45 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1486901_pamerkarya_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Virtual Reality', 'Virtual-Reality', '2023-07-26 22:57:58', '2023-07-26 22:57:58'),
(2, 'Internet of Things', 'Internet-of-things', '2023-07-26 22:57:58', '2023-07-26 22:57:58'),
(3, 'Metaverse', 'Metaverse', '2023-07-26 22:57:58', '2023-07-26 22:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_08_05_034700_create_posts_table', 1),
(13, '2022_08_05_134325_create_categories_table', 1),
(14, '2022_09_19_062358_add_is_admin_to_table_users', 1),
(15, '2023_07_31_012705_add_votes_to_posts', 2),
(17, '2023_08_04_020515_add_likes_to_posts', 4),
(19, '2023_08_06_103257_add_views_count_to_posts_table', 5),
(20, '2023_08_08_044525_add_detail_profile_to_users_table', 6),
(23, '2023_08_01_071851_create_comments_table', 7),
(24, '2023_08_06_102513_create_likes_table', 7),
(25, '2023_08_08_062526_add_detail_profile_to_users_table', 7),
(26, '2023_08_08_091314_add_profile_to_users_table', 8);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `image`, `image2`, `image3`, `image4`, `video`, `slogan`, `excerpt`, `slug`, `body`, `published_at`, `created_at`, `updated_at`, `views`, `likes`) VALUES
(11, 2, 4, 'Mobile HRD app', 'post-image/WEgCLJhw9EwJs4feRnNIqJmwOIajZlrVdDdPosDq.png', 'post-image/TtTtl4XKIQGLR9oaturzhrWhsCPdszRyK9Bt0Zs8.png', 'post-image/5t6FQ9Fh5RbIO3rgnRnyPI7sEZAHkuMTCXzord3B.png', 'post-image/Z8cNb3X9z0FiqIXrtFCUz2F6N0InlX4FwDOfytbE.png', 'https://www.youtube.com/embed/wiuiTwf_VM0', 'Mobile HRD app', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...', 'mobile-hrd-app', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>', NULL, '2023-08-16 00:56:32', '2024-04-08 16:25:37', 21, 0),
(14, 1, 9, 'Game VR SMK 48 Jakarta', 'post-image/Qcdlbb2LdfT5UD11BlhN8d44BsIApJuyoZlTFTzU.png', 'post-image/qAXG9IiaDdK8t14K9Jo3BL8FmhFMJmVz431FzRC9.jpg', 'post-image/soAhp4EnXw0UiLhmPHfTIyz0yE8jlh7wKCIpwajc.jpg', 'post-image/Wk3wumc99qJnxSRZDuR8PugWtomMUkZlQle60gu3.jpg', 'https://www.youtube.com/embed/fFPcqK4Gpe4', 'Virtual Reality Game', 'Shooter video games or shooters are a subgenre of action video games where the focus is almost entir...', 'game-vr-smk-48-jakarta', '<div><strong>Shooter video games</strong> or <strong>shooters</strong> are a subgenre of <a href=\"https://en.wikipedia.org/wiki/Action_video_game\">action video games</a> where the focus is almost entirely on the defeat of the character\'s enemies using the weapons given to the player. Usually these weapons are <a href=\"https://en.wikipedia.org/wiki/Firearm\">firearms</a> or some other <a href=\"https://en.wikipedia.org/wiki/Projectile_weapon\">long-range weapons</a>, and can be used in combination with other tools such as <a href=\"https://en.wikipedia.org/wiki/Grenade\">grenades</a> for indirect offense, <a href=\"https://en.wikipedia.org/wiki/Body_armor\">armor</a> for additional defense, or accessories such as <a href=\"https://en.wikipedia.org/wiki/Telescopic_sight\">telescopic sights</a> to modify the behavior of the weapons. A common resource found in many shooter games is <a href=\"https://en.wikipedia.org/wiki/Ammunition\">ammunition</a>, armor or health, or upgrades which augment the player character\'s weapons.</div>', NULL, '2023-09-18 00:25:11', '2024-04-08 16:25:28', 15, 0),
(17, 1, 9, 'VR Game Advanture SMK 23 Jakarta Selatan', 'post-image/x2904S02ezwd6kl8TksssD1ELXHHE2Z72RqQ2yxX.jpg', 'post-image/AQDoUR9A1h2wwbUcc8oWqq1afyYuu4OUVjTB3wBN.jpg', 'post-image/nUPSYbbV5qp6WsaBqM1noYTmIm8X2uDkfF9EHKPf.jpg', 'post-image/dxLVpzstVbd5FT1Kzqf8lZvlJYyKEKnQs3mDEtMP.jpg', 'https://www.youtube.com/embed/Ge6GHEWJabs', 'Virtual Reality Dapat Menguasai Learning Dunia', 'Ven VR Adventure is a single-player VR platform game. You happen to meet Ven on his unknown planet,...', 'vr-game-advanture-smk-23-jakarta-selatan', '<div>Ven VR Adventure is a single-player VR platform game. You happen to meet Ven on his unknown planet, invaded by Bruce Nelson, who wants to destroy the magical world.</div>', NULL, '2023-09-18 00:34:56', '2024-04-08 16:25:28', 21, 0),
(18, 1, 9, 'VR Jalan Jalan SMK 45 Belitung', 'post-image/utBMJFzwib9ROzhH6cPpnzKzgxPUXtYUqxYKzPlG.png', 'post-image/DMPLV6aUyg79BMfKGgULHEVAmfFkN9f3Gtdx5k0U.jpg', 'post-image/2GRlJsFCN4ekR6DWnTy9roN8Rmn6QE2d5r63yjD3.png', 'post-image/w4LidXtxqS18ycHsyamaVt9kTdiDrFn0JKTLGE9d.jpg', 'https://www.youtube.com/embed/zRgdT2m51Bc', 'Virtual Reality Menjadi Inovasi Tourism Indonesia', 'An imaginary gallery recreated with the help of 3D and inspired by Louvre’s gallery of Italian paint...', 'vr-jalan-jalan-smk-45-belitung', '<div>An imaginary gallery recreated with the help of 3D and inspired by Louvre’s gallery of Italian paintings : inside, a selection from the collection of artworks digitised in 3D by AGP. An interactive and educational visit, which allows to move in the VR scene and to interact with the environment and the 3D elements.<br><br></div><div><br><br></div>', NULL, '2023-09-18 00:42:40', '2024-04-08 16:25:28', 31, 0),
(36, 1, 18, 'SMKN 2 Purwokerto Team 3A', 'post-image/DPkKxGbPmmBhyXl94EgyYb51gfuFBXcedMZqt70P.png', 'post-image/y1I2gdRCEY4BuSjCfcrKrFTPGtgJvwANQLlwZNy8.png', 'post-image/hXzVl0GPaNavzsZ11mpbiHsdIkB8b9j0wpau3rIP.png', 'post-image/sJ6JYvNQnQwP8a0KXHI0OEaulypkqCUTBdBNhWAP.png', 'https://www.youtube.com/embed/L15KB5I-vlQ', 'Hospital Virtual Reality', '3D Assets for Occupational Health and Safety in the HospitalMade by Team 3A1. Rahayu2. Nazla3. Defan', 'smkn-2-purwokerto-team-3a', '<div>3D Assets for Occupational Health and Safety in the Hospital<br>Made by Team 3A<br>1. Rahayu<br>2. Nazla<br>3. Defan</div>', NULL, '2023-12-15 01:56:34', '2024-04-08 16:25:28', 15, 0),
(37, 1, 18, 'SMKN 2 Purwokerto Team 4B', 'post-image/RHih1STJpylnffWAsO8bfHyJY6glLfZVHaHHZLul.png', 'post-image/6Nbpx85yVoAC57aYHCyyHB0roFoq9M4fMWB9UIkJ.png', 'post-image/W7wf73CW1BZmQEXW2Y2Hi6nDEgMIU5LpNckxBTM5.png', 'post-image/9YqomGbCKkMRhPXAbKMYMdCPeV6x0iQnfoPtgrrM.png', 'https://www.youtube.com/embed/BJzrBtVqtIQ?si=X86vNPz2s5TVC8mU', 'Hospital Virtual Reality', '3D Assets for Occupational Health and Safety in the HospitalMade by Team 4BROLE 3D :1. Arnan Adisa p...', 'smkn-2-purwokerto-team-4b', '<div>3D Assets for Occupational Health and Safety in the Hospital<br>Made by Team 4B<br>ROLE 3D :<br>1. Arnan Adisa putra<br>2. Fian Dwi Faturrahman<br><br>ROLE GAMEDEV:<br>1. Muhammad Sulthon Aulia<br>2. Fawwaz Zaharza Al Baihaqi<br>3. Arvin&nbsp;Aufa&nbsp;Rishandy</div>', NULL, '2023-12-15 01:59:33', '2024-04-08 16:25:37', 20, 0),
(38, 1, 18, 'SMKN 2 Purwokerto Team 3B', 'post-image/3zlo24rdW1mN0sitKyk23ghfRGuhj1FAhX6ymItp.png', 'post-image/N7Rym12y2wPbMJwqXmPEwAB4urE8rlKq1UFLT0op.png', 'post-image/hxvUgyoGpiMeagE5VMv1YVltlVzKSqvUuwgNH3e3.png', 'post-image/oAF5lxf6wPgHJgOtsnmhwZhSY9s2yOivBETGim7f.png', 'https://www.youtube.com/embed/-8Zzqackj8o?si=jDHXBc9nMULpcCXf', 'Class Virtual Reality', 'VR Training for Occupational Health and Safety in the ClassroomMade by Team 3B1. Ihsan2. Krisyanto3....', 'smkn-2-purwokerto-team-3b', '<div>VR Training for Occupational Health and Safety in the Classroom<br>Made by Team 3B<br>1. Ihsan<br>2. Krisyanto<br>3. Lilis<br>4. Rasya</div>', NULL, '2023-12-15 02:07:23', '2024-04-08 16:25:38', 21, 0),
(39, 1, 18, 'SMKN 2 Purwokerto Team 2A', 'post-image/6THYqp2ntBDRQOebiA5BtpiA3IIrWhCu20FoGU5L.png', 'post-image/s27YLD74aXE1aqKwkcEjFaXLoPciZ4Fezw5w5cIR.png', 'post-image/b5rXZuxMIFMD87zGvSIZF7stVffWvGmVNAjT5IYc.png', 'post-image/zwFjmJwOvtMw82OH3Foy6kzRW9OmA2c7UHxw1D6s.png', 'https://www.youtube.com/embed/e4pwuOCB1DM?si=3FYJPOJYWLFKjt1s', 'Office Virtual Reality', '3D Assets for Occupational Health and Safety in the OfficeMade by Team 2A- Catur Wanda Meylia Putri...', 'smkn-2-purwokerto-team-2a', '<div>3D Assets for Occupational Health and Safety in the Office<br>Made by Team 2A<br>- Catur Wanda Meylia Putri Hidayat<br>- NABIHA ZIDAN ZUHAYR&nbsp;<br>- M.&nbsp;RAFLI&nbsp;SANTOSO&nbsp;J</div>', NULL, '2023-12-15 03:50:10', '2024-04-08 16:25:38', 22, 0),
(40, 1, 18, 'SMKN 2 Purwokerto Team 2B', 'post-image/5KCLjNRpyS9cbqLcJD47LAyJRjaItzIBuyNs5sBW.png', 'post-image/d8nJjge6fpj9BPKHFN7h4OQ73XP8LLOnFVhKt55q.png', 'post-image/7lnDCYyQJZ2RS3HiMTkAEoTOEZkYpmmaXaDHKWQv.png', 'post-image/6bRsj5ghF0kHtpJLcgMe3JQa4krDRaCMq76epyic.png', 'https://www.youtube.com/embed/85hQ1d8IBNA?si=KrF734B2n-fAw9wT', 'Class Virtual Reality', '3D Assets for Occupational Health and Safety in the ClassroomMade by Team 2B1. Farritzh Zaharza Al B...', 'smkn-2-purwokerto-team-2b', '<div>3D Assets for Occupational Health and Safety in the Classroom<br>Made by Team 2B<br>1. Farritzh Zaharza Al Baihaqi<br>2. Daffa Maula Rafi<br>3. Nabil Sabdayana Maheza<br>4. Ghaly Firasah Pasha</div>', NULL, '2023-12-17 19:51:48', '2024-04-08 16:25:37', 22, 0),
(41, 1, 18, 'SMKN 9 Surakarta Team 3A', 'post-image/uKGQjSSSBnqaJgl0JW763sJq9rj5xQuuaSaxeVor.png', 'post-image/GHVRw0xQm0qGg0pIQo33CZlqFJCActn1ibywDxQw.png', 'post-image/0RpSEGGHg9v2WgSm4HF0BnaoXKqxywQR5MVvEBF9.png', 'post-image/trl29lCZV0vnlIymQCJ50As0O5QswWOMfJNbjFEv.png', 'https://www.youtube.com/embed/tAnHKLsw9xs?si=lg83odkuLeW3jBz5', 'Office Virtual Reality', '3D Assets for Occupational Health and Safety in the OfficeMade by Team 3A1. Amadio Kevin Prasetyo&nb...', 'smkn-9-surakarta-team-3a', '<div>3D Assets for Occupational Health and Safety in the Office<br>Made by Team 3A<br>1. Amadio Kevin Prasetyo&nbsp;<br>2. Damaris Festus Widyanto&nbsp;<br>3. Evangelishia&nbsp;Khan</div>', NULL, '2023-12-17 20:22:53', '2024-04-08 16:25:37', 16, 0),
(42, 1, 18, 'SMKN 9 Surakarta Team 1B', 'post-image/RMWr5TTv67ejKTznrnrqOpNOS5mjW3R00TeArb8J.png', 'post-image/AfhZ8SVl3e8oao0pvy2xkDNlUgyvGib8h60NuKl8.png', 'post-image/eGaoHxx0Vs1BCMHrVIIcoPWKmhtwtcdC2lwJ9Awx.png', 'post-image/Kw7kU1rIwtTeWz7MOkUcPhOD6WhIgljIOOs2O1sy.png', 'https://www.youtube.com/embed/O3acP9lt30A?si=bAVj7TJgHccBg-gW', 'Hospital Virtual Reality', '3D Assets for Occupational Health and Safety in the HospitalMade by Team 1B1. Ikko Lamena&nbsp;2. Ka...', 'smkn-9-surakarta-team-1b', '<div>3D Assets for Occupational Health and Safety in the Hospital<br>Made by Team 1B<br>1. Ikko Lamena&nbsp;<br>2. Kayana Danendra Sokya<br>3. Meisyira Lufi Nabila&nbsp;<br>4. Muhammad \'Ainun Yaqin&nbsp;<br>5. Muhammad Ilham Ma\'ruf&nbsp;<br>6. Muhammad Zakariyya</div>', NULL, '2023-12-18 00:05:59', '2024-04-08 16:25:15', 12, 0),
(43, 1, 18, 'SMKN 9 Surakarta Team 1A', 'post-image/UdeNNGQTugRHkwKbEoyiZxKYsqnwov82f89JWO5I.png', 'post-image/RmMkcqzEoQ5Bucay1Kaxb2r5LONGw1Wfzh4QoDxF.png', 'post-image/9u0oSZjgXF2ZZfBo7TmuFldFYJdTg8ARVsdHUQtJ.png', 'post-image/Rqas10OyD0KIhZIQAjADtdPFnh3HaCCYOL1ePMQ8.png', 'https://www.youtube.com/embed/zzGOYFPQZ5w?si=g5scxUJjYYZ3Elmi', 'Class Virtual Reality', '3D Assets for Occupational Health and Safety in the ClassroomMade by Team 1A1. Adhiya Prianandaffa2....', 'smkn-9-surakarta-team-1a', '<div>3D Assets for Occupational Health and Safety in the Classroom<br>Made by Team 1A<br>1. Adhiya Prianandaffa<br>2. Afrizal Zhuan Pramono Putro<br>3. Alvida Ana Samsudin<br>4. Ardila Afia Sari<br>5. Eka Lucyana Pratiwi<br>6. Faisal Andhika Pratama</div>', NULL, '2023-12-18 00:08:15', '2024-04-08 16:25:15', 18, 0),
(44, 1, 18, 'SMKN 9 Surakarta Team 2B', 'post-image/C80ptYbz7OBr9lAFw5ItYKilnLLhLuR3Z5dUfY9C.png', 'post-image/1Y3k7hwCfKxKChVwZcLlq86JSW3iRdTvoGlfBXSm.png', 'post-image/lMoSKpD9CnvoAYhQGOK8lgg4u68ZqkIoTSoYIFZP.png', 'post-image/QOwTNjocjFWlVCdoRA1sd6tnNPLlosjsUbcNVDe2.png', 'https://www.youtube.com/embed/-zZ43k4FZkM?si=rN2S9D1V-toWVjH3', 'Class Virtual Reality', '3D Assets for Occupational Health and Safety in the HospitalMade by Team 2BSheri Mahita', 'smkn-9-surakarta-team-2b', '<div>3D Assets for Occupational Health and Safety in the Hospital<br>Made by Team 2B<br>Sheri Mahita</div>', NULL, '2023-12-18 21:10:55', '2024-04-08 16:25:16', 7, 0),
(46, 1, 18, 'SMKN 11 Bandung Team 4A', 'post-image/pCQ8NIgOF5i6ukqJ11SSLe5iYYWFSzEnMk5l8Fu8.png', 'post-image/JqVkry719MOuJKzTR9SDOF7FLcbC2vxNnCbfwGoC.png', 'post-image/pQnbEf9FGnPmRFKfkZAUeNPjE0dWMetyWNqgPKUi.png', 'post-image/9Vfwo3NWb5FtGCU3mdncHhewcGxDktFtiGUcSQXo.png', 'https://www.youtube.com/embed/-tEZOC4Ckcw?si=O8ai2dLUuCPOhfY5', 'Office Virtual Reality', 'Tim 4A – SMK Negeri 11 BandungTim 3D: Wildan, ThariqTim Game Developer: Vanesa, Wafi, ZaenalDeskrips...', 'smkn-11-bandung-team-4a', '<div>Tim 4A – SMK Negeri 11 Bandung<br><br></div><div>Tim 3D: Wildan, Thariq<br><br></div><div>Tim Game Developer: Vanesa, Wafi, Zaenal<br><br></div><div>Deskripsi Proyek: Virtual Reality (VR) Simulasi K3 Kebakaran di Kantor:&nbsp;<br><br></div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Latar Belakang: Virtual reality merupakan sebuah teknologi yang membuat pengguna atau user dapat berinteraksi dengan lingkungan yang ada dalam dunia maya yang disimulasikan oleh komputer, sehingga pengguna merasa berada di dalam lingkungan tersebut. Di dalam bahasa Indonesia virtual reality dikenal dengan istilah realitas maya. Dalam lingkungan kantor, kesadaran akan protokol Keselamatan dan Kesehatan Kerja (K3) sangat penting, terutama terkait dengan risiko kebakaran.&nbsp;</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tujuan Proyek: Proyek ini bertujuan untuk mengembangkan simulasi Virtual Reality (VR) yang ditujukan khusus untuk karyawan kantor agar dapat merespons situasi kebakaran dengan cepat dan efektif. Membangun lingkungan VR yang mensimulasikan kebakaran di kantor dengan tingkat realisme tinggi. Mengajarkan karyawan kantor prinsip-prinsip evakuasi darurat, penggunaan peralatan pemadam kebakaran, dan tindakan pencegahan lainnya. Meningkatkan tingkat persiapan dan respons terhadap situasi darurat di lingkungan kantor.&nbsp;</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fitur Utama: Membuat replika kantor yang akurat dengan ruang kerja, tangga, pintu keluar, dan area umum lainnya. Memungkinkan karyawan untuk berinteraksi dengan peralatan pemadam kebakaran, alarm, dan petunjuk evakuasi. Menyediakan panduan langkah demi langkah untuk evakuasi, termasuk jalur yang aman dan titik pertemuan.</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Manfaat: Meningkatkan pemahaman karyawan tentang risiko kebakaran dan tindakan yang harus diambil dalam situasi darurat. Memberikan pengalaman praktis melalui simulasi yang realistis untuk meningkatkan keterampilan dan respons karyawan.&nbsp;<br><br></div>', NULL, '2023-12-18 21:47:04', '2024-04-24 20:35:12', 17, 0),
(47, 1, 18, 'SMKN 11 Bandung Team 3B', 'post-image/EFx5cDTbak2ZrrzxtFdxYGxoH71wEXOQVMVTSdJi.png', 'post-image/RcrGQDJZBw8Llpzzd9WtonyUBdDeTSnab0Jfkgzy.png', 'post-image/EOkqDAcGbIHvHY3pysdFq4V8IyBJnN6l7sl2bwYX.png', 'post-image/fGcppmj14tXVd54rINzfmMoWfqUd4G6IpM4yxUVR.png', 'https://www.youtube.com/embed/iuTZpgfFx8A?si=uHqrCAKPqfsEgWQN', 'Hospital Virtual Reality', 'VR simulasi kebakaran untuk rumah sakit adalah pengalaman simulasi virtual yang dibuat untuk melatih...', 'smkn-11-bandung-team-3b', '<div>VR simulasi kebakaran untuk rumah sakit adalah pengalaman simulasi virtual yang dibuat untuk melatih para tenaga kesehatan dalam menghadapi keadaan darurat kebakaran di rumah sakit. Simulasi ini mencakup skenario kebakaran, penggunaan peralatan pemadam kebakaran. Ini membantu meningkatkan kesadaran, respons cepat, dan keterampilan dalam situasi darurat.<br>Made by Team 3B<br>1. Raihan Aprillian<br>2. Rangga Ramadhan<br>3. Sahara Nayla Yasmine<br>4. Sella Padilah</div>', NULL, '2023-12-18 21:54:20', '2024-04-24 20:35:10', 13, 0),
(48, 1, 18, 'SMKN 11 Bandung Team 3A', 'post-image/BwxKn9KWqdIElN8AvSBtFvIXtCD2LxS2aplMOnZt.png', 'post-image/MXDMWyDpXpdxXP2aGrctWCcWIy8dLmKRFfSlUSyR.png', 'post-image/FkIugdOKRjmUxljaW8lFJ3tnzsKPzLjgqjSMefQb.png', 'post-image/0xVlWgMkG7Cr4UTmSTlEiVX2xiLs5sa4x33SlJZJ.png', 'https://www.youtube.com/embed/rJokT8pBj5A?si=YX1Gy2KfubtdnDqd', 'Class Virtual Reality', 'VR Training for Occupational Health and Safety in the ClassroomMade by Team 3A1. Muhammad Hafiz Firs...', 'smkn-11-bandung-team-3a', '<div>VR Training for Occupational Health and Safety in the Classroom<br>Made by Team 3A<br>1. Muhammad Hafiz Firsyan<br>2. Muhammad Ridwansyah<br>3. Nadia Nur Syifa<br>4. Najwa Fariq Azzahro</div>', NULL, '2023-12-18 21:58:18', '2024-04-24 20:35:08', 15, 0),
(49, 1, 18, 'SMKN 11 Bandung Team 2A', 'post-image/TFCiBfd7Pfj3XFYHiw2csRCCV0MMgARCOu7Nrpig.png', 'post-image/pfLQJq2JeAWas5QhpNalt9WW5qRWpqSn4Llm30Kj.png', 'post-image/tGjqlrNFyiH9uL4Dd4Y8ejVkZf2TB1RPhG9f8lMF.png', 'post-image/3kvSHjQKDAmPOAsG24WYYd82eNZe1gNx2vYJrDFy.png', 'https://www.youtube.com/embed/zrO6fltSDQY?si=SoZhcNMjkHsqRpI2', 'Office Virtual Reality', 'VR Training for Occupational Health and Safety in the OfficeMade by Team 2A1. Ferdinand Wahyudha2. H...', 'smkn-11-bandung-team-2a', '<div>VR Training for Occupational Health and Safety in the Office<br>Made by Team 2A<br>1. Ferdinand Wahyudha<br>2. Huda Ibnu Firdauz<br>3. Marsya Denanda<br>4. Mivha Zahirah Putri Ismail<br>5. Mochamad Azka Shalihan Buchori</div>', NULL, '2023-12-18 22:02:40', '2024-04-24 20:35:04', 29, 0),
(50, 1, 18, 'SMKN 11 Bandung Team 1B', 'post-image/K5gnxwzjQthSQQStBgZGhDL59heiqzCqQIAsjxT0.png', 'post-image/trWSBFS7KKsxEw93y5JURhHus66KgGzjEgbuD4AT.png', 'post-image/80V4RqGtPAJt3KewVV7X52LXlhScygaCOS30OqnX.png', 'post-image/oUpH0Qsg0Q7iX8lNWZ9raPypkk5gScInZu9PZbkz.png', 'https://www.youtube.com/embed/YqpUcUGFeXg?si=a73RSxauQX22amhs', 'Office Virtual Reality', 'VR Simulasi K3 Kebakaran kantor adalah cara inovatif menggunakan teknologi virtual untuk digunakaan...', 'smkn-11-bandung-team-1b', '<div>VR Simulasi K3 Kebakaran kantor adalah cara inovatif menggunakan teknologi virtual untuk digunakaan saat menghadapi kebakaran. Aplikasi ini memungkinkan latihan respons cepat dan aman, fokus pada evakuasi dan penggunaan alat pemadam kebakaran, meningkatkan kesiapan untuk menghadapi situasi darurat.<br>Made by Team 1B<br>Daffa Nabil Abiyyi<br>Daffa Najwan Fadillah<br>Drian Septami<br>Esta Satria Pratama<br>Fathur Rahman Al-Ghazy</div>', NULL, '2023-12-18 22:05:59', '2024-04-24 20:35:02', 156, 0),
(51, 1, 16, 'Virtual Reality Hospital', 'post-image/P8ECNy5n6Xt1KfdLpicnSclpYTHi2T455EBL06ok.jpg', 'post-image/Y0y7UFSKfy9sdJseEwyACPCCJlNqCdEfYmfOiDHM.jpg', 'post-image/H2mgmKvKaW96gOxkHP442NwCjgRpTSJe9StUCtSi.jpg', 'post-image/OYhxM8Y0oj4vBQMFrBJMW2cDr4Z0oHF5JIBTgFEE.jpg', 'https://www.youtube.com/embed/L15KB5I-vlQ?si=Coe-VlZq3j4GKrPo', 'PK UNGGUL!!', 'Hai kawan disini kami ingin memeperkenalkan karya kami,yaitu hasil dari program kerja PK(Pusat Keung...', 'virtual-reality-hospital-', '<div>Hai kawan disini kami ingin memeperkenalkan karya kami,yaitu hasil dari program kerja PK(Pusat Keunggulan)yang diadakan oleh Telkom!!<br>Selamat menyaksikan!!<br>3D Asset By:<br>-Defanry<br>GameDev:<br>-Nazla<br>-Rahayu<br>Terima kasih!! Salam PK!</div>', NULL, '2023-12-20 03:44:31', '2024-04-24 20:42:53', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_number`, `education`, `city`, `province`, `address`, `instagram`, `twitter`, `linkedin`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Bayu Krisna', 'bayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bayukrisna', NULL, '$2y$10$iHtKhWePJS9obJJxGqx0JO4wbyKxzP2rt3msg2W4ClSKdvbT5ED7S', NULL, '2023-07-26 22:57:58', '2023-07-26 22:57:58', 0),
(2, 'Lesly O\'Hara', 'novella05@example.org', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kmohr', '2023-07-26 22:57:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'orV7qq2OIu', '2023-07-26 22:57:58', '2023-07-26 22:57:58', 0),
(3, 'Mr. Karl Tillman DDS', 'zkuhn@example.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'narciso80', '2023-07-26 22:57:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GMzWMuMaTQ', '2023-07-26 22:57:58', '2023-07-26 22:57:58', 0),
(4, 'Muhammad Ramadhan Muttaqien', 'user@gmail.com', '03242354252', 'SMA 1 Karawang', 'Karawang', 'Jawa barat', 'jl tampomas dalam', NULL, NULL, NULL, 'Dani Ramadhan', NULL, '$2y$10$Rtw/c137a2/lXCHqPpZlGuuaHyaiHN7sCUdesfkDf88rl7o9SZg1a', NULL, '2023-07-26 22:59:11', '2023-08-10 20:26:31', 0),
(5, 'Dani', 'user2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user2@gmail.com', NULL, '$2y$10$fivmGjxUF1CIecMUEJ/xNuEC.sPz5q8EqU77FOHvy9vltWecQwOuu', NULL, '2023-07-31 00:01:50', '2023-07-31 00:01:50', 0),
(7, 'oIqbal Maulana Harahap', 'iqbalmaulana8533@gmail.com', '081333564277', 'Telkom University', 'Bandung', 'Jawa Barat', 'Jl. Bojongsoang', 'khdosjklmeas', 'cjkwholkdq', 'jwhfnlkd', 'iqbal17', NULL, '$2y$10$hnM5fmWySZifzM4NAbEjOOqEGXHAB3H5DclDzWWAygWs7zLquMIsW', NULL, '2023-08-16 00:55:18', '2023-08-16 00:56:52', 0),
(8, 'kunam manuk', 'admin@gmail.com', '0852369625378', 'SMK', 'madura', 'JAWA', 'jawa madura', '@dfdsfd', '@dfdfd', 'dshfosufo', 'admin', NULL, '$2y$10$oyg/G8J0sIQDuCkyEotXee.fN92o1wyXUbiqUT1SiIbWWVQA4/COi', NULL, '2023-09-09 07:57:43', '2023-09-09 07:59:09', 0),
(9, 'SMK Negri 48 Jakarta', 'game@gmail.com', '08129381291928', 'Teknik Multimedia', 'Jakarta', 'Jakarta', 'Klipang Gatot Subroto Jkarta Selatan', 'jakarta', NULL, NULL, 'SMK Negri 48 Jakarta', NULL, '$2y$10$MjAvHmQ381Nzhi5BxiuxV.i2QA0dQypMoWGpH6ALGthlnaz1OrhUy', NULL, '2023-09-18 00:21:30', '2023-09-18 00:23:33', 0),
(10, 'adhe', 'adheichsn01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adhe', NULL, '$2y$10$7gAweFnl45IycpYPpW96dOv26gWTAFZJ7738fC/NAVnJJ0s4wCA6q', NULL, '2023-11-17 11:30:24', '2023-11-17 11:30:24', 0),
(11, 'TryError', 'dedeysf1999@gmail.com', '081321889834', 'Telkom', 'Jakarta Barat', 'DKI Jakarta', 'jalan mandala', 'madiju', NULL, NULL, 'TryError55', NULL, '$2y$10$LvlFF8kzWzp4Vtgjf042keMzS8kDDRBZ3yXD4MYyZ9tPqXYV16.Fi', NULL, '2023-12-11 23:01:09', '2023-12-11 23:02:39', 0),
(12, 'achmad rizki arianto', 'ar.achmadrizky11@gmail.com', '085920363092', 'Universitas Catur Insan Cendekia', 'Cirebon', 'Jawa Barat', 'Jl.Mundu Pesisir', '_rizkyachmad', NULL, NULL, '_rizkiachmad', NULL, '$2y$10$zXtUOUTzdE7FFsMjX4NynOuwY8wurOubu2ccNAqoYOlBIlJeDDRLq', NULL, '2023-12-11 23:01:22', '2023-12-11 23:03:59', 0),
(13, 'Rezandra Rizky Irianto', 'rezandrarizkyirianto@gmail.com', '0895340797816', 'Universitas Pendidikan Indonesia', 'Bandung', 'Jawa Barat', 'Komp. Puri Budi Asri Blok J No.1, Cihanjuang, Bandung Barat', 'rezandrarizkyirianto', NULL, NULL, 'REZANDRA', NULL, '$2y$10$uIJNrTXs4GUPxnmk2fqu3OTXe.SWYorAvgoVJSsSTsSP/HfOd5UFK', NULL, '2023-12-11 23:08:25', '2023-12-11 23:10:34', 0),
(14, 'test1', 'vihap55409@cindalle.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test1', NULL, '$2y$10$9ViTBm.e0/qOcyP5lRB9f.D5fRIcICt7/jNVp6G7dtBzKwaoeWlLG', NULL, '2023-12-13 18:58:33', '2023-12-13 18:58:33', 0),
(15, '12345678', 'ryzzsmurf001@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345678', NULL, '$2y$10$bISDLWtr8kxppAVZH40B9.7sM/duV.guKQ2mAXKrbeOAu7IDRAyze', NULL, '2023-12-13 18:59:10', '2023-12-13 18:59:10', 0),
(16, 'defanry adyan zulfikar', 'aaroonvive@gmail.com', '+6285642168166', 'SMKN2 PURWOKERTO', 'purwokerto', 'jawa tengah', 'Jln.Redjo Desa dampit Kel.Dukuhwaluh Kab.banyumas Kec.Kembaran', 'https://www.instagram.com/depnkn?igshid=OGQ5ZDc2ODk2ZA==', NULL, NULL, 'defan', NULL, '$2y$10$3h7cIFCY9ShFNaB3/wRB5e9nIPLlzJSyQEqjcT.LxajN3W9kquhrC', NULL, '2023-12-13 19:01:31', '2023-12-20 03:21:55', 0),
(17, 'Sella Padillah', 'fadillahsellafadillah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sella', NULL, '$2y$10$E6Qsgfc8M2b6s1VbAM1G4e2ecsyAxLy8a7.ypb9BSSuMczLuYQHgW', NULL, '2023-12-13 20:24:34', '2023-12-13 20:24:34', 0),
(18, 'SMK Pusat Keunggulan', 'telkomsmkpk23@gmail.com', '088888888888', 'SMK PK', 'Jakarta Barat', 'DKI. Jakarta', 'RQGV+3FG, Letjen S. Parman St, RT.1/RW.8, Tomang, Grogol petamburan, West Jakarta City, Jakarta 11440.', NULL, NULL, NULL, 'telkom.corpu', NULL, '$2y$10$2X42rx0QbfLwwRmFbgjA5.ew6Wt2SGDLmwzhHKteNpRrkgCrXyi.a', NULL, '2023-12-14 01:08:39', '2023-12-15 02:26:16', 0),
(19, 'Fathur Rahman Al Ghazy', 'ghazyfathur57@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'turpat', NULL, '$2y$10$A1fVRcfEmbYD5t64GQyL0OdCB4EIY4dmpO7hUBCthqcE4CxWCr7Qa', NULL, '2023-12-14 03:00:35', '2023-12-14 03:00:35', 0),
(20, 'HEHE', 'hehehe@gmail.com', '0822121239182', 'SMA', 'JAKARTA SELATAN', 'DKI JAKARTA', 'JALAN KEBAYORAN LAMA', NULL, NULL, NULL, 'hehehe', NULL, '$2y$10$p5.0CdFiw0TwJX/kcg6exuaw476ud3/3Vkfaq/5HJYyZTmT20AXUW', NULL, '2023-12-18 21:07:23', '2023-12-18 21:08:44', 0),
(21, 'NAJWA FARIQ', 'najwafariq@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AZ ZAHRO', NULL, '$2y$10$Pkq9ge1I7cU.IaSgvGp/ZuN6tEmtaQwyOdZfz/hIBEc71PZBOAHva', NULL, '2023-12-20 02:04:39', '2023-12-20 02:04:39', 0),
(22, 'Wafi Muhammad Zain', 'wmz.zzain@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wfmzain', NULL, '$2y$10$Q0XYG/uNcGoeH6BW9HdqOOh3QvDVA7GLV/ag9ob2EJJNPAo79kLme', NULL, '2023-12-20 02:13:46', '2023-12-20 02:13:46', 0),
(23, 'Faritzh Suffiyan Fiqriee', 'faritzhsuffiyanfiqriee@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Faritzh', NULL, '$2y$10$mJz5H0H8UDAFtA5WIgoA2eZ8U7kPmA5T7YNEHtb5Z6EbYfXW0x98i', NULL, '2023-12-22 19:36:46', '2023-12-22 19:36:46', 0),
(24, 'RIJAL PANDYAMURTI', 'rijalpadyamurti@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yukinar', NULL, '$2y$10$lLgJCcZLg50YkFhQsuPzrO5BDP5j/1SsAYj6L0BHAzLsp3QirkNe2', NULL, '2023-12-24 00:05:33', '2023-12-24 00:05:33', 0),
(25, 'yogi harta', 'hartayogi4@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yogi', NULL, '$2y$10$bhtKX/qjrDJRk3V94rGpru/ptpD6H0H.cCgkQEqF7.uviZTV8LoGS', NULL, '2024-03-06 05:51:59', '2024-03-06 05:51:59', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

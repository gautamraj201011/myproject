-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 05:40 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_details`
--

CREATE TABLE `block_details` (
  `blockid` int(10) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateid` int(11) NOT NULL,
  `block` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `block_details`
--

INSERT INTO `block_details` (`blockid`, `state`, `stateid`, `block`, `created_at`, `updated_at`) VALUES
(1, 'bihar', 1, 'islampur', NULL, NULL),
(2, 'bihar', 1, 'hilsa', NULL, NULL),
(3, 'bihar', 1, 'ekangersarai', NULL, NULL),
(4, 'bihar', 1, 'rajgir', NULL, NULL),
(5, 'bihar', 1, 'biharsharif', NULL, NULL),
(6, 'bihar', 1, 'fatuhan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `candidateid` int(11) NOT NULL,
  `candidatename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `constituencyid` int(10) UNSIGNED NOT NULL,
  `partyid` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`candidateid`, `candidatename`, `electionid`, `constituencyid`, `partyid`, `vote`, `created_at`, `updated_at`) VALUES
(1, 'manoj', 1, 1, 1, 2, NULL, NULL),
(2, 'manu', 1, 1, 2, 5, NULL, NULL),
(3, 'mani', 1, 2, 2, 2, NULL, NULL),
(4, 'maniK', 1, 2, 3, 2, NULL, NULL),
(5, 'sanoj', 1, 3, 3, 0, NULL, NULL),
(6, 'pankaj', 1, 3, 4, 1, '2016-04-18 12:33:41', '2016-04-18 12:33:41'),
(7, 'rupesh', 1, 3, 5, 0, '2016-04-19 04:22:56', '2016-04-19 04:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `constituency_block_details`
--

CREATE TABLE `constituency_block_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `constituencyid` int(10) UNSIGNED NOT NULL,
  `block` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `constituency_block_details`
--

INSERT INTO `constituency_block_details` (`id`, `electionid`, `constituencyid`, `block`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'islampur', NULL, NULL),
(2, 1, 1, 'hilsa', NULL, NULL),
(3, 1, 2, 'ekangersarai', NULL, NULL),
(4, 1, 2, 'rajgir', NULL, NULL),
(5, 1, 3, 'biharsharif', NULL, NULL),
(6, 1, 3, 'fatuhan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `constituency_details`
--

CREATE TABLE `constituency_details` (
  `constituencyid` int(10) UNSIGNED NOT NULL,
  `constituencyname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `constituency_details`
--

INSERT INTO `constituency_details` (`constituencyid`, `constituencyname`, `electionid`, `created_at`, `updated_at`) VALUES
(1, 'nalanda', 1, NULL, NULL),
(2, 'gaya', 1, NULL, NULL),
(3, 'patliputra', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `electionid` int(10) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`electionid`, `year`, `status`, `state`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 2016, 'state', 'bihar', '2016-04-05', '2016-04-07', NULL, NULL),
(2, 2017, 'state', 'West Bengal', '2017-04-16', '2017-05-16', '2016-04-18 12:46:55', '2016-04-18 12:46:55'),
(3, 2021, 'state', 'punjab', '2017-05-16', '2017-06-22', '2016-04-18 12:51:56', '2016-04-18 12:51:56'),
(6, 2019, 'state', 'Odisha', '2017-04-16', '2017-05-16', '2016-04-19 04:21:34', '2016-04-19 04:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_15_165055_create_elections_table', 2),
('2016_04_16_073618_create_block_details_table', 3),
('2016_04_15_165548_create_constituency_details_table', 4),
('2016_04_15_165913_create_constituency_block_details_table', 5),
('2016_04_15_170030_create_parties_table', 6),
('2016_04_15_170740_create_candidate_details_table', 7),
('2016_04_15_203511_create_voter_details_table', 8),
('2016_04_16_072429_create_voting_statuses_table', 9),
('2016_04_21_100345_create_voting_statuses_table', 10),
('2016_04_21_101014_create_voting_statuses_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `partyid` int(11) NOT NULL,
  `partyname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partysymbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`partyid`, `partyname`, `partysymbol`, `created_at`, `updated_at`) VALUES
(1, 'bjp', 'lotus', NULL, NULL),
(2, 'rjd', 'lalten', NULL, NULL),
(3, 'ljp', 'hut', NULL, NULL),
(4, 'congress', 'palm', NULL, NULL),
(5, 'TMC', 'Flower', '2016-04-18 10:57:59', '2016-04-18 10:57:59'),
(6, 'CPM', 'Hathoda', '2016-04-18 11:00:14', '2016-04-18 11:00:14'),
(7, 'AAP', 'Jhadu', '2016-04-18 11:02:55', '2016-04-18 11:02:55'),
(8, 'SP', 'Cycle', '2016-04-18 11:13:13', '2016-04-18 11:13:13'),
(10, 'SPP', 'EGG', '2016-04-19 05:04:17', '2016-04-19 05:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voter_details`
--

CREATE TABLE `voter_details` (
  `voterid` int(10) UNSIGNED NOT NULL,
  `votername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voter_details`
--

INSERT INTO `voter_details` (`voterid`, `votername`, `dob`, `state`, `block`, `created_at`, `updated_at`) VALUES
(1, 'ramadheer', '1991-03-18', 'bihar', 'islampur', NULL, NULL),
(2, 'manoj', '1996-04-13', 'bihar', 'islampur', NULL, NULL),
(3, 'pankaj', '1996-07-13', 'bihar', 'hilsa', NULL, NULL),
(4, 'shalu', '1994-07-13', 'bihar', 'rajgir', NULL, NULL),
(5, 'sonu', '1994-07-10', 'bihar', 'biharsharif', NULL, NULL),
(6, 'saurav', '1990-07-10', 'bihar', 'hilsa', NULL, NULL),
(7, 'sanjeev', '1996-07-10', 'bihar', 'ekangersarai', NULL, NULL),
(8, 'sanju', '1988-07-10', 'bihar', 'fatuhan', NULL, NULL),
(9, 'manjeet', '1978-10-10', 'West Bengal', 'Asansol', '2016-04-18 13:18:38', '2016-04-18 13:18:38'),
(10, 'manjeet', '1978-10-10', 'West Bengal', 'Asansol', '2016-04-18 13:19:34', '2016-04-18 13:19:34'),
(11, 'manjeet', '1978-10-10', 'West Bengal', 'Asansol', '2016-04-18 13:23:52', '2016-04-18 13:23:52'),
(12, 'manjeet', '1978-10-10', 'West Bengal', 'Asansol', '2016-04-18 13:24:49', '2016-04-18 13:24:49'),
(13, 'manjeet', '1978-10-10', 'West Bengal', 'Asansol', '2016-04-18 13:25:07', '2016-04-18 13:25:07'),
(14, 'Sohini', '1978-08-09', 'West Bengal', 'Asansol', '2016-04-18 14:46:19', '2016-04-18 14:46:19'),
(15, 'gautam', '1992-11-02', 'bihar', 'islampur', '2016-04-19 04:23:43', '2016-04-19 04:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `voting_statuses`
--

CREATE TABLE `voting_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `voterid` int(10) UNSIGNED NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `token` int(11) NOT NULL,
  `Estatus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voting_statuses`
--

INSERT INTO `voting_statuses` (`id`, `voterid`, `electionid`, `status`, `token`, `Estatus`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 5, 0, NULL, NULL),
(2, 2, 1, 5, 55786, 0, NULL, NULL),
(3, 3, 1, 4, 56242, 0, NULL, NULL),
(4, 4, 1, 0, 120, 0, NULL, NULL),
(5, 5, 1, 0, 16, 1, NULL, NULL),
(6, 6, 1, 0, 116, 0, NULL, NULL),
(7, 7, 1, 0, 716, 0, NULL, NULL),
(8, 8, 1, 0, 0, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_details`
--
ALTER TABLE `block_details`
  ADD PRIMARY KEY (`blockid`),
  ADD KEY `block_details_stateid_index` (`stateid`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`electionid`,`partyid`,`constituencyid`),
  ADD KEY `candidate_details_constituencyid_foreign` (`constituencyid`),
  ADD KEY `candidate_details_partyid_foreign` (`partyid`);

--
-- Indexes for table `constituency_block_details`
--
ALTER TABLE `constituency_block_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constituency_block_details_electionid_foreign` (`electionid`),
  ADD KEY `constituency_block_details_constituencyid_foreign` (`constituencyid`);

--
-- Indexes for table `constituency_details`
--
ALTER TABLE `constituency_details`
  ADD PRIMARY KEY (`constituencyid`),
  ADD KEY `constituency_details_electionid_foreign` (`electionid`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`electionid`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`partyid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voter_details`
--
ALTER TABLE `voter_details`
  ADD PRIMARY KEY (`voterid`);

--
-- Indexes for table `voting_statuses`
--
ALTER TABLE `voting_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voting_statuses_voterid_foreign` (`voterid`),
  ADD KEY `voting_statuses_electionid_foreign` (`electionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block_details`
--
ALTER TABLE `block_details`
  MODIFY `blockid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `constituency_block_details`
--
ALTER TABLE `constituency_block_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `constituency_details`
--
ALTER TABLE `constituency_details`
  MODIFY `constituencyid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `electionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `voter_details`
--
ALTER TABLE `voter_details`
  MODIFY `voterid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `voting_statuses`
--
ALTER TABLE `voting_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD CONSTRAINT `candidate_details_constituencyid_foreign` FOREIGN KEY (`constituencyid`) REFERENCES `constituency_details` (`constituencyid`),
  ADD CONSTRAINT `candidate_details_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`),
  ADD CONSTRAINT `candidate_details_partyid_foreign` FOREIGN KEY (`partyid`) REFERENCES `parties` (`partyid`);

--
-- Constraints for table `constituency_block_details`
--
ALTER TABLE `constituency_block_details`
  ADD CONSTRAINT `constituency_block_details_constituencyid_foreign` FOREIGN KEY (`constituencyid`) REFERENCES `constituency_details` (`constituencyid`),
  ADD CONSTRAINT `constituency_block_details_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`);

--
-- Constraints for table `constituency_details`
--
ALTER TABLE `constituency_details`
  ADD CONSTRAINT `constituency_details_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`);

--
-- Constraints for table `voting_statuses`
--
ALTER TABLE `voting_statuses`
  ADD CONSTRAINT `voting_statuses_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`),
  ADD CONSTRAINT `voting_statuses_voterid_foreign` FOREIGN KEY (`voterid`) REFERENCES `voter_details` (`voterid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 03:07 PM
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
-- Database: `cs_messaging_app_db`
--

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `message_body` text NOT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `priority` tinyint(1) DEFAULT 0,
  `response` text DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message_body`, `status`, `priority`, `response`, `agent_id`, `created_at`, `updated_at`) VALUES
(1, '208', 'So it means if u pay ua loan before the due date is a disadvantage the last time I paid earlier it was stil', 'pending', 0, 'WE will get beck to you soon', NULL, NULL, '2024-01-19 07:10:48'),
(2, '208', 'The dates of payment are still indicated n no money sent', 'replied', 0, 'Replied', NULL, NULL, '2024-01-19 07:10:40'),
(3, '208', '  Why was my application rejected', 'replied', 0, 'These are main foru major keys', NULL, NULL, '2024-01-19 07:10:36'),
(4, '208', ' Hi branch I requested my number to remain the one I was using there before 0720225243 I don\'t understand', 'replied', 0, 'will get update veryy soon', NULL, NULL, '2024-01-19 03:07:10'),
(5, '218', 'I said ill pay 5th esther camoon.. Infact you guys took a week to give me a loan and just cant wait 4day', 'pending', 0, NULL, NULL, NULL, '2024-01-19 07:10:53'),
(6, '218', 'I will pay on sunday of 5th and i will pay all the amount.. If that is allowed??', 'pending', 1, '', NULL, NULL, '2024-01-19 07:11:04'),
(7, '218', ' I have a late source of salary i expected but i will pay next', 'pending', 1, '', NULL, NULL, '2024-01-19 07:11:07'),
(8, '9444', ' I will clear my loan before 15nth,kindly bear with me.January was tough.', 'pending', 1, '', NULL, NULL, '2024-01-19 07:11:12'),
(9, '9676', ' Hi can i get the batch number', 'pending', 1, '', NULL, NULL, '2024-01-19 07:11:14'),
(10, '676', ' Hi can i get the batch number please !', 'pending', 1, '', NULL, NULL, '2024-01-19 07:11:18'),
(11, '779', ' I Still not satisfied. I am still asking for a review. My number is 0723506931 or at least give me a clear ', 'pending', 0, '', NULL, NULL, NULL),
(12, '779', ' My number is 0723506931. please have a review of my loan. I haven\'t defaulted and I have cleared my', 'pending', 0, '', NULL, NULL, NULL),
(13, '779', ' Hi branch I have just cleared my loan which was due today but unfortunately you have denied me. I h', 'pending', 0, '', NULL, NULL, NULL),
(14, '1092', 'I got only this number please help me', 'pending', 0, '', NULL, NULL, NULL),
(15, '1092', ' My number is 0790898526 help me to validate it please so i can be able to access the loan', 'pending', 0, '', NULL, NULL, NULL),
(16, '1155', ' Hello,our salaries have been delayed but hopefully will be paid today or tomorrow.', 'pending', 0, '', NULL, NULL, NULL),
(17, '1241', 'Thanks Branch for being understanding ..have cleared my loan....God bless you', 'pending', 0, '', NULL, NULL, NULL),
(18, '1245', ' Hi, kindly can i have the batch number', 'pending', 0, '', NULL, NULL, NULL),
(19, '1245', 'I have to clear by tomorrow please send me the batch number', 'pending', 0, '', NULL, NULL, NULL),
(20, '1245', 'I was at CRB offices and they haven\'t received your clearance batch number. Please send it to me so I c', 'pending', 0, '', NULL, NULL, NULL),
(21, '1354 ', ' No need just expunge my details from the system', 'pending', 0, '', NULL, NULL, NULL),
(22, '1354', ' Thank you for the loans i have benefitted from \"the branch\". Kindly expunge my details from your syst', 'pending', 0, '', NULL, NULL, NULL),
(23, '1354', ' My loan has been rejected because it was rejected recently, after 14days suspension am being suspen', 'pending', 0, '', NULL, NULL, NULL),
(24, '1481', ' Hello. Why can\'t you make the loan payment options more... like say a choice between weekly and mo', 'pending', 0, '', NULL, NULL, NULL),
(25, '2035', 'Ok', 'pending', 0, '', NULL, NULL, NULL),
(26, '2035', 'Hi,sorry for the short text however Someone used my I.D and did register a line and took mshwari loan', 'pending', 0, '', NULL, NULL, NULL),
(27, '2035', 'Someone used', 'pending', 0, '', NULL, NULL, NULL),
(28, '2035', 'What am i supposed to do after paying in order to re', 'pending', 0, '', NULL, NULL, NULL),
(29, '2126 ', 'Any response to my above queries please???', 'pending', 0, '', NULL, NULL, NULL),
(30, '2126', ' Kindly advise what sms are not in my phone....', 'pending', 0, '', NULL, NULL, NULL),
(31, '2126', 'And have no current loan... Im upto date ...', 'pending', 0, '', NULL, NULL, NULL),
(32, '2126', 'If there is a way u can check the mpesa sms in my phone.. Check and see all transactions sms are avail', 'pending', 0, '', NULL, NULL, NULL),
(33, '2126 ', 'All my Mpesa sms are stored in sim card for long period ...and none has been deleted...', 'pending', 0, '', NULL, NULL, NULL),
(34, '2126 ', ' What SMSs should i accumulate on my phone?', 'pending', 0, '', NULL, NULL, NULL),
(35, '2126', 'Why has my loan application been rejected and i have never defaulted on any repayments and l alway', 'pending', 0, '', NULL, NULL, NULL),
(36, '2126', ' Why has loan been rejected?', 'pending', 0, '', NULL, NULL, NULL),
(37, '2517', 'Ok thanks', 'pending', 0, '', NULL, NULL, NULL),
(38, '2517', ' I forwarded my certificate of clearance from trans union and even you replied that my account was cle', 'pending', 0, '', NULL, NULL, NULL),
(39, '2780', 'I cant access your services', 'pending', 0, '', NULL, NULL, NULL),
(40, '2788', ' ok', 'pending', 0, '', NULL, NULL, NULL),
(41, '2788', 'I promise to finish my loan by this month', 'pending', 0, '', NULL, NULL, NULL),
(42, '2884', ' The messages are on my line...', 'pending', 0, '', NULL, NULL, NULL),
(43, '2884', 'I hv my transaction messages with me y am i not approved to this time? I urgently need the cash', 'pending', 0, '', NULL, NULL, NULL),
(44, '2926', ' Hi! I hope this will take you well, I cleared my loan', 'pending', 0, '', NULL, NULL, NULL),
(45, '2983', 'Another 7 days what! For the third time now.', 'pending', 0, '', NULL, NULL, NULL),
(46, '3056', ' Hey Branch i am sorry for being late in payment bt i will pay on Monday 6/2/2017 bt the reason of late', 'pending', 0, '', NULL, NULL, NULL),
(47, '3091', ' I\'ll pay the 32/= together with Monday\'s 566/=', 'pending', 0, '', NULL, NULL, NULL),
(48, '3112', ' I appreciate for da follow-up u made tanx alot', 'pending', 0, '', NULL, NULL, NULL),
(49, '3112', ' How long does it for me to get da batch number cz hve cleared ma loan on 31st', 'pending', 0, '', NULL, NULL, NULL),
(50, '3112', ' Within aweek,specifically when plz', 'pending', 0, '', NULL, NULL, NULL),
(51, '3112', ' 72hrs', 'pending', 0, '', NULL, NULL, NULL),
(52, '3112', ' Hope da clearance last for 72grs', 'pending', 0, '', NULL, NULL, NULL),
(53, '3112', '  Dis is keynan did u shared my details with crb', 'pending', 0, '', NULL, NULL, NULL),
(54, '3112', 'Can I get batch number plz', 'pending', 0, '', NULL, NULL, NULL),
(55, '3112', ' Can I have direct contact thus I keep untouched with da concern authorities', 'pending', 0, '', NULL, NULL, NULL),
(56, '3112', ' Am still getting from another financial institutions dat I owe branch 1068 n have already paid dat amou', 'pending', 0, '', NULL, NULL, NULL),
(57, '3112', ' Dis is keynan,can u kindly forward ma details to crb hve got stucked somewhere', 'pending', 0, '', NULL, NULL, NULL),
(58, '3170', ' sorry for that but i am still searching for the money but will be paying the loan soon as the deadline i h', 'pending', 0, '', NULL, NULL, NULL),
(59, '3643', 'Alright. Thanks.', 'pending', 0, '', NULL, NULL, NULL),
(60, '3701', 'Do I have any other loan that I didn\'t pay', 'pending', 0, '', NULL, NULL, NULL),
(61, '3701', ' Why don\'t you want to give me a loan', 'pending', 0, '', NULL, NULL, NULL),
(62, '3725', ' Sorry for the delay i block my mpesa pin but now its okey will pay by end of today', 'pending', 0, '', NULL, NULL, NULL),
(63, '3775 ', ' Hi Branch, why do i have the text that my payment is late while its due today? 3feb 2017', 'pending', 0, '', NULL, NULL, NULL),
(64, '3897', '## Thanks for understanding my situation I look forward to settling my loans on the time I have promised', 'pending', 0, '', NULL, NULL, NULL),
(65, '3897', ' I\'m expecting to clear by date 8/2/2017', 'pending', 0, '', NULL, NULL, NULL),
(66, '3897', ' I\'ve settled many of your loans before please don\'t spoil my credit report', 'pending', 0, '', NULL, NULL, NULL),
(67, '3897', ' Hi branch kindly let me sort out the issue in a few days... I remain committed to settling my loans on ti', 'pending', 0, '', NULL, NULL, NULL),
(68, '3900', ' Thanks branch had missed this', 'pending', 0, '', NULL, NULL, NULL),
(69, '4178', ' Am sorry nlichelewa kulipa loan guys siyo kawaida yangu kuchelewesha lakini ni accident nlioata na m', 'pending', 0, '', NULL, NULL, NULL),
(70, '4373', 'When am I qualified to get another loan', 'pending', 0, '', NULL, NULL, NULL),
(71, '4442', ' Hi! Am sure acc details are correct. Have not received the loan yet...', 'pending', 0, '', NULL, NULL, NULL),
(72, '4442', ' I require a feedback plz', 'pending', 0, '', NULL, NULL, NULL),
(73, '4442 ', 'Did sent the C Certificate', 'pending', 0, '', NULL, NULL, NULL),
(74, '4481', ' R u guys going to punish me for ever?', 'pending', 0, '', NULL, NULL, NULL),
(75, '4522', ' Meanings', 'pending', 0, '', NULL, NULL, NULL),
(76, '4708', ' I cleared last year for how long', 'pending', 0, '', NULL, NULL, NULL),
(77, '5000', 'Hi Branch, am among your best beneficiaries of the Tala platform. However, I have hit a \'dead-end\' sit', 'pending', 0, '', NULL, NULL, NULL),
(78, '5297', ' it can\'t be 1264 had paid 400 earlier pls update your systems and give the right balance', 'pending', 0, '', NULL, NULL, NULL),
(79, '5480', ' Hi branch, Yes I have a problem which I thought it could have been through by now but it\'s not throug', 'pending', 0, '', NULL, NULL, NULL),
(80, '5696', ' Iam sending the full amount today just got busy', 'pending', 0, '', NULL, NULL, NULL),
(81, '5724', ' Some lady from brunch calls me n starts to abuse me just because i said av paid a total of 1000 which s', 'pending', 0, '', NULL, NULL, NULL),
(82, '6054', ' Hi, l have paid my loan on time but, my loan has been rejected. Why has it been rejected?', 'pending', 0, '', NULL, NULL, NULL),
(83, '6326', ' Can\'t login', 'pending', 0, '', NULL, NULL, NULL),
(84, '6515', 'The weekly text rem are a nuisance', 'pending', 0, '', NULL, NULL, NULL),
(85, '6515', ' The weekly text rimindance', 'pending', 0, '', NULL, NULL, NULL),
(86, '6515', '  Hi..please I can pay my loan in a month once..adjust your payment schedule and give options whether', 'pending', 0, '', NULL, NULL, NULL),
(87, '6884', ' OK I have paid all of it', 'pending', 0, '', NULL, NULL, NULL),
(88, '7140', ' Why cant i have a loan now yet i have cleared my previous loan', 'pending', 0, '', NULL, NULL, NULL),
(89, '7457', ' How do I get a loan', 'pending', 0, '', NULL, NULL, NULL),
(90, '7725', '# Dear Branch, sorry for late payment of my loan. This is due to unavoidable circumstances but I strive to', 'pending', 0, '', NULL, NULL, NULL),
(91, '7812', ' Hi Branch,by 7th i promise to make some payment to reduce my loan.', 'pending', 0, '', NULL, NULL, NULL),
(92, '7837', ' So in short because i don\'t have the SMS that the e reason.', 'pending', 0, '', NULL, NULL, NULL),
(93, '7837', ' Why was my loan request rejected and i have been paying on time', 'pending', 0, '', NULL, NULL, NULL),
(94, '7944', ' Dear Branch,Am experiencing difficult in payments but will deposit tomorrow evening.Thank you', 'pending', 0, '', NULL, NULL, NULL),
(95, '8014', 'Hi ,whats the 7more days penalty for ?be frank n specify.I paid the previous loan on time.', 'pending', 0, '', NULL, NULL, NULL),
(96, '8101', 'I have been trying this app for a long period... When i apply.. Am told try after 7 days...iy has become a', 'pending', 0, '', NULL, NULL, NULL),
(97, '8125', ' Will pay be4 15th', 'pending', 0, '', NULL, NULL, NULL),
(98, '8392', 'I been with u For long an I made amistake but I won\'t repeat it agian I was having a sick ness....', 'pending', 0, '', NULL, NULL, NULL),
(99, '8647', 'Sorry,I meant December 2016', 'pending', 0, '', NULL, NULL, NULL),
(100, '8647', '  Hi Branch...now my Application was rejected recently on 1st Feb 2017. I had borrowed Sh.25,000 in De\r\ne last time I paid earlier it was still a problem\r\ne before 0720225243 I don\'t understand how it changed\r\nme a loan and just cant wait 4days for me to ', 'pending', 0, '', NULL, NULL, NULL);

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
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(37, '2019_08_19_000000_create_failed_jobs_table', 1),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2024_01_17_173541_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'AgentNiles', 'agentniles@gmail.com', NULL, '', NULL, NULL, NULL),
(2, 'AgentAsmine', 'agentasmine@gmail.com', NULL, '', NULL, NULL, NULL),
(3, 'AgentGibson', 'agentgibson@gmail.com', NULL, '', NULL, NULL, NULL),
(4, 'AgentDickson', 'agentdickson@gmail.com', NULL, '', NULL, NULL, NULL),
(5, 'AgentMichael', 'agentmichael@gmail.com', NULL, '', NULL, NULL, NULL),
(6, 'AgentPhilips', 'agentphilips@gmail.com', NULL, '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_agent_id_foreign` (`agent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
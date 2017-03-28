-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2017 at 04:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pass_gen`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `usid` varchar(50) NOT NULL,
  `full_name` text,
  `mob_no` varchar(20) DEFAULT NULL,
  `level` text NOT NULL,
  `password` varchar(62) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`usid`, `full_name`, `mob_no`, `level`, `password`) VALUES
('demo', 'demo demo', '86467', 'User', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('massanjal', 'Lawrance Massanja', '0717455043', 'User', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `id` int(5) UNSIGNED NOT NULL,
  `pass` varchar(55) NOT NULL,
  `purpose` text NOT NULL,
  `usid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`id`, `pass`, `purpose`, `usid`) VALUES
(1, 'cXDdRFDk', '', ''),
(2, 'bMebdJtA', '', ''),
(3, 'UwPpHtuj', '', ''),
(4, 'UIaQTthj', '', ''),
(5, 'aqMXNxzi', 'Twitter', 'massanjal'),
(6, 'VjGGAfxY', '', ''),
(7, 'tFRhPUjH', 'Facebook', 'massanjal'),
(8, 'GYCJbPla', '', ''),
(9, 'ffJIhygD', '', ''),
(10, 'zwYFobAP', 'Twitter', 'massanjal'),
(11, 'qOnbBIAk', '', ''),
(12, 'YrXyWNbK', '', ''),
(13, 'AmCJABYO', '', ''),
(14, 'YJwvHeju', 'Instagram', 'massanjal'),
(15, 'GtZTIJYp', '', ''),
(16, 'hRTJNMNJ', '', ''),
(17, 'SvIFTtoJ', '', ''),
(18, 'LOFgagrO', '', ''),
(19, 'NFWxQyov', '', ''),
(20, 'wDzVrZgy', '', ''),
(21, 'aZDnysLB', '', ''),
(22, 'oEAMwNoo', '', ''),
(23, 'YOHYkakB', '', ''),
(24, 'uxLSBUws', 'Gmail', 'massanjal'),
(25, 'UIMEvzBf', '', ''),
(26, 'yChmwuXk', '', ''),
(27, 'XEvVHiQS', 'Instagram', 'massanjal'),
(28, 'otMJXpRx', '', ''),
(29, 'ZszGXBKB', '', ''),
(30, 'RmKAYXdq', '', ''),
(31, 'CxJNbBPs', '', ''),
(32, 'PdOGowPD', '', ''),
(33, 'TCaADOOK', 'Gmail', 'massanjal'),
(34, 'KmvMQSlZ', '', ''),
(35, 'tfwvTHPw', '', ''),
(36, 'KuCHUelj', '', ''),
(37, 'yHSXrGcg', '', ''),
(38, 'PfGmYFeVJpYwtnMJgdDtwLhgRAyzeUeacc', '', ''),
(39, 'xMnLZRUV', '', ''),
(40, 'upBoPXvg', 'Gmail', 'massanjal'),
(41, 'DfmgdYIo', '', ''),
(42, 'ZSpnaZOx', '', ''),
(43, 'XuiOguMH', '', ''),
(44, 'BMTvWGWC', 'Vine', 'massanjal'),
(45, 'wiqvmSeh', '', ''),
(46, 'aCNKxyPV', '', ''),
(47, 'SmYsAcFc', '', ''),
(48, 'LTJoGvje', '', ''),
(49, 'WfPKsury', '', ''),
(50, 'eYFiBNfN', 'Aris', 'massanjal'),
(51, 'ytUIZRNl', '', ''),
(52, 'CHzKjBHM', '', ''),
(53, 'OgoGHjDL', '', ''),
(54, 'VcMQcUfE', '', ''),
(55, 'EaaheeIQ', '', ''),
(56, 'LDBxwsZo', '', ''),
(57, 'NNNJzMor', '', ''),
(58, 'hXTmFnBx', '', ''),
(59, 'MFboFxkc', '', ''),
(60, 'nAHYAfyb', '', ''),
(61, 'DOfYdlXd', '', ''),
(62, 'koQiXegK', '', ''),
(63, 'BZMYzZib', '', ''),
(64, 'benLXuRC', '', ''),
(65, 'FlxWGyBq', '', ''),
(66, 'BeehbXNX', '', ''),
(67, 'aLTVgVql', '', ''),
(68, 'BROvrppj', '', ''),
(69, 'pYb', '', ''),
(70, 'd', '', ''),
(71, 'e', '', ''),
(72, 'E', '', ''),
(73, 'Z', '', ''),
(74, 'N', '', ''),
(75, 'N', '', ''),
(76, 'oIgKWuXxWHuLzhkSOOkRmNWIfxTtOcSGitNdMIbq', '', ''),
(77, '', '', ''),
(78, 'dUZUaMTBOpAMZxSIXKVwgjeAoiuvoEUtZDnKWXMBAoQrhAhdaVp', '', ''),
(79, 'skxKl', '', ''),
(80, 'vVencDkb', '', ''),
(81, 'taAx', '', ''),
(82, 'WoO', '', ''),
(83, 'aeQA', '', ''),
(84, 'msqBBVvX', '', ''),
(85, 'kMnvyHcO', '', ''),
(86, 'RHUJtACv', '', ''),
(87, 'OfJbNQUY', '', ''),
(88, 'xjotPaFf', '', ''),
(89, 'hyFohlkq', '', ''),
(90, 'FvaNgMnC', '', ''),
(91, 'mghwsiZA', '', ''),
(92, 'jvIMwUzP', '', ''),
(93, 'NhVHOaPt', '', ''),
(94, 'lDgzeSOT', '', ''),
(95, 'KHkNCCwz', '', ''),
(96, 'ncviCDWj', '', ''),
(97, 'dUBdFNzt', '', ''),
(98, 'KoJWLqSz', '', ''),
(99, 'gQICgabQ', '', ''),
(100, 'RWvYQuhN', '', ''),
(101, 'UOyQxPZe', '', ''),
(102, 'OHknBgkE', '', ''),
(103, 'dJOvHQFG', '', ''),
(104, 'gDqmrRLJ', '', ''),
(105, 'AQVEvWEq', '', ''),
(106, 'auINRcQU', '', ''),
(107, 'UoZGEirj', '', ''),
(108, 'jpyAnyFn', '', ''),
(109, 'LveyyRnN', '', ''),
(110, 'aSGkfHpG', '', ''),
(111, 'HoMiimEb', '', ''),
(112, 'muRiQtpG', '', ''),
(113, 'JRcegmqw', '', ''),
(114, 'MCgsfLCm', '', ''),
(115, 'EgNMbzCD', '', ''),
(116, 'LVoCRaPi', '', ''),
(117, 'yERecpAL', '', ''),
(118, 'HAPDFtKz', '', ''),
(119, 'wZxZXxGV', '', ''),
(120, 'ZLVaGwmD', '', ''),
(121, 'bNjWUnvO', '', ''),
(122, 'CLLbAwVV', '', ''),
(123, 'amvJV', '', ''),
(124, 'YNYXp', '', ''),
(125, 'jOzLAwTT', '', ''),
(126, 'LQfkRMvI', '', ''),
(127, 'KunNYVpQ', '', ''),
(128, 'NOVgPSvf', '', ''),
(129, 'hOhLQfrA', '', ''),
(130, 'dPFpInFQ', '', ''),
(131, 'ypzXEkPL', '', ''),
(132, 'hLTTFrnv', '', ''),
(133, 'OObeuqeS', '', ''),
(134, 'RhjxakZL', '', ''),
(135, 'DPOEfoXC', '', ''),
(136, 'QLENQwHX', '', ''),
(137, 'YQBCexSR', '', ''),
(138, 'rvaimiFx', '', ''),
(139, 'qWbrVQWY', '', ''),
(140, 'qRXgwIUw', '', ''),
(141, 'kpXWSWXe', '', ''),
(142, 'bqvAQxMW', '', ''),
(143, 'ZKDTLtwo', '', ''),
(144, 'cZkevGeo', '', ''),
(145, 'bcufKYPm', '', ''),
(146, 'NbiVmOIw', '', ''),
(147, 'vSJuACMl', '', ''),
(148, 'aNDrfayN', '', ''),
(149, 'znvAkeqn', '', ''),
(150, 'rlglAXxT', '', ''),
(151, 'zOmKhywO', '', ''),
(152, 'piYAtsyg', '', ''),
(153, 'fEoQsfww', '', ''),
(154, 'wxPYWrSC', '', ''),
(155, 'CpnbblEl', '', ''),
(156, 'jQYVywsr', '', ''),
(157, 'qVUThZYg', '', ''),
(158, 'gQIFsuIj', '', ''),
(159, 'EdYhkFbd', '', ''),
(160, 'uRcojbMt', '', ''),
(161, 'QDqLdxqf', '', ''),
(162, 'JceozzOL', '', ''),
(163, 'LtvYPQeB', '', ''),
(164, 'JYhYOEpn', '', ''),
(165, 'KYhdqrqg', '', ''),
(166, 'ekTvhImo', '', ''),
(167, 'SIoyvSOc', '', ''),
(168, 'HITHCrnt', '', ''),
(169, 'plFgdJKk', '', ''),
(170, 'lzCcJkja', '', ''),
(171, 'LGBHtnVd', '', ''),
(172, 'BTLodsZF', '', ''),
(173, 'jeqdZmtD', '', ''),
(174, 'fJkyFIWc', '', ''),
(175, 'fMXmjJOl', '', ''),
(176, 'vJQjkMlu', '', ''),
(177, 'OxaEjFKH', '', ''),
(178, 'GUZPTkGV', '', ''),
(179, 'nyqLgZQb', '', ''),
(180, 'pqGnvuXA', '', ''),
(181, 'ZOrXrrda', '', ''),
(182, 'PUJyyZtO', '', ''),
(183, 'YrVLaCBW', '', ''),
(184, 'qyqmvcEZ', '', ''),
(185, 'tKmEXIhA', '', ''),
(186, 'WcAgHtXm', '', ''),
(187, 'TCvHQrua', '', ''),
(188, 'mQnLIIuX', '', ''),
(189, 'SuxSFIfk', '', ''),
(190, 'qNOXLtRG', '', ''),
(191, 'DHozlPvD', '', ''),
(192, 'SGThChum', '', ''),
(193, 'BIALWqpG', '', ''),
(194, 'DJkmTtQx', '', ''),
(195, 'HbGeuNAi', '', ''),
(196, 'RIvXXuss', '', ''),
(197, 'GRSnqcsJ', '', ''),
(198, 'swkndXoz', '', ''),
(199, 'ViUBgOOQ', '', ''),
(200, 'GKudyyBN', '', ''),
(201, 'lobJjqgU', '', ''),
(202, 'rioHVKuK', '', ''),
(203, 'xopQz', '', ''),
(204, 'znUJJZMNSFBMAtRqOElNrQBCfbUJXHFlHNaNXgYtdjFth', '', ''),
(205, 'XnnXKc', '', ''),
(206, 'CYtAAKPo', '', ''),
(207, 'WhZyHiiki', '', ''),
(208, 'OKCCzNad', '', ''),
(209, 'eqyHsMLEq', '', ''),
(210, 'GsPfwjrb', '', ''),
(211, '2c758d7c878cbcfbee338962f34b26af', '', ''),
(212, '7f9bcb24ee6f025243a03b44bd4481be', '', ''),
(213, 'd3407b62b5bc6215e799e7923985dd33', '', ''),
(214, '438d02e7d3f1b5c155866d8963a4da0d', '', ''),
(215, '0a9045c120db1bade1d67e0e5f8b2b2e', '', ''),
(216, '4d17e8174a89e1cff8815157836e7cec365f2b4b', '', ''),
(217, 'EfiCeTkx', '', ''),
(218, 'BnMbVqzS', '', ''),
(219, 'UmRx', '', ''),
(220, 'xfCMI', '', ''),
(221, 'PjmrXg', '', ''),
(222, 'reFneqWWdV', '', ''),
(223, 'FWwSIJrQUMsNCrv', '', ''),
(224, '6f6a38ceb240b2bda3d3f2e547f2d4df84843b15', '', ''),
(225, 'dec9e33158b87c82c8d733327737d46c8fdee034', '', ''),
(226, 'efd1b5411131961e1d37197518b0a838b6a328fc', '', ''),
(227, '3545ad968e98af9cfffe05f737b910b08f1a80e4', '', ''),
(228, '9722483d4411bea228c36d8ac20d20aaf4e7d848', '', ''),
(229, '13021855ccac22ea5d12bc066879042a48ae2c56', '', ''),
(230, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(231, '5ff42c1e27ae2dba6e8941d562cbfdab308ba2c3', '', ''),
(232, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(233, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(234, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(235, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(236, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(237, '909f99a779adb66a76fc53ab56c7dd1caf35d0fd', '', ''),
(238, 'c2c53d66948214258a26ca9ca845d7ac0c17f8e7', '', ''),
(239, '283de25463098b2f2bb1824450661e0d0445bdfa', '', ''),
(240, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(241, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(242, '44c21146634df1305f8f38ed744f5569d6468343', '', ''),
(243, '7e4b062c9df92c18899e0d640bf2c977c25ac1c4', '', ''),
(244, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(245, 'apple', '', ''),
(246, 'appla', '', ''),
(247, 'chris', '', ''),
(248, 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(249, 'ee3d795068ecddc12d850712a6b36514', '', ''),
(250, 'd8e58d65e49ff97d1b6b2887988e6801', '', ''),
(251, 'e40ff021124c5c760f380bb76823ca1c', '', ''),
(252, '7c002f9aa9a949fc156210542d4db696', '', ''),
(253, 'e281852d28ddf7f836ba0dd8082b1a2b', '', ''),
(254, '77cbc257e66302866cf6191754c0c8e3', '', ''),
(255, '0f319c8ba51118b1db20fc5e7867c7df', '', ''),
(256, '2bf227301cc6151ecddf582fc65559de', '', ''),
(257, '7a6cf0cb35ad839a8172c79da40cb99f', '', ''),
(258, '14b6737b71633d31cfbef3296bdd791a', '', ''),
(259, 'b45e182b492a3449cd52d15eb4fc4959', '', ''),
(260, 'be7116355f077069296f79ff54c26174', '', ''),
(261, '33457dd68ab8b33509400b31ee12fe5a', '', ''),
(262, 'd2766db2e26e149e610131a83fab0a85', '', ''),
(263, 'c590328fa22366acab458b0ee3d7856f', '', ''),
(264, '6469e7edde399c74c42c502d7a2b0c56', '', ''),
(265, '8cf9d1a6ef1d7eeea738789fecec78e6', '', ''),
(266, '3db4a05ffab4a5efdd63495a4977adc6', '', ''),
(267, 'f5ca99c6e001d4f7209730396e82791a', '', ''),
(268, '1f2673c5dff63b9083eefb9a2f65b6d0', '', ''),
(269, '5fb840e6a673c0c790d18b24298359aa', '', ''),
(270, '817a3893f0315643c15f8a4508cc3f3e', '', ''),
(271, 'a76696183c52a6ee375a90d728696112', '', ''),
(272, 'kl1oIu2W', '', ''),
(273, 'DYyeubTS', '', ''),
(274, 'rUSY9bUo', '', ''),
(275, 'CwyORO8f', '', ''),
(276, 'B2ltW9se', '', ''),
(277, 'bKy7b41B', '', ''),
(278, 'EqKxVbmm', '', ''),
(279, '8ircM56J', '', ''),
(280, 'grwv3LPg', '', ''),
(281, 'W8n2K1aj', '', ''),
(282, 'RYPKHhSR', '', ''),
(283, 'SmP93FxZ', '', ''),
(284, 'sSqNNLem', '', ''),
(285, 'CDR7Jojq', '', ''),
(286, 'x9x4UrNe', '', ''),
(287, 'pJNmRnNV', '', ''),
(288, 'jliSmkpl', '', ''),
(289, 'gIwcd7YB', '', ''),
(290, 'K86wff34', '', ''),
(291, 'FWTGI4b7', '', ''),
(292, '92C50EiP', '', ''),
(293, 'gewk3olT', '', ''),
(294, 'ckRY9V9C', '', ''),
(295, 'yTsObpQXWxaPEOvTYfUguaKKxsoBVwWRczKVOnLWinWsuatTdzb', '', ''),
(296, 'yrXDx7He', '', ''),
(297, 'jmtTIZb6', '', ''),
(298, 'O0Uw0EUY', '', ''),
(299, 'c88v27r4', '', ''),
(300, 'wDdg3d5o', '', ''),
(301, 'ShLGTmKh', '', ''),
(302, '1TnI2Dki', '', ''),
(303, 'pvPSgDDC', '', ''),
(304, 'O2ZFtk6J', '', ''),
(305, 'AqJelLyE', '', ''),
(306, 'u8pX6l83', '', ''),
(307, 'EqwvHXba', '', ''),
(308, 'pYerA0xV', '', ''),
(309, 'N7ZtRJqJ', '', ''),
(310, 'N4l7wBKF', '', ''),
(311, 'mKODdNHB', '', ''),
(312, '17swX1CL', '', ''),
(313, 'RYhplKS1', '', ''),
(314, 'y1vqxQrQ', '', ''),
(315, 'KnY73dUW', '', ''),
(316, '3xDfWP', '', ''),
(317, '6dojbiCS', '', ''),
(318, 'd6mTaRSV', '', ''),
(319, 'mZGSW4Q3', '', ''),
(320, 'z8MAGuVH', '', ''),
(321, 'gwFNotRG', '', ''),
(322, '94cc85M7', '', ''),
(323, 'RvwodwKR', '', ''),
(324, 'Ujxkt0vz', '', ''),
(325, '9yLqrDTw', '', ''),
(326, 'NV85GDRC', '', ''),
(327, 'TP1IyZIp', '', ''),
(328, 'Xq5MZjiX', '', ''),
(329, '4jzO65bb', '', ''),
(330, '7ZioEHPz', '', ''),
(331, 'E8DFdcQg', '', ''),
(332, 'b2bYVZ1wFvmLx4W3aLoDoKXTu8cRfCPZ72', '', ''),
(333, 'qCfaQuHY', '', ''),
(334, 'MDRoZI22', '', ''),
(335, 'H7B9Xx0b', '', ''),
(336, 'QJAs4yDG', '', ''),
(337, 'KUNfvOAK', '', ''),
(338, 'xOIwzGST', '', ''),
(339, 'JDxjIUw1', '', ''),
(340, 'y8ra91dk', '', ''),
(346, 'Qw96TPzb5QgA9YtZ', 'Facebok', 'massanjal'),
(347, 'jAWV8tIb', 'Flickr', 'massanjal'),
(351, 'qCKwF7DUDQAuD7VoCMy6WZEQKtNLCpmUzMiYJneAiYNDg93Kkba', 'vine', 'massanjal'),
(354, 'zZXr8agmytBg0uWumZ7w', 'aris', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`usid`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
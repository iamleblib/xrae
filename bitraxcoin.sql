-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 11:58 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bitraxcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE IF NOT EXISTS `administration` (
`admin_ID` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`admin_ID`, `full_name`, `email`, `phone`, `password`, `date_`) VALUES
(28, 'Admin', 'bitraxcoin@info.com', '00000000000000', '$2y$10$JZHbOyDeOKKeLx1GVpkI5e9kDONDsjXJRJl1UtIr/pFdDMoti2w6u', '0000-00-00 00:00:00'),
(33, 'Stevenhenderson', 'mrstevenhenderson@yahoo.com', '08061246703', '$2y$10$qb/fIlIk2v2./Fr0eLCVM.QizHj/xP2dHHikG1GY.S40zmUM4lv.2', '0000-00-00 00:00:00'),
(34, 'Michael Woore', 'mic.woore@gmail.com', '08068299162', '$2y$10$FmCDUxWeEnDFEOTHkfOt4OjW9JT6zIayAiB5B5O.Yayoqhj6T/eDO', '0000-00-00 00:00:00'),
(35, 'Charles Howard', 'charleswalterhoward@gmail.com', '09063968654', '$2y$10$NBq37pST7kOEvOVPoXnREuQfAfuMtpBQCUgePkdGSCpsxOgjwQAF6', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_deposit`
--

CREATE TABLE IF NOT EXISTS `confirmed_deposit` (
`btc1` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `alert` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
`co` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`co`, `name`, `phone`, `email`, `subject`, `comment`, `created`) VALUES
(4, 'Xraecity', '081989829893', 'info@signcurrency.biz', 'Godes', 'guf', '2020-04-08 17:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_request`
--

CREATE TABLE IF NOT EXISTS `feedback_request` (
`fd` int(11) NOT NULL,
  `date_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` varchar(9999) NOT NULL,
  `request` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE IF NOT EXISTS `payout` (
`id` int(11) NOT NULL,
  `list` mediumtext NOT NULL,
  `dated` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`id`, `list`, `dated`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
`sg` int(11) NOT NULL,
  `date_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(255) NOT NULL,
  `clientemail` varchar(255) NOT NULL,
  `btc_id` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `invested` varchar(255) NOT NULL,
  `earning` varchar(255) NOT NULL,
  `after` varchar(255) NOT NULL,
  `current_earning_4_withdraw` varchar(255) NOT NULL,
  `withdrawn` varchar(255) NOT NULL,
  `msg` varchar(10355) NOT NULL,
  `password` varchar(255) NOT NULL,
  `when_` varchar(255) NOT NULL,
  `to_exp` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL DEFAULT '0',
  `vkey` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sg`, `date_`, `full_name`, `clientemail`, `btc_id`, `phone`, `bonus`, `invested`, `earning`, `after`, `current_earning_4_withdraw`, `withdrawn`, `msg`, `password`, `when_`, `to_exp`, `verified`, `vkey`) VALUES
(83, '2020-04-08 19:30:09', 'stanbic', 'stanbic@yahoo.com', 'sudhhshsbhsbhbs', '08103273838', '$10', '$2000000,000', '$400,000', '28days', '$2,000', '$1000.0', ' Your request was unsuccessful due to insufficient investment fund; you tries to withdraw $500 but you have no investment fund on your wallet, please try and place an investment, else you will be BANNED for spamming when next you tries to withdraw from zero ($0) wallet...Thank you!', '$2y$10$z0rXkjyd1LXUlijc9aqGeOomJ3lLPI5pmtUjRE5oU2BbHTY3IEsZm', '18th April', '9th May ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
`sb` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE IF NOT EXISTS `withdraw` (
`wt` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `to_withdraw` varchar(255) NOT NULL,
  `btc_address` varchar(255) NOT NULL,
  `dated` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `xpried` varchar(255) NOT NULL,
  `check_in` varchar(255) NOT NULL,
  `intel` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
 ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `confirmed_deposit`
--
ALTER TABLE `confirmed_deposit`
 ADD PRIMARY KEY (`btc1`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
 ADD PRIMARY KEY (`co`);

--
-- Indexes for table `feedback_request`
--
ALTER TABLE `feedback_request`
 ADD PRIMARY KEY (`fd`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`sg`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
 ADD PRIMARY KEY (`sb`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
 ADD PRIMARY KEY (`wt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `confirmed_deposit`
--
ALTER TABLE `confirmed_deposit`
MODIFY `btc1` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
MODIFY `co` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback_request`
--
ALTER TABLE `feedback_request`
MODIFY `fd` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `sg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
MODIFY `sb` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
MODIFY `wt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

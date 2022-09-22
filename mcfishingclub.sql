-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 02:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcfishingclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `activation_code`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', ''),
(2, 'georja', '$2y$10$pt/I1v490gXyEhN0CTnG.O9Wk.Xt91w9Xnspm0QdxhEy5rftQBEvi', 'georja@mail.com', '62feaacb26b01'),
(3, 'georja2', '$2y$10$tXYKx3wGZm9PnU0grPAXJurRVCjYBO5rXXjOzGU/3HVlMfF3nw9jq', 'georja@mail.com', '62feab4202634');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `eventid` int(11) DEFAULT NULL,
  `species` varchar(20) DEFAULT NULL,
  `fisher` varchar(50) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `eventid`, `species`, `fisher`, `weight`, `date`) VALUES
(1, 5, 'Snapper', 'O Tuck', '10.06kg', NULL),
(2, 5, 'Kingfish', 'N Matthews', '21.13kg', NULL),
(3, 5, 'Kahawai', 'D Dickinson', '2.42kg', NULL),
(4, 5, 'John Dory', 'H McCullough', '2.12kg', NULL),
(5, 5, 'Trevally', 'A McCullough', '5.22kg', NULL),
(6, 5, 'Tarakihi', 'S Moir', '1.61kg', NULL),
(7, 5, 'Gurnard', 'C Winslow', '1.14kg', NULL),
(8, 5, 'Crayfish', 'A McCullough', '3.90kg', NULL),
(9, 6, 'Snapper', 'K Jones', '4.63kg', NULL),
(10, 6, 'Kingfish', NULL, NULL, NULL),
(11, 6, 'Kahawai', 'N Adams', '2.17kg', NULL),
(12, 6, 'John Dory', 'L McCullough', '1.12kg', NULL),
(13, 6, 'Trevally', 'K McCullough', '2.73kg', NULL),
(14, 6, 'Tarakihi', NULL, NULL, NULL),
(15, 6, 'Gurnard', 'L McCullough', '0.54kg', NULL),
(16, 6, 'Crayfish', NULL, NULL, NULL),
(17, 7, 'Snapper', 'K Jones', '4.63kg', NULL),
(18, 7, 'Kingfish', NULL, NULL, NULL),
(19, 7, 'Kahawai', 'N Adams', '2.17kg', NULL),
(20, 7, 'John Dory	', 'L McCullough', '1.12kg', NULL),
(21, 7, 'Trevally', 'K McCullough', '2.73kg', NULL),
(22, 7, 'Tarakihi', NULL, NULL, NULL),
(23, 7, 'Gurnard', 'L McCullough', '0.54kg', NULL),
(24, 8, 'Snapper', 'R Couch', '2.36kg', NULL),
(25, 8, 'Kingfish', 'R Couch', '13.60kg', NULL),
(26, 8, 'Kahawai', 'R Couch', '2.38kg', NULL),
(27, 8, 'Trevally', NULL, NULL, NULL),
(28, 8, 'John Dory', NULL, NULL, NULL),
(29, 8, 'Crayfish', NULL, NULL, NULL),
(30, 8, 'Butterfish', 'R Couch', '1.08kg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(40) NOT NULL,
  `sponsor` varchar(40) NOT NULL,
  `eventdate` text NOT NULL,
  `info` text NOT NULL,
  `formlink` varchar(100) NOT NULL,
  `linktext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `sponsor`, `eventdate`, `info`, `formlink`, `linktext`) VALUES
(1, 'COGAN\'S Chics @ the Chicks 2022', 'chicks@thechicks.jpeg', 'cogan-logo-2-300x173.jpg', 'October 22nd & 23rd 2022', '<p>This year\'s theme is \"Essential Workers\" so get your thinking caps on and put your team together for an awesome competition! </p>\r\n<p> Tickets are available to purchase either by the registration form below or over the bar at the Marsden Cove Fishing Club <br>\r\nNon Members: $70.00 <br> \r\nMembers: $60.00 <br>\r\n Juniors: $40.00 <br> \r\nDinner Tickets: $20.00</p>', 'http://localhost/mcfishingclub/admin.php', 'Chics @ the Chicks Registration Form'),
(2, 'Metalcraft/Akarana, Marsden Cove Marlin Classic 2023', 'marlin-classic-2023-poster.jpg', 'marlinsponsors.jpeg', ' <h4>Briefing- 8th March 2023 6.30pm <br> <br> Fishing Days- 9th, 10th & 11th March 2023</h4>', '<p>Should the weather not play the game the postponement dates are: 23th, 24th & 25th March 2023 <br> <br> A huge thank you to all our sponsors who continue to participate, in particular Metalcraft Roofing, Akarana Timbers for being part of the United Industries Group contributing $60k, without this level, prizes would not be the same, so supporting them is crucial. Also, we welcome \"Takacat\" who have sponsored a 3.0m inflatable, so much appreciated. <br> <br> Any new sponsors are all welcome, email<li><a href=\"https://www.facebook.com/paul.mccullough.98892\">Paul McCullough</a></li></p>', '', ''),
(3, 'HOOK VS SPEAR OPEN TOURNAMENT', '', 'sponsors-for-hookvsspear.jpeg', '', '<p>Unfortunately, there is currently no known information about the tournament for 2022 but we are very hopeful for it to take place next year! <br> <br> If you are a Spear Fisher and would be interested in assisting with this competition in 2023, please get in touch with us as soon as possible.</p>', '', ''),
(4, 'METALCRAFT MARLIN CLASSIC RESULTS\r\n2021', '', '', '', '<p>2021 definitely turned it on for us that\'s for sure! What an awesome event we had with 2 days of great weather and 1 day of weather that was not ideal, to say the least, but everyone got out there and made the most of what we were dealt with.\r\n\r\nWe had a total of 66 boats and 197 anglers to sell out for this yearly competition.\r\n\r\nThank you to everyone involved, especially all our AMAZING Sponsors (listed below), volunteer committee members, bar staff and helpers, it would not have been possible without you all.\r\n\r\nKeep an eye out for competition details on our Facebook pages and website for next year\'s event!\r\n\r\n<h3>2021 Competition Tally:</h3>\r\n\r\n12x Striped Marlin T&R, 8x  Striped Marlin Landed, 2x Big Eye Tuna, 15x Shark T&R, 18x Kingfish T&R, 16x Kingfish Landed.</p>', '', ''),
(5, 'Open Line Fishing\n', '', '', '2021/2022', '', '', ''),
(6, 'Junior Line Fishing (16 and under)', '', '', '2021/2022', '', '', ''),
(7, 'Small Fry Line Fishing (11 and Under)', '', '', '2021/2022', '', '', ''),
(8, 'Open Spear Fishing', '', '', '2021/2022', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `alt`) VALUES
(1, 'the-heads-improv.jpg', 'A scenic view of Whangarei Heads from a fishing boat.'),
(2, 'snapper.JPG', 'A snapper swimming up close to the camera.'),
(3, 'bbq.JPG', 'A cook placing pieces of marlin onto a barbeque.'),
(4, 'jamie-weigh-fish.jpg', 'Jamie standing beside his swordfish as it is getting weighed.'),
(5, 'captured-marlin.JPG', 'A man lifting a caught marlin out of the water.'),
(6, 'diving.jpg', 'A woman resting in the water with diving gear on after completing a diving session.'),
(7, 'guy-with-fish.jpg', 'A man grasping the tail of the giant fish he caught as it is slumped on the floor of his boat.'),
(8, 'whangarei-heads-full.jpg', 'Image of Whangarei Heads from the side of a fishing boat.'),
(9, 'jackie-yellowfish.jpg', 'Jackie standing beside her captured Yellowfish Tuna as it is being weighed.'),
(10, 'marlin-weigh-improv.JPG', 'Two men holding beer are standing beside their captured marlin that is being weighed.'),
(11, 'guy-with-fish2.jpg', 'A man lifting the giant fish he caught.'),
(12, 'marlin.JPG', 'A marlin swimming in the water.'),
(13, 'club-championship.jpg', 'Club members awarded with a tropy');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `members_id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `position` varchar(30) NOT NULL,
  `ph` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`members_id`, `surname`, `firstname`, `position`, `ph`) VALUES
(1, 'Read', 'Gary', 'President', '0274202002'),
(2, 'Walker', 'David', 'Vice President', ''),
(3, 'Bailey', 'Shirley', 'Secretary', '021744594'),
(4, 'Hedley', 'Liz', 'Treasurer', ''),
(5, 'Adams', 'David', 'Club Captain', ''),
(6, 'Read', 'Rachelle', 'Bar Manager', '0212581177'),
(7, 'Cooper', 'Phil', 'Committee Members', ''),
(8, 'Spinley', 'Aimee', '', ''),
(9, 'McCullough', 'Jackie', '', ''),
(10, 'Dickinson', 'Gaye', '', ''),
(11, 'Furlong', 'Mike', '', ''),
(12, 'Loft', 'Paul', '', '0275369023');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `image`, `text`) VALUES
(1, 'ABOUT US', 'the-heads-improv.PNG', '<p>Marsden Cove Fishing Club is located at the Marsden Cove Marina (next to Land and Sea Café) and overlooks the marina with prime viewing of the boat ramp — which can provide some entertainment on the odd occasion.</p>\r\n\r\n<p>Members, both local and from further afield have created a strong sense of community within the club. It’s a great place to bring the family, meet up with your friends, tell those great fishing stories, and compete for the annual angler of the year prize.</p>\r\n\r\n<p>To become a member, pop into the club on a Thursday, Friday or Saturday night and fill out a membership form, or complete the online registration form.<li><a href=\"http://localhost/mcfishingclub/pages.php?id=4\" target=\"_self\">Registration Form.</a></li></p>\r\n<br> <br>\r\n<h3>Business Wall Sign</h3>\r\n\r\n<p>For a minimal annual fee of $150.00 +gst, you will have your company sign and logo displayed on the club wall.</p>\r\n\r\n<p>Sponsorship renewal annual fee is $130.00 +gst (if we already have your company logo wall plaque)</p>\r\n\r\n<p>Contact the club secretary for more details.</p>\r\n\r\n<h3>Club Committee</h3>\r\n\r\n<p>Current committee members\' details.</p>\r\n\r\n'),
(2, 'OUR CONSTITUTION', 'guy-with-fish.jpg', '<p>The Official CONSTITUTION And RULES Of Marsden Cove Fishing Club Incorporated.\r\n\r\n<li><a href=\"https://www.marsdencovefishingclub.co.nz/wp-content/uploads/2021/03/MCFC_Constitution.pdf\" target=\"_self\">Click Here To Read A Copy Of Our Constitution And Club Rules</a></li></p>\r\n\r\n'),
(3, 'JUNIOR CLUB', 'junior.jpg', '<p>The club proudly runs Fishy Kids Sunday over the summer for its junior members. The kids fish on the jetties in front of the club, competing for the longest fish.</p>\r\n\r\n<p>PRIZES, a lolly scramble, free food and refreshments for the kids.</p>\r\n\r\n<h3>Check Back In Later During The Year For Next Summer\'s Dates And Times.</h3>\r\n\r\n<p>. An adult must attend with their junior(s).</p>\r\n<p>. Bring along your own rods and bait.</p>\r\n<p>. Juniors must sign in with the duty club member before commencing fishing.</p>\r\n<p>. Life jackets are advised for any child that cannot swim.</p> \r\n<p>. Finally, the junior with the longest fish wins.</p>\r\n\r\n<p>Winning juniors will be awarded the trophy for the week and a certificate. Only winning members are able to take the trophies home for the week (non-members must leave the trophy in the clubrooms). That family is then responsible for ensuring the trophy is handed back to either the clubroom or club committee member prior to the next Fishy Kids Sunday.</p>\r\n\r\n<p>Junior members are free and non-members children (12 years and under) are most welcome. Please pay $2.00 when you sign in.</p>'),
(4, 'JOIN US', 'marlin-weigh-improv.JPG', '<h3>Membership:</h3>\r\n<p>We welcome new members to our friendly club.</p>\r\n<p>Current memberships expire and are up for renewal from 1st August 2022</p>\r\n\r\n<h3>Payment Options:</h3>\r\n<p>Sign up at the Marsden Cove Fishing Club Room (next to Land and Sea Café) - open Thursday, Friday and Saturday from 4.30 pm.</p>\r\n\r\n<p>Complete the membership form and pay by internet banking or Marsden Cove Fishing Club Room (open Thursday, Friday and Saturday from 4.30 pm). Bring your completed membership form with you if paying at the club.</p>\r\n\r\n<h3>Membership Application Form.</h3>\r\n<p><li><a href=https://www.marsdencovefishingclub.co.nz/membership-application/>Membership Form</a></li></p>'),
(5, 'SAFETY', 'jackie-yellowfish.jpg', '<li>Coastguard VHF Channel 83</li>\r\n<li>Coastguard Nowcasting BOI 21 Leigh 22</li>\r\n<li>MetVUW<a href=\"https://metvuw.com/\"> metvuw.com</a></li>\r\n<li>MetService<a href=\"https://www.metservice.com/\">metservice.com</a></li>\r\n<li>NIWA<a href=\"https://niwa.co.nz/\">niwa.co.nz</a></li>\r\n<li>NOAA<a href=\"https://www.tsunami.gov/\">tsunami.gov</a></li>\r\n<li>Civil Defence<a href=\"https://www.civildefence.govt.nz/\">civildefence.govt.nz</a></li>\r\n<br>\r\n<p>This information is also available at Marsden Cove Fishing Club on Facebook under the \"about\" tab under the Marsden Cove Fishing Club logo.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

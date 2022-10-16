-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 10:48 PM
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
(1, 'ABOUT US', 'whangarei-heads-full.jpg', '<p>Marsden Cove Fishing Club is located at the Marsden Cove Marina (next to Land and Sea Café) and overlooks the marina with prime viewing of the boat ramp — which can provide some entertainment on the odd occasion.</p>\n\n<p>Members, both local and from further afield have created a strong sense of community within the club. It’s a great place to bring the family, meet up with your friends, tell those great fishing stories, and compete for the annual angler of the year prize.</p>\n\n<p>To become a member, pop into the club on a Thursday, Friday or Saturday night and fill out a membership form, or complete the online registration form.<li style=\"list-style-type: none;\"><a href=\"pages.php?id=4\" target=\"_self\">Registration Form.</a></li></p>\n<br> <br>\n<h3>Business Wall Sign</h3>\n\n<p>For a minimal annual fee of $150.00 +gst, you will have your company sign and logo displayed on the club wall.</p>\n\n<p>Sponsorship renewal annual fee is $130.00 +gst (if we already have your company logo wall plaque)</p>\n\n<p>Contact the club secretary for more details.</p>\n\n<h3>Club Committee</h3>\n<li style=\"list-style-type: none;\"><a href=\"committee.php\" target=\"_self\">Current committee members\' details.</a></li>\n\n'),
(2, 'OUR CONSTITUTION', 'guy-with-fish.jpg', '<h3>The Official CONSTITUTION And RULES Of Marsden Cove Fishing Club Incorporated.\r\n<br> <br>\r\nObjects</h3>\r\n\r\n<p>The objectives of the Club shall be:<br>1. To foster further fishing and aquatic activities for members, their families and community.<br>2. To encourage sound conservation to ensure the sustainability of our marine resources.\r\n<li style=\"list-style-type: none;\"><a href=\"https://www.marsdencovefishingclub.co.nz/wp-content/uploads/2021/03/MCFC_Constitution.pdf\" target=\"_self\">Click Here To Read More Of The Copy Of Our Constitution And Club Rules</a></li></p>\r\n\r\n'),
(3, 'JUNIOR CLUB', 'junior.jpg', '<p>The club proudly runs Fishy Kids Sunday over the summer for its junior members. The kids fish on the jetties in front of the club, competing for the longest fish.</p>\r\n\r\n<p>PRIZES, a lolly scramble, free food and refreshments for the kids.</p>\r\n\r\n<h3>Check Back In Later During The Year For Next Summer\'s Dates And Times.</h3>\r\n\r\n<p>. An adult must attend with their junior(s).</p>\r\n<p>. Bring along your own rods and bait.</p>\r\n<p>. Juniors must sign in with the duty club member before commencing fishing.</p>\r\n<p>. Life jackets are advised for any child that cannot swim.</p> \r\n<p>. Finally, the junior with the longest fish wins.</p>\r\n\r\n<p>Winning juniors will be awarded the trophy for the week and a certificate. Only winning members are able to take the trophies home for the week (non-members must leave the trophy in the clubrooms). That family is then responsible for ensuring the trophy is handed back to either the clubroom or club committee member prior to the next Fishy Kids Sunday.</p>\r\n\r\n<p>Junior members are free and non-members children (12 years and under) are most welcome. Please pay $2.00 when you sign in.</p>'),
(4, 'JOIN US', 'marlin-weigh-improv.JPG', '<h3>Membership:</h3>\r\n<p>We welcome new members to our friendly club.</p>\r\n<p>Current memberships expire and are up for renewal from 1st August 2022</p>\r\n\r\n<h3>Payment Options:</h3>\r\n<p>Sign up at the Marsden Cove Fishing Club Room (next to Land and Sea Café) - open Thursday, Friday and Saturday from 4.30 pm.</p>\r\n\r\n<p>Complete the membership form and pay by internet banking or Marsden Cove Fishing Club Room (open Thursday, Friday and Saturday from 4.30 pm). Bring your completed membership form with you if paying at the club.</p>\r\n\r\n<h3>Membership Application Form.</h3>\r\n<p><li style=\"list-style-type: none;\"\r\n><a href=\"membership.php\" target=\"_self\">Membership Form</a></li></p>'),
(5, 'SAFETY', 'jackie-yellowfish.jpg', '<li>Coastguard VHF Channel 83</li>\r\n<li>Coastguard Nowcasting BOI 21 Leigh 22</li>\r\n<li>MetVUW<a href=\"https://metvuw.com/\"> metvuw.com</a></li>\r\n<li>MetService<a href=\"https://www.metservice.com/\">metservice.com</a></li>\r\n<li>NIWA<a href=\"https://niwa.co.nz/\">niwa.co.nz</a></li>\r\n<li>NOAA<a href=\"https://www.tsunami.gov/\">tsunami.gov</a></li>\r\n<li>Civil Defence<a href=\"https://www.civildefence.govt.nz/\">civildefence.govt.nz</a></li>\r\n<br>\r\n<p>This information is also available at Marsden Cove Fishing Club on Facebook under the \"about\" tab under the Marsden Cove Fishing Club logo.</p>'),
(6, 'LEADERBOARDS', 'guy-with-fish2.jpg', '<h3>Club Competition And Leaderboards</h3>\r\n\r\n<p>For fish to be eligible for the MCFC leader board or angler of the year they must meet the following criteria:\r\n<br> <br>\r\n1. The angler must be a current financial member at the time of capture.\r\n<br>\r\n2. The fish must be caught in accordance with any NZSFC rules or club rules and MAF regulations at the time of capture.\r\n<br>\r\n3. Acceptable methods of capture are line fishing (rod & reel or hand line) and spearfishing (free diving only).</p>\r\n\r\n<h3>Angler Of The Year</h3>\r\n\r\n<p>Angler of the year (AOTY) is an annual contest, run from July 1st-June 30th every year.  Anglers/spearos/Juniors can weigh in fish (species as per our weighboard) on a Thursday, Friday, Saturday and Sunday to count for the AOTY, fish weighed any other day do not count toward AOTY points but are still eligible for the other yearly competition.\r\n<br><br>\r\nEach fish weighed will earn 100pts and 10 points per kilogram up to a maximum of 8kg (maximum points for a single fish is 180pts), points are for your best fish weighed of each species during the year, so you can upgrade your points with a larger fish weighed as the season progresses. Only your best-scoring fish for each species will count towards the overall total.\r\n<br><br>\r\nThe highest aggregate points total for these 8 species wins the prize.</p>\r\n\r\n<h3>Marsden Cove Marina Overall Champion</h3>\r\n\r\n<p>To qualify for the overall champion you must first win your respective section (Open Line, Junior or Spear). The highest aggregate points total over the year for the 5 common species (Snapper, Kingfish, Kahawai, Trevally, John Dory) will be awarded the overall champion. This prize includes not only the ultimate in bragging rights but also a rather large cup and a check for $1000 courtesy of the extremely generous sponsorship of Marsden Cove Marina.</p> ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

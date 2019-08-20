-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2019 at 05:56 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ben`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `heading` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `heading`, `name`, `image`) VALUES
(48, 'Big Sean', '', 'assets/images/artist/dad861ae4a10c2592d14aa640d20BIG_SEAN_ARTIST.jpg'),
(49, 'Jason Derulo & David Guetta', '', 'assets/images/artist/a60f682a31291471518f85341679Jason_Derulo_David_Guetta.jpg'),
(50, '21 Savage', '', 'assets/images/artist/38eeffe6d3982ef29d8bdcc6812eISSA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `studio` text NOT NULL,
  `date` text NOT NULL,
  `stime` text NOT NULL,
  `etime` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `studio`, `date`, `stime`, `etime`, `amount`) VALUES
(1, 'Addison Hernandez', 'jackson20000@gmail.com', '7012940603', 'The Dojo Los Angeles', '26/07/1919', '03:11', '07:11', '224.00'),
(2, 'Front end design', 'karthiknair379@gmail.com', '8547318729', 'Vortex Hollywood', '26/07/1919', '19:50', '23:55', '228.67'),
(3, 'John', 'jackson20000@gmail.com', '7012940603', 'Vortex Hollywood', '26/07/1919', '16:03', '20:03', '224.00'),
(4, 'Addison Hernandez', 'jackson20000@gmail.com', '7012940603', 'Vortex Hollywood', '25/07/1919', '18:56', '22:56', '224.00'),
(5, 'Addison Hernandez', 'jackson20000@gmail.com', '7012940603', 'The Dojo Los Angeles', '26/07/1919', '16:59', '19:59', '168.00');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_login`
--

CREATE TABLE `dashboard_login` (
  `id` int(1) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard_login`
--

INSERT INTO `dashboard_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$E8Z8uWSrZ1z0cYpIEeGODesDkQ53WPj2PTP1I5f1waIlnd38oWSJm');

-- --------------------------------------------------------

--
-- Table structure for table `discography`
--

CREATE TABLE `discography` (
  `id` int(11) NOT NULL,
  `heading` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `songs` text NOT NULL,
  `url` varchar(500) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discography`
--

INSERT INTO `discography` (`id`, `heading`, `name`, `year`, `artist`, `songs`, `url`, `image`) VALUES
(59, 'Bounce Back', 'Big Sean', 2016, 'Big Sean', '[\"\"]', 'https://genius.com/Big-sean-bounce-back-lyrics', 'assets/images/discography/30c40601198ddea3b544eac69352Big_Sean_-_Bounce_Back.jpg'),
(60, 'Goodbye', 'Jason Derulo & David Guetta', 2018, '', 'null', 'https://genius.com/Jason-derulo-and-david-guetta-goodbye-lyrics', 'assets/images/discography/8dea59c0ac0a32bed8922a90e8c9Goodbye.jpg'),
(61, 'Numb', '21 Savage', 2017, '', 'null', 'https://genius.com/21-savage-numb-lyrics', 'assets/images/discography/6dad29e313ba361bc4964dd46a8dISSA.jpg'),
(62, 'Tip Toe', 'Jason Derulo', 2017, '', 'null', 'https://genius.com/Jason-derulo-tip-toe-lyrics', 'assets/images/discography/2ea6d526cf18046654b122c3904eTip_Toe.jpg'),
(63, 'Distance', 'Omarion', 2017, '', 'null', 'https://genius.com/Omarion-distance-lyrics', 'assets/images/discography/204403a5bd47aad6af21812b5912Distance.jpg'),
(64, 'Caretaker (Extended Version)', 'DRAM', 2015, '', 'null', 'https://genius.com/Dram-caretaker-extended-version-lyrics', 'assets/images/discography/c1c209d1932005ce7bab475c0c76Caretaker_(Extended_Version).jpg'),
(65, 'I Think of You', 'Jeremih', 2017, '', 'null', 'https://genius.com/Jeremih-i-think-of-you-lyrics', 'assets/images/discography/3b8ee4adf8aebba33390fccdb2a9I_Think_of_You.jpg'),
(66, 'Nasty', 'Kid Ink', 2016, '', 'null', 'https://genius.com/Kid-ink-nasty-lyrics', 'assets/images/discography/23fd420c56e5e12cf8b42799930aNasty.jpg'),
(67, 'Colors', 'Jason Derulo & Maluma', 2018, '', '[\"\"]', 'https://genius.com/Jason-derulo-and-maluma-colors-lyrics', 'assets/images/discography/3acb469b7678b27053561fafa64eColors.jpg'),
(68, 'I’m a Fan', 'Pia Mia', 2017, '', 'null', 'https://genius.com/Pia-mia-im-a-fan-lyrics', 'assets/images/discography/61413ed999e39495a7097bdcf447I’m_a_Fan.jpg'),
(69, 'Sleeping on the Floor', 'Lil Bibby', 2016, '', 'null', 'https://genius.com/Lil-bibby-sleeping-on-the-floor-lyrics', 'assets/images/discography/d430715ac6cbfeb5d22ffb3b9010Sleeping_on_the_Floor.jpg'),
(70, 'Forever I’m Ready', 'Jeremih', 2018, '', 'null', 'https://genius.com/Jeremih-forever-im-ready-lyrics', 'assets/images/discography/9f9cbd36a54af52028903d43ef22Forever_I’m_Ready.jpg'),
(71, 'We Ain’t Homies', 'Arin Ray', 2017, '', 'null', 'https://genius.com/Arin-ray-we-aint-homies-lyrics', 'assets/images/discography/640939d0c3ea14733b72b1c3ecf5We_Ain’t_Homies.jpg'),
(72, 'No Better Feelin’', 'CL', 2017, '', 'null', 'https://genius.com/Cl-no-better-feelin-lyrics', 'assets/images/discography/d77b14bdf92d0db9a39597314371No_Better_Feelin’.jpg'),
(73, 'Women', 'Florida Georgia Line', 2019, '', 'null', 'https://genius.com/Florida-georgia-line-women-lyrics', 'assets/images/discography/c541efb91a3c992999511be58afcWomen.jpg'),
(74, 'Mamacita', 'Jason Derulo', 2019, '', 'null', 'https://genius.com/Jason-derulo-mamacita-lyrics', 'assets/images/discography/e633d20e9437741aa8219b74e431Mamacita.jpg'),
(75, 'Way Up', 'Austin Mahone', 2016, '', 'null', 'https://genius.com/Austin-mahone-way-up-lyrics', 'assets/images/discography/4708892f88c22df8e9687040adbfWay_Up.jpg'),
(76, 'Take', 'Arin Ray', 2018, '', 'null', 'https://genius.com/Arin-ray-take-lyrics', 'assets/images/discography/b3d069e8edebc098675c1b569022Take.png'),
(77, 'Can You Feel It', 'DNCE', 2017, '', 'null', 'https://genius.com/Dnce-can-you-feel-it-lyrics', 'assets/images/discography/06d7bfa4163cd26e7bde796b1095Can_You_Feel_It.jpg'),
(78, 'Same Girl', 'Austin Mahone', 2015, '', 'null', 'https://genius.com/Austin-mahone-same-girl-lyrics', 'assets/images/discography/12b7c28b37e3257392bebe25ebcdSame_Girl.jpg'),
(79, 'Stressin', 'Arin Ray', 2018, '', 'null', 'https://genius.com/Arin-ray-stressin-lyrics', 'assets/images/discography/94dcbee7814aa68dc3ba22684375Stressin.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_studio`
--

CREATE TABLE `tb_studio` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL,
  `mini_booking` varchar(100) NOT NULL,
  `max_booking` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `img_bk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_studio`
--

INSERT INTO `tb_studio` (`id`, `name`, `description`, `lat`, `lng`, `mini_booking`, `max_booking`, `rate`, `amenities`, `url`, `img_bk`) VALUES
(9, 'Paramount Studio A', 'Studio A is a mixing/overdub room with a 56 channel SSL 6000 E/G console.', '34.0908833', '-118.3260221', 'http://paramountrecording.com/studios/paramount-studio-a/', '', '245/hour', 'Studio A is a mixing/overdub room with a 56 channel SSL 6000 E/G console.', 'http://paramountrecording.com/studios/paramount-studio-a/', 'assets/images/studio/9359fbe1d75b560c39e145f51c8dparamount_a.jpg'),
(10, 'Paramount Studio B', 'Our mixing / overdub studio with a 40-channel SSL 4000 console on the 2nd floor of our Hollywood fac', '34.0908833', '-118.3260221', '$230/hour', '', '230/hour', 'Our mixing / overdub studio with a 40-channel SSL 4000 console on the 2nd floor of our Hollywood fac', 'http://paramountrecording.com/studios/paramount-studio-b/', 'assets/images/studio/ca0581e6565854867aaa574b5121paramount_b.jpg'),
(11, 'Paramount Studio C', '\"The Cave\" - an 80 channel SSL 9000J console with Ultimation, a Yamaha C7 piano, and a Hammond B3.', '34.0908833', '-118.3260221', '$325/hour', '', '325/hour', '\"The Cave\" - an 80 channel SSL 9000J console with Ultimation, a Yamaha C7 piano, and a Hammond B3.', 'http://paramountrecording.com/studios/paramount-studio-c/', 'assets/images/studio/93a726c8911878580d2b73aa7ab9paramount_c.jpg'),
(12, 'Paramount Studio E', 'A perfect studio for writing sessions, meetings, and vocal sessions.', '34.0908833', '-118.3260221', '$145/hour', '', '145/hour', 'Paramount Studio E is one of our newest studios available to rent on a hourly or daily basis.', 'http://paramountrecording.com/studios/paramount-studio-e/', 'assets/images/studio/1b0e6a63acaa91e6a21c7814b09bparamount_e.jpg'),
(13, 'Paramount Studio X', 'Loaded with equipment and top quality acoustics.', '34.0908833', '-118.3260221', '$235/hour', '', '235/hour', 'Loaded with equipment and top quality acoustics.', 'http://paramountrecording.com/studios/studio-x/', 'assets/images/studio/a710ef546a3863056f392be4369fparamount_x.jpg'),
(14, 'Ameraycan Studio A', 'Ameraycan was built in the mid 1970’s by famed artist-producer Ray Parker, Jr. as his personal recor', '34.174472', '-118.3806357', '$275/hour', '', '275/hour', 'Ameraycan was built in the mid 1970’s by famed artist-producer Ray Parker, Jr. as his personal recor', 'http://paramountrecording.com/studios/ameraycan-recording-studios-north-hollywood/ameraycan-studio-a-2/', 'assets/images/studio/32fdc3b4ce76706b328ffb6554a6Ameraycan_Studio_A.jpg'),
(15, 'Ameraycan Studio B', 'This became a popular commercial studio with the likes of Billy Idol, Miles Davis, and Cypress Hill ', '34.164376', '-118.313673', '$285/hour', '', '285/hour', 'This became a popular commercial studio with the likes of Billy Idol, Miles Davis, and Cypress Hill ', 'http://paramountrecording.com/studios/ameraycan-recording-studios-north-hollywood/ameraycan-studio-b-2/', 'assets/images/studio/4bf20a18c9bbe86964c3ec8197d9Ameraycan_Studio_B.jpg'),
(16, 'Encore Studio A', 'SSL J9000 100 Input Console | Avid Pro Tools HDX  24 In/ 48out | Pro Tools versions 10 and 12', '34.164376', '-118.313673', '335/hour', '', '335/hour', 'SSL J9000 100 Input Console | Avid Pro Tools HDX  24 In/ 48out | Pro Tools versions 10 and 12', 'http://paramountrecording.com/studios/encore/encore-studio-a/', 'assets/images/studio/5ffb9a55406635dc4a616ec3e96dEncore_Studio_A.jpg'),
(17, 'Encore Studio B', 'SSL 4080G Console with Ultimation, mix of E and G series EQ, 8 Stereo Channels', '34.164376', '-118.313673', '$335/hour', '', '335/hour', 'SSL 4080G Console with Ultimation, mix of E and G series EQ, 8 Stereo Channels', 'http://paramountrecording.com/studios/encore/encore-studio-b/', 'assets/images/studio/574ba7fbc9fc062544e594c28856Encore_Studio_B.jpg'),
(18, 'Conway Recording Studio A-C', 'Offers comprehensive selection of equipment and top-tier studio spaces.', '34.083348', '-118.311358', '00', '', '0', 'Offers comprehensive selection of equipment and top-tier studio spaces.', 'http://www.conwayrecording.com/', 'assets/images/studio/2daf1ef441774b2d5aebf6d65c48conway_recording.jpg'),
(19, 'Record Plant Recording Studios SSL1-4, Digiplant', 'More hits & GRAMMY® award winning music is made here over anywhere else, globally.', '34.089906', '-118.342652', '0', '', '0', 'More hits & GRAMMY® award winning music is made here over anywhere else, globally.', 'http://recordplant.com/', 'assets/images/studio/96e9eff70b86858268fe559c68dcstudio_plant.jpg'),
(20, 'Westlake Recording Studio A', 'Studio A is one of the most historic rooms at Westlake.', '34.0762677', '-118.3746204', '0', '', '0', 'Studio A is one of the most historic rooms at Westlake.', 'http://www.westlakestudios.com/studio-a/', 'assets/images/studio/0cdecfcd1ffb906d2ec2fdebbfbcSTUDIO_A.jpg'),
(21, 'Westlake Recording Studio B', 'Mixing, tracking  & overdub room equipped w/ a vintage SSL 4072 G Series console.', '34.0762677', '-118.3746204', '0', '', '0', 'Mixing, tracking  & overdub room equipped w/ a vintage SSL 4072 G Series console.', 'http://www.westlakestudios.com/studio-b/', 'assets/images/studio/83bc10b708096dfcc3bc0c223684STUDIO_B.jpg'),
(22, 'Westlake Recording Studio C', 'Features a 72 channel Solid State Logic 9072 J series console', '34.0762677', '-118.3746204', '0', '', '0', 'Features a 72 channel Solid State Logic 9072 J series console', 'http://www.westlakestudios.com/studio-c/', 'assets/images/studio/aab7f45561a4f2d0848d18169d10STUDIO_C.jpg'),
(23, ' Westlake Recording Studio D', 'Features an expansive control room with an 80 input Solid State Logic XL 9000 K console', '34.0762677', '-118.3746204', '0', '', '0', 'Features an expansive control room with an 80 input Solid State Logic XL 9000 K console', 'http://www.westlakestudios.com/studio-d/', 'assets/images/studio/c9fd68ca79fd90643729442a09ccSTUDIO_D.jpg'),
(24, 'Westlake Recording Studio E', 'Equipped with a 72 input SSL 9072 J Series console and an extraordinary amount of outboard gear.', '34.0762677', '-118.3746204', '0', '', '0', 'Equipped with a 72 input SSL 9072 J Series console and an extraordinary amount of outboard gear.', 'http://www.westlakestudios.com/studio-e/', 'assets/images/studio/973d9bbce7f1c8d4ad915634db76STUDIO_E.jpg'),
(25, 'EastWest Studio One', 'Studio One is perfect for any session – from single voice to 70-piece symphonic orchestra.', '34.0978781', '-118.3204198', '0', '', '0', 'Studio One is perfect for any session – from single voice to 70-piece symphonic orchestra.', 'https://www.eastweststudios.com/studio1/', 'assets/images/studio/3aa0a17c2ce5480b0efe7032f0f0studio_1.jpg'),
(26, 'EastWest Studio Two', 'Offers a Neve RCA Custom 8028 Console (40 channel), one of only 2 built with Class A discrete electr', '34.0978781', '-118.3204198', '0', '', '0', 'Offers a Neve RCA Custom 8028 Console (40 channel), one of only 2 built with Class A discrete electr', 'https://www.eastweststudios.com/studio2/', 'assets/images/studio/38483295edfd6cd94caca5f48333studio_2.jpg'),
(27, 'EastWest Studio Three', 'Trident “A” Range Console (40 Channel with Neve Flying Faders Automation), the “original” and 1 of 6', '34.0978781', '-118.3204198', '0', '', '0', 'Trident “A” Range Console (40 Channel with Neve Flying Faders Automation), the “original” and 1 of 6', 'https://www.eastweststudios.com/studio3/', 'assets/images/studio/48bee74c201d17235ccdb096b31cstudio_3.jpg'),
(28, 'EastWest Studios Five', 'Features a 64 Channel Solid State Logic SL 4064 G+ with Ultimation, and VU Metering.', '34.0978781', '-118.3204198', '0', '', '0', 'Features a 64 Channel Solid State Logic SL 4064 G+ with Ultimation, and VU Metering.', 'https://www.eastweststudios.com/studio5/', 'assets/images/studio/42775d84026bd3b547eb74828b8cstudio_5.jpg'),
(29, 'Glenwood Place Recording A-C', 'SSL 9000J (72 Channel) | Neve 8068 (56 Channel) | SSL 9000J (88 Channel)', '34.1660826', '-118.3143816', '0', '', '0', 'SSL 9000J (72 Channel) | Neve 8068 (56 Channel) | SSL 9000J (88 Channel)', 'https://www.glenwoodstudios.com/studio-information', 'assets/images/studio/3c630f00fbc45cd3a44bf3ce1a4cglenwood_place_studios.jpg'),
(30, 'Henson Recording Studios', 'One of the music industry\'s top recording facilities.', '34.096626', '-118.343454', '0', '', '0', 'One of the music industry\'s top recording facilities.', 'http://hensonrecording.com/', 'assets/images/studio/5974e7a964fd6bbb83fc4d527eaehenson.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discography`
--
ALTER TABLE `discography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_studio`
--
ALTER TABLE `tb_studio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `discography`
--
ALTER TABLE `discography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `tb_studio`
--
ALTER TABLE `tb_studio`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

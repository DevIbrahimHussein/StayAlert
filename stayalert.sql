-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 12:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayalert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(201702134, 'Hennoloul', 'Hanafa1234'),
(201701963, 'IbrahimHu', 'Ibrahim1212'),
(201702139, 'Farahab', 'Farah1234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phoneNumber` int(8) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pageID` int(11) NOT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `isRoot` int(11) NOT NULL DEFAULT '1',
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageID`, `pageTitle`, `isRoot`, `content`) VALUES
(1, 'Home', 1, 'The Problem at Hand\r\n\r\nRecently the rate of accidents has increased drastically over the few years which is why there\'s a great need to raise awareness to the issue at hand, that is not being prepared to act in the right way when distress strikes.\r\n\r\n\r\nThere\'s so many people that either don’t know how to act when an accident takes place, or they have a slight idea but act upon it in a wrong way which may bring more harm than good in such situations.\r\n\r\n\r\nAlso, when distress strikes the first thing people think of is calling help and sadly nowadays only a numbered few know the right numbers to call i.e. the red cross, civil defense etc.\r\n\r\n\r\nOur Aim\r\n\r\nWe are all prone to accidents, and at one point of our lives we\'ve all experienced the utter panic of not knowing what do, or how to act when having one of our close ones in an accident whether critical or not, or in distress in general. So this website shall be your guide when you get stuck in a sticky situation, for it combines the most helpful emergency organizations in one place, that is StayAlert.\r\n\r\n\r\nAccess\r\n\r\nFor you to access our website you need to sign up for an account and then you will be welcomed with a variety of ogranizations in which you can choose one, plus a stand-alone page that has everything you need to know about firstaid and emergencies. When you choose an organization, you will be welcomed with a little bit of background information about it and you will be able to access the lectures uploaded by the said organization.'),
(2, 'First Aid', 1, 'WHAT IS FIRST AID?\r\nFirst aid is medical attention that is typically administered immediately after an injury or illness occurs. It usually consists of one-time, short-term treatment, such as cleaning minor cuts, treating minor burns, applying bandages, and using non-prescription medicine. The overall goals of first aid are:\r\n\r\nKeep the victim alive.\r\nPrevent the victimâ€™s condition from worsening.\r\nGive first aid until help arrives.\r\nEnsure that the victim receives needed medical care.\r\n\r\n\r\nFIRST AID STEPS:\r\n\r\nBefore administering care to an ill or injured person, check the scene and the person. Size up the scene and form an initial impression.\r\nPause and looks at the scene and the person before responding. Answer the following questions:\r\n- Is the scene safe to enter? \r\n- What happened? \r\n- How many people are involved?\r\n- What is my initial impression about the nature of the personâ€™s illness or injury? Does the person have any life-threatening conditions, such as severe, life-threatening bleeding? \r\n- Is anyone else available to help?\r\n\r\nIf the Person is awake and Responsive and there is no severe life-threatening bleeding:\r\n- Obtain consent: Tell the person your name, describes type and level of training, state what you think is wrong and what you plan to do, and ask permission to provide care.\r\n- Tell a bystander to get the AED and first aid kit: Point to a bystander and speak out loud.\r\n- Use appropriate PPE: Put on gloves, if available.\r\n- Interview the person: Use SAMPLE questions to gather more information about signs and symptoms, allergies, medications, pertinent medical history, last food or drink and events leading up to the incident.\r\n- Conduct a head-to-toe check: Check head and neck, shoulders, chest and abdomen, hips, legs and feet, arms and hands for signs of injury.\r\n- Provide care consistent with knowledge and training according to the conditions you find.\r\n\r\nIf the Person Appears Unresponsive:\r\nShout to get the personâ€™s attention, using the personâ€™s name if it is known. If there is no response, tap the personâ€™s shoulder (if the person is an adult or child) or the bottom of the personâ€™s foot (if the person is an infant) and shout again, while checking for normal breathing. Check for Responsiveness and breathing for no more than 5-10 seconds.\r\n\r\nIf the person is breathing:\r\n- Send someone to call 911 or the designated emergency number and obtain an AED and first aid kit\r\n- Proceed with gathering information from bystanders using the SAMPLE questions\r\n- Conduct a head-to-toe check.\r\n- Roll the person onto his or her side into a recovery position if there are no obvious signs of injury.\r\n\r\nIf the person is not breathing:\r\n- Send someone to call 911 or the designated emergency number and obtain an AED and first aid kit.\r\n- Ensure that the person is face-up on a firm, flat surface such as the floor or ground.\r\n- Begin CPR (starting with compressions) or use an AED if one is immediately available, if you are trained in giving CPR and using an AED.\r\n- Continue administering CPR until the person exhibits signs of life, such as breathing, an AED becomes available, or EMS or trained medical responders arrive on scene.'),
(3, 'Red Cross', 1, 'A Glimpse:\r\n\r\nThe Lebanese Red Cross (LRC) is a national society that was established on July 9, 1945 as an independent National Society. In 1946, it was recognized by the Stateas a public nonprofit organization and as an auxiliary team to the medical service of the Lebanese Army.\r\n\r\n\r\nIn 1947, the Lebanese Red Cross joined the International Red Cross and Red Crescent Movement, which today has affiliates in 178 countries,and became a member of the International Federation of the Red Cross and Red Crescent Societies. Furthermore, it is a founding member of the Secretariat General of the Organization of the Arab Red Crescent and Red Cross Societies.\r\n\r\n\r\nThe Lebanese Red Cross Society is led by volunteers, whose mission is to provide relief to victims of natural and human disasters, and help people prevent, prepare for and respond to emergencies, and to mitigate the suffering of the most vulnerable.\r\n\r\n\r\nThe fundemantal principles of the lebanese red cross\r\n\r\nHumanity - Imparitality - Neutrality - Independence - Voluntary Service - Unity - Universality\r\n\r\n\r\nThe Lebanese Red Cross is a nationwide society that accomplishes its mission through the following centers and units:\r\n\r\n38 Medical - social centers\r\n46 EMS centers and 4 dispatch rooms\r\n32 branches or local committees\r\n35 Youth clubs\r\n13 Mobile clinics\r\n12 Blood transfusion centers\r\n1 faculty and 4 Nursing institutes\r\n1 Orthopedic workshop\r\n1 Disaster Management Unit and 12 team'),
(4, 'Civil Defense', 1, 'LEBANESE CIVIL DEFENSE\r\n\r\nEmergency? Call 125\r\n\r\nA Glimpse:\r\n\r\nThe Lebanese Civil Defense or General Directorate of the Lebanese Civil Defense is a public emergency medical service of Lebanon that carries out patient transportation, search and rescue activities and fire-fighting response.\r\n\r\n\r\nIt is funded and administered by the Ministry of Interior and Municipalities (Lebanon). The directorate works in conjunction with the Lebanese Red Cross along with other pre-hospital service organizations in the country. The current Director General of the Lebanese Civil Defence is General Khattar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

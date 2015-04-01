-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2015 at 12:14 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rm`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(1, 'The title', 'This is the post body.', '2015-02-25 22:30:13', NULL, NULL),
(2, 'A title once again', 'And the post body follows.', '2015-02-25 22:30:14', NULL, NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2015-02-25 22:30:14', NULL, NULL),
(4, 'March 15 Post', 'Trial Post', '2015-03-16 01:47:21', '2015-03-16 01:47:21', 17),
(5, 'This is Yael''s second', 'Post', '2015-03-17 13:22:13', '2015-03-17 13:22:13', 17),
(6, 'Yael''s New Post', 'My new post', '2015-03-19 15:04:15', '2015-03-19 15:04:15', 17);

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
`id` int(10) unsigned NOT NULL,
  `bio` text,
  `img` varchar(225) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `work_experience` text,
  `research_experience` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `bio`, `img`, `semester`, `education`, `work_experience`, `research_experience`, `created`, `modified`, `user_id`) VALUES
(2, 'My first bio', NULL, 'first', 'George Brown College Diploma', 'My work experience', 'My research', '2015-03-14 09:02:11', '2015-03-19 06:08:07', 18),
(3, 'Highly reliable computer programming and systems analysis professional with over five years of experience with customer service in the computer technology industry as well as over-the-phone marketing and support.', NULL, 'first', 'George Brown College Diploma', 'This is my work experience. More text here. More text. Even more text here.', 'I am currently working on a capstone project developing a website that will become a database-type of tool that will allow students to search and apply for research projects.', '2015-03-14 09:15:56', '2015-03-30 22:49:31', 17),
(6, 'My name is Thomas James and I am a fashion student My name is Thomas James and I am a fashion student My name is Thomas James and I am a fashion student My name is Thomas James and I am a fashion student', NULL, 'first', 'George Brown College Diploma', 'I have worked in customer service all my life...', 'Alright then', '2015-03-14 14:09:52', '2015-03-17 15:23:48', 22),
(31, 'My name is Alex, I like cars, Dogs, snowboarding, computers, Linux', NULL, NULL, 'Computer programming', 'Wegz Stadium Bar, PSR\r\nSales, American Eagle Outfitters\r\nProstitute on Jarvis Specialized in BSDM\r\n', 'Linux\r\nResearching Buttholes - Yaels', '2015-03-17 15:26:28', '2015-03-17 15:27:03', 39),
(72, 'Esther Profile', NULL, 'first', 'George Brown College Diploma', 'lol', 'lol', '2015-03-17 22:51:39', '2015-03-19 06:53:55', 40),
(73, 'New profile', NULL, NULL, 'lol', 'lol', 'lol', '2015-03-19 03:14:06', '2015-03-19 03:14:06', 50),
(105, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-23 15:10:16', '2015-03-23 15:10:16', NULL),
(106, 'jhkjhkjhkjhkjhkjhkjh', NULL, 'first', 'hkjhkjh', 'jhgbjnhbhb', 'kjhmjhhkjmhkjh', '2015-03-31 01:02:59', '2015-03-31 01:02:59', NULL),
(107, 'I am Fabio I''m so coooool', NULL, 'first', 'jhkjhkjhkhkjh', 'kjhkhkhkuhkjh', 'kjhkjhkjhkjh', '2015-03-31 01:04:16', '2015-03-31 01:04:52', 59),
(108, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-31 16:31:46', '2015-03-31 16:31:46', NULL),
(109, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-31 16:32:06', '2015-03-31 16:32:06', NULL),
(110, 'SDHlkghdghdlgkhldkjghdlkghdkgjhdfgjh', NULL, 'first', 'skdjflskdjfhdksfhsdkjfh', 'skdjhslkhslkjhsldkghslgukh', 'skdjhskfdhfkdjflskdjfh', '2015-03-31 19:05:12', '2015-03-31 19:05:12', NULL),
(111, 'My name is Nathan Cheng and I am a tool', NULL, NULL, 'George Brown College Diploma', 'Blah blah blah', 'blah blah blah', '2015-04-01 14:58:52', '2015-04-01 14:58:52', 62),
(113, 'About me', NULL, 'first', 'George Brown College', 'Employment', 'research', '2015-04-01 20:56:19', '2015-04-01 20:57:04', 76),
(114, NULL, NULL, NULL, NULL, NULL, NULL, '2015-04-01 21:03:50', '2015-04-01 21:03:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
`id` int(11) NOT NULL,
  `ProgramName` varchar(100) NOT NULL,
  `S_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=950 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `ProgramName`, `S_ID`) VALUES
(143, 'Academic Upgrading for Deaf and Hard-of-Hearing Adults (A738)', 2),
(145, 'Academic Upgrading Program (A737)', 2),
(147, 'Activation Co-ordinator/Gerontology (C102)', 2),
(148, 'Activation Co-ordinator/Gerontology Program (C102)', 2),
(149, 'American Sign Language â€“ English Interpreter Program (C110)', 2),
(151, 'American Sign Language and Deaf Studies Program (C114)', 2),
(153, 'Apprenticeship and Workplace Training', 2),
(154, 'Architectural Technician Program (T132)', 2),
(156, 'Architectural Technology Program (T109)', 2),
(158, 'Art and Design Foundation Program (G108)', 2),
(160, 'Assistant Cook (Extended Training) (ACET) Program (A105)', 2),
(162, 'Autism and Behavioural Science Program (Postgraduate) (C405)', 2),
(164, 'Bachelor of Applied Business Degree - Financial Services (B301)', 2),
(166, 'Bachelor of Applied Business Degree - Hospitality Operations Management (H301)', 2),
(168, 'Bachelor of Applied Technology - Construction Science and Management (T302)', 2),
(169, 'Bachelor of Early Childhood Leadership (Fast-Track) Program (C301)', 2),
(171, 'Bachelor of Early Childhood Leadership Program (C300)', 2),
(173, 'Bachelor of Science in Nursing (B.Sc.N.) (S118)', 2),
(175, 'Bachelor of Technology - Construction Management (T312)', 2),
(176, 'Baker / Patissier Apprentice Program', 2),
(178, 'Baking - Pre-employment Program (H108)', 2),
(180, 'Baking and Pastry Arts Management Program (H113)', 2),
(182, 'Behavioural Science Technology (Intensive) Program (C136)', 2),
(184, 'Behavioural Science Technology Program (C116)', 2),
(186, 'Building Renovation Technician Program (T110)', 2),
(188, 'Building Renovation Technology Program (T148)', 2),
(190, 'Business - Accounting Program (B103)', 2),
(192, 'Business â€“ Human Resources Program (B134)', 2),
(194, 'Business â€“ Marketing Program (B120)', 2),
(196, 'Business Administration - Accounting Program (B107)', 2),
(198, 'Business Administration - Accounting Program (with co-op) (B157)', 2),
(200, 'Business Administration - Finance (B130)', 2),
(201, 'Business Administration - Finance (with co-op) (B150)', 2),
(202, 'Business Administration - Finance Program (B130)', 2),
(203, 'Business Administration - Finance Program (with co-op) (B150)', 2),
(204, 'Business Administration - Human Resources Program (B144)', 2),
(206, 'Business Administration - Human Resources Program (with co-op) (B154)', 2),
(208, 'Business Administration â€“ International Business (B131)', 2),
(209, 'Business Administration â€“ International Business (with co-op) (B161)', 2),
(210, 'Business Administration â€“ International Business Program (B131)', 2),
(211, 'Business Administration â€“ International Business Program (with co-op) (B161)', 2),
(212, 'Business Administration - Marketing Program (B108)', 2),
(214, 'Business Administration - Marketing Program (with co-op) (B158)', 2),
(216, 'Business Administration â€“ Project Management (B126)', 2),
(217, 'Business Administration â€“ Project Management (with co-op) (B156)', 2),
(218, 'Business Administration â€“ Project Management Program (B126)', 2),
(219, 'Business Administration â€“ Project Management Program (with co-op) (B156)', 2),
(220, 'Business Administration â€“ Supply Chain Program (B121)', 2),
(221, 'Business Administration â€“ Supply Chain Program (with co-op) (B151)', 2),
(222, 'Business Administration Program (B145)', 2),
(224, 'Business Administration Program (with co-op) (B155)', 2),
(226, 'Career and Work Counsellor Program (C109)', 2),
(228, 'Career and Work Counsellor Program (Fast-track) (C138)', 2),
(230, 'Career and Work Counsellor Program (for Internationally Educated Professionals) (C129)', 2),
(232, 'Child and Youth Worker Program (C104)', 2),
(234, 'Child and Youth Worker Program (Fast-track) (C134)', 2),
(236, 'Civil Engineering Technology Program (T164)', 2),
(238, 'Clinical Methods in Orthotics/Prosthetics Program (Postgraduate) (S407)', 2),
(240, 'College Teacher Training (for Internationally Educated Professionals) - Postgraduate Program (R403)', 2),
(242, 'College Vocational Program (A101)', 2),
(244, 'Commercial Dance Studies Program (P103)', 2),
(246, 'Community Worker Program (C101)', 2),
(248, 'Computer Programmer Analyst Program (T127)', 2),
(250, 'Computer Systems Technician Program (T141)', 2),
(252, 'Computer Systems Technology Program (T147)', 2),
(254, 'Construction Craft Worker Foundations Program (A106)', 2),
(256, 'Construction Engineering Technician Program (T161)', 2),
(258, 'Construction Engineering Technology Program (T105)', 2),
(260, 'Construction Management (for Internationally Educated Professionals) Program (Postgraduate) (T403)', 2),
(262, 'Construction Trades Techniques Program (T126)', 2),
(264, 'Cook Apprentice', 2),
(266, 'Culinary Arts - Italian (Postgraduate) Program (H411)', 2),
(268, 'Culinary Management â€“ Nutrition Program (H119)', 2),
(270, 'Culinary Management (Integrated Learning) Program (H116)', 2),
(272, 'Culinary Management Program (H100)', 2),
(274, 'Culinary Skills - Chef Training (H112)', 2),
(275, 'Culinary Skills - Chef Training Program (H112)', 2),
(276, 'Dance Performance Preparation Program (P101)', 2),
(278, 'Dance Performance Studies Program (P102)', 2),
(280, 'Dental Assisting Program (Levels I and II) (S113)', 2),
(282, 'Dental Hygiene Program (S124) (previously S112)', 2),
(284, 'Dental Office Administration Program (S115)', 2),
(286, 'Dental Technology Program (S100)', 2),
(288, 'Denturism Program (S101)', 2),
(290, 'Design Management Program (Postgraduate) (G401)', 2),
(292, 'Digital Design - Advanced Digital Design Program (Postgraduate) (G402)', 2),
(294, 'Digital Design - Game Design Program (Postgraduate) (G405)', 2),
(296, 'Digital Media Marketing Program (Postgraduate) (B413)', 2),
(297, 'Early Childhood Assistant Program (C105)', 2),
(299, 'Early Childhood Education (Consecutive Diploma/Degree) Program (C118)', 2),
(301, 'Early Childhood Education (Fast-Track) Program (C130)', 2),
(302, 'Early Childhood Education Program (C100)', 2),
(304, 'Electrical Techniques Program (T167)', 2),
(306, 'Electromechanical Engineering Technician Program (T146)', 2),
(308, 'Electromechanical Engineering Technology â€“ Building Automation Program (T171)', 2),
(310, 'Electromechanical Engineering Technology â€“ Building Automation Program (T172) (Fast-Track)', 2),
(311, 'Electromechanical Technician Program (Distance Education) (T902)', 2),
(313, 'Electronics Technician Program (Distance Education) (T901)', 2),
(315, 'Family Practice Nursing (Postgraduate) Program (S415)', 2),
(317, 'Fashion Business Industry Program (F112)', 2),
(319, 'Fashion Management Program (F102)', 2),
(321, 'Fashion Techniques and Design Program (F113)', 2),
(323, 'Financial Planning Program (Postgraduate) (B407)', 2),
(325, 'Fitness and Health Promotion Program (S125) (previously S114)', 2),
(327, 'Food and Beverage Management Program (H102)', 2),
(329, 'Food and Nutrition Management Program (Postgraduate) (H402)', 2),
(331, 'Game Development Program (G109)', 2),
(333, 'Game Programming Program (T163)', 2),
(335, 'Gemmology Program (F105)', 2),
(337, 'General Arts and Science - English for Academic Purposes (for International Students) (R115)', 2),
(338, 'General Arts and Science - Introduction to Performing Arts Careers Program (R102)', 2),
(339, 'General Arts and Science (R104)', 2),
(340, 'General Arts and Science One-Year (Certificate) Program (R104)', 2),
(341, 'General Arts and Science Two-Year (Diploma) Program (R101)', 2),
(342, 'General Arts and Science Two-Year Diploma Program (R101)', 2),
(343, 'General Arts and Science: English for Academic Purposes for International Students (R115)', 2),
(344, 'Graphic Design Program (G102)', 2),
(346, 'Health Informatics Program (Postgraduate) (T402)', 2),
(348, 'Health Information Management Program (C139)', 2),
(350, 'Hearing Instrument Specialist Program (S117)', 2),
(352, 'Heating, Refrigeration and Air Conditioning Technician Program (T160)', 2),
(354, 'Heating, Refrigeration and Air Conditioning Technology Program (T162)', 2),
(356, 'Hospitality Services (Pre-Hospitality) Program (H101)', 2),
(357, 'Hospitality Services Program (H101)', 2),
(358, 'Hospitality, Tourism and Leisure Program (H110)', 2),
(359, 'Hotel Management Program (H103)', 2),
(361, 'Human Resources Management Program (Postgraduate) (B408)', 2),
(363, 'Information Systems Business Analysis Program (Postgraduate) (T405)', 2),
(365, 'Information Systems Business Analysis Program (Postgraduate) (with co-op) (T407)', 2),
(366, 'Interaction Design and Development (G103)', 2),
(367, 'Interaction Design and Development program (G103)', 2),
(368, 'Interdisciplinary Design Strategy (Postgraduate) at the Institute Without Boundaries (G414)', 2),
(370, 'Interior Design Technology (T170)', 2),
(372, 'International Business Management Program (Postgraduate) (B411)', 2),
(374, 'International Fashion Development and Management (Postgraduate) Program (F402)', 2),
(376, 'Interprofessional Acute Care Paediatric Cardiology Program (Postgraduate) (S416)', 2),
(378, 'Intervenor for Deafblind Persons Program (C108)', 2),
(380, 'Jewellery Arts Program (F114)', 2),
(382, 'Jewellery Essentials Program (F111)', 2),
(384, 'Jewellery Methods Program (F110)', 2),
(386, 'Marketing Management - Financial Services Program (Postgraduate) (B406)', 2),
(388, 'Mechanical Engineering Technology - Design Program (T121)', 2),
(390, 'Mechanical Technician - CNC and Precision Machining  (T173)', 2),
(391, 'Mechanical Technician - Tool and Die (T143)', 2),
(392, 'Mechanical Techniques (Fast-Track)  (T149)', 2),
(393, 'Northern Womenâ€™s Empowerment Support and Advocacy Education (R106)', 2),
(395, 'Office Administration Program - Medical (C115)', 2),
(397, 'Orthotic / Prosthetic Technician Program (S102)', 2),
(399, 'Personal Support Worker (PSW) Pathway to Practical Nursing Program (S119)', 2),
(401, 'Personal Support Worker (PSW) Program (C112)', 2),
(403, 'Plumbing Techniques Program (T165)', 2),
(405, 'Practical Nursing Program (PN) (S121)', 2),
(407, 'Pre-Business Program (A146)', 2),
(409, 'Pre-Community Services Program (A103)', 2),
(411, 'Pre-Health Science Program (A102)', 2),
(413, 'Programmable Logic Controllers (PLC) Technician Program (Distance Education) (T903)', 2),
(415, 'R.P.N. Bridge to B.Sc.N. Postgraduate Program (S122)', 2),
(417, 'Railway Conductor Program (T151)', 2),
(418, 'Registered Nurse - Critical Care Nursing Program (Online) (Postgraduate) (S422)', 2),
(420, 'Registered Nurse - Critical Care Nursing Program (Postgraduate) (S402)', 2),
(422, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Online Program (S424)', 2),
(424, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Program (S414)', 2),
(426, 'Registered Nurse - Perinatal Intensive Care Nursing Program (S404) (Postgraduate)', 2),
(428, 'Restorative Dental Hygiene (Postgraduate) Program (S400)', 2),
(430, 'Robotics Technician Program (Distance Education) (T948)', 2),
(432, 'Small Business Entrepreneurship Program (Postgraduate) (B410)', 2),
(434, 'Social Service Worker Program (C119)', 2),
(436, 'Social Service Worker Program (Fast Track) (C135)', 2),
(438, 'Special Events Planning Program (H121)', 2),
(440, 'Sport and Event Marketing Program (Postgraduate) (B400)', 2),
(442, 'Strategic Relationship Marketing Program (Postgraduate) (B409)', 2),
(444, 'Teaching English as a Second Language to Adults (TESL) Program (R400)', 2),
(446, 'Theatre Arts Program (P100)', 2),
(448, 'Transitions to Post-Secondary Education Program (A107)', 2),
(450, 'Wireless Networking Program (Postgraduate) (T411)', 2),
(703, 'Accounting', 1),
(704, 'Administrative Studies', 1),
(705, 'Advanced Management Graduate Diploma', 1),
(706, 'African Studies', 1),
(707, 'Anthropology', 1),
(708, 'Anthropology  â€“  Social', 1),
(709, 'Anti-Racist Research & Practice', 1),
(710, 'Applied Mathematics', 1),
(711, 'Art History', 1),
(712, 'Art History & Visual Culture', 1),
(713, 'Arts & Media Administration Graduate Diploma', 1),
(714, 'Asian Studies Graduate Diploma', 1),
(715, 'Athletic Therapy', 1),
(716, 'Biochemistry', 1),
(717, 'Biology', 1),
(719, 'Biomedical Science', 1),
(720, 'Biophysics', 1),
(721, 'Biotechnology', 1),
(722, 'Business & Society', 1),
(723, 'Business & Sustainability Graduate Diploma', 1),
(724, 'Business Administration', 1),
(726, 'Business Economics', 1),
(727, 'Canadian Business for Internationally Educated Professionals', 1),
(728, 'Canadian Studies', 1),
(729, 'Chemistry', 1),
(731, 'Cinema & Media Studies', 1),
(732, 'Civil Engineering', 1),
(733, 'Classical Studies & Classics', 1),
(734, 'Cognitive Science', 1),
(735, 'Communication & Culture', 1),
(736, 'Communication Studies', 1),
(737, 'Community Arts Practice', 1),
(738, 'Computational Math', 1),
(739, 'Computer Engineering', 1),
(741, 'Computer Science', 1),
(743, 'Computer Security', 1),
(744, 'Conference Interpreting', 1),
(745, 'Creative Writing', 1),
(746, 'Criminology', 1),
(747, 'Critical Disability Studies', 1),
(748, 'Culture & Expression', 1),
(749, 'Curatorial Studies in Visual Culture Graduate Diploma', 1),
(750, 'Dance', 1),
(752, 'Dance Science', 1),
(753, 'Dance Studies', 1),
(754, 'Democratic Administration Graduate Diploma', 1),
(755, 'Design', 1),
(757, 'Development Studies', 1),
(758, 'Digital Design', 1),
(759, 'Digital Media', 1),
(760, 'Disaster & Emergency Management', 1),
(762, 'Discipline of Teaching English as an International Language (D-TEIL)', 1),
(763, 'Drama Studies', 1),
(764, 'Early Childhood Education Graduate Diploma', 1),
(765, 'Earth & Atmospheric Science', 1),
(766, 'Earth & Space Science', 1),
(767, 'East Asian Studies', 1),
(768, 'Economics', 1),
(770, 'Ecosystem Management', 1),
(771, 'Education', 1),
(772, 'Education in Urban Environments Graduate Diploma', 1),
(773, 'Education â€“ Language, Culture & Teaching', 1),
(774, 'Electrical Engineering', 1),
(775, 'Emergency Management', 1),
(776, 'Engineering & International Development Studies', 1),
(777, 'English', 1),
(779, 'English & Professional Writing', 1),
(780, 'English Studies', 1),
(781, 'Environmental & Health Studies (Multidisciplinary Studies)', 1),
(782, 'Environmental Biology', 1),
(783, 'Environmental Science', 1),
(784, 'Environmental Studies', 1),
(786, 'Environmental/Sustainability Education Graduate Diploma', 1),
(787, 'Ã‰tudes franÃ§aises', 1),
(788, 'Ã‰tudes francophones', 1),
(789, 'European Studies', 1),
(790, 'Film', 1),
(792, 'Financial & Business Economics', 1),
(793, 'Financial Accountability', 1),
(794, 'Financial Engineering Graduate Diploma', 1),
(795, 'Financial Planning', 1),
(796, 'Fitness Assessment & Exercise Counselling', 1),
(797, 'French Studies / Ã‰tudes franÃ§aises', 1),
(798, 'General Interpreting Graduate Diploma', 1),
(799, 'Geographic Information Systems & Remote Sensing', 1),
(800, 'Geography', 1),
(802, 'Geography & Urban Studies', 1),
(803, 'Geomatics Engineering', 1),
(804, 'German & European Studies Graduate Diploma', 1),
(805, 'German Studies', 1),
(806, 'Global Health', 1),
(807, 'Global Political Studies', 1),
(808, 'Health', 1),
(809, 'Health & Society', 1),
(810, 'Health Industry Management Graduate Diploma', 1),
(811, 'Health Informatics', 1),
(812, 'Health Psychology Graduate Diploma', 1),
(813, 'Health Services Financial Management', 1),
(814, 'Health Studies', 1),
(815, 'Hebrew & Jewish Studies: Advanced', 1),
(816, 'Hellenic Studies', 1),
(817, 'History', 1),
(819, 'Human Resources Management', 1),
(822, 'Human Resources Management for Internationally Educated Professionals', 1),
(823, 'Human Rights & Equity Studies', 1),
(824, 'Humanities', 1),
(826, 'Indigenous Studies', 1),
(827, 'Individualized / Multidisciplinary Studies', 1),
(828, 'Information Systems & Technology', 1),
(829, 'Information Technology', 1),
(830, 'Information Technology Auditing & Assurance', 1),
(831, 'Information Technology for Internationally Educated Professionals', 1),
(832, 'Interdisciplinary Studies', 1),
(833, 'International & Security Studies Graduate Diploma', 1),
(834, 'International Business Administration', 1),
(835, 'International Development Studies', 1),
(836, 'International Project Management', 1),
(837, 'International Studies', 1),
(838, 'Investment Management', 1),
(839, 'Italian Culture', 1),
(840, 'Italian Studies', 1),
(841, 'Jewish Studies', 1),
(842, 'Jewish Studies Graduate Diploma', 1),
(843, 'Justice System Administration Graduate Diploma', 1),
(844, 'Kinesiology & Health Science', 1),
(846, 'Language & Literacy Education Graduate Diploma', 1),
(847, 'Language Proficiency', 1),
(848, 'Latin American & Caribbean Studies', 1),
(849, 'Latin American & Caribbean Studies Graduate Diploma', 1),
(850, 'Law', 1),
(851, 'Law & Social Thought / Droit et pensÃ©e sociale', 1),
(852, 'Law & Society', 1),
(854, 'Law (Osgoode Hall Law School)', 1),
(855, 'Law (Osgoode Professional Development)', 1),
(856, 'Linguistics', 1),
(857, 'Linguistics & Applied Linguistics', 1),
(858, 'Linguistics & Language Studies', 1),
(859, 'Logistics', 1),
(860, 'Management', 1),
(861, 'Marketing', 1),
(862, 'Mathematics', 1),
(863, 'Mathematics & Statistics', 1),
(864, 'Mathematics Education Graduate Diploma', 1),
(865, 'Mathematics for Commerce', 1),
(866, 'Mathematics for Education', 1),
(867, 'Mathematics for Teachers', 1),
(868, 'Mathematics: Applied & Industrial', 1),
(869, 'Mechanical Engineering', 1),
(870, 'Meteorology', 1),
(871, 'Multicultural & Indigenous Studies', 1),
(872, 'Music', 1),
(874, 'Neuroscience Graduate Diploma', 1),
(875, 'Non-Profit Management', 1),
(876, 'Nursing', 1),
(877, 'Nursing: Collaborative (York-Seneca-Georgian)', 1),
(878, 'Nursing: Post-RN for Internationally Educated Nurses', 1),
(879, 'Nursing: Second Entry', 1),
(880, 'Nursingâ€“Primary Health Care Nurse Practitioner (PHCNP)', 1),
(881, 'Nursingâ€“RN to MScN Alternate Admission', 1),
(882, 'Philosophy', 1),
(884, 'Physics & Astronomy', 1),
(886, 'Political Science', 1),
(888, 'Portuguese Studies', 1),
(889, 'Postsecondary Education: Community, Culture & Policy', 1),
(890, 'Practical Ethics', 1),
(891, 'Professional Ethics', 1),
(892, 'Professional Writing', 1),
(893, 'Psychology', 1),
(895, 'Public & International Affairs', 1),
(896, 'Public Administration', 1),
(897, 'Public Administration & Law', 1),
(898, 'Public Management Graduate Diploma', 1),
(899, 'Public Policy Analysis', 1),
(900, 'Public Policy, Administration & Law', 1),
(901, 'Real Estate', 1),
(902, 'Real Estate & Infrastructure Graduate Diploma', 1),
(903, 'RÃ©daction professionnelle', 1),
(904, 'Refugee & Migration Studies / Ã‰tudes sur la migration et sur les rÃ©fugiÃ©s', 1),
(905, 'Refugee & Migration Studies Graduate Diploma', 1),
(906, 'Rehabilitation Services', 1),
(907, 'Religious Studies', 1),
(908, 'Science & Technology Studies', 1),
(910, 'Sexuality Studies', 1),
(911, 'Sexuality Studies / Ã‰tudes sur la sexualitÃ©', 1),
(912, 'Social & Political Thought', 1),
(914, 'Social Science', 1),
(915, 'Social Sector Managment Graduate Diploma', 1),
(916, 'Social Work', 1),
(918, 'Socio-Legal Studies', 1),
(919, 'Sociology', 1),
(921, 'Software Engineering', 1),
(922, 'South Asian Studies', 1),
(924, 'Space Engineering', 1),
(925, 'Space Science', 1),
(926, 'Spanish', 1),
(927, 'Spanish (Hispanic Studies)', 1),
(928, 'Spanish-English Translation / TraducciÃ³n ingles-espanÃµl', 1),
(929, 'Sustainable Energy', 1),
(930, 'Teacher Education (Bachelor of Education)', 1),
(931, 'Teacher Education for French Immersion (Bachelor of Education)', 1),
(932, 'Teaching English to Speakers of Other Languages (TESOL)', 1),
(933, 'Technical & Professional Communication', 1),
(934, 'Theatre', 1),
(936, 'Theatre & Performance Studies', 1),
(937, 'Translation Studies', 1),
(939, 'Undecided Major', 1),
(940, 'United States Studies', 1),
(941, 'Urban Ecologies', 1),
(942, 'Urban Studies', 1),
(944, 'Urban Sustainability - York/Seneca Joint Program', 1),
(945, 'Value Theory & Applied Ethics Graduate Diploma', 1),
(946, 'Visual Arts', 1),
(947, 'Visual Arts & Art History', 1),
(948, 'Voice Teaching Graduate Diploma', 1),
(949, 'Work & Labour Studies', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summary` text,
  `description` text,
  `skills` text,
  `about` text,
  `program_id` int(11) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `summary`, `description`, `skills`, `about`, `program_id`, `create_id`, `created`, `modified`) VALUES
(19, 'Chief Technology Officer - Toronto, ON, Canada', 'Fujitsu Canada, provides a complete portfolio of business technology services, computing platforms, and industry solutions. ', 'Fujitsu platform products are based on scalable, reliable and high-performance server, storage, software, point-of-sale, and mobile technologies. Fujitsu combines its renowned platform offerings with a full suite of onshore, near shore and offshore system integration, outsourcing, and datacenter services covering applications, operations, infrastructure, customer service, and multi-vendor lifecycle services. ', NULL, 'The Chief Technology Officer (CTO) is a strategic role within the clientâ€™s Account, with an objective to drive growth and help to facilitate the introduction of differentiated Offerings and solutions within Fujitsuâ€™s Portfolio that have business value to the client. ', 153, 54, '2015-03-31 07:12:05', '2015-03-31 07:12:05'),
(20, 'Customer Success Manager, Toronto', 'Nomis is looking for the best Customer Success Manager in the galaxy.  While we aim high, you aim even higher.', 'You are a natural diplomat capable of persuading and enlightening complex organizations.  With the confidence that comes from a proven background, you thrive on delivering value-laden insights and delighting customers through value maximization.  You will report to the VP of Customer Success and play a crucial role in establishing a new world-class Customer Success operation.', NULL, 'Nomis is a fast-growth company that combines cutting-edge Silicon Valley approaches to big data, advanced modeling, and deep analytics to help large and medium-sized retail banks better understand their customers.', 705, 54, '2015-03-31 07:13:35', '2015-03-31 07:13:35'),
(21, 'SharePoint Specialist', 'Reporting to the Manager of Information Management or Manager, Information Technology/Information Technology (IT/IM), the SharePoint Specialist is responsible.', 'Works with PHO program areas and IMIT business analysts to understand the business requirements and features needed in custom SharePoint solutions.\r\n\r\nParticipates in joint application development sessions with program areas and other IMIT development staff and ensures that application solutions meet business requirements.', NULL, 'Public Health Ontario (â€œPHOâ€) is an arm''s-length government agency dedicated to protecting and promoting the health of all Ontarians and reducing inequities in health. As a hub organization, PHO links public health practitioners, front-line health workers and researchers to the best scientific intelligence and knowledge from around the world.', 723, 54, '2015-03-31 07:15:18', '2015-03-31 07:15:18'),
(24, 'Application Architect for Homework Help - Immediate Contract!', 'Students have access to both guided and independent learning in a unique environment that combines technology and personal interaction.', 'In collaboration with management and the Homework Help team, the Application Architectâ€™s role is to provide leadership and guideance through a project to re-implement the HH Chatrooms using mobile-friendly technologies. Within that leadership, they will ensure that the proposed solution(s) maintain the stability and integrity of Homework Helpâ€™s network infrastructure, databases and other technologies. In addition, the Application Architect will work with the HH technical team to specify, monitor, integrate, and optimize the new Chat application software within the greater group of services that comprise the HH Chat offering.', NULL, 'Collaborate with management and development team to assess near- and long- term Chat Application and System needs\r\nâ€¢In conjunction with management and the Homework Help Development team, design a solution providing a ''Ask A Tutor Chat'' service usable by mobile browsers.\r\nâ€¢Architect a solution with necessary reliability, maintainability, operability, performance and security.', 145, 54, '2015-03-31 16:18:57', '2015-03-31 16:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `projects_users_applies`
--

CREATE TABLE IF NOT EXISTS `projects_users_applies` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_users_applies`
--

INSERT INTO `projects_users_applies` (`project_id`, `user_id`) VALUES
(19, 17),
(20, 17),
(19, 59),
(20, 59),
(24, 17),
(19, 76);

-- --------------------------------------------------------

--
-- Table structure for table `projects_users_invites`
--

CREATE TABLE IF NOT EXISTS `projects_users_invites` (
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects_users_saves`
--

CREATE TABLE IF NOT EXISTS `projects_users_saves` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_users_saves`
--

INSERT INTO `projects_users_saves` (`project_id`, `user_id`) VALUES
(21, 17),
(20, 76);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created`, `modified`) VALUES
(1, 'HTML', '2015-03-19 10:43:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `studentid` varchar(10) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `campus` varchar(225) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `studentid`, `username`, `password`, `role`, `campus`, `created`, `modified`, `program_id`) VALUES
(4, 'Admin', 'Admin', NULL, 'admin', '$2a$10$ooeQ7XIrb63Jn/U3ZpaoquwaqY61NG9T.Hbf0WT4TsxVK8YsBlssa', 'admin', NULL, '2015-03-08 03:09:08', '2015-03-19 09:54:26', NULL),
(17, 'Yael', 'Sprikut', '100871258', 'ysprikut@georgebrown.ca', '$2a$10$A2ep.5IsVTYNfX9wi6cAruqsuzXjJ21aS4U3/U6qns9EiQU/jRlZu', 'student', 'Casa Loma', '2015-03-14 03:33:30', '2015-03-30 22:49:31', 248),
(18, 'Tatiana', 'Sprikut', '100872399', 'yanalo@yahoo.com', '$2a$10$PdfjA2aaYxIozggJkKCueee9dAQiDRRDcVGlkCqJZ9EnbS8wvhM/6', 'admin', 'Casa Loma', '2015-03-14 05:36:52', '2015-03-23 15:10:16', 156),
(39, 'Alex ', 'Diker', '100746284', 'admin@777ruru.ru', '$2a$10$/um5KTmj1/AL01RogHXHQOPFGVwbFNzgbPmcxGZ87RydOmsu8AUbS', 'student', 'Casa Loma', '2015-03-17 15:19:06', '2015-03-17 15:27:03', NULL),
(40, 'Esther', 'Baruti', '100871100', 'esther@gmail.com', '$2a$10$tQkj.7IWgnnUAxPLww9J.O0YoU9gnFwzh9doNb9jyZwvDFdvciiCm', 'student', 'Casa Loma', '2015-03-17 18:52:28', '2015-03-19 06:53:55', 248),
(49, 'Staff', 'Staff', NULL, 'staff', '$2a$10$nRsgUfYoyHVWoVFr6gEhuOSEixL.LEI8Gg/y7l9CrxnSmQJqAN8Pa', 'staff', NULL, '2015-03-19 02:42:08', '2015-03-19 10:00:14', NULL),
(54, 'Research', 'Research', NULL, 'research', '$2a$10$ueHnFKp548pOWAljtL3NAOFKRuBcF..9lWihH70Ecg/MCkRkk2sGy', 'research', NULL, '2015-03-19 08:30:44', '2015-03-19 09:55:11', NULL),
(57, 'Scott', 'C', '100871250', 'scott@mail.com', '$2a$10$gi7TlPd4xdH8QlXswwT4BeE9omxsrc4/tzPblLrw9EHewC3tUW7Fe', 'research', 'Casa Loma', '2015-03-28 19:54:26', '2015-03-28 19:54:26', 148),
(59, 'Fabio', 'Gomes', '100100100', 'fabio@gmail.com', '$2a$10$Grw9R1tKYKWQuK83MliQk.BG/2v9aZAtP10M1HlbWvKxSZIkp8eCG', 'student', 'Waterfront', '2015-03-31 01:01:21', '2015-03-31 01:04:52', 709),
(60, 'Anjana', 'Shah', '123456', 'ashah@gmail.com', '$2a$10$X4C9ew47Wszj3pQDcSv.r.PvWwrHHglqFNVcZANm98M.1teTChHqy', 'staff', 'Casa Loma', '2015-03-31 19:00:57', '2015-03-31 19:00:57', 248),
(62, 'NAthan', 'Cheng', '100852405', 'yaelsuck@gmail.com', '$2a$10$DsCeVph5Qdqk.fg1sVXQS.tOrOtJZz0HeABUlTl8M.Bo5f4HlgWHy', 'student', 'Casa Loma', '2015-03-31 19:09:00', '2015-03-31 19:09:00', 741),
(74, 'Michael', 'Ling', '100100', 'mike@gmail.com', '$2a$10$6lTLTJxFmm56QYCF.svSjuJZqOchaIbuBEQEI56co8t8LZwH/XUIS', 'student', 'St. James', '2015-04-01 17:20:44', '2015-04-01 17:20:44', 143),
(76, 'Gary', 'Baruti', '100100100', 'gary1@gmail.com', '$2a$10$DbPQDG2n9uFqVggYHsntOuZHxoUs6n5B8iGyw9x9ea6lcCdIx9Osy', 'staff', 'St. James', '2015-04-01 20:55:08', '2015-04-01 21:03:50', 319);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `idx_name` (`id`,`ProgramName`,`S_ID`), ADD UNIQUE KEY `id` (`id`,`ProgramName`,`S_ID`), ADD UNIQUE KEY `ProgramName` (`id`,`ProgramName`,`S_ID`), ADD UNIQUE KEY `indexname` (`id`,`ProgramName`,`S_ID`), ADD UNIQUE KEY `index1` (`ProgramName`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_users_saves`
--
ALTER TABLE `projects_users_saves`
 ADD KEY `project_id` (`project_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=950;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

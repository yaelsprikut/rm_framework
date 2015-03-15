-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2015 at 02:17 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(1, 'The title', 'This is the post body.', '2015-03-14 02:26:32', NULL, NULL),
(2, 'A title once again', 'And the post body follows.', '2015-03-14 02:26:32', NULL, NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2015-03-14 02:26:32', NULL, NULL),
(4, 'This is Yael''s Post', 'Yay yael', '2015-03-14 07:26:59', '2015-03-14 07:31:31', 18),
(6, 'Second post of the night', 'Second post', '2015-03-14 08:40:14', '2015-03-14 08:40:14', 18),
(7, 'My first morning post', 'lol', '2015-03-14 15:21:54', '2015-03-14 15:21:54', 17);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
`id` int(10) unsigned NOT NULL,
  `bio` text,
  `education` varchar(200) DEFAULT NULL,
  `workexperience` text,
  `researchexperience` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `bio`, `education`, `workexperience`, `researchexperience`, `created`, `modified`, `user_id`) VALUES
(2, 'My first bio', NULL, 'My work experience', 'My research', '2015-03-14 09:02:11', '2015-03-14 09:02:11', 18),
(3, 'My name is Yael Sprikut and I am a senior at George Brown College.  ', NULL, 'I have worked for three years in the computer field. I love to design templates and creating websites.', 'I have done some research', '2015-03-14 09:15:56', '2015-03-15 00:20:46', 17),
(6, 'My name is Thomas James', NULL, 'I am seeing weird apparations', 'Alright then', '2015-03-14 14:09:52', '2015-03-14 14:09:52', 22);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
`id` int(11) NOT NULL,
  `ProgramName` varchar(100) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=950 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `ProgramName`, `S_ID`, `user_id`) VALUES
(143, 'Academic Upgrading for Deaf and Hard-of-Hearing Adults (A738)', 2, NULL),
(145, 'Academic Upgrading Program (A737)', 2, NULL),
(147, 'Activation Co-ordinator/Gerontology (C102)', 2, NULL),
(148, 'Activation Co-ordinator/Gerontology Program (C102)', 2, NULL),
(149, 'American Sign Language â€“ English Interpreter Program (C110)', 2, NULL),
(151, 'American Sign Language and Deaf Studies Program (C114)', 2, NULL),
(153, 'Apprenticeship and Workplace Training', 2, NULL),
(154, 'Architectural Technician Program (T132)', 2, NULL),
(156, 'Architectural Technology Program (T109)', 2, NULL),
(158, 'Art and Design Foundation Program (G108)', 2, NULL),
(160, 'Assistant Cook (Extended Training) (ACET) Program (A105)', 2, NULL),
(162, 'Autism and Behavioural Science Program (Postgraduate) (C405)', 2, NULL),
(164, 'Bachelor of Applied Business Degree - Financial Services (B301)', 2, NULL),
(166, 'Bachelor of Applied Business Degree - Hospitality Operations Management (H301)', 2, NULL),
(168, 'Bachelor of Applied Technology - Construction Science and Management (T302)', 2, NULL),
(169, 'Bachelor of Early Childhood Leadership (Fast-Track) Program (C301)', 2, NULL),
(171, 'Bachelor of Early Childhood Leadership Program (C300)', 2, NULL),
(173, 'Bachelor of Science in Nursing (B.Sc.N.) (S118)', 2, NULL),
(175, 'Bachelor of Technology - Construction Management (T312)', 2, NULL),
(176, 'Baker / Patissier Apprentice Program', 2, NULL),
(178, 'Baking - Pre-employment Program (H108)', 2, NULL),
(180, 'Baking and Pastry Arts Management Program (H113)', 2, NULL),
(182, 'Behavioural Science Technology (Intensive) Program (C136)', 2, NULL),
(184, 'Behavioural Science Technology Program (C116)', 2, NULL),
(186, 'Building Renovation Technician Program (T110)', 2, NULL),
(188, 'Building Renovation Technology Program (T148)', 2, NULL),
(190, 'Business - Accounting Program (B103)', 2, NULL),
(192, 'Business â€“ Human Resources Program (B134)', 2, NULL),
(194, 'Business â€“ Marketing Program (B120)', 2, NULL),
(196, 'Business Administration - Accounting Program (B107)', 2, NULL),
(198, 'Business Administration - Accounting Program (with co-op) (B157)', 2, NULL),
(200, 'Business Administration - Finance (B130)', 2, NULL),
(201, 'Business Administration - Finance (with co-op) (B150)', 2, NULL),
(202, 'Business Administration - Finance Program (B130)', 2, NULL),
(203, 'Business Administration - Finance Program (with co-op) (B150)', 2, NULL),
(204, 'Business Administration - Human Resources Program (B144)', 2, NULL),
(206, 'Business Administration - Human Resources Program (with co-op) (B154)', 2, NULL),
(208, 'Business Administration â€“ International Business (B131)', 2, NULL),
(209, 'Business Administration â€“ International Business (with co-op) (B161)', 2, NULL),
(210, 'Business Administration â€“ International Business Program (B131)', 2, NULL),
(211, 'Business Administration â€“ International Business Program (with co-op) (B161)', 2, NULL),
(212, 'Business Administration - Marketing Program (B108)', 2, NULL),
(214, 'Business Administration - Marketing Program (with co-op) (B158)', 2, NULL),
(216, 'Business Administration â€“ Project Management (B126)', 2, NULL),
(217, 'Business Administration â€“ Project Management (with co-op) (B156)', 2, NULL),
(218, 'Business Administration â€“ Project Management Program (B126)', 2, NULL),
(219, 'Business Administration â€“ Project Management Program (with co-op) (B156)', 2, NULL),
(220, 'Business Administration â€“ Supply Chain Program (B121)', 2, NULL),
(221, 'Business Administration â€“ Supply Chain Program (with co-op) (B151)', 2, NULL),
(222, 'Business Administration Program (B145)', 2, NULL),
(224, 'Business Administration Program (with co-op) (B155)', 2, NULL),
(226, 'Career and Work Counsellor Program (C109)', 2, NULL),
(228, 'Career and Work Counsellor Program (Fast-track) (C138)', 2, NULL),
(230, 'Career and Work Counsellor Program (for Internationally Educated Professionals) (C129)', 2, NULL),
(232, 'Child and Youth Worker Program (C104)', 2, NULL),
(234, 'Child and Youth Worker Program (Fast-track) (C134)', 2, NULL),
(236, 'Civil Engineering Technology Program (T164)', 2, NULL),
(238, 'Clinical Methods in Orthotics/Prosthetics Program (Postgraduate) (S407)', 2, NULL),
(240, 'College Teacher Training (for Internationally Educated Professionals) - Postgraduate Program (R403)', 2, NULL),
(242, 'College Vocational Program (A101)', 2, NULL),
(244, 'Commercial Dance Studies Program (P103)', 2, NULL),
(246, 'Community Worker Program (C101)', 2, NULL),
(248, 'Computer Programmer Analyst Program (T127)', 2, NULL),
(250, 'Computer Systems Technician Program (T141)', 2, NULL),
(252, 'Computer Systems Technology Program (T147)', 2, NULL),
(254, 'Construction Craft Worker Foundations Program (A106)', 2, NULL),
(256, 'Construction Engineering Technician Program (T161)', 2, NULL),
(258, 'Construction Engineering Technology Program (T105)', 2, NULL),
(260, 'Construction Management (for Internationally Educated Professionals) Program (Postgraduate) (T403)', 2, NULL),
(262, 'Construction Trades Techniques Program (T126)', 2, NULL),
(264, 'Cook Apprentice', 2, NULL),
(266, 'Culinary Arts - Italian (Postgraduate) Program (H411)', 2, NULL),
(268, 'Culinary Management â€“ Nutrition Program (H119)', 2, NULL),
(270, 'Culinary Management (Integrated Learning) Program (H116)', 2, NULL),
(272, 'Culinary Management Program (H100)', 2, NULL),
(274, 'Culinary Skills - Chef Training (H112)', 2, NULL),
(275, 'Culinary Skills - Chef Training Program (H112)', 2, NULL),
(276, 'Dance Performance Preparation Program (P101)', 2, NULL),
(278, 'Dance Performance Studies Program (P102)', 2, NULL),
(280, 'Dental Assisting Program (Levels I and II) (S113)', 2, NULL),
(282, 'Dental Hygiene Program (S124) (previously S112)', 2, NULL),
(284, 'Dental Office Administration Program (S115)', 2, NULL),
(286, 'Dental Technology Program (S100)', 2, NULL),
(288, 'Denturism Program (S101)', 2, NULL),
(290, 'Design Management Program (Postgraduate) (G401)', 2, NULL),
(292, 'Digital Design - Advanced Digital Design Program (Postgraduate) (G402)', 2, NULL),
(294, 'Digital Design - Game Design Program (Postgraduate) (G405)', 2, NULL),
(296, 'Digital Media Marketing Program (Postgraduate) (B413)', 2, NULL),
(297, 'Early Childhood Assistant Program (C105)', 2, NULL),
(299, 'Early Childhood Education (Consecutive Diploma/Degree) Program (C118)', 2, NULL),
(301, 'Early Childhood Education (Fast-Track) Program (C130)', 2, NULL),
(302, 'Early Childhood Education Program (C100)', 2, NULL),
(304, 'Electrical Techniques Program (T167)', 2, NULL),
(306, 'Electromechanical Engineering Technician Program (T146)', 2, NULL),
(308, 'Electromechanical Engineering Technology â€“ Building Automation Program (T171)', 2, NULL),
(310, 'Electromechanical Engineering Technology â€“ Building Automation Program (T172) (Fast-Track)', 2, NULL),
(311, 'Electromechanical Technician Program (Distance Education) (T902)', 2, NULL),
(313, 'Electronics Technician Program (Distance Education) (T901)', 2, NULL),
(315, 'Family Practice Nursing (Postgraduate) Program (S415)', 2, NULL),
(317, 'Fashion Business Industry Program (F112)', 2, NULL),
(319, 'Fashion Management Program (F102)', 2, NULL),
(321, 'Fashion Techniques and Design Program (F113)', 2, NULL),
(323, 'Financial Planning Program (Postgraduate) (B407)', 2, NULL),
(325, 'Fitness and Health Promotion Program (S125) (previously S114)', 2, NULL),
(327, 'Food and Beverage Management Program (H102)', 2, NULL),
(329, 'Food and Nutrition Management Program (Postgraduate) (H402)', 2, NULL),
(331, 'Game Development Program (G109)', 2, NULL),
(333, 'Game Programming Program (T163)', 2, NULL),
(335, 'Gemmology Program (F105)', 2, NULL),
(337, 'General Arts and Science - English for Academic Purposes (for International Students) (R115)', 2, NULL),
(338, 'General Arts and Science - Introduction to Performing Arts Careers Program (R102)', 2, NULL),
(339, 'General Arts and Science (R104)', 2, NULL),
(340, 'General Arts and Science One-Year (Certificate) Program (R104)', 2, NULL),
(341, 'General Arts and Science Two-Year (Diploma) Program (R101)', 2, NULL),
(342, 'General Arts and Science Two-Year Diploma Program (R101)', 2, NULL),
(343, 'General Arts and Science: English for Academic Purposes for International Students (R115)', 2, NULL),
(344, 'Graphic Design Program (G102)', 2, NULL),
(346, 'Health Informatics Program (Postgraduate) (T402)', 2, NULL),
(348, 'Health Information Management Program (C139)', 2, NULL),
(350, 'Hearing Instrument Specialist Program (S117)', 2, NULL),
(352, 'Heating, Refrigeration and Air Conditioning Technician Program (T160)', 2, NULL),
(354, 'Heating, Refrigeration and Air Conditioning Technology Program (T162)', 2, NULL),
(356, 'Hospitality Services (Pre-Hospitality) Program (H101)', 2, NULL),
(357, 'Hospitality Services Program (H101)', 2, NULL),
(358, 'Hospitality, Tourism and Leisure Program (H110)', 2, NULL),
(359, 'Hotel Management Program (H103)', 2, NULL),
(361, 'Human Resources Management Program (Postgraduate) (B408)', 2, NULL),
(363, 'Information Systems Business Analysis Program (Postgraduate) (T405)', 2, NULL),
(365, 'Information Systems Business Analysis Program (Postgraduate) (with co-op) (T407)', 2, NULL),
(366, 'Interaction Design and Development (G103)', 2, NULL),
(367, 'Interaction Design and Development program (G103)', 2, NULL),
(368, 'Interdisciplinary Design Strategy (Postgraduate) at the Institute Without Boundaries (G414)', 2, NULL),
(370, 'Interior Design Technology (T170)', 2, NULL),
(372, 'International Business Management Program (Postgraduate) (B411)', 2, NULL),
(374, 'International Fashion Development and Management (Postgraduate) Program (F402)', 2, NULL),
(376, 'Interprofessional Acute Care Paediatric Cardiology Program (Postgraduate) (S416)', 2, NULL),
(378, 'Intervenor for Deafblind Persons Program (C108)', 2, NULL),
(380, 'Jewellery Arts Program (F114)', 2, NULL),
(382, 'Jewellery Essentials Program (F111)', 2, NULL),
(384, 'Jewellery Methods Program (F110)', 2, NULL),
(386, 'Marketing Management - Financial Services Program (Postgraduate) (B406)', 2, NULL),
(388, 'Mechanical Engineering Technology - Design Program (T121)', 2, NULL),
(390, 'Mechanical Technician - CNC and Precision Machining  (T173)', 2, NULL),
(391, 'Mechanical Technician - Tool and Die (T143)', 2, NULL),
(392, 'Mechanical Techniques (Fast-Track)  (T149)', 2, NULL),
(393, 'Northern Womenâ€™s Empowerment Support and Advocacy Education (R106)', 2, NULL),
(395, 'Office Administration Program - Medical (C115)', 2, NULL),
(397, 'Orthotic / Prosthetic Technician Program (S102)', 2, NULL),
(399, 'Personal Support Worker (PSW) Pathway to Practical Nursing Program (S119)', 2, NULL),
(401, 'Personal Support Worker (PSW) Program (C112)', 2, NULL),
(403, 'Plumbing Techniques Program (T165)', 2, NULL),
(405, 'Practical Nursing Program (PN) (S121)', 2, NULL),
(407, 'Pre-Business Program (A146)', 2, NULL),
(409, 'Pre-Community Services Program (A103)', 2, NULL),
(411, 'Pre-Health Science Program (A102)', 2, NULL),
(413, 'Programmable Logic Controllers (PLC) Technician Program (Distance Education) (T903)', 2, NULL),
(415, 'R.P.N. Bridge to B.Sc.N. Postgraduate Program (S122)', 2, NULL),
(417, 'Railway Conductor Program (T151)', 2, NULL),
(418, 'Registered Nurse - Critical Care Nursing Program (Online) (Postgraduate) (S422)', 2, NULL),
(420, 'Registered Nurse - Critical Care Nursing Program (Postgraduate) (S402)', 2, NULL),
(422, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Online Program (S424)', 2, NULL),
(424, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Program (S414)', 2, NULL),
(426, 'Registered Nurse - Perinatal Intensive Care Nursing Program (S404) (Postgraduate)', 2, NULL),
(428, 'Restorative Dental Hygiene (Postgraduate) Program (S400)', 2, NULL),
(430, 'Robotics Technician Program (Distance Education) (T948)', 2, NULL),
(432, 'Small Business Entrepreneurship Program (Postgraduate) (B410)', 2, NULL),
(434, 'Social Service Worker Program (C119)', 2, NULL),
(436, 'Social Service Worker Program (Fast Track) (C135)', 2, NULL),
(438, 'Special Events Planning Program (H121)', 2, NULL),
(440, 'Sport and Event Marketing Program (Postgraduate) (B400)', 2, NULL),
(442, 'Strategic Relationship Marketing Program (Postgraduate) (B409)', 2, NULL),
(444, 'Teaching English as a Second Language to Adults (TESL) Program (R400)', 2, NULL),
(446, 'Theatre Arts Program (P100)', 2, NULL),
(448, 'Transitions to Post-Secondary Education Program (A107)', 2, NULL),
(450, 'Wireless Networking Program (Postgraduate) (T411)', 2, NULL),
(703, 'Accounting', 1, NULL),
(704, 'Administrative Studies', 1, NULL),
(705, 'Advanced Management Graduate Diploma', 1, NULL),
(706, 'African Studies', 1, NULL),
(707, 'Anthropology', 1, NULL),
(708, 'Anthropology  â€“  Social', 1, NULL),
(709, 'Anti-Racist Research & Practice', 1, NULL),
(710, 'Applied Mathematics', 1, NULL),
(711, 'Art History', 1, NULL),
(712, 'Art History & Visual Culture', 1, NULL),
(713, 'Arts & Media Administration Graduate Diploma', 1, NULL),
(714, 'Asian Studies Graduate Diploma', 1, NULL),
(715, 'Athletic Therapy', 1, NULL),
(716, 'Biochemistry', 1, NULL),
(717, 'Biology', 1, NULL),
(719, 'Biomedical Science', 1, NULL),
(720, 'Biophysics', 1, NULL),
(721, 'Biotechnology', 1, NULL),
(722, 'Business & Society', 1, NULL),
(723, 'Business & Sustainability Graduate Diploma', 1, NULL),
(724, 'Business Administration', 1, NULL),
(726, 'Business Economics', 1, NULL),
(727, 'Canadian Business for Internationally Educated Professionals', 1, NULL),
(728, 'Canadian Studies', 1, NULL),
(729, 'Chemistry', 1, NULL),
(731, 'Cinema & Media Studies', 1, NULL),
(732, 'Civil Engineering', 1, NULL),
(733, 'Classical Studies & Classics', 1, NULL),
(734, 'Cognitive Science', 1, NULL),
(735, 'Communication & Culture', 1, NULL),
(736, 'Communication Studies', 1, NULL),
(737, 'Community Arts Practice', 1, NULL),
(738, 'Computational Math', 1, NULL),
(739, 'Computer Engineering', 1, NULL),
(741, 'Computer Science', 1, NULL),
(743, 'Computer Security', 1, NULL),
(744, 'Conference Interpreting', 1, NULL),
(745, 'Creative Writing', 1, NULL),
(746, 'Criminology', 1, NULL),
(747, 'Critical Disability Studies', 1, NULL),
(748, 'Culture & Expression', 1, NULL),
(749, 'Curatorial Studies in Visual Culture Graduate Diploma', 1, NULL),
(750, 'Dance', 1, NULL),
(752, 'Dance Science', 1, NULL),
(753, 'Dance Studies', 1, NULL),
(754, 'Democratic Administration Graduate Diploma', 1, NULL),
(755, 'Design', 1, NULL),
(757, 'Development Studies', 1, NULL),
(758, 'Digital Design', 1, NULL),
(759, 'Digital Media', 1, NULL),
(760, 'Disaster & Emergency Management', 1, NULL),
(762, 'Discipline of Teaching English as an International Language (D-TEIL)', 1, NULL),
(763, 'Drama Studies', 1, NULL),
(764, 'Early Childhood Education Graduate Diploma', 1, NULL),
(765, 'Earth & Atmospheric Science', 1, NULL),
(766, 'Earth & Space Science', 1, NULL),
(767, 'East Asian Studies', 1, NULL),
(768, 'Economics', 1, NULL),
(770, 'Ecosystem Management', 1, NULL),
(771, 'Education', 1, NULL),
(772, 'Education in Urban Environments Graduate Diploma', 1, NULL),
(773, 'Education â€“ Language, Culture & Teaching', 1, NULL),
(774, 'Electrical Engineering', 1, NULL),
(775, 'Emergency Management', 1, NULL),
(776, 'Engineering & International Development Studies', 1, NULL),
(777, 'English', 1, NULL),
(779, 'English & Professional Writing', 1, NULL),
(780, 'English Studies', 1, NULL),
(781, 'Environmental & Health Studies (Multidisciplinary Studies)', 1, NULL),
(782, 'Environmental Biology', 1, NULL),
(783, 'Environmental Science', 1, NULL),
(784, 'Environmental Studies', 1, NULL),
(786, 'Environmental/Sustainability Education Graduate Diploma', 1, NULL),
(787, 'Ã‰tudes franÃ§aises', 1, NULL),
(788, 'Ã‰tudes francophones', 1, NULL),
(789, 'European Studies', 1, NULL),
(790, 'Film', 1, NULL),
(792, 'Financial & Business Economics', 1, NULL),
(793, 'Financial Accountability', 1, NULL),
(794, 'Financial Engineering Graduate Diploma', 1, NULL),
(795, 'Financial Planning', 1, NULL),
(796, 'Fitness Assessment & Exercise Counselling', 1, NULL),
(797, 'French Studies / Ã‰tudes franÃ§aises', 1, NULL),
(798, 'General Interpreting Graduate Diploma', 1, NULL),
(799, 'Geographic Information Systems & Remote Sensing', 1, NULL),
(800, 'Geography', 1, NULL),
(802, 'Geography & Urban Studies', 1, NULL),
(803, 'Geomatics Engineering', 1, NULL),
(804, 'German & European Studies Graduate Diploma', 1, NULL),
(805, 'German Studies', 1, NULL),
(806, 'Global Health', 1, NULL),
(807, 'Global Political Studies', 1, NULL),
(808, 'Health', 1, NULL),
(809, 'Health & Society', 1, NULL),
(810, 'Health Industry Management Graduate Diploma', 1, NULL),
(811, 'Health Informatics', 1, NULL),
(812, 'Health Psychology Graduate Diploma', 1, NULL),
(813, 'Health Services Financial Management', 1, NULL),
(814, 'Health Studies', 1, NULL),
(815, 'Hebrew & Jewish Studies: Advanced', 1, NULL),
(816, 'Hellenic Studies', 1, NULL),
(817, 'History', 1, NULL),
(821, 'Human Resources Management', 1, NULL),
(822, 'Human Resources Management for Internationally Educated Professionals', 1, NULL),
(823, 'Human Rights & Equity Studies', 1, NULL),
(825, 'Humanities', 1, NULL),
(826, 'Indigenous Studies', 1, NULL),
(827, 'Individualized / Multidisciplinary Studies', 1, NULL),
(828, 'Information Systems & Technology', 1, NULL),
(829, 'Information Technology', 1, NULL),
(830, 'Information Technology Auditing & Assurance', 1, NULL),
(831, 'Information Technology for Internationally Educated Professionals', 1, NULL),
(832, 'Interdisciplinary Studies', 1, NULL),
(833, 'International & Security Studies Graduate Diploma', 1, NULL),
(834, 'International Business Administration', 1, NULL),
(835, 'International Development Studies', 1, NULL),
(836, 'International Project Management', 1, NULL),
(837, 'International Studies', 1, NULL),
(838, 'Investment Management', 1, NULL),
(839, 'Italian Culture', 1, NULL),
(840, 'Italian Studies', 1, NULL),
(841, 'Jewish Studies', 1, NULL),
(842, 'Jewish Studies Graduate Diploma', 1, NULL),
(843, 'Justice System Administration Graduate Diploma', 1, NULL),
(845, 'Kinesiology & Health Science', 1, NULL),
(846, 'Language & Literacy Education Graduate Diploma', 1, NULL),
(847, 'Language Proficiency', 1, NULL),
(848, 'Latin American & Caribbean Studies', 1, NULL),
(849, 'Latin American & Caribbean Studies Graduate Diploma', 1, NULL),
(850, 'Law', 1, NULL),
(851, 'Law & Social Thought / Droit et pensÃ©e sociale', 1, NULL),
(853, 'Law & Society', 1, NULL),
(854, 'Law (Osgoode Hall Law School)', 1, NULL),
(855, 'Law (Osgoode Professional Development)', 1, NULL),
(856, 'Linguistics', 1, NULL),
(857, 'Linguistics & Applied Linguistics', 1, NULL),
(858, 'Linguistics & Language Studies', 1, NULL),
(859, 'Logistics', 1, NULL),
(860, 'Management', 1, NULL),
(861, 'Marketing', 1, NULL),
(862, 'Mathematics', 1, NULL),
(863, 'Mathematics & Statistics', 1, NULL),
(864, 'Mathematics Education Graduate Diploma', 1, NULL),
(865, 'Mathematics for Commerce', 1, NULL),
(866, 'Mathematics for Education', 1, NULL),
(867, 'Mathematics for Teachers', 1, NULL),
(868, 'Mathematics: Applied & Industrial', 1, NULL),
(869, 'Mechanical Engineering', 1, NULL),
(870, 'Meteorology', 1, NULL),
(871, 'Multicultural & Indigenous Studies', 1, NULL),
(873, 'Music', 1, NULL),
(874, 'Neuroscience Graduate Diploma', 1, NULL),
(875, 'Non-Profit Management', 1, NULL),
(876, 'Nursing', 1, NULL),
(877, 'Nursing: Collaborative (York-Seneca-Georgian)', 1, NULL),
(878, 'Nursing: Post-RN for Internationally Educated Nurses', 1, NULL),
(879, 'Nursing: Second Entry', 1, NULL),
(880, 'Nursingâ€“Primary Health Care Nurse Practitioner (PHCNP)', 1, NULL),
(881, 'Nursingâ€“RN to MScN Alternate Admission', 1, NULL),
(882, 'Philosophy', 1, NULL),
(884, 'Physics & Astronomy', 1, NULL),
(886, 'Political Science', 1, NULL),
(888, 'Portuguese Studies', 1, NULL),
(889, 'Postsecondary Education: Community, Culture & Policy', 1, NULL),
(890, 'Practical Ethics', 1, NULL),
(891, 'Professional Ethics', 1, NULL),
(892, 'Professional Writing', 1, NULL),
(893, 'Psychology', 1, NULL),
(895, 'Public & International Affairs', 1, NULL),
(896, 'Public Administration', 1, NULL),
(897, 'Public Administration & Law', 1, NULL),
(898, 'Public Management Graduate Diploma', 1, NULL),
(899, 'Public Policy Analysis', 1, NULL),
(900, 'Public Policy, Administration & Law', 1, NULL),
(901, 'Real Estate', 1, NULL),
(902, 'Real Estate & Infrastructure Graduate Diploma', 1, NULL),
(903, 'RÃ©daction professionnelle', 1, NULL),
(904, 'Refugee & Migration Studies / Ã‰tudes sur la migration et sur les rÃ©fugiÃ©s', 1, NULL),
(905, 'Refugee & Migration Studies Graduate Diploma', 1, NULL),
(906, 'Rehabilitation Services', 1, NULL),
(907, 'Religious Studies', 1, NULL),
(908, 'Science & Technology Studies', 1, NULL),
(910, 'Sexuality Studies', 1, NULL),
(911, 'Sexuality Studies / Ã‰tudes sur la sexualitÃ©', 1, NULL),
(912, 'Social & Political Thought', 1, NULL),
(914, 'Social Science', 1, NULL),
(915, 'Social Sector Managment Graduate Diploma', 1, NULL),
(916, 'Social Work', 1, NULL),
(918, 'Socio-Legal Studies', 1, NULL),
(919, 'Sociology', 1, NULL),
(921, 'Software Engineering', 1, NULL),
(923, 'South Asian Studies', 1, NULL),
(924, 'Space Engineering', 1, NULL),
(925, 'Space Science', 1, NULL),
(926, 'Spanish', 1, NULL),
(927, 'Spanish (Hispanic Studies)', 1, NULL),
(928, 'Spanish-English Translation / TraducciÃ³n ingles-espanÃµl', 1, NULL),
(929, 'Sustainable Energy', 1, NULL),
(930, 'Teacher Education (Bachelor of Education)', 1, NULL),
(931, 'Teacher Education for French Immersion (Bachelor of Education)', 1, NULL),
(932, 'Teaching English to Speakers of Other Languages (TESOL)', 1, NULL),
(933, 'Technical & Professional Communication', 1, NULL),
(934, 'Theatre', 1, NULL),
(936, 'Theatre & Performance Studies', 1, NULL),
(937, 'Translation Studies', 1, NULL),
(939, 'Undecided Major', 1, NULL),
(940, 'United States Studies', 1, NULL),
(941, 'Urban Ecologies', 1, NULL),
(942, 'Urban Studies', 1, NULL),
(944, 'Urban Sustainability - York/Seneca Joint Program', 1, NULL),
(945, 'Value Theory & Applied Ethics Graduate Diploma', 1, NULL),
(946, 'Visual Arts', 1, NULL),
(947, 'Visual Arts & Art History', 1, NULL),
(948, 'Voice Teaching Graduate Diploma', 1, NULL),
(949, 'Work & Labour Studies', 1, NULL);

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
  `program` varchar(225) DEFAULT NULL,
  `campus` varchar(225) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `studentid`, `username`, `password`, `role`, `program`, `campus`, `created`, `modified`) VALUES
(2, NULL, NULL, NULL, 'student', '$2a$10$naXjtE/1ar8YaVVz5UdCZui6wKvEGPP/lfbr/Wl67z1Yx2zEZ8s8m', 'student', NULL, NULL, '2015-03-04 01:02:26', '2015-03-04 01:02:26'),
(4, NULL, NULL, NULL, 'admin', '$2a$10$ooeQ7XIrb63Jn/U3ZpaoquwaqY61NG9T.Hbf0WT4TsxVK8YsBlssa', 'admin', NULL, NULL, '2015-03-08 03:09:08', '2015-03-08 03:09:08'),
(12, 'Shaylan', 'Flanagan', '100100100', 'shaylan', '$2a$10$bw1iWZpowO285SVaZluLDO7pdf2eVXg/HrMpjQjPiT4vExcmP7AVq', 'student', NULL, NULL, '2015-03-13 23:49:22', '2015-03-13 23:49:22'),
(17, 'Yael', 'Sprikut', '100871258', 'ysprikut@georgebrown.ca', '$2a$10$A2ep.5IsVTYNfX9wi6cAruqsuzXjJ21aS4U3/U6qns9EiQU/jRlZu', 'student', NULL, 'Casa Loma', '2015-03-14 03:33:30', '2015-03-15 01:24:25'),
(18, 'Yana', 'Sprikut', '100', 'yanalo@yahoo.com', '$2a$10$PdfjA2aaYxIozggJkKCueee9dAQiDRRDcVGlkCqJZ9EnbS8wvhM/6', 'student', NULL, 'Casa Loma', '2015-03-14 05:36:52', '2015-03-14 05:36:52'),
(22, 'Thomas', 'James', '100100', 'thomas@mail.com', '$2a$10$cKzppsCgS3aAwqqKKD.biO5GApLDF6gTOd2MikZ.wkp/CP5hFMVzm', 'student', NULL, 'Waterfront', '2015-03-14 14:09:18', '2015-03-14 14:09:18'),
(23, 'Major', 'Programmer', '188000111', 'major@mail.com', '$2a$10$B2JGvwTN9oy3yTXqOo5OZ.wYDvyGKIcSaXUPPqjZ2oOC7xzE9H/FC', 'student', NULL, 'St. James', '2015-03-14 17:44:14', '2015-03-14 17:44:14');

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
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `idx_name` (`id`,`ProgramName`,`S_ID`), ADD UNIQUE KEY `ProgramName` (`ProgramName`,`S_ID`);

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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=950;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

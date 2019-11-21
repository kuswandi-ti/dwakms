-- --------------------------------------------------------
-- Host:                         192.168.0.4
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_dwakms
CREATE DATABASE IF NOT EXISTS `db_dwakms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_dwakms`;

-- Dumping structure for view db_dwakms.qview_category_article
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `qview_category_article` (
	`id` BIGINT(20) NOT NULL,
	`title` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`text` LONGTEXT NULL COLLATE 'latin1_swedish_ci',
	`category_id` BIGINT(20) NULL,
	`category_text` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`rec_user` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`rec_datetime` DATETIME NULL
) ENGINE=MyISAM;

-- Dumping structure for view db_dwakms.qview_problem
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `qview_problem` (
	`id` BIGINT(20) NOT NULL,
	`problem_kategori_id` BIGINT(255) NULL,
	`problem_kategori` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`topic` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`date_problem` DATE NULL,
	`date_solving` DATE NULL,
	`team_leader` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`team_member` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`department_code` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`department_name` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`problem_description` TEXT NULL COLLATE 'latin1_swedish_ci',
	`problem_status` VARCHAR(255) NULL COMMENT 'Open / On Progress / Close' COLLATE 'latin1_swedish_ci',
	`solving_description` TEXT NULL COLLATE 'latin1_swedish_ci',
	`rec_user` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`rec_datetime` DATETIME NULL
) ENGINE=MyISAM;

-- Dumping structure for view db_dwakms.qview_search
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `qview_search` (
	`groups` VARCHAR(11) NOT NULL COLLATE 'utf8_general_ci',
	`id` BIGINT(20) NOT NULL,
	`title` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`text1` LONGTEXT NULL COLLATE 'latin1_swedish_ci',
	`category_text` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`team_leader` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`team_member` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`department` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`text2` TEXT NULL COLLATE 'latin1_swedish_ci',
	`date_display` VARCHAR(10) NULL COLLATE 'utf8_general_ci',
	`rec_user` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`rec_datetime` DATETIME NULL
) ENGINE=MyISAM;

-- Dumping structure for table db_dwakms.tbl_article
CREATE TABLE IF NOT EXISTS `tbl_article` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `text` longtext,
  `category_id` bigint(20) DEFAULT NULL,
  `rec_user` varchar(255) DEFAULT NULL,
  `rec_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dwakms.tbl_article: 8 rows
DELETE FROM `tbl_article`;
/*!40000 ALTER TABLE `tbl_article` DISABLE KEYS */;
INSERT INTO `tbl_article` (`id`, `title`, `text`, `category_id`, `rec_user`, `rec_datetime`) VALUES
	(47, '10. Material Receiving', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<OL>\r\n  <LI>Material \r\n  <LI>Mesin \r\n  <LI>Man \r\n  <LI>Metode</LI></OL>\r\n<P>&nbsp;</P>\r\n<P>Contoh Link Picture</P>\r\n<P><IMG \r\nsrc="http://pows.dwa.co.id/dwakms/kms_user_uploads/images/DWAKMS_ART_20092016131919.jpg"></P>\r\n<P>Contoh Link Video</P>\r\n<P><EMBED height=250 type=video/mp4 width=400 \r\nsrc=http://pows.dwa.co.id/dwakms/kms_user_uploads/video/DWAKMS_PRB_20092016131925.mp4 \r\nautostart="false"></P><A \r\nhref="http://pows.dwa.co.id/dwakms/kms_user_uploads/DWAKMS_PRB_19092016094735.pdf" \r\ntarget=_blank>\r\n<P>Contoh Link File</P>\r\n<P></A><A href="http://pows.dwa.co.id/dwakms/article.php?art_id=49" \r\ntarget=_blank>&nbsp;</P>\r\n<P>Contoh Link Article</P>\r\n<P></A><A \r\nhref="http://pows.dwa.co.id/dwakms/article.php?art_id=49" \r\ntarget=_blank>&nbsp;</P></A>\r\n</BODY>\r\n</HTML>\r\n', 27, 'admin', '2016-09-20 13:18:46'),
	(48, '20. Storage', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 27, 'bse', '2016-09-08 16:12:41'),
	(49, '30. Pre-mixing', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 27, 'nana', '2016-09-06 10:37:58'),
	(50, '40. Cleaning tangki mixing', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 27, 'nana', '2016-09-06 10:38:19'),
	(51, 'Polyol', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 35, 'nana', '2016-09-15 11:08:32'),
	(52, 'Isocyanate', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 35, 'nana', '2016-09-15 11:09:00'),
	(53, 'Release Agent', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 35, 'nana', '2016-09-15 11:09:25'),
	(54, 'Fiber Glass', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<UL>\r\n  <LI>TDS</LI>\r\n  <LI>MSDS</LI>\r\n  <LI>IK</LI>\r\n  <LI>COA</LI></UL>\r\n</BODY>\r\n</HTML>\r\n', 35, 'nana', '2016-09-15 11:15:41');
/*!40000 ALTER TABLE `tbl_article` ENABLE KEYS */;

-- Dumping structure for table db_dwakms.tbl_categories
CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `rec_user` varchar(255) DEFAULT NULL,
  `rec_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dwakms.tbl_categories: 12 rows
DELETE FROM `tbl_categories`;
/*!40000 ALTER TABLE `tbl_categories` DISABLE KEYS */;
INSERT INTO `tbl_categories` (`id`, `name`, `text`, `parent_id`, `rec_user`, `rec_datetime`) VALUES
	(24, 'PRESS FORMING HEADLINING', 'PRESS FORMING HEADLINING', 0, 'nana', '2016-09-06 10:26:26'),
	(25, '800A', '800A', 24, 'nana', '2016-09-06 10:26:26'),
	(26, 'D30', 'D30', 24, 'nana', '2016-09-06 10:26:44'),
	(27, 'Process', 'Process', 25, 'nana', '2016-09-06 10:29:45'),
	(28, 'MOULDED FOAM', 'MOULDED FOAM', 0, 'nana', '2016-09-08 15:17:22'),
	(29, 'INTEGRAL SKIN', 'INTEGRAL SKIN', 0, 'nana', '2016-09-08 15:17:38'),
	(30, 'THERMO FORMING', 'THERMO FORMING', 0, 'nana', '2016-09-08 15:18:00'),
	(31, 'PRESS FORMING INSULATOR', 'PRESS FORMING INSULATOR', 0, 'nana', '2016-09-08 15:18:12'),
	(32, 'PLASTIC', 'PLASTIC', 0, 'nana', '2016-09-08 15:18:31'),
	(33, 'UNI PRINT & PAINTING', 'UNI PRINT & PAINTING', 0, 'nana', '2016-09-08 15:19:19'),
	(34, 'OTHERS', 'OTHERS', 0, 'nana', '2016-09-08 15:19:09'),
	(35, 'Material', 'Material', 25, 'nana', '2016-09-08 15:56:04');
/*!40000 ALTER TABLE `tbl_categories` ENABLE KEYS */;

-- Dumping structure for table db_dwakms.tbl_improvement
CREATE TABLE IF NOT EXISTS `tbl_improvement` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) DEFAULT NULL,
  `date_improvement` date DEFAULT NULL,
  `team_leader` varchar(255) DEFAULT NULL,
  `team_member` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `improvement_description` text,
  `rec_user` varchar(255) DEFAULT NULL,
  `rec_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dwakms.tbl_improvement: 5 rows
DELETE FROM `tbl_improvement`;
/*!40000 ALTER TABLE `tbl_improvement` DISABLE KEYS */;
INSERT INTO `tbl_improvement` (`id`, `topic`, `date_improvement`, `team_leader`, `team_member`, `department`, `improvement_description`, `rec_user`, `rec_datetime`) VALUES
	(2, 'Glue Roll', '2016-09-05', '98100087-A.ARIA WIBAWA', '00100192-AGUS PRAJOKO, 89100048-KIRNO, 97110081-RIWANI, ', 'CMA-COST MANAGEMENT', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 'bse', '2016-09-08 16:14:12'),
	(3, 'Pipa Cooling Vaccum Forming Dibungkus Foam', '2016-09-08', '97110081-RIWANI', '98100087-A.ARIA WIBAWA, 00100192-AGUS PRAJOKO, 02080234-YUYU ISWAHYUDI, ', 'MTC-MAINTENANCE', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 'bse', '2016-09-08 16:17:45'),
	(4, 'Tanki Rigid Foam Dibungkus Foam', '2016-09-08', '97110081-RIWANI', '02080234-YUYU ISWAHYUDI, 97110081-RIWANI, 98100087-A.ARIA WIBAWA, ', 'MTC-MAINTENANCE', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 'bse', '2016-09-08 16:20:39'),
	(5, 'Penurunan Man Power Di Cold Press HP 19', '2016-09-08', '90080017-SUMIRAN', '09060008-EKO PRAMUADI SAGORO, 13030146-RINALDI DEWANANTA, ', 'KAI-KAIZEN', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 'bse', '2016-09-08 16:22:04'),
	(6, 'Telusuran HP 150 + ER1', '2016-09-08', '92050021-SIGIT TRITJAHJO', '11020003-M. AMRULLAH, 00100192-AGUS PRAJOKO, 89100048-KIRNO, 98100087-A.ARIA WIBAWA, ', 'PPR-PRODUCTION PREPARATION', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>Contoh Link Picture</P>\r\n<P><IMG \r\nsrc="http://pows.dwa.co.id/dwakms/kms_user_uploads/images/DWAKMS_IMP_20092016132450.jpg"></P>\r\n<P>Contoh Link Video</P>\r\n<P><EMBED height=250 type=video/mp4 width=400 \r\nsrc=http://pows.dwa.co.id/dwakms/kms_user_uploads/video/DWAKMS_PRB_20092016132454.mp4 \r\nautostart="false"></P><A \r\nhref="http://pows.dwa.co.id/dwakms/kms_user_uploads/DWAKMS_PRB_19092016094735.pdf" \r\ntarget=_blank>\r\n<P>Contoh Link File</P>\r\n<P></A><A href="http://pows.dwa.co.id/dwakms/article.php?art_id=50" \r\ntarget=_blank>Contoh Link Article<BR></A></P>\r\n<P>&nbsp;</P>\r\n</BODY>\r\n</HTML>\r\n', 'admin', '2016-09-20 13:24:36');
/*!40000 ALTER TABLE `tbl_improvement` ENABLE KEYS */;

-- Dumping structure for table db_dwakms.tbl_problem
CREATE TABLE IF NOT EXISTS `tbl_problem` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `problem_kategori_id` bigint(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `date_problem` date DEFAULT NULL,
  `date_solving` date DEFAULT NULL,
  `team_leader` varchar(255) DEFAULT NULL,
  `team_member` varchar(255) DEFAULT NULL,
  `department_code` varchar(255) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `problem_description` text,
  `problem_status` varchar(255) DEFAULT NULL COMMENT 'Open / On Progress / Close',
  `solving_description` text,
  `rec_user` varchar(255) DEFAULT NULL,
  `rec_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dwakms.tbl_problem: 3 rows
DELETE FROM `tbl_problem`;
/*!40000 ALTER TABLE `tbl_problem` DISABLE KEYS */;
INSERT INTO `tbl_problem` (`id`, `problem_kategori_id`, `topic`, `date_problem`, `date_solving`, `team_leader`, `team_member`, `department_code`, `department_name`, `problem_description`, `problem_status`, `solving_description`, `rec_user`, `rec_datetime`) VALUES
	(7, 3, 'Problem MIS', '2016-09-19', '2016-09-19', '07030004-NANA PERMANA', '12050313-ADE SUMARNA, 15080317-ADHEBTYA RESA RAHMAWAN, ', 'MIS', 'MANAGEMENT INFORMATION SYSTEM', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>Contoh Link Picture</P>\r\n<P><IMG \r\nsrc="http://pows.dwa.co.id/dwakms/kms_user_uploads/images/DWAKMS_PRB_20092016132100.jpg"></P>\r\n<P>Contoh Link Video</P>\r\n<P><EMBED height=250 type=video/mp4 width=400 \r\nsrc="http://pows.dwa.co.id/dwakms/kms_user_uploads/video/DWAKMS_PRB_20092016132110.mp4" \r\nautostart="false"></P><A \r\nhref="http://pows.dwa.co.id/dwakms/kms_user_uploads/DWAKMS_PRB_19092016094735.pdf" \r\ntarget=_blank>\r\n<P>Contoh Link File</P>\r\n<P></A><A href="http://pows.dwa.co.id/dwakms/article.php?art_id=48" \r\ntarget=_blank>&nbsp;</P>\r\n<P>Contoh Link Article<A \r\nhref="http://pows.dwa.co.id/dwakms/article.php?art_id=49" target=_blank></A></P>\r\n<P></A></P>\r\n</BODY>\r\n</HTML>\r\n', 'OPEN', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>Contoh Link Picture</P>\r\n<P><IMG \r\nsrc="http://pows.dwa.co.id/dwakms/kms_user_uploads/images/DWAKMS_PRB_20092016133209.jpg"></P>\r\n<P>Contoh Link Video</P>\r\n<P><EMBED height=250 type=video/mp4 width=400 \r\nsrc=http://pows.dwa.co.id/dwakms/kms_user_uploads/video/DWAKMS_PRB_20092016133214.mp4 \r\nautostart="false"></P><A \r\nhref="http://pows.dwa.co.id/dwakms/kms_user_uploads/department/DWAKMS_PRB_20092016133247.pdf" \r\ntarget=_blank>\r\n<P>Contoh Link File</P>\r\n<P></A><A href="http://pows.dwa.co.id/dwakms/article.php?art_id=51" \r\ntarget=_blank>&nbsp;</P>\r\n<P>Contoh Link Article<BR></P></A>\r\n</BODY>\r\n</HTML>\r\n', 'admin', '2016-09-20 13:32:00'),
	(5, 3, 'Problem KAI', '2016-09-19', '2016-09-19', '98100087-A.ARIA WIBAWA', '12100056-AA SANDRI, 04010003-AA SUKMANA, ', 'KAI', 'KAIZEN', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>Problem Desc</P>\r\n</BODY>\r\n</HTML>\r\n', 'ON PROGRESS', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>Solving Desc</P>\r\n</BODY>\r\n</HTML>\r\n', 'admin', '2016-09-20 10:43:39'),
	(6, 7, 'Problem MTC', '2016-09-19', '2016-09-19', '12080029-ALEXSON ARIEF SITINDAON', '11090271-ACEP SUHANTA, 15080320-ACEP ZERY RIANA, 14112422-ACHMAD ABIDIN, ', 'MTC', 'MAINTENANCE', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>Problem Desc</P>\r\n</BODY>\r\n</HTML>\r\n', 'OPEN', '<HTML>\r\n<HEAD>\r\n<META NAME="GENERATOR" Content="Microsoft DHTML Editing Control">\r\n<TITLE></TITLE>\r\n</HEAD>\r\n<BODY>\r\n<P>Solving Desc</P>\r\n</BODY>\r\n</HTML>\r\n', 'admin', '2016-09-20 10:43:45');
/*!40000 ALTER TABLE `tbl_problem` ENABLE KEYS */;

-- Dumping structure for table db_dwakms.tbl_problem_kategori
CREATE TABLE IF NOT EXISTS `tbl_problem_kategori` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `problem_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dwakms.tbl_problem_kategori: 4 rows
DELETE FROM `tbl_problem_kategori`;
/*!40000 ALTER TABLE `tbl_problem_kategori` DISABLE KEYS */;
INSERT INTO `tbl_problem_kategori` (`id`, `problem_kategori`) VALUES
	(1, 'HEADLINING'),
	(2, 'INSULATOR'),
	(3, 'INJECTION'),
	(7, 'OTHER');
/*!40000 ALTER TABLE `tbl_problem_kategori` ENABLE KEYS */;

-- Dumping structure for table db_dwakms.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dwakms.tbl_user: 2 rows
DELETE FROM `tbl_user`;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id`, `username`, `password`, `group`, `dept`) VALUES
	(1, 'admin', 'admin', 'Administrator', 'MIS'),
	(2, 'user', 'user', 'User', 'MIS');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

-- Dumping structure for view db_dwakms.qview_category_article
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `qview_category_article`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`edp5` SQL SECURITY DEFINER VIEW `qview_category_article` AS SELECT
tbl_article.id,
tbl_article.title,
tbl_article.text,
tbl_article.category_id,
tbl_categories.text AS category_text,
tbl_article.rec_user,
tbl_article.rec_datetime
FROM
tbl_article
INNER JOIN tbl_categories ON tbl_article.category_id = tbl_categories.id ;

-- Dumping structure for view db_dwakms.qview_problem
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `qview_problem`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`edp5` SQL SECURITY DEFINER VIEW `qview_problem` AS SELECT
tbl_problem.id,
tbl_problem.problem_kategori_id,
tbl_problem_kategori.problem_kategori,
tbl_problem.topic,
tbl_problem.date_problem,
tbl_problem.date_solving,
tbl_problem.team_leader,
tbl_problem.team_member,
tbl_problem.department_code,
tbl_problem.department_name,
tbl_problem.problem_description,
tbl_problem.problem_status,
tbl_problem.solving_description,
tbl_problem.rec_user,
tbl_problem.rec_datetime
FROM
tbl_problem
LEFT JOIN tbl_problem_kategori ON tbl_problem.problem_kategori_id = tbl_problem_kategori.id ;

-- Dumping structure for view db_dwakms.qview_search
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `qview_search`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`edp5` SQL SECURITY DEFINER VIEW `qview_search` AS select 
	'ARTICLE' as groups, 
	id, 
	title, 
	text as text1, 
	category_text, 
	'' as team_leader,
	'' as team_member,
	'' as department,
	'' as text2,
	'' as date_display,
	rec_user, 
	rec_datetime 
from qview_category_article
union all
select 
	'PROBLEM' as groups, 
	id, 
	topic as title, 
	problem_description as text1, 
	'' as category_text,
	team_leader, 
	team_member,
	department_code as department, 
	solving_description as text2,
	date_problem as date_display,
	rec_user, 
	rec_datetime 
from tbl_problem
union all
select 
	'IMPROVEMENT' as groups, 
	id, 
	topic as title, 
	improvement_description as text1, 
	'' as category_text,
	team_leader, 
	team_member,
	department, 
	'' as text2,
	date_improvement as date_display,
	rec_user, 
	rec_datetime 
from tbl_improvement ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

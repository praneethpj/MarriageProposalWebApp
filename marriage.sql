/*
Navicat MySQL Data Transfer

Source Server         : newcon
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : marriage

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2019-02-04 14:17:04
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `advertistment`
-- ----------------------------
DROP TABLE IF EXISTS `advertistment`;
CREATE TABLE `advertistment` (
  `username` varchar(100) NOT NULL DEFAULT '',
  `dob` date DEFAULT NULL,
  `cast` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `marriagestatus` varchar(10) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `name1` varchar(100) DEFAULT NULL,
  `name2` varchar(100) DEFAULT NULL,
  `img` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of advertistment
-- ----------------------------
INSERT INTO `advertistment` VALUES ('admin', '0000-00-00', '', '', '', '', '', '', 'Male', '2', '', 'sdsdsd', '', '');
INSERT INTO `advertistment` VALUES ('ajith', '0000-00-00', '', '', '', '', '', '', 'Male', null, '', 'sdsdsd', '', '');
INSERT INTO `advertistment` VALUES ('anthiny', '0000-00-00', '', '', '', '', '', '', 'Male', null, '', 'sdsdsd', 'Jayaweera', '');
INSERT INTO `advertistment` VALUES ('anushka', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `advertistment` VALUES ('ash', '2019-01-02', 'Good', 'Buddhism', 'SE', '12000', 'Baddula', 'SriLanka', 'Male', null, 'Sinhala', 'ashani', 'umeendra', '');
INSERT INTO `advertistment` VALUES ('ashani', '0000-00-00', '', '', '', '', '', '', 'Male', null, '', '', '', '');
INSERT INTO `advertistment` VALUES ('gayan', '0000-00-00', '', '', '', '', '', '', 'Male', null, '', 'sdsdsd', '', '');
INSERT INTO `advertistment` VALUES ('kasun', '2019-01-02', '', 'Buddhism', 'SE', '12,000', 'Kandy', 'India', 'Male', null, 'Tamil', 'kasun', 'perera', '');
INSERT INTO `advertistment` VALUES ('kavindra', '0000-00-00', '', '', '', '', '', '', 'Male', '2', '', 'sdsdsd', '', '');
INSERT INTO `advertistment` VALUES ('perera', '0000-00-00', '', 'Buddhism', 'SE', '', 'Colombo', 'SriLanka', 'Male', null, 'Sinhala', 'kasun', '', '');
INSERT INTO `advertistment` VALUES ('pinya', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `advertistment` VALUES ('praneethph', '0000-00-00', '', '', '', '', '', '', 'Male', null, '', 'sdsdsd', '', '');
INSERT INTO `advertistment` VALUES ('praneethpj', '0000-00-00', '', '', '', '120000', '', '', 'Male', null, '', 'Praneeth Jayarathna', '', '');
INSERT INTO `advertistment` VALUES ('ss', '0000-00-00', '', '', '', '', '', '', 'Male', null, '', '', '', '');
INSERT INTO `advertistment` VALUES ('titanya', null, null, null, null, null, null, null, 'Female', null, null, null, null, null);

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `username` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `addressline1` varchar(15) DEFAULT NULL,
  `addressline2` varchar(15) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('ajith', null, null, null, null);
INSERT INTO `contact` VALUES ('anthiny', '0713608978', '', '', '');
INSERT INTO `contact` VALUES ('anushka', null, null, null, null);
INSERT INTO `contact` VALUES ('ashani', '', '', '', '');
INSERT INTO `contact` VALUES ('kasun', '0778783905', 'maharagama rd', 'pliyandala', 'kasun perera');
INSERT INTO `contact` VALUES ('kavindra', '909', 'jk', 'jk', 'hk');
INSERT INTO `contact` VALUES ('lakiya', '0779996367', 'nalandarama rd', 'Nugegoda', 'lakshithakavindra.perera');
INSERT INTO `contact` VALUES ('perera', '0779996487', 'na', '', '');
INSERT INTO `contact` VALUES ('pinya', null, null, null, null);
INSERT INTO `contact` VALUES ('praneeth', null, null, null, null);
INSERT INTO `contact` VALUES ('praneethpj', '077123450', '', '', '');
INSERT INTO `contact` VALUES ('titanya', null, null, null, null);

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('abc', '123', '2018-11-21', 'aa@gmail.com');
INSERT INTO `login` VALUES ('admin', '$2y$10$tFzEFrTKmg/2Y4PHfsa8GO/GlW7px5PTq1AZ09ktMXUPWyR6FUlSa', '0000-00-00', 'admin');
INSERT INTO `login` VALUES ('ajith', '$2y$10$A01Tzvlmqu./5PVP4LgnceN4PUFk9UHipzW9VZdxtBTSPN05Qo9lC', '0000-00-00', 'ajith@gmail.com');
INSERT INTO `login` VALUES ('anthiny', '$2y$10$gkq4HNhWWM/X9rkXrqg3te.8wk4p7er8tb0gESvS/19gKI8bzX3yi', '0000-00-00', 'anthony.peiris@live.com');
INSERT INTO `login` VALUES ('anushka', '$2y$10$KFboX9JVSqbfu5UgTqrsCeVqzlPyY4jytGwD6h2eN03z442TjUdK6', '0000-00-00', 'anushkaviraj95@gmail.com');
INSERT INTO `login` VALUES ('ashani', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00', 'ashani@gmail.com');
INSERT INTO `login` VALUES ('d', '1s', null, 'email');
INSERT INTO `login` VALUES ('ds', '$2y$10$OsSPqZCKPyK0ZhutTRXZl.KdzluFJiCgl4grTaCyauawtoXeRcMai', '0000-00-00', 'emailss');
INSERT INTO `login` VALUES ('gayan', '$2y$10$tFzEFrTKmg/2Y4PHfsa8GO/GlW7px5PTq1AZ09ktMXUPWyR6FUlSa', '0000-00-00', 'gayan@gmail.com');
INSERT INTO `login` VALUES ('kasun', '123', '0000-00-00', 'kasun@gmail.com');
INSERT INTO `login` VALUES ('kavindra', '$2y$10$dCki9YjEJBVKmtJZL7eZv.2/1YLsIa5lHe29SdSzNipEfLGM0RljG', '0000-00-00', 'kavindra@gmail.com');
INSERT INTO `login` VALUES ('lk', '$2y$10$FPFVLHrAGAFJMtRbZKWUm.5Q3HNFHmah2t93ER6jO5cZEPY0lruEa', '0000-00-00', '');
INSERT INTO `login` VALUES ('perera', '$2y$10$Civuj53TpGusrcJmxhDAF.sN/sIRHwrQnn4J1qM3n/MxY9syHWftC', '0000-00-00', 'perera@gmail.com');
INSERT INTO `login` VALUES ('pinya', '$2y$10$V.slfpj9.F3AsAWR6BUS5udhXYsXtiG2hqP/.9RwiZctC30BViLze', '0000-00-00', 'pinya@gmail.com');
INSERT INTO `login` VALUES ('praneeth', '$2y$10$ZjkeETA3dKOoSvis5r9Rk.WhMJ1eU76jnhwdmN7v9GroDL1GjyrtC', '0000-00-00', 'xx@gmail.com');
INSERT INTO `login` VALUES ('praneethpj', '$2y$10$CGLv/0zm1s1DgB.ECHf4Q.9oS4mU4mV2d38JCJvPqmYkIC3xsdm9G', '0000-00-00', 'ifeathern@gmail.com');
INSERT INTO `login` VALUES ('ss', '123', '0000-00-00', 'ss@gmail.com');
INSERT INTO `login` VALUES ('titanya', '$2y$10$9sJbZZc50253PlPqTjcUQuzdRLvjwwfQnWouZRHNIiOK6d2RX2pvC', '0000-00-00', 'titanya@gmail.com');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `dateandTime` datetime DEFAULT NULL,
  `touserid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '1', 'sds', '2019-01-29 18:12:57', null);
INSERT INTO `message` VALUES ('2', '1', 'ssd', '2019-01-29 18:36:33', null);
INSERT INTO `message` VALUES ('3', '1', '', '2019-01-29 16:29:58', '1');
INSERT INTO `message` VALUES ('4', '1', 'hi', '2019-01-29 16:30:25', '1');
INSERT INTO `message` VALUES ('5', '1', 's', '2019-01-29 16:31:15', '1');
INSERT INTO `message` VALUES ('6', '1', 'ss', '2019-01-29 16:31:24', '1');
INSERT INTO `message` VALUES ('7', '1', 'hi', '2019-01-29 16:31:42', '1');
INSERT INTO `message` VALUES ('8', '1', 'sd', '2019-01-29 16:35:28', '1');
INSERT INTO `message` VALUES ('9', '1', 'new', '2019-01-29 16:35:41', '1');
INSERT INTO `message` VALUES ('10', '1', 'it is true', '2019-01-29 16:35:48', '1');
INSERT INTO `message` VALUES ('11', '1', 'can i crate', '2019-01-29 16:56:30', '1');
INSERT INTO `message` VALUES ('12', '1', 'sure', '2019-01-29 16:57:00', '1');
INSERT INTO `message` VALUES ('13', '1', 'can', '2019-01-29 16:59:41', '1');
INSERT INTO `message` VALUES ('14', '1', 'yes', '2019-01-30 06:45:32', '1');
INSERT INTO `message` VALUES ('15', '1', 'hi', '2019-01-30 06:45:43', '1');
INSERT INTO `message` VALUES ('16', '1', 'hi', '2019-01-30 06:46:01', '1');
INSERT INTO `message` VALUES ('17', '1', 'hi', '2019-01-30 06:53:06', '1');
INSERT INTO `message` VALUES ('18', '1', 'hi', '2019-01-30 06:53:56', '1');
INSERT INTO `message` VALUES ('19', '1', 'hi', '2019-01-30 06:53:57', '1');
INSERT INTO `message` VALUES ('20', '1', 'hi', '2019-01-30 06:53:57', '1');
INSERT INTO `message` VALUES ('21', '1', 'hi', '2019-01-30 06:53:57', '1');
INSERT INTO `message` VALUES ('22', '1', 'hi', '2019-01-30 06:53:57', '1');
INSERT INTO `message` VALUES ('23', '1', 'hi', '2019-01-30 06:53:57', '1');
INSERT INTO `message` VALUES ('24', '1', 'hi', '2019-01-30 06:53:58', '1');
INSERT INTO `message` VALUES ('25', '1', 'hi', '2019-01-30 06:53:58', '1');
INSERT INTO `message` VALUES ('26', '1', 'hi', '2019-01-30 06:53:58', '1');
INSERT INTO `message` VALUES ('27', '1', 'hi', '2019-01-30 06:53:58', '1');
INSERT INTO `message` VALUES ('28', '1', 'new', '2019-01-30 06:54:09', '1');
INSERT INTO `message` VALUES ('29', '1', 'hi', '2019-01-30 07:10:45', '1');
INSERT INTO `message` VALUES ('30', 'abc', 'hi', '2019-01-30 07:11:03', '1');
INSERT INTO `message` VALUES ('31', 'abc', 'hi', '2019-01-30 07:11:20', 'praneethpj');
INSERT INTO `message` VALUES ('32', 'admin', 'his', '2019-01-30 07:12:19', 'xyz');
INSERT INTO `message` VALUES ('33', 'admin', 'how are you', '2019-01-30 07:12:49', 'xyz');
INSERT INTO `message` VALUES ('34', 'admin', 'fine', '2019-01-30 07:45:38', 'xyz');
INSERT INTO `message` VALUES ('35', 'admin', 'hi', '2019-01-30 08:13:36', 'xyz');
INSERT INTO `message` VALUES ('36', 'admin', 'hi', '2019-01-30 08:31:29', 'xyz');
INSERT INTO `message` VALUES ('37', 'admin', 'his', '2019-01-30 08:31:33', 'xyz');
INSERT INTO `message` VALUES ('38', 'admin', 'hi', '2019-01-30 08:54:17', 'xyz');
INSERT INTO `message` VALUES ('39', 'admin', 'hi', '2019-01-30 08:54:18', 'xyz');
INSERT INTO `message` VALUES ('40', 'admin', 'hi', '2019-01-30 09:03:28', '');
INSERT INTO `message` VALUES ('41', 'admin', 'hi', '2019-01-30 09:04:01', '');
INSERT INTO `message` VALUES ('42', 'admin', 'hi', '2019-01-30 09:04:25', '');
INSERT INTO `message` VALUES ('43', 'admin', 'hi', '2019-01-30 09:04:27', 'praneethpj');
INSERT INTO `message` VALUES ('44', 'admin', 'hi', '2019-01-30 09:05:15', '');
INSERT INTO `message` VALUES ('45', 'admin', 'hi', '2019-01-30 09:06:17', '');
INSERT INTO `message` VALUES ('46', 'admin', 'hi', '2019-01-30 09:06:19', '');
INSERT INTO `message` VALUES ('47', 'admin', 'hi', '2019-01-30 09:06:25', 'praneethpj');
INSERT INTO `message` VALUES ('48', 'praneethpj', 'hi', '2019-01-30 09:08:42', 'admin');
INSERT INTO `message` VALUES ('49', 'praneethpj', 'how are you', '2019-01-30 09:10:02', 'admin');
INSERT INTO `message` VALUES ('50', 'admin', 'hi', '2019-01-30 09:10:38', 'praneethpj');
INSERT INTO `message` VALUES ('51', 'admin', 'i m fine', '2019-01-30 09:20:37', 'praneethpj');
INSERT INTO `message` VALUES ('52', 'praneethpj', 'thats good', '2019-01-30 09:20:47', 'admin');
INSERT INTO `message` VALUES ('53', 'admin', '', '2019-01-30 09:55:04', 'praneethpj');
INSERT INTO `message` VALUES ('54', 'praneethpj', 'hi', '2019-01-30 09:56:00', 'admin');
INSERT INTO `message` VALUES ('55', 'admin', 'I m fine', '2019-01-30 09:56:08', 'praneethpj');
INSERT INTO `message` VALUES ('56', 'praneethpj', 'really??', '2019-01-30 09:56:18', 'admin');
INSERT INTO `message` VALUES ('57', 'anthiny', 'hi', '2019-01-30 13:02:13', 'praneethpj');
INSERT INTO `message` VALUES ('58', 'anthiny', 'jow are you', '2019-01-30 13:17:41', 'praneethpj');
INSERT INTO `message` VALUES ('59', 'praneethpj', 'im fine', '2019-01-30 13:48:06', 'anthiny');
INSERT INTO `message` VALUES ('60', 'anthiny', 'really', '2019-01-30 13:49:14', 'praneethpj');
INSERT INTO `message` VALUES ('61', 'praneethpj', 'yes', '2019-01-30 13:49:23', 'anthiny');
INSERT INTO `message` VALUES ('62', 'anthiny', 'sure', '2019-01-30 13:51:26', 'praneethpj');
INSERT INTO `message` VALUES ('63', 'anthiny', 'fine', '2019-01-30 13:52:00', 'praneethpj');
INSERT INTO `message` VALUES ('64', 'anthiny', 'sure', '2019-01-30 13:52:49', 'praneethpj');
INSERT INTO `message` VALUES ('65', 'admin', 'hi', '2019-01-30 16:23:17', '');
INSERT INTO `message` VALUES ('66', 'admin', 'Good night', '2019-01-30 16:24:05', '');
INSERT INTO `message` VALUES ('67', 'admin', 'goodnight', '2019-01-30 16:24:28', '');
INSERT INTO `message` VALUES ('68', 'admin', 'ho', '2019-01-30 16:28:36', 'praneethpj');
INSERT INTO `message` VALUES ('69', 'admin', 'Good morning', '2019-01-31 01:14:08', 'praneethpj');
INSERT INTO `message` VALUES ('70', 'titanya', 'hi', '2019-01-31 01:17:58', 'praneethpj');
INSERT INTO `message` VALUES ('71', 'praneethpj', 'how are you', '2019-01-31 01:21:49', 'titanya');
INSERT INTO `message` VALUES ('72', 'titanya', 'I am cool', '2019-01-31 01:21:58', 'praneethpj');
INSERT INTO `message` VALUES ('73', 'praneethpj', 'hows day', '2019-01-31 01:23:34', 'titanya');
INSERT INTO `message` VALUES ('74', 'praneethpj', 'I am viva today', '2019-01-31 01:42:11', 'titanya');
INSERT INTO `message` VALUES ('75', 'admin', 'hi', '2019-01-31 03:19:12', 'praneethpj');
INSERT INTO `message` VALUES ('76', 'titanya', 'oi see', '2019-01-31 03:47:26', 'praneethpj');
INSERT INTO `message` VALUES ('77', 'admin', 'hi', '2019-01-31 06:36:34', 'praneethpj');
INSERT INTO `message` VALUES ('78', 'praneethpj', 'yes', '2019-01-31 06:37:34', 'titanya');
INSERT INTO `message` VALUES ('79', 'titanya', 'hmm', '2019-01-31 06:39:25', 'praneethpj');
INSERT INTO `message` VALUES ('80', 'praneethpj', 'hmm', '2019-01-31 07:03:34', 'titanya');
INSERT INTO `message` VALUES ('81', 'admin', 'hi', '2019-01-31 07:19:42', 'praneethpj');
INSERT INTO `message` VALUES ('82', 'praneethpj', 'How are you', '2019-01-31 07:20:24', 'titanya');
INSERT INTO `message` VALUES ('83', 'titanya', 'I am fine', '2019-01-31 08:46:04', 'praneethpj');
INSERT INTO `message` VALUES ('84', 'praneethpj', 'whats app', '2019-01-31 08:48:45', 'titanya');
INSERT INTO `message` VALUES ('85', 'titanya', 'Nothing', '2019-01-31 08:48:56', 'praneethpj');
INSERT INTO `message` VALUES ('86', 'praneethpj', 'hi', '2019-01-31 08:52:36', 'titanya');
INSERT INTO `message` VALUES ('87', 'praneethpj', 'hi', '2019-01-31 08:54:50', 'titanya');
INSERT INTO `message` VALUES ('88', 'praneethpj', 'hi', '2019-01-31 08:57:46', 'titanya');
INSERT INTO `message` VALUES ('89', 'titanya', 'nothing', '2019-01-31 08:58:00', 'praneethpj');
INSERT INTO `message` VALUES ('90', 'praneethpj', 'what you mean', '2019-01-31 08:58:19', 'titanya');
INSERT INTO `message` VALUES ('91', 'praneethpj', 'hi', '2019-01-31 10:18:27', 'titanya');
INSERT INTO `message` VALUES ('92', 'praneethpj', 'Good evening', '2019-01-31 11:12:17', 'titanya');
INSERT INTO `message` VALUES ('93', 'titanya', 'Good evening', '2019-01-31 11:12:44', 'praneethpj');
INSERT INTO `message` VALUES ('94', 'praneethpj', 'hi', '2019-01-31 12:22:03', 'titanya');
INSERT INTO `message` VALUES ('95', 'praneethpj', 'good afternoon', '2019-01-31 12:22:17', 'titanya');
INSERT INTO `message` VALUES ('96', 'praneethpj', 'se', '2019-01-31 12:23:21', 'titanya');

-- ----------------------------
-- Table structure for `useradtistment`
-- ----------------------------
DROP TABLE IF EXISTS `useradtistment`;
CREATE TABLE `useradtistment` (
  `username` varchar(100) DEFAULT NULL,
  `addid` int(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of useradtistment
-- ----------------------------
INSERT INTO `useradtistment` VALUES ('lakshitha', '1', '2018-12-02', '0');

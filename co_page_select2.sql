/*
Navicat MySQL Data Transfer

Source Server         : Eric
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : co_page

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-05-15 17:15:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'qq');
INSERT INTO `user` VALUES ('2', 'ww');
INSERT INTO `user` VALUES ('3', 'ee');
INSERT INTO `user` VALUES ('4', 'rr');
INSERT INTO `user` VALUES ('5', 'tt');
INSERT INTO `user` VALUES ('6', 'yy');
INSERT INTO `user` VALUES ('7', 'uu');
INSERT INTO `user` VALUES ('8', 'ii');
INSERT INTO `user` VALUES ('9', 'oo');
INSERT INTO `user` VALUES ('10', 'pp');
INSERT INTO `user` VALUES ('11', 'aa');
INSERT INTO `user` VALUES ('12', 'ss');
INSERT INTO `user` VALUES ('13', 'dd');
INSERT INTO `user` VALUES ('14', 'ff');
INSERT INTO `user` VALUES ('15', 'gg');
INSERT INTO `user` VALUES ('16', 'hh');
INSERT INTO `user` VALUES ('17', 'jj');
INSERT INTO `user` VALUES ('18', 'kk');
INSERT INTO `user` VALUES ('19', 'll');
INSERT INTO `user` VALUES ('20', 'zz');
INSERT INTO `user` VALUES ('21', 'xx');
INSERT INTO `user` VALUES ('22', 'vv');
INSERT INTO `user` VALUES ('23', 'cc');
INSERT INTO `user` VALUES ('24', 'bb');
INSERT INTO `user` VALUES ('25', 'nn');
INSERT INTO `user` VALUES ('26', 'mm');

-- ----------------------------
-- Table structure for user1
-- ----------------------------
DROP TABLE IF EXISTS `user1`;
CREATE TABLE `user1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user1
-- ----------------------------

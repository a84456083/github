/*
Navicat MySQL Data Transfer

Source Server         : my
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : private

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2014-07-14 17:40:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bigobject`
-- ----------------------------
DROP TABLE IF EXISTS `bigobject`;
CREATE TABLE `bigobject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_name` varchar(255) DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  `number` int(5) DEFAULT NULL,
  `end` int(1) DEFAULT NULL,
  `pk_type` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of bigobject
-- ----------------------------
INSERT INTO `bigobject` VALUES ('1', '阳春-鸡笼顶大草原', '1', '3', '0', null, null);
INSERT INTO `bigobject` VALUES ('2', '三亚-海滩', '1', '4', '0', null, null);
INSERT INTO `bigobject` VALUES ('3', '北京-天坛', '1', '1', '1', null, '<b>hello! </b>I am tom 你好');
INSERT INTO `bigobject` VALUES ('4', '深圳', '1', '2', '1', null, null);

-- ----------------------------
-- Table structure for `photo`
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `pk_bigobject` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `smallpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES ('1', 'test1', 'images/private/t_1_1.jpg', '1', '1', 'images/private/small/t_1_1.png');
INSERT INTO `photo` VALUES ('2', 'test2', 'images/private/t_4_1.jpg', '2', '1', 'images/private/small/t_4_1.png');
INSERT INTO `photo` VALUES ('3', 'test3', 'images/private/t_3_1.jpg', '3', '1', 'images/private/small/t_3_1.png');
INSERT INTO `photo` VALUES ('4', 'test4', 'images/private/t_2_1.jpg', '4', '1', 'images/private/small/t_2_1.png');
INSERT INTO `photo` VALUES ('5', 'test5', 'images/demopage/image-1.jpg', '3', '2', 'images/demopage/thumb-1.jpg');
INSERT INTO `photo` VALUES ('6', 'test6', 'images/demopage/image-2.jpg', '3', '3', 'images/demopage/thumb-2.jpg');
INSERT INTO `photo` VALUES ('7', 'test7', 'images/demopage/image-3.jpg', '3', '4', 'images/demopage/thumb-3.jpg');
INSERT INTO `photo` VALUES ('8', 'test8', 'images/demopage/image-4.jpg', '3', '5', 'images/demopage/thumb-4.jpg');

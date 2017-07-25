/*
Navicat MySQL Data Transfer

Source Server         : 阿里云
Source Server Version : 50715
Source Host           : rm-wz9x25lhugx622845o.mysql.rds.aliyuncs.com:3306
Source Database       : pumm

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2017-07-26 00:24:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mini_reward` float NOT NULL DEFAULT '1' COMMENT '打赏最低额度',
  `mini_withdrawals` float NOT NULL DEFAULT '30' COMMENT '提现最低额度',
  `one` float NOT NULL DEFAULT '5' COMMENT '一级的提成比例',
  `two` float NOT NULL DEFAULT '3' COMMENT '二级的提成比例 ',
  `withdrawals` float NOT NULL DEFAULT '20' COMMENT '提现比例',
  `process` float DEFAULT NULL COMMENT '手续费',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `openid` varchar(50) NOT NULL DEFAULT '' COMMENT 'openid',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户性别：1男0女',
  `language` varchar(10) NOT NULL DEFAULT '' COMMENT '语言',
  `city` varchar(20) NOT NULL DEFAULT '' COMMENT '城市',
  `province` varchar(20) NOT NULL DEFAULT '' COMMENT '省份',
  `country` varchar(20) NOT NULL DEFAULT '' COMMENT '国家',
  `headimgurl` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `subscribe_time` int(10) NOT NULL DEFAULT '0' COMMENT '关注时间',
  `up_mid` int(10) NOT NULL DEFAULT '0' COMMENT '上级',
  `down_mid` int(11) NOT NULL DEFAULT '0' COMMENT '下级',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '总余额',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `code` varchar(150) NOT NULL DEFAULT '' COMMENT '邀请码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for picture
-- ----------------------------
DROP TABLE IF EXISTS `picture`;
CREATE TABLE `picture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '' COMMENT '旧图片',
  `new_image` varchar(255) NOT NULL DEFAULT '' COMMENT '新图片',
  `mid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '所得金额',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `media_id` varchar(100) NOT NULL DEFAULT '' COMMENT '旧图片media_id',
  `new_media_id` varchar(100) NOT NULL DEFAULT '' COMMENT '新图片media_id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for reward
-- ----------------------------
DROP TABLE IF EXISTS `reward`;
CREATE TABLE `reward` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `collect_mid` int(10) NOT NULL DEFAULT '0' COMMENT '收赏人',
  `reward_mid` int(10) NOT NULL DEFAULT '0' COMMENT '打赏人',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '打赏金额',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT ' 打赏的图片ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(50) NOT NULL DEFAULT '' COMMENT '密码',
  `level` tinyint(1) NOT NULL DEFAULT '2' COMMENT '等级',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for withdrawals
-- ----------------------------
DROP TABLE IF EXISTS `withdrawals`;
CREATE TABLE `withdrawals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mid` int(10) NOT NULL DEFAULT '0' COMMENT '提现申请人ID',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '提现申请时间',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '申请中0，提现成功1，提现失败2，不批准3',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '提现金额',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

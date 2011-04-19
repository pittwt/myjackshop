/*
SQLyog Enterprise Trial - MySQL GUI v8.05 
MySQL - 5.0.77-community-nt : Database - my_yiicms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`my_yiicms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `my_yiicms`;

/*Table structure for table `my_area` */

DROP TABLE IF EXISTS `my_area`;

CREATE TABLE `my_area` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `parent_id` int(10) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '' COMMENT '名称',
  `order` int(10) unsigned NOT NULL default '0' COMMENT '排序',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_area` */

/*Table structure for table `my_article` */

DROP TABLE IF EXISTS `my_article`;

CREATE TABLE `my_article` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned NOT NULL default '0' COMMENT '用户id',
  `cat_id` int(10) unsigned NOT NULL default '0' COMMENT '分类id',
  `type_id` int(10) unsigned NOT NULL default '0' COMMENT '类型id',
  `area_id` int(10) unsigned NOT NULL default '0' COMMENT '地区id',
  `title` char(255) NOT NULL default '' COMMENT '标题',
  `style` char(50) NOT NULL default '' COMMENT '标题样式',
  `thumb` char(255) NOT NULL default '' COMMENT '缩略图',
  `keywords` char(255) NOT NULL default '' COMMENT '关键字',
  `description` char(255) NOT NULL default '' COMMENT '描述',
  `order` int(10) unsigned NOT NULL default '0' COMMENT '排序',
  `islink` tinyint(1) unsigned NOT NULL default '0' COMMENT '是否是链接',
  `linkurl` char(50) NOT NULL default '' COMMENT '链接地址',
  `create_time` int(10) unsigned NOT NULL default '0',
  `create_ip` char(15) NOT NULL default '',
  `update_time` int(10) unsigned NOT NULL default '0',
  `update_ip` char(15) NOT NULL default '',
  `state` tinyint(1) unsigned NOT NULL default '0' COMMENT '状态',
  `hits` int(10) unsigned NOT NULL default '0' COMMENT '查看次数',
  `comments` int(10) unsigned NOT NULL default '0' COMMENT '评论次数',
  PRIMARY KEY  (`id`),
  KEY `fk_my_Article_my_User1` (`user_id`),
  KEY `fk_my_Article_my_Area1` (`area_id`),
  KEY `fk_my_Article_my_Category1` (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_article` */

/*Table structure for table `my_attachment` */

DROP TABLE IF EXISTS `my_attachment`;

CREATE TABLE `my_attachment` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `article_id` int(10) unsigned NOT NULL default '0' COMMENT '文章id',
  `name` varchar(50) NOT NULL default '' COMMENT '名称',
  `path` varchar(255) NOT NULL default '' COMMENT '存放路径',
  `filetype` varchar(50) NOT NULL default '' COMMENT '文件类型',
  `filesize` int(10) unsigned NOT NULL default '0' COMMENT '文件大小',
  `fileext` varchar(50) NOT NULL default '' COMMENT '文件扩展',
  `description` varchar(255) NOT NULL default '' COMMENT '描述',
  `ispic` tinyint(1) unsigned NOT NULL default '0' COMMENT '是否图片: 1是',
  `create_time` int(10) unsigned NOT NULL default '0',
  `create_ip` char(15) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `fk_my_Attachment_my_Article1` (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_attachment` */

/*Table structure for table `my_category` */

DROP TABLE IF EXISTS `my_category`;

CREATE TABLE `my_category` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `parent_id` int(10) unsigned NOT NULL default '0',
  `model` varchar(50) NOT NULL default '' COMMENT '模型',
  `name` varchar(50) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `islink` tinyint(1) unsigned NOT NULL default '0',
  `linkurl` varchar(255) NOT NULL default '',
  `template` varchar(50) NOT NULL default '',
  `ismenu` tinyint(1) unsigned NOT NULL default '0',
  `hits` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `my_category` */

insert  into `my_category`(`id`,`parent_id`,`model`,`name`,`description`,`islink`,`linkurl`,`template`,`ismenu`,`hits`) values (1,0,'','大时代','阿斯顿发个',0,'','',0,0),(6,1,'','地方官','阿斯顿发个',0,'的分公司法定','',0,0),(4,1,'','阿斯顿发','阿斯顿发',0,'阿斯顿','',0,0),(7,6,'','风格还是','阿斯顿发',0,'阿斯顿发','',0,0);

/*Table structure for table `my_comment` */

DROP TABLE IF EXISTS `my_comment`;

CREATE TABLE `my_comment` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `article_id` varchar(45) NOT NULL default '',
  `user_id` int(10) unsigned NOT NULL default '0',
  `nick` varchar(50) NOT NULL default '' COMMENT '昵称',
  `content` text COMMENT '内容',
  `create_time` int(10) unsigned NOT NULL default '0',
  `create_ip` char(15) NOT NULL default '',
  `status` tinyint(1) unsigned NOT NULL default '0' COMMENT '状态, 1可显示',
  PRIMARY KEY  (`id`),
  KEY `fk_my_Comment_my_User1` (`user_id`),
  KEY `fk_my_Comment_my_Article1` (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_comment` */

/*Table structure for table `my_friendlink` */

DROP TABLE IF EXISTS `my_friendlink`;

CREATE TABLE `my_friendlink` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '' COMMENT '链接名称',
  `linkurl` varchar(255) NOT NULL default '' COMMENT '链接地址',
  `logo` varchar(255) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `order` int(10) unsigned NOT NULL default '0' COMMENT '排序',
  `isvalid` tinyint(1) unsigned NOT NULL default '0' COMMENT '是否通过审核: 1审核',
  `create_time` int(10) unsigned NOT NULL default '0',
  `create_ip` char(15) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `my_friendlink` */

insert  into `my_friendlink`(`id`,`name`,`linkurl`,`logo`,`description`,`order`,`isvalid`,`create_time`,`create_ip`) values (1,'百度','http://www.baidu.com','','搜索0sdf',1,0,0,''),(2,'新浪','http://www.sina.com.cn','','新闻',1,1,0,''),(5,'接口和客观','地方施工队','','',1,1,1302674733,'192.168.2.23'),(4,'阿斯顿发','阿斯顿','','',1,1,1302673374,'192.168.2.23'),(6,'收到发货','风格化','','地方官',0,0,1302676273,'192.168.2.23'),(7,'让他个人','个好地方','','飞鸽',0,0,1303116577,'192.168.2.23'),(8,'阿斯顿','鬼地方','','阿斯顿发',0,1,1303116781,'192.168.2.23');

/*Table structure for table `my_settings` */

DROP TABLE IF EXISTS `my_settings`;

CREATE TABLE `my_settings` (
  `key` varchar(25) NOT NULL,
  `val` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_settings` */

insert  into `my_settings`(`key`,`val`) values ('sitename','My-Yiicms'),('keywords','my yiicms'),('siteDescription','描述'),('siteCopyright','copy right 2011');

/*Table structure for table `my_user` */

DROP TABLE IF EXISTS `my_user`;

CREATE TABLE `my_user` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` char(50) NOT NULL default '',
  `password` char(32) NOT NULL default '',
  `email` char(50) NOT NULL default '',
  `state` tinyint(1) unsigned NOT NULL default '0' COMMENT '状态：0禁用，1启用',
  `realname` char(50) NOT NULL default '',
  `login_nums` int(10) unsigned NOT NULL default '0' COMMENT '登陆次数',
  `create_time` int(10) unsigned NOT NULL default '0',
  `create_ip` char(15) NOT NULL default '',
  `last_login_time` int(10) unsigned NOT NULL default '0',
  `last_login_ip` char(15) NOT NULL default '',
  `ismanage` tinyint(1) unsigned NOT NULL default '0' COMMENT '是否是管理人员',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `my_user` */

insert  into `my_user`(`id`,`username`,`password`,`email`,`state`,`realname`,`login_nums`,`create_time`,`create_ip`,`last_login_time`,`last_login_ip`,`ismanage`) values (1,'anton','4297f44b13955235245b2497399d7a93','anton@a.a',0,'',0,0,'',0,'',0);

/*Table structure for table `my_userinfo` */

DROP TABLE IF EXISTS `my_userinfo`;

CREATE TABLE `my_userinfo` (
  `user_id` int(10) unsigned NOT NULL,
  `area_id` int(11) NOT NULL default '0',
  `birthday` date NOT NULL,
  `gender` tinyint(1) unsigned NOT NULL default '0' COMMENT '性别：0保密，1男，2女',
  `portrait` varchar(255) NOT NULL default '' COMMENT '头像',
  `telphone` varchar(20) NOT NULL default '',
  `mobile` varchar(20) NOT NULL default '',
  `qq` varchar(20) NOT NULL default '',
  `msn` varchar(50) NOT NULL default '',
  `postcode` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  KEY `fk_my_UserInfo_my_Area1` (`area_id`),
  KEY `fk_my_UserInfo_my_User` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_userinfo` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

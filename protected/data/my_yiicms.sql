-- phpMyAdmin SQL Dump
-- version 3.2.0
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 03 月 09 日 01:00
-- 服务器版本: 5.0.77
-- PHP 版本: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `my_yiicms`
--

-- --------------------------------------------------------

--
-- 表的结构 `my_area`
--

CREATE TABLE IF NOT EXISTS `my_area` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `parent_id` int(10) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '' COMMENT '名称',
  `order` int(10) unsigned NOT NULL default '0' COMMENT '排序',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `my_area`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_article`
--

CREATE TABLE IF NOT EXISTS `my_article` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `my_article`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_attachment`
--

CREATE TABLE IF NOT EXISTS `my_attachment` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `my_attachment`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_category`
--

CREATE TABLE IF NOT EXISTS `my_category` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `my_category`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_comment`
--

CREATE TABLE IF NOT EXISTS `my_comment` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `my_comment`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_friendlink`
--

CREATE TABLE IF NOT EXISTS `my_friendlink` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `my_friendlink`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_user`
--

CREATE TABLE IF NOT EXISTS `my_user` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `my_user`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_userinfo`
--

CREATE TABLE IF NOT EXISTS `my_userinfo` (
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

--
-- 转存表中的数据 `my_userinfo`
--


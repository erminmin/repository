-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-11 06:02:20
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) NOT NULL,
  `apass` varchar(255) NOT NULL,
  `aimgurl` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`, `aimgurl`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- 表的结构 `commodity`
--

CREATE TABLE IF NOT EXISTS `commodity` (
  `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `ctitle` varchar(255) NOT NULL COMMENT '标题',
  `cimgurl` varchar(255) NOT NULL COMMENT '商品图片',
  `cname` varchar(255) NOT NULL COMMENT '商品名',
  `cnew` varchar(100) NOT NULL COMMENT '几成新',
  `cintroduce` varchar(255) NOT NULL COMMENT '介绍',
  `cprice` int(11) NOT NULL COMMENT '价格',
  `uid` int(11) NOT NULL COMMENT '发布者id',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `caddress` varchar(255) NOT NULL COMMENT '收货地址',
  `sid` int(10) NOT NULL COMMENT '分类id',
  `chit` int(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='商品表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `commodity`
--

INSERT INTO `commodity` (`cid`, `ctitle`, `cimgurl`, `cname`, `cnew`, `cintroduce`, `cprice`, `uid`, `ctime`, `caddress`, `sid`, `chit`) VALUES
(1, '手表', '', '低调奢华，引领时代潮流', '九成新', '很棒！', 268, 1, '2017-04-08 07:14:34', '', 0, 0),
(2, '化妆品', '', '', '', '', 0, 0, '2017-04-08 07:16:34', '', 0, 1),
(3, 'Louis', '', 'Vuitton', '九成新', '低调的奢华，引领时代潮流', 268, 1, '2017-04-10 01:23:36', '', 4, 8),
(4, 'Calvin', '', 'klein', '九成新', '皇帝的尊贵，白领的享受', 268, 1, '2017-04-10 01:25:06', '', 4, 21);

-- --------------------------------------------------------

--
-- 表的结构 `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `fid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL COMMENT '好友用户id',
  `uid1` int(11) NOT NULL COMMENT '好友所有者用户id',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='好友' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `good`
--

CREATE TABLE IF NOT EXISTS `good` (
  `gid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL COMMENT '点赞用户id',
  `cid` int(11) NOT NULL COMMENT '被点赞商品id',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品点赞' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `headline`
--

CREATE TABLE IF NOT EXISTS `headline` (
  `hid` int(11) NOT NULL COMMENT 'id',
  `htitle` varchar(255) NOT NULL COMMENT '标题',
  `haddress` varchar(255) NOT NULL COMMENT '地址',
  `hcontent` varchar(10000) NOT NULL COMMENT '内容',
  `htime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `hhit` int(11) NOT NULL COMMENT '浏览量',
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='头条文章';

--
-- 转存表中的数据 `headline`
--

INSERT INTO `headline` (`hid`, `htitle`, `haddress`, `hcontent`, `htime`, `hhit`) VALUES
(1, 'Our attitude', 'TaiYuan.S.X', '<p>低碳环保这是我们对生活的态度,相信你也是</p>', '2017-04-06 07:08:05', 0);

-- --------------------------------------------------------

--
-- 表的结构 `love`
--

CREATE TABLE IF NOT EXISTS `love` (
  `lid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL COMMENT '收藏用户id',
  `cid` int(11) NOT NULL COMMENT '被收藏商品id',
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品收藏' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `pid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `pimgurl` varchar(255) NOT NULL,
  `ppngurl` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `post`
--

INSERT INTO `post` (`pid`, `cid`, `pimgurl`, `ppngurl`, `pname`) VALUES
(1, 1, '/cosmetics-content.jpg', '/cosmetics.png', ''),
(2, 2, '/watch-content.jpg', '/watch.png', '');

-- --------------------------------------------------------

--
-- 表的结构 `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `rid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `rtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `rcontent` varchar(255) NOT NULL COMMENT '评论内容',
  `raddress` varchar(255) NOT NULL COMMENT '地址',
  `cid` int(11) NOT NULL COMMENT '被留言商品id',
  `uid` int(11) NOT NULL COMMENT '留言者id',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sort`
--

CREATE TABLE IF NOT EXISTS `sort` (
  `sid` int(11) NOT NULL COMMENT '分类id',
  `sname` varchar(255) NOT NULL COMMENT '分类名',
  `simgurl` varchar(255) NOT NULL,
  `stitle` varchar(255) NOT NULL,
  `scon` varchar(255) NOT NULL,
  `shit` int(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类表';

--
-- 转存表中的数据 `sort`
--

INSERT INTO `sort` (`sid`, `sname`, `simgurl`, `stitle`, `scon`, `shit`) VALUES
(1, '美容', '', '', '', 3),
(2, '母婴', '', '', '', 9),
(3, '数码', '', '', '', 2),
(4, '服饰', '', '', '', 52);

-- --------------------------------------------------------

--
-- 表的结构 `trolly`
--

CREATE TABLE IF NOT EXISTS `trolly` (
  `tid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `cid` int(11) NOT NULL COMMENT '商品id',
  `uid` int(11) NOT NULL COMMENT '用户id',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='购物车' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uname` varchar(255) NOT NULL COMMENT '用户名',
  `upass` varchar(255) NOT NULL COMMENT '密码',
  `uimgurl` varchar(255) NOT NULL COMMENT '头像路径',
  `uaddress` varchar(255) NOT NULL COMMENT '收货地址',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `uimgurl`, `uaddress`) VALUES
(1, 'user', 'da5a4d4f2e39fdb08a6bdbacc4d17074', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

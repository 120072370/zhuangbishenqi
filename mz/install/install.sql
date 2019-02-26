DROP TABLE IF EXISTS `zm_config`;
CREATE TABLE `zm_config` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `switch` int(1) NOT NULL DEFAULT '1',
  `user` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `kfqq` varchar(20) NOT NULL DEFAULT '站长QQ',
  `ym` text NOT NULL,
  `dbdm` text NOT NULL,
  `banquan` text NOT NULL,
  `music` varchar(250) NOT NULL,
  `xy` text NOT NULL,
  `xy1` text NOT NULL,
  `xy2` text NOT NULL,
  `xy3` text NOT NULL,
  `xy4` text NOT NULL,
  `xy5` text NOT NULL,
  `xy6` text NOT NULL,
  `xy7` text NOT NULL,
  `xy8` text NOT NULL,
  `xy9` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zm_config`(`id`,`switch`,`user`,`pwd`,`sitename`,`title`,`keywords`,`description`,`kfqq`,`ym`,`dbdm`,`banquan`,`music`,`xy`,`xy1`,`xy2`,`xy3`,`xy4`,`xy5`,`xy6`,`xy7`,`xy8`,`xy9`) VALUES
('1','1','admin','123456','智梦娱乐小站','在线刷赞小助手','免费在线刷赞平台，刷名片赞，免费刷赞，刷赞，在线刷赞，拉圈圈','免费在线刷赞平台！','2280853742','http://mpz.410wl.cn','欢迎使用','智梦团队','572301684','智梦团队','智梦团队','智梦团队','智梦团队','智梦团队','智梦团队','智梦团队','智梦团队','智梦团队','智梦团队');
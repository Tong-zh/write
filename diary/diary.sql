# Host: localhost  (Version: 5.5.53)
# Date: 2019-08-01 15:40:14
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "diary"
#

DROP TABLE IF EXISTS `diary`;
CREATE TABLE `diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "diary"
#

/*!40000 ALTER TABLE `diary` DISABLE KEYS */;
INSERT INTO `diary` VALUES (1,'社会','2019-01-14','2019年春运进入高峰期'),(2,'军事','2019-02-05','中国研发新型导弹'),(3,'财经','2019-03-10','股市大盘飘红'),(4,'电影','2019-04-21','2019年好莱坞观影大片一览'),(5,'科技','2019-05-01','小米手机发布新款'),(6,'游戏','2019-06-30','全球人气游戏排行榜公布'),(7,'社会','2019-08-07','青菜大幅度涨价'),(8,'天气','2019-10-11','天气逐渐转凉'),(9,'文具','2019-09-10','开学季文具大量滞留');
/*!40000 ALTER TABLE `diary` ENABLE KEYS */;

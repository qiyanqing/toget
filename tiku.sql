/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 10.1.19-MariaDB : Database - toget
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toget` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `toget`;

/*Table structure for table `we_ad` */

DROP TABLE IF EXISTS `we_ad`;

CREATE TABLE `we_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL COMMENT '广告url',
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `we_ad` */

insert  into `we_ad`(`id`,`img`,`address`,`status`) values (1,'/Public/upload/course/123.jpg','http://www.baidu.com',1),(2,'/Public/uploads/course/123.jpg','http://www.hao123.com',1),(3,'/Public/uploads/course/123.jpg','http://www.sina.com',1),(6,'ad/2017-05-17/591c23ec3758d.jpg','a',0);

/*Table structure for table `we_answer` */

DROP TABLE IF EXISTS `we_answer`;

CREATE TABLE `we_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL DEFAULT '0',
  `content` varchar(100) NOT NULL,
  `is_true` int(11) NOT NULL DEFAULT '0',
  `sn` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `we_answer` */

insert  into `we_answer`(`id`,`question_id`,`content`,`is_true`,`sn`) values (1,1,'@mysql_connect( )会忽略错误,将错误显示到客户端',0,'A'),(2,1,'mysql_connect( )不会忽略错误,将错误显示到客户端',1,'B'),(3,1,' 没有区别   ',0,'C'),(4,1,'功能不同的两个函数',0,'D'),(5,7,'1',1,'A'),(6,7,'2',1,'B'),(7,7,'3',1,'C'),(8,7,'4',0,'D'),(9,2,'@mysql_connect( )会忽略错误,将错误显示到客户端',0,'A'),(10,2,'mysql_connect( )不会忽略错误,将错误显示到客户端',1,'B'),(11,3,' 没有区别   ',0,'A'),(12,3,'功能不同的两个函数',1,'B');

/*Table structure for table `we_category` */

DROP TABLE IF EXISTS `we_category`;

CREATE TABLE `we_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Data for the table `we_category` */

insert  into `we_category`(`id`,`name`,`icon`,`status`,`parent_id`,`create_time`,`update_time`) values (1,'工学','fa-steam',1,0,0,0),(2,'哲学','fa-heart-o',1,0,0,0),(3,'管理学','fa-cubes',1,0,0,0),(5,'工学','fa-wrench',1,0,0,0),(7,'医学','fa-plus-square',1,0,0,0),(8,'公共基础课','fa-steam',1,1,0,0),(9,'专业课','fa-heart-o',1,1,0,0),(10,'马克思主义','fa-wrench',1,8,0,0),(11,'思修','fa-heart-o',1,8,0,0),(12,'高数','fa-wrench',1,8,0,0),(13,'英语','fa-plus-square',1,8,0,0),(14,'C语言','fa-wrench',1,8,0,0),(15,'JAVA','fa-plus-square',1,8,0,0),(16,'法语','fa-heart-o',1,8,0,0),(17,'德语','fa-plus-square',1,8,0,0),(18,'俄语','fa-wrench',1,8,0,0),(19,'通信网络工程','fa-heart-o',1,9,0,0),(20,'科学技术','fa-plus-square',1,9,0,0),(21,'中国哲学','fa-wrench',1,9,0,0),(22,'伦理学','fa-plus-square',1,9,0,0),(23,'宗教学','fa-plus-square',1,9,0,0),(24,'美学','fa-wrench',1,9,0,0),(25,'外国哲学','',1,9,0,0),(26,'玄学','fa-wrench',1,9,0,0),(27,'神学','crop',1,8,2017,0);

/*Table structure for table `we_chapter` */

DROP TABLE IF EXISTS `we_chapter`;

CREATE TABLE `we_chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `sort_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `we_chapter` */

insert  into `we_chapter`(`id`,`name`,`course_id`,`status`,`create_time`,`sort_num`) values (1,'序章',1,2,NULL,NULL),(2,'1.社会主义的特点和意义',1,2,NULL,NULL),(3,'2.社会主义的特点和意义',1,2,NULL,NULL),(4,'3.社会主义的特点和意义',1,2,NULL,NULL),(5,'4.社会主义的特点和意义',1,1,NULL,NULL),(6,'5.社会主义的特点和意义',1,1,NULL,NULL),(7,'社会主义的特点和意义',1,1,NULL,NULL),(9,'社会主义的特点和意义',1,1,NULL,NULL),(11,'社会主义的特点和意义',1,1,NULL,NULL),(12,'社会主义的特点和意义',1,1,NULL,NULL),(13,'社会主义的特点和意义',1,1,NULL,NULL);

/*Table structure for table `we_collection` */

DROP TABLE IF EXISTS `we_collection`;

CREATE TABLE `we_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `course_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8;

/*Data for the table `we_collection` */

insert  into `we_collection`(`id`,`user_id`,`course_id`,`status`) values (117,41,2,1),(124,50,2,1),(125,50,3,1),(138,50,1,1),(149,44,1,1),(160,51,2,1),(161,51,1,1),(234,49,1,1),(235,0,1,1),(236,42,1,1),(237,53,1,1),(239,54,1,1);

/*Table structure for table `we_course` */

DROP TABLE IF EXISTS `we_course`;

CREATE TABLE `we_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `head_image` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `we_course` */

insert  into `we_course`(`id`,`name`,`image`,`head_image`,`status`,`category_id`,`create_time`) values (1,'Java Web','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,10,NULL),(2,'HTML','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,10,NULL),(3,'PHP','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,10,NULL),(4,'编译原理','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,10,NULL),(5,'汇编语言','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,23,NULL),(6,'高等数学','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,24,NULL),(7,'语文','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,25,NULL),(8,'英语','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,26,NULL),(9,'e','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,18,NULL),(10,'f','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,17,NULL),(11,'g','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,16,NULL),(12,'h','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,15,NULL),(13,'i','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,14,NULL),(14,'j','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,13,NULL),(15,'k','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,12,NULL),(16,'l','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,11,NULL),(17,'m','/Public/uploads/course/123.jpg','/Public/uploads/course/123.jpg',1,0,NULL);

/*Table structure for table `we_do` */

DROP TABLE IF EXISTS `we_do`;

CREATE TABLE `we_do` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `obj_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `we_do` */

/*Table structure for table `we_question` */

DROP TABLE IF EXISTS `we_question`;

CREATE TABLE `we_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stem` varchar(100) NOT NULL COMMENT '题干',
  `course_id` int(11) NOT NULL DEFAULT '0',
  `obj_id` int(11) NOT NULL DEFAULT '0',
  `type` int(11) DEFAULT NULL COMMENT '1章节 2真题 3模拟',
  `explain` varchar(100) NOT NULL,
  `question_type` int(11) NOT NULL DEFAULT '0',
  `sn` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `we_question` */

insert  into `we_question`(`id`,`stem`,`course_id`,`obj_id`,`type`,`explain`,`question_type`,`sn`,`status`) values (1,'mysql_connect( )与@mysql_connect( )的区别是',1,1,1,'php就是最好的语言1',1,1,1),(2,'mysql_connect( )与@mysql_connect( )的区别是',1,1,1,'php就是最好的语言2',1,2,1),(3,'mysql_connect( )与@mysql_connect( )的区别是',1,1,1,'php就是最好的语言3',1,3,1),(4,'mysql_connect( )与@mysql_connect( )的区别是',1,2,1,'php就是最好的语言',1,NULL,1),(5,'mysql_connect( )与@mysql_connect( )的区别是',1,3,1,'php就是最好的语言',1,NULL,1),(6,'mysql_connect( )与@mysql_connect( )的区别是',1,3,2,'php就是最好的语言',1,NULL,1),(7,'这道是多选mysql_connect( )与@mysql_connect( )',1,1,1,'php就是最好的语言4',2,4,1),(8,'赵守业脸大不大',1,1,1,'真的大',1,NULL,1);

/*Table structure for table `we_test` */

DROP TABLE IF EXISTS `we_test`;

CREATE TABLE `we_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `we_test` */

insert  into `we_test`(`id`,`name`,`course_id`,`type`,`status`) values (1,'北华大学期末考试题',1,1,2),(2,'北华大学期末考试题',1,1,1),(3,'北华大学期末考试题',1,1,1),(4,'北华大学期末考试题',1,1,1),(5,'北华大学期末考试题',1,2,2),(6,'北华大学期末考试题',1,2,1),(7,'北华大学期末考试题',1,2,1),(8,'北华大学期末考试题',1,2,1);

/*Table structure for table `we_user` */

DROP TABLE IF EXISTS `we_user`;

CREATE TABLE `we_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

/*Data for the table `we_user` */

insert  into `we_user`(`id`,`phone`,`name`,`email`,`password`) values (41,0,'wpjcsb','wpjcsb','222'),(42,0,'赵守业','zsy','123'),(43,2147483647,'hjz','1608331147@qq.com','123456'),(44,0,'song','333','333'),(45,1318824856,'1318824856@qq.com','1318824856@qq.com','1318824856'),(46,2147483647,'刘君瑜','2873842492@qq.com','123456'),(47,2147483647,'wang','1607640764@qq.com','123456'),(48,222222,'222222qq.com','222222qq.com','222222'),(49,222222,'222222@qq.com','222222@qq.com','222222'),(50,3,'3','3','3'),(51,1,'1','1225765556@qq.com','1'),(52,2147483647,'哈哈','1600097233@qq.com','111111'),(53,1212,'1212','1212','1212'),(54,999999,'999999@qq.com','999999@qq.com','999999'),(55,123,'昵称123','123','123');

/*Table structure for table `we_user_result` */

DROP TABLE IF EXISTS `we_user_result`;

CREATE TABLE `we_user_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `result` varchar(100) NOT NULL,
  `is_ture` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `we_user_result` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

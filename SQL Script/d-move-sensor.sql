USE `d-move`;
DROP TABLE IF EXISTS `sensor`;
CREATE TABLE `sensor` (
  `sensor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `token` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`sensor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
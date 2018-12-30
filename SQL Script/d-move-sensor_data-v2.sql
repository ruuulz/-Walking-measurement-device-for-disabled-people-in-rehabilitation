USE `d-move`;
DROP TABLE IF EXISTS `sensor_data`;
CREATE TABLE `sensor_data` (
  `data_id` int(11) NOT NULL AUTO_INCREMENT,
  `sensor_id` int(11) ,
  `sesion_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
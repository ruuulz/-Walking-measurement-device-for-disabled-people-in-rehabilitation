USE `d-move`;
DROP TABLE IF EXISTS `sesiones`;
CREATE TABLE `sesiones` (
  `sesion_id` int(11) NOT NULL AUTO_INCREMENT,
  `sensor_id` int(11) ,
  `patient_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`sesion_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
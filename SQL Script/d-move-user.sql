USE `d-move`;
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
	`user_id` INT(11) NOT NULL AUTO_INCREMENT,
	`status` TINYINT(1) NOT NULL DEFAULT '1',
	`rut` VARCHAR(15) NOT NULL,
	`username` VARCHAR(15) NOT NULL,
	`firstname` VARCHAR(32) NOT NULL,
	`first_lastname` VARCHAR(32) NOT NULL,
	`secound_lastname` VARCHAR(32) NOT NULL,
	`gender` CHAR(1) NOT NULL,
	`birth_date` DATE NOT NULL,
	`phone` VARCHAR(12) NULL DEFAULT '0',
	`email` VARCHAR(255) NULL DEFAULT NULL,
	`password` VARCHAR(32) NOT NULL,
	`address_id` INT(11) NULL DEFAULT '0',
	`img_id` INT(11) NULL DEFAULT NULL,
	`date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`date_modified` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`user_id`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM
;

INSERT INTO user (`rut`, `username`,`password` ,`firstname`, `first_lastname`,`secound_lastname`,`gender`,`birth_date`)
VALUES
('86687917', 'jsandova',MD5('hola'),'Jorge', 'Sandoval', 'Arenas', 'M','1974-06-18');


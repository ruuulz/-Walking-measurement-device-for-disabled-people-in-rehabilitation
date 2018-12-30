USE `d-move`;
DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(15) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `first_lastname` varchar(32) NOT NULL,
  `secound_lastname` varchar(32) NOT NULL,
  `gender` char(1) NOT NULL,
  `birth_date` date NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------


INSERT INTO patient (`rut`, `firstname`, `first_lastname`,`secound_lastname`,`gender`,`birth_date`)
VALUES
('189338287', 'Andrés Eduardo', 'Braga', 'Muñoz', 'M','1990-01-01'),
('188323057', 'Eduardo Elí', 'Carrasco ', ' Galdame', 'M','1990-01-01'),
('186417011', 'Franco Vicente', 'Clandestino ', ' Muñoz', 'M','1990-01-01'),
('189553404', 'Vicente Alberto', 'Cortés ', ' Puschel', 'M','1990-01-01'),
('186228235', 'Bastián Luciano', 'Díaz ', ' Renjifo', 'M','1990-01-01'),
('191046382', 'Onofre José', 'Escalona ', ' Salas', 'M','1990-01-01'),
('190561437', 'Juan Pablo', 'Futalef ', ' Gallardo', 'M','1990-01-01'),
('189366191', 'Diego Andrés', 'Guiraldes ', ' Deck', 'M','1990-01-01'),
('187815452', 'Constantino Ignacio', 'Hernández ', ' Gómez', 'M','1990-01-01'),
('182536431', 'Cecilia Nicol', 'Ibarra ', ' Díaz', 'F','1990-01-01'),
('183553909', 'Ignacio Leandro', 'López ', ' Lepique', 'M','1990-01-01'),
('186822757', 'Marcelo Alejandro', 'Marín ', ' Abarca', 'M','1990-01-01'),
('186694783', 'Daniel Alberto', 'Montecino ', ' Montanares', 'M','1990-01-01'),
('189545991', 'Pablo Andrés', 'Montero ', ' Salvatierra', 'M','1990-01-01'),
('187677556', 'Tomás Andreas', 'Müller ', ' Vargas', 'M','1990-01-01'),
('184441748', 'Rodrigo Alfredo', 'Pérez ', ' Barros', 'M','1990-01-01'),
('183412612', 'Octavio Nicolás', 'Pérez ', ' Silva', 'M','1990-01-01'),
('187500885', 'Óscar Alberto', 'Pimentel ', ' Fuentes', 'M','1990-01-01'),
('187694795', 'Eduardo Esteban', 'Valdés ', ' Henríquez', 'M','1990-01-01'),
('180225188', 'Alvaro Esteban', 'Valenzuela ', ' Porcile', 'M','1990-01-01');

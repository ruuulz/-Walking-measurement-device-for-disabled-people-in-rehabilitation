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
('189338287', 'Andr�s Eduardo', 'Braga', 'Mu�oz', 'M','1990-01-01'),
('188323057', 'Eduardo El�', 'Carrasco ', ' Galdame', 'M','1990-01-01'),
('186417011', 'Franco Vicente', 'Clandestino ', ' Mu�oz', 'M','1990-01-01'),
('189553404', 'Vicente Alberto', 'Cort�s ', ' Puschel', 'M','1990-01-01'),
('186228235', 'Basti�n Luciano', 'D�az ', ' Renjifo', 'M','1990-01-01'),
('191046382', 'Onofre Jos�', 'Escalona ', ' Salas', 'M','1990-01-01'),
('190561437', 'Juan Pablo', 'Futalef ', ' Gallardo', 'M','1990-01-01'),
('189366191', 'Diego Andr�s', 'Guiraldes ', ' Deck', 'M','1990-01-01'),
('187815452', 'Constantino Ignacio', 'Hern�ndez ', ' G�mez', 'M','1990-01-01'),
('182536431', 'Cecilia Nicol', 'Ibarra ', ' D�az', 'F','1990-01-01'),
('183553909', 'Ignacio Leandro', 'L�pez ', ' Lepique', 'M','1990-01-01'),
('186822757', 'Marcelo Alejandro', 'Mar�n ', ' Abarca', 'M','1990-01-01'),
('186694783', 'Daniel Alberto', 'Montecino ', ' Montanares', 'M','1990-01-01'),
('189545991', 'Pablo Andr�s', 'Montero ', ' Salvatierra', 'M','1990-01-01'),
('187677556', 'Tom�s Andreas', 'M�ller ', ' Vargas', 'M','1990-01-01'),
('184441748', 'Rodrigo Alfredo', 'P�rez ', ' Barros', 'M','1990-01-01'),
('183412612', 'Octavio Nicol�s', 'P�rez ', ' Silva', 'M','1990-01-01'),
('187500885', '�scar Alberto', 'Pimentel ', ' Fuentes', 'M','1990-01-01'),
('187694795', 'Eduardo Esteban', 'Vald�s ', ' Henr�quez', 'M','1990-01-01'),
('180225188', 'Alvaro Esteban', 'Valenzuela ', ' Porcile', 'M','1990-01-01');

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(6) unsigned AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(200) NOT NULL
) DEFAULT CHARSET=utf8;
INSERT INTO `groups` (`name`) VALUES
  ('Group A'),
  ('Group B'),
  ('Group C');




CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(6) unsigned AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL
) DEFAULT CHARSET=utf8;
INSERT INTO `teams` (`name`, `country`) VALUES
  ('Team 1', 'Belarus'),
  ('Team 2', 'Belarus'),
  ('Team 3', 'Russia'),
  ('Team 4', 'Russia'),
  ('Team 5', '');


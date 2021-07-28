CREATE TABLE IF NOT EXISTS `group_team` (
  `id` int(6) unsigned AUTO_INCREMENT PRIMARY KEY,
  `group_id` int(6) unsigned NOT NULL,
  `team_id` int(6) unsigned NOT NULL,
   INDEX `group_id` (`group_id`),
   INDEX `team_id` (`team_id`),
   CONSTRAINT `FK_groups` FOREIGN KEY (`group_id`)
    REFERENCES `groups` (`id`) ON DELETE CASCADE,
   CONSTRAINT `FK_gteams` FOREIGN KEY (`team_id`)
    REFERENCES `teams` (`id`) ON DELETE CASCADE
) DEFAULT CHARSET=utf8;
INSERT INTO `group_team` (`group_id`, `team_id`) VALUES
  (1, 1),
  (1, 2),
  (2, 1),
  (2, 2),
  (2, 3),
  (3, 3),
  (3, 4),
  (3, 5);



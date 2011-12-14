DROP TABLE IF EXISTS `settings`;

#
# Table structure for table 'settings'
#

CREATE TABLE `settings` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `set_data` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_general_ci,
  PRIMARY KEY (`id`)
);

INSERT INTO `settings` (`id`, `code`, `set_data`, `description`) VALUES
	(1, 'email', 'darkclarus@gmail.com', 'Контактный имейл'),
        (2, 'skype', 'darkclarus', 'Скайп'),
        (3, 'planet', 'Земля', 'Планета проживания ;)');
DROP TABLE IF EXISTS `news`;

#
# Table structure for table 'news'
#

CREATE TABLE `news` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `description` text COLLATE utf8_general_ci NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
);

#
# Edit user_id for your state
#
INSERT INTO `news` (`id`, `date`, `title`, `description`, `user_id`) VALUES
	(1,2011-11-05,'news №1','В статье не будут рассмотрены различия между
 разными DVCS. Также не будет детально рассматриваться работа с git, по этой
 теме есть множество хороших источников, которые я приведу в конце статьи.
 Итак, сайт github.com позиционируется как веб-сервис хостинга проектов с
 использованием системы контроля версий git, а также как социальная сеть для
 разработчиков. Пользователи могут создавать неограниченное число
 репозиториев, для каждого из которых предоставляется wiki, система issue
 tracking-а, есть возможность проводить code review и многое другое. GitHub
 на данный момент является самым популярным сервисом такого рода, обогнав
 Sourceforge и Google Code.', 6),
	(2,2011-11-05,'news №2','Сейчас у нас нет ни одного репозитория,
 и мы можем либо создать новый репозиторий, либо ответвиться (fork) от
 уже существующего чужого репозитория и вести собственную ветку разработки.
 Затем, при желании, свои изменения можно предложить автору исходного
 репозитория (Pull request). Но для начала установим git и настроим его
 для работы с сайтом. ', 6);
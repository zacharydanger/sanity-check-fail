CREATE TABLE IF NOT EXISTS `posts` (
	  `post_id` int(11) NOT NULL AUTO_INCREMENT,
	  `title` varchar(512) NOT NULL,
	  `body` text NOT NULL,
	  `published` tinyint(1) NOT NULL,
	  `date_published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
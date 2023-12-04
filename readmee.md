CREATE TABLE IF NOT EXISTS `my_contacts` (

  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_names` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact_no` varchar(75) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)

) ENGINE = InnoDB  DEFAULT CHARSET = latin1 AUTO_INCREMENT = 5 ;

CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

CREATE TABLE IF NOT EXISTS `items` (
`id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `is_complete` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `items` (`id`, `name`, `category`, `date`, `is_complete`) VALUES
(6, 'panner', 'cooking', '2014-10-14', 0);

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'PHP Gang solve your problems', 'a@aasdf.com', 'ef7b0f97cf7fa82954ed1c23dde5ae1d'),
(3, 'vivek', 'viveknitya19@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'bhis', 'viveknity@gmail.com', 'ec03f91ae56e478455e3786e91559194'),
(5, 'ritu', 'RITU@GMAIL.COM', 'ec03f91ae56e478455e3786e91559194');


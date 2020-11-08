# tshimologoChallenge

-----Instructions -----
1)Downoload and install xammp server
2)Ounce its running start appache and Mysql


3)Copy the the Project to this directory C:\xampp\htdocs
4)Run the following Sql table scripts in Xampp admin

CREATE TABLE IF NOT EXISTS `preferences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preference` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


INSERT INTO `preferences` (`id`, `preference`) VALUES
(1, 'I like to eat out'),
(2, 'I like to watch movi'),
(3, 'I like to watch TV'),
(4, 'I like to listen to ');

*********************************************************************Second table******

CREATE TABLE IF NOT EXISTS `checkbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Food` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Firstnames` varchar(20) NOT NULL,
  `Contactname` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `preference` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;



INSERT INTO `checkbox` (`id`, `Food`, `Surname`, `Firstnames`, `Contactname`, `date`, `Age`, `preference`) VALUES
(8, 'Pasta,Beef-stir-fry,', 'mable', 'Smith', '07777', '2020-11-04', '40', 'Strongly-Agree');


5) paste this in your browser http://127.0.0.1/tshimologoChallenge/main.html


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";  

-- --------------------------------------------------------

CREATE TABLE `persons`(
  `personID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `homeAdress` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY(`personID`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE  `orders`(
  `orderNum` int(20) NOT NULL AUTO_INCREMENT,
  `orderDate` varchar(50) NOT NULL,
  `deliveryDate` varchar(50) NOT NULL,
  `customerID` int(20) NOT NULL,
  PRIMARY KEY(`orderNum`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY(`customerID`) REFERENCES `persons`(`personID`) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `suppliers`(
  `supplierID` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY(`supplierID`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `meatsCatalogue`(
  `meatID` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `supplierID` int(15) NOT NULL,
  `purchasePrice` int(15) NOT NULL,
  `salePrice` int(15) NOT NULL,
  PRIMARY KEY(`meatID`),
  CONSTRAINT `meatsCatalogue_ibfk_1` FOREIGN KEY(`supplierID`) REFERENCES `suppliers`(`supplierID`) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `orderDetails`(
  `orderNum` int(20) NOT NULL,
  `meatID` int(20) NOT NULL,
  `weight` int(20) NOT NULL,
  PRIMARY KEY(`orderNum`,`meatID`),
  CONSTRAINT `orderDetails_ibfk_1` FOREIGN KEY(`orderNum`) REFERENCES `orders`(`orderNum`) ON UPDATE CASCADE ON DELETE NO ACTION,
  CONSTRAINT `orderDetails_ibfk_2` FOREIGN KEY(`meatID`) REFERENCES `meatsCatalogue`(`meatID`) ON UPDATE CASCADE ON DELETE NO ACTION
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `purchases`(
  `purchaseNum` int(15) NOT NULL AUTO_INCREMENT,
  `purchaseDate` varchar(50) NOT NULL,
  `deliveryDate` varchar(50) NOT NULL,
  `meatID` int(15) NOT NULL,
  `weight` int(15) NOT NULL,
  PRIMARY KEY(`purchaseNum`),
  CONSTRAINT `purchases_ibfk_1` FOREIGN KEY(`meatID`) REFERENCES `meatsCatalogue`(`meatID`) ON UPDATE NO ACTION ON DELETE NO ACTION
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `users`(
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY(`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- creating database 'userInfo'

CREATE DATABASE IF NOT EXISTS userInfo DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE userInfo;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE Users (
    UserId int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL ,
    password varchar(255) NOT NULL,
    PRIMARY KEY (UserId)
);

--
-- Dumping data for table `users`
--

INSERT INTO Users (`username`, `email`, `password`) VALUES
('parastiware', 'parastiware@gmail.com', '0749fbf9c09b3f5fbe5ed19a61599b0b');

-- --------------------------------------------------------


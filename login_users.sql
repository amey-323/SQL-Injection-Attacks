

CREATE TABLE `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(10) NOT NULL,
    `pass` varchar(15) NOT NULL,
    PRIMARY KEY (`id`)
)AUTO_INCREMENT=4;

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'ram', 'ram'),
(3, 'rohan1', 'rohan123');

CREATE TABLE `users_cr`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(10) NOT NULL,
    `pass` varchar(15) NOT NULL,
    PRIMARY KEY (`id`)
)AUTO_INCREMENT=4;

INSERT INTO `users_cr` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'ram', 'ram'),
(3, 'rohan1', 'rohan123');
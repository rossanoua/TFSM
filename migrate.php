<?php
require 'inc/config.php';


try {
    $dbh = new PDO("mysql:host=".$config['host']."", $config['dbuser'], $config['dbpass']);

    $dbh->exec("CREATE DATABASE IF NOT EXISTS `".$config['db']."`")
    or die(print_r($dbh->errorInfo(), true));

} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}



try{
    $dbh = new PDO("mysql:host=".$config['host'].";dbname=".$config['db']."", $config['dbuser'], $config['dbpass']);
    $dbh->exec("CREATE TABLE `form_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(64) NOT NULL,
  `usersurname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `comment` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE='InnoDB' COLLATE 'utf8mb4_general_ci';")
    or die(print_r($dbh->errorInfo(), true));
}catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}


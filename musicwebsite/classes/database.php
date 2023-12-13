<?php

//include the connection file
include('connection.php');

//create an instance of Connection class
$connection = new Connection();

//call the createDatabase methods to create database "chap4Db"
$connection->createDatabase('MUSIC_PHP_PROJ');
$query0 = "
CREATE TABLE Users (
    Users_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Users_FullName VARCHAR(100) NOT NULL,
    Users_Email VARCHAR(255) NOT NULL,
    Users_Password VARCHAR(255) NOT NULL   
    )
";
$query = "
CREATE TABLE Song (
Song_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Song_Name VARCHAR(255) NOT NULL,
Song_Lenght_Second INT NOT NULL,
Song_Artist VARCHAR(255) NOT NULL,
Song_Band VARCHAR(255)
)
";

//call the selectDatabase method to select the chap4Db
$connection->selectDatabase('Users');

//call the createTable method to create table with the $query
$connection->createTable($query0);
$connection->createTable($query);


?>

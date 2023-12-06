<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gender VARCHAR(1) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL,
House VARCHAR(20) NOT NULL,
Year INT(2) NOT NULL,
Role TINYINT(1))");

$stmt->execute();
$stmt->closeCursor();

$stmt2 = $conn->prepare("DROP TABLE IF EXISTS TblBooks;
CREATE TABLE TblBooks
(BoookID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AuthorInitials VARCHAR(10) NOT NULL,
BookName VARCHAR(20) NOT NULL)");

$stmt2->execute();
$stmt2->closeCursor();

$stmt3 = $conn->prepare("DROP TABLE IF EXISTS TblUserBooks;
CREATE TABLE TblUserBooks
(UserID INT(4) NOT NULL,
BookID INT(4) NOT NULL,
Date DATE NOT NULL,
Report TEXT,
PRIMARY KEY(UserID,BookID)) ");
$stmt3-> execute();
$stmt3->closeCursor();


?>

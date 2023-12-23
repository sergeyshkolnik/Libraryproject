<?php
include_once("connection.php");
session_start();
print($_SESSION['user']);
$stmt = $conn->prepare("SELECT*FROM TblUsers WHERE Surname like :username
INNER JOIN TblUsers 
ON TblUsers.UserID=TblUserBooks.UserID
INNER JOIN TblBooks 
ON TblBooks.BookID=TblUserBooks.BookID");
$stmt = bindParam(':user', $_SESSION["user"]);
$stmt->execute();


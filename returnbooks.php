<?php
include_once("connection.php");
session_start();
$_SESSION['user'] = $user;
$stmt = $conn->preapre("SELECT tblusers.Forename as fn , tblbooks.BookName as bn FROM TblUserBooks
INNER JOIN TblUsers 
ON TblUsers.UserID=TblUserBooks.UserID
INNER JOIN TblBooks 
ON TblBooks.BookID=TblUserBooks.BookID
DELETE FROM TblUserBooks WHERE fn = %$user%")
$stmt->execute();
echo("You returned your books");

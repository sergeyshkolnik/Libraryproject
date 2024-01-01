<!DOCTYPE html>
<html>
    <body>
        <h1>User Page</h1>
        <a href="mybooks.php">View My Books</a>
        <a href="reuturnbooks.php">Return Books</a>
    </body>
</html>
<?php
include_once('connection.php');
session_start();

$stmt1 = $conn->prepare("SELECT tblusers.Surname as sn WHERE Surname = :user , tblbooks.BookName as bn FROM TblUserBooks
INNER JOIN TblUsers 
ON TblUsers.UserID=TblUserBooks.UserID
INNER JOIN TblBooks 
ON TblBooks.BookID=TblUserBooks.BookID");
$stmt1->bindParam(':user', $_SESSION['user']);
$stmt1->execute();
while($row = $stmt1->fetch(PDO::FETCH_ASSOC) ) {
    
    
    echo($row["bn"]."<br>");

}
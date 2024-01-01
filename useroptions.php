<!DOCTYPE html>
<html>
    <body>
        <h1>User Page</h1>
        <a href="mybooks.php">View My Books</a>
        <a href="returnbooks.php">Return Books</a>
        <h2>Your Books:</h2><br>
    </body>
</html>
<?php
include_once('connection.php');
session_start();

$stmt1 = $conn->prepare("SELECT tblusers.Forename as sn , tblbooks.BookName as bn FROM TblUserBooks
INNER JOIN TblUsers 
ON TblUsers.UserID=TblUserBooks.UserID
INNER JOIN TblBooks 
ON TblBooks.BookID=TblUserBooks.BookID
WHERE Surname = :user");
$stmt1->bindParam(':user', $_SESSION['user']);
$stmt1->execute();

while($row = $stmt1->fetch(PDO::FETCH_ASSOC) ) {
    
    
    echo($row["bn"]."<br>");

}

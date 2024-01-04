<!DOCTYPE html>
<html>
<link rel = "stylesheet" href = "library.css">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <body>
        <div class = "login jumbotron"></div>
        <h1>User Page</h1>
        </div>
        
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

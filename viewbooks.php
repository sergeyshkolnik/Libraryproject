<?php
include_once("connection.php");


$stmt1 = $conn->prepare("SELECT tblusers.Forename as fn , tblbooks.BookName as bn FROM TblUserBooks
INNER JOIN TblUsers 
ON TblUsers.UserID=TblUserBooks.UserID
INNER JOIN TblBooks 
ON TblBooks.BookID=TblUserBooks.BookID");
$stmt1->execute();


while($row = $stmt1->fetch(PDO::FETCH_ASSOC) ) {
    
    echo($row["fn"]);
    echo($row["bn"]."<br>");

}






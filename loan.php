<DOCTYPE! html>
<?php
include_once("connection.php");
session_start();


$stmt = $conn->prepare("INSERT INTO TblUserBooks (UserID, BookID) VALUES (:user, :book)");
$stmt->bindParam(':user', $_SESSION['LoanUser']);
$stmt->bindParam(':book', $_SESSION['LoanBook']);
$stmt->execute();

?>
<html>
    <body>
        <a href="selectuserbooks.php">Loan another book</a>
    </body>
</html>
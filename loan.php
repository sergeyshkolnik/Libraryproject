<DOCTYPE! html>
<?php
include_once("connection.php");
session_start();
$stmt = $conn->prepare("INSERT INTO TblUserBooks (UserID, BookID) VALUES (:user, :book)");
echo('hello');
$stmt->bindParam(':user', $_SESSION['LoanUser']);
$stmt->bindParam(':book', $_SESSION['LoanBook']);
echo('hello');
$stmt->execute();

echo('hello');

?>
<html>
    <body>
        <a href="selectuserbooks.php">Loan another book</a>
    </body>
</html>
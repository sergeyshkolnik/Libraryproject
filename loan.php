<DOCTYPE! html>
<?php
include_once("connection.php");
session_start();
echo($_SESSION["LoanUser"]);
echo($_SESSION['LoanBook']);

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
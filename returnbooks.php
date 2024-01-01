<!DOCTYPE html>
<?php
include_once("connection.php");
session_start();

$stmt1 = $conn->prepare("DELETE TblUserBooks, TblUsers
FROM TblUserBooks
JOIN TblUsers ON TblUserBooks.UserID = TblUsers.UserID
WHERE Surname = :user");
$stmt1->bindParam(':user', $_SESSION['user']);
$stmt1->execute();
echo("You returned your books")
?>
<html>
    <a href="useroptions.php">Back to Menu</a>
</html>

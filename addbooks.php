<?php
array_map("htmlspecialchars", $_POST);
include_once("connection.php");
print_r($_POST);

$stmt = $conn->prepare("INSERT INTO TblBooks (BookID, BookName, AuthorInitials)VALUES (null,:bookname,:authorinitials)");
$stmt->bindParam(':bookname', $_POST["bookname"]);
$stmt->bindParam(':authorinitials', $_POST["authorinitials"]);

$stmt->execute();
$conn=null;

echo $_POST["bookname"]."<br>";
echo $_POST["authorinitials"]."<br>";
?>

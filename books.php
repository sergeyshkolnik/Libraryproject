<!DOCTYPE html>
<html>
<head>
    
    <title>Users</title>
    
</head>
<body>
    
    <form action="addbooks.php" method = "post">
        Author's Initials:<input type="text" name="authorinitials"><br>
        Book Name:<input type="text" name="bookname"><br>
        <input type="submit" value="Add Book">
        
</form>
<?php
include_once("connection.php");
$stmt = $conn->prepare("SELECT*FROM TblBooks");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["AuthorInitials"].' '.$row["BookName"]. "<br>");


}
?>
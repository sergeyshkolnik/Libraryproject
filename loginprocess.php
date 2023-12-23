<!DOCTYPE html>
<?php
include_once("connection.php");


session_start();
$user = $_POST['Username'];
$_SESSION['user'] = $user;




array_map("htmlspecialchars", $_POST);

$stmt = $conn->prepare("SELECT*FROM TblUsers WHERE Surname =:username ;" );
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    $hashed = $row['Password'];
    $attempt = $_POST['Pword'];

    if(password_verify($attempt,$hashed))
    {
        if($row['Role']>0)
        {
            header('Location: adminoptions.php');
        }
        else
        {
            header('Location: useroptions.php');
        }  
    }

    
}

$conn=null;
?>
<html>
    <body>
        <a href="login.php">Please try again</a>
    </body>
</html>





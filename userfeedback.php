<DOCTYPE! html>

<?php
session_start();
include_once("connection.php");
$searchErr = '';
//$_SESSION['searchuser'] = $_POST['searchuser'];



    if(!empty($_POST['searchuser']))
    {
        $searchuser = $_POST['searchuser'];
        $stmt1 = $conn->prepare("SELECT * from TblUsers WHERE Forename like '%$searchuser%' or Surname like '%$searchuser%'");
        $stmt1->execute();
        
        
        while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
        echo($row["Forename"].' '.$row["Surname"].' '.$row["House"]."<br>");
        $_SESSION["LoanUser"]=$row["UserID"];
        
        
        }
    }
    else
    {
        $searchErr = "Please enter the information";
        echo($searchErr);
    }

    if(!empty($_POST['searchbook']))
    {
        $searchbook = $_POST['searchbook'];
        $stmt2 = $conn->prepare("SELECT*FROM TblBooks WHERE BookName like '%$searchbook%' or AuthorInitials like '%$searchbook%'");
        $stmt2->execute();

        while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
            echo($row["BookName"].' '.$row["AuthorInitials"]."<br>");
            $_SESSION["LoanBook"]=$row["BookID"];
        }

    }
    else{

        $searchErr = "Please enter the informaton";
        echo($searchErr);
    }


?>
<html>
    <form action="loan.php" method="post">Loan
        
        <input type="submit" value = "Loan">
    </form>
</html>


<?php
include_once("connection.php");
$stmt = $conn->prepare("SELECT*FROM TblUserBooks");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $num1 = $row['UserID'];
    $num2 =$row['BookID'] ;


    $stmt2 = $conn->prepare("SELECT*FROM TblUsers where UserID like '%$num1%'");
$stmt2->execute();
while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){

    $name = $row2['Forename'];
    echo($name);

}
$stmt3 = $conn->prepare("SELECT*FROM TblBooks where BookID like '%$num2%'");
$stmt3->execute();
while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){

    $book = $row3['BookName'];
    echo($book);
}
echo("<br>");

   
}

$stmt2 = $conn->prepare("SELECT*FROM TblUsers where UserID like '%$num1%'");
$stmt2->execute();
while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){

    $name = $row2['Forename'];
    echo($name);

}
$stmt3 = $conn->prepare("SELECT*FROM TblBooks where BookID like '%$num2%'");
$stmt3->execute();
while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){

    $book = $row3['BookName'];
    echo($book);
}

echo($name);

//ASK MR CUNNIFFE
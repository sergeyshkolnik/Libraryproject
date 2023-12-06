<?php
include_once("connection.php");
array_map("htmlspecialchars, $_POST");
$stmt = $conn->prepare("SELECT*FROM TblUsers WHERE Surname =:username ;" );
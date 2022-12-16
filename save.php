<?php

include('includes/connect.php');
include('functions/common_function.php');

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

$sql = "INSERT INTO contact_message (First_name, Message_txt, Email, Mobile) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}' )";
$result = mysqli_query($con, $sql) or die("Query Failed!");
header("location: localhost\e-commerse website\contact.php");
mysqli_close($con);
?>
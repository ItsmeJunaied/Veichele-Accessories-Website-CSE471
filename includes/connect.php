<?php

// $con=mysqli_connect('localhost','root','','mystore');
$con=mysqli_connect("localhost","root","","mystore");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{

    echo "connection successfull";
}


?>


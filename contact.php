<?php

$con= mysqli_connect("localhost","root","","travel");

if ($con) {
    echo "Connection success";
}
else{
    echo "connection failed";
}


$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phone'];
$message= $_POST['message'];

$sql="INSERT INTO `contact` (`name`, `email`, `number`, `message`) VALUES ('$name', '$email', '$number', '$message');";

if($con->query($sql)==true){
    echo "Data inserted";
}
else{
    echo "data not inserted";
}



?>
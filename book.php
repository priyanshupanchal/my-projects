<?php

$con= mysqli_connect("localhost","root","","travel");

if ($con) {
    echo "Connection success";
}
else{
    echo "connection failed";
}


$name= $_POST['name'];
$aadharnumber= $_POST['aadharnumber'];
$contact= $_POST['contact'];
$emailid= $_POST['emailid'];
$whereto= $_POST['where_to'];
$howmany= $_POST['how_many'];
$arrival= $_POST['arrivals'];
$leaving= $_POST['leaving'];

$sql="INSERT INTO `booking`(`name`, `aadharnumber`, `contact`, `emailid`, `where_to`, `how_many`, `arrival`, `leaving`) VALUES ('$name','$aadharnumber','$contact','$emailid','$whereto','$howmany','$arrival','$leaving')";

if($con->query($sql)==true){
    echo "Data inserted";
}
else{
    echo "data not inserted";
}



?>
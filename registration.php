<?php

$con= mysqli_connect("localhost","root","","travel");

if ($con) {
    echo "Connection success";
}
else{
    echo "connection failed";
}


$FirstName= $_POST['FirstName'];
$LastName= $_POST['LastName'];
$Email= $_POST['Email'];
$Mobile= $_POST['Mobile'];
$Gender= $_POST['Gender'];
$DateOfBirth= $_POST['DateOfBirth'];
$Address= $_POST['Address'];
$City= $_POST['City'];
$Areapin=$_POST['Areapin'];
$Password=$_POST['Password'];


$sql="INSERT INTO `registration`(`FirstName`, `LastName`, `Email`, `Mobile`, `Gender`, `DateOfBirth`, `Address`, `City`, `AreaPin`, `Password`) VALUES ('$FirstName','$LastName','$Email','$Mobile','$Gender','$DateOfBirth)','$Address','$City','$Areapin','$Password')";

if($con->query($sql)==true){
    header ('location: index.html');
}
else{
    echo "data not inserted";
}



?>
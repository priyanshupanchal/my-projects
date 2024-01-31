<?php

$con= mysqli_connect("localhost","root","","travel");


$email= $_POST['email'];
$pass=$_POST['password'];

$slc= $con->query("Select * From registration where Email= '$email' And Password = '$pass'");

if (mysqli_num_rows($slc)>=1) {
    echo "Login Success";
    echo "<script>alert('Login Success');</script>";
    header('location: home.html'); 
}
else{
    echo "Login Failed";
}

?>
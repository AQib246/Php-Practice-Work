<?php

header("location:login.php");    

session_start();

$con = mysqli_connect('localhost' , 'root' , '');
if($con){
    echo "Connection Successfull";
}
else {
    echo "No Connection";
}
mysqli_select_db($con , 'login'); 

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "select * from signin where username = '$username' && password = '$password' ";
$result = mysqli_query($con , $sql);

$rows = mysqli_num_rows($result);
if($rows == 1){
    echo "This user has been already registered! Please Login.";
}
else
{
    $sql2 = "insert into signin (username , password) values ('$username' , '$password')";
    mysqli_query($con , $sql2);
}


?>
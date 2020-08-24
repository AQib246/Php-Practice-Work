<?php
$submit = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server , $username , $password);

if(!$con)
{
    die("Connection failed due to " . mysqli_connect_error());
}
else{

// echo "Success Connection";
$name = $_POST["name"];
$fname = $_POST["fname"];
$email = $_POST["email"];
$dname = $_POST["dname"];
$year = $_POST["year"];
$phone = $_POST["phone"];
$complain = $_POST["complain"];

$sql = "INSERT INTO `complains`.`complains` (`name`, `fname`, `email`, `dname`, `year`, `phone`, `complain`, `dt`) 
VALUES ('$name', '$fname', '$email', '$dname', '$year', '$phone', '$complain',
 current_timestamp());";
// echo $sql;

if($con->query($sql) == true)
{
    // echo "Successfull Inserted!";
    $submit = true;
}
else
{
    echo "Error:  $sql <br> $con->error";
}

$con->close();

}
}
?>




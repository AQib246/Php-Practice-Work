 
<?php   

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
if($rows == 1)
{
    $_SESSION["username"] = $username;
    header("location:home.php");
}
else
{
  header("location:login.php");
echo "Error";
}


?>
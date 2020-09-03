<?php
session_start();
header("Location:index.php");

$con = mysqli_connect("localhost","root","","database");
if($con){
	echo "";
}else
{
	echo "no connection";
}

mysqli_select_db($con, 'signin');

$name = $_POST['user'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$comment = $_POST['comment'];

$sql= "insert into  userinfo(username,email,Contact,Comment) 
value('$name','$email','$contact','$comment')";



$result=$con -> query($sql);
?>


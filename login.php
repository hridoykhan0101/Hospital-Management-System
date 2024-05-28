<?php
session_start();


include_once('connection.php'); 

$email = $_POST['email'];
$password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $run =mysqli_query($mysqli,$sql);

    if(mysqli_num_rows($run) > 0 ){
		
		$row = mysqli_fetch_assoc($run);
		//echo "<h1>Login ...". $email." Email or Password...!</h1>";
		$_SESSION["email"] = $email;
		header("location: ./addAppoint.php");
	
    } else{
		echo "<h1>Login Failed...Incorrect Email or Password...!</h1>";
		}
?>
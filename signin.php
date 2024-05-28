<?php

include_once('connection.php'); 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `user` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

// insert in database 
$run =mysqli_query($mysqli,$sql);

 if($run){
		    
		 header("location:login.php");
	       }
		else{
			echo "<h1> No signup  </h1>";	
	    }

?>
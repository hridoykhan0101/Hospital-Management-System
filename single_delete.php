
<!DOCTYPE html> 
<html> 
<head>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body> 

<h1> Data Deleting</h1>

<?php 
include_once('connection.php'); 
?>

<?php 
if(isset($_GET['deleteid']))
{
		$id= $_GET['deleteid']; 
		
	$sql = "DELETE FROM add_doctor WHERE id='$id'";
	$run =mysqli_query($mysqli,$sql) or die(mysqli_query());
	if($run){
		echo "<h1>Data Deleted</h1>";
		header("location:addNewDoctor.php");
	}
		else{
			echo "<h1> Data not Deleted  </h1>";	
	}
	
	
}
$mysqli ->close();

?>

</body> 
</html>
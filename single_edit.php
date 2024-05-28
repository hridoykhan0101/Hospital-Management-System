
<!DOCTYPE html> 
<html> 
<head>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body> 

<h1> Data Updating</h1>


<?php 
include_once('connection.php'); 
?>

<?php 
		$id= $_GET['updateid']; 
		$sql= "SELECT * FROM add_doctor WHERE id=$id";
		$result=mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_assoc($result);
		$docname= $row['doc_name'];
        $docemail= $row['doc_email'];
        $docphn= $row['phn_no'];
        $spec= $row['specialist'];

		 
		 if(isset($_POST['edit'])){
			$docname= $_POST['doc_name'];
			$docemail= $_POST['doc_email'];
			$docphn= $_POST['phn_no'];
			$spec= $_POST['specialist'];
		  
		  $sql = "UPDATE add_doctor SET id=$id, doc_name='$docname', doc_email='$docemail', phn_no='$docphn', specialist='$spec' where id=$id ";
		  $run =mysqli_query($mysqli,$sql) or die(mysqli_query());
           if($run){
		    echo "<h1>Data Edited</h1>";
		    header("location:addNewDoctor.php");
	       }
		else{
			echo "<h1> Data not Edited  </h1>";	
	    }
		  
		 }

?>

       <form action="#" method="post">
		    ID: <input type="hidden" name="id"/> </br>
			Doctor Full Name: <input type="text" name="doc_name" value=<?php echo $docname;?>   /> </br>
			Doctor Email: <input type="text" name="doc_email" value=<?php echo $docemail;?>   /></br>
			Phone number: <input type="text" name="phn_no" value=<?php echo $docphn;?>   /></br>
			Specialist: <input type="text" name="specialist" value=<?php echo $spec;?>   /></br>
			<input type="submit" name="edit" value="Updated Data" />
	   </form>

</body> 
</html>
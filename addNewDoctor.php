<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Doctor</title>
<style>
  h1{
    text-align: center;
   color: crimson;
  }


  
  #ft-form{
  
    padding: 100px;
    padding-right: 50px;
  }
  
  .field{
  
    background-color: aqua;
  }

  .topnav{
 color:black ;
  background-color: tomato;
  text-align: center;

  
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;

}

  
    </style>
</head>
<body>

  <fieldset class="field">
  <div class="topnav">

<a href="addNewDoctor.php"><b>Add Doctor</b></a>
<a href="patientinfo.php"><b>Show Patient Details </b></a>

</div>

    
 
      <h1 style=text-align:center;></h1></br>
      <div>
      <?php 
 session_start();
include_once('connection.php'); 
?>


<form action="" method="post">
</br><div> Doctor Full Name <input type="text" name="doc_name" value="" /> </br>
        Doctor Email <input type="text" name="doc_email" value="" /></br>
        Phone number <input type="text" name="phn_no" value="" /></br>
        Specialist <input type="text" name="specialist" value="" /></br>
      <input type="submit" name="submit" value="Insert" /></div>
</form>
  
  
<?php 
if(isset($_POST['submit']))
{

  if(!empty ($_POST['doc_name']) && !empty ($_POST['doc_email']) && !empty ($_POST['phn_no']) && !empty ($_POST['specialist'])){
    $docname= $_POST['doc_name'];
    $docemail= $_POST['doc_email'];
    $docphn= $_POST['phn_no'];
    $spec= $_POST['specialist'];

    
    
  $sql = "INSERT INTO add_doctor(doc_name, doc_email, phn_no, specialist) VALUES('$docname','$docemail','$docphn','$spec')";
 
  
  $run =mysqli_multi_query($mysqli,$sql) or die(mysqli_query());
  
  if($run){
    echo "<h1>Submitted Successfully..</h1>";
    
  }
    else{
      echo "<h1> Not Submitted </h1>";
              
  }
  }
  else{
    echo "<h2> All Fields are required </h2>";
    
  }
}



?>

<?php

$sql = "SELECT id, doc_name, doc_email, phn_no, specialist FROM add_doctor"; 
echo '<table style="width:60%" border="2" > 

      <tr> 
          <th>ID</font> </th> 
          <th> Doctor Full Name</font> </th> 
          <th> Doctor Email</font> </th> 
          <th> Phone number</font> </th> 
          <th> Specialist</font> </th> 
		  <th><font color="green">Update</font></th>
          <th><font color="Red">Delete</font></th>
   
      </tr>';

if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $ID = $row["id"];
        $docname= $row['doc_name'];
        $docemail= $row['doc_email'];
        $docphn= $row['phn_no'];
        $spec= $row['specialist']; 
		

        echo '<tr> 
                  <td>'.$ID.'</td>
                  <td>'.$docname.'</td> 
                  <td>'.$docemail.'</td>
                  <td>'.$docphn.'</td>
                  <td>'.$spec.'</td>
				   
				  <td>  
		             <button class="btn btn-primary"> <a href="single_edit.php?updateid='.$ID.'" >Update</a></button>	                
				  </td> 
				  
				   <td>  
		             <button class="btn btn-primary"> <a href="single_delete.php?deleteid='.$ID.'">Delete</a></button>	                 
				  </td> 
				  
				   
			
		          
              </tr>';
    }
    $result->free();
} 
$mysqli ->close();

?>






<div>



</div>

  
  </body>
  </html>
  </fieldset>
 



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>

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

  </style>
</head>
<body>

  <fieldset class="field">
    
 
      <h1 >For Appoinment</h1>
      <div>
      <?php 
 session_start();
include_once('connection.php'); 
?>


<form action="" method="post">
      <div> Patient Full Name: <input type="text" name="pfn" value="" /> </br>
      Patient Address: <input type="text" name="pa" value="" /></br>
      Phone Number: <input type="text" name="pn" value="" /></br>
      Doctor name: <input type="text" name="dn" value="" /></br>
      Date: <input type="text" name="dt" value="" /></br>
      <input type="submit" name="submit" value="Insert" /></div>
</form>
  
  
<?php 
if(isset($_POST['submit']))
{

  if(!empty ($_POST['pfn']) && !empty ($_POST['pa']) && !empty ($_POST['pn']) && !empty ($_POST['dn']) && !empty ($_POST['dt'])){
    $pafn= $_POST['pfn'];
    $paadd= $_POST['pa'];
    $phn= $_POST['pn'];
    $dname= $_POST['dn'];
    $date= $_POST['dt'];

    
    
  $sql = "INSERT INTO add_appoinment(pfn, pa, pn, dn, dt) VALUES('$pafn','$paadd','$phn','$dname','$date')";
 
  
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





      </div>
  


  <h3 style="text-align:left">Doctor list</h3>
  <div>
  <?php 

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
				   
				
				  
				   
			
		          
              </tr>';
    }
    $result->free();
} 
$mysqli ->close();

?>
  </div>
    
  </body>
  </html>
  
  
  </fieldset>

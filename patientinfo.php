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

<?php

$sql = "SELECT id, pfn, pa, pn, dn, dt FROM add_appoinment"; 
echo '<table style="width:60%" border="2" > 

      <tr> 
          <th>ID</font> </th> 
          <th> Patient Full Name: </font> </th> 
          <th> Patient Address:</font> </th> 
          <th> Phone Number:</font> </th> 
          <th> Doctor name:</font> </th> 
          <th> Date:</font> </th> 
   
      </tr>';

if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $ID = $row["id"];
        $pafn= $row['pfn'];
      $paadd= $row['pa'];
      $phn= $row['pn'];
      $dname= $row['dn'];
      $date= $row['dt']; 
		

        echo '<tr> 
                  <td>'.$ID.'</td>
                  <td>'.$pafn.'</td> 
                  <td>'.$paadd.'</td>
                  <td>'.$phn.'</td>
                  <td>'.$dname.'</td>
                  <td>'.$date.'</td>
				   
				
				  
				   
			
		          
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
 



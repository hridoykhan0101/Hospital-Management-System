<! Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> Admin Registration Form </title>  
<style>  
input[type=radio] { width:20px; }  
input[type=checkbox]{ width:20px; }  
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px;  
}     
   
   
input {  
    border: 2px solid #ccc;  
    font-size: 1rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 20px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    background: #8bb2eafa;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: hotpink;  
    text-transform: uppercase;  
}  
    input[type=submit] {    
  border: 2px solid;    
  border-radius: 1px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  
  padding: 1em 3em;    
 position: relative;    
  text-transform: uppercase;    
}    
 
</style>  
</head>  
<body>  
<h1> Admin Registration Form </h1>  
<form method="post" enctype="multipart/form-data" action =?#?>  
<table>  
  <h1>Registration</h1> 
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr>  
  <tr>  
    <td width="159"> <b> Enter your Name </b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter name" /> </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Email </b> </td>  
    <td> <input type="email"  placeholder= "Enter Email" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Password </b> </td>  
    <td> <input type="password" placeholder=" Enter Password" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Address </b> </td>  
    <td> <textarea name="add" > Enter Address </textarea> </td>  
  </tr>  
 
  <tr>  
    <td height="23"> <b> Select your Gender </b> </td>  
    <td>  
    Male <input type="radio" name="g" value="m"/>  
    Female <input type="radio" name="g" value="f"/>  
    </td>  
  </tr>  

  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="save" value="Register"/>  
    </td>  
  </tr>  
</table>  
</form>  
</body>  
</html>  
<?php  
extract($_POST);  
if(isset($save))  
{  
$dob=$yy."-".$mm."--".$dd;  
$h=implode(",",$hobb);  
$img=$_FILES['pic']['name'];  
if($return)  
{  
$msg="<font color='red'>".ucfirst($e)." already exists choose another email </font>";  
}  
else  
{  
$msg= "<font color='blue'> your data saved </font>";  
}  
}  
?>  
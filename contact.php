<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
background-image: ;
}
.row{
background-color:black;
color: #ddd;
padding-bottom: 20px;
}

body {
  margin: 0;
  background-color:orange;
}


.header {
  background-color:skyblue;
  padding: 1px;
  text-align:center;
  color:black;
}


.topnav {
  overflow: hidden;
  background-color: #333;
  padding: 1px;
}
.all {
  padding-top: 10px;
padding-left: 10px;
padding-bottom: 10px;
padding-right: 10px;
color:#ddd;

}
.footer{
  background-color:orangered;
  text-align:center;
  padding-right: 20px;
  color:black;
  padding-top: 23px;
  padding-bottom: 0.5px;


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


.info{

  padding-left: 120px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
 .column.left.column.right {
    width: 100%;
  }
}
.column {
  float: left;
}
.column.left {
  width: 50%;
  padding-left: 30px;
  padding-top: 100px;

}
.column.right{
width: 50%;
padding-left: 70px;
padding-top: 20px;

}
h1 {
text-align: center;

}
#tex{
  background-color: #333;
  color: aliceblue;
}

</style>
</head>
<body>
  <div class="all" >

<div class="header">
  <h1>Hospital Management System</h1>
  <p><H3>H.M.S</H3></p>
</div>

<div class="topnav">
  <a href="home.php"><b>Home</b></a>
  <a href="service.php"><b>Services</b></a>
  <a href="admin.php"><b>Admin Login</b></a>
  <a href="index.php"><b>User Login</b></a>
  <a href="contact.php"><b>Contact</b></a>
</div>
<div class="row">
  <div class="column left">
      <p style="color: green;"><b>Your Feedback</b></p>
      <textarea id="tex" name="tex" rows="15" cols="40">Please submit your feedback here</textarea>
    <br>
    <input type="submit" value="Submit">
  </form> 
    </div>
    
    <div class="column right">
      <h3 style="color: green;" align = "center">Contact</h3>
     
      <h4 align = "center"> <a href = "https://www.facebook.com/hridu0101" target ="_blank">https://www.facebook.com/hridu0101</a></h4>
      
      <h4 align = "center"><a href = "https://www.instagram.com/hasinur0101/" target ="_blank">https://www.instagram.com/hasinur0101/</a></h4>
      
      <h4 align = "center"><a href = "https://www.t.me/hasinur2512" target ="_blank">https://www.t.me/hasinur2512</a></h4>
      
      <h4 align = "center"> <a href = "hasinurrahman01012018@gmail.com" target ="_blank">hasinurrahman01012018@gmail.com</a></h4>
    
  </div>
  </div>
  <div class="footer">
    <p><b>Copyright © 2023. All Rights Reserved. ANARUL-HASINA Specialized Hospital Ltd.</b></p>
    <p><b>Designed and Developed by Hasinur Rahman</b></p>

</div>
</div>

</body>
</html>



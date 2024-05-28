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
  width: 100%;
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
    <h1 style="color: skyblue;">Welcome to our Hospital</h1>
   <p>The hospital is a showcase of synergy of medical technology and advances in ICT Division through paperless medical records. The skilled nurses, technologists and administrators of ANARUL-HASINA Specialized Hospital, aided by state-of-the-art equipments, provide a congenial infrastructure for the medical professionals in providing healthcare of international standards.
 </p>

  </div>
<div class="column right">
<pre><p >
  <u><h3 style="text-align: center;">Web Site Main Ingredients:</h3></u>
                              <b style="font-size: x-large;">1.Home</b>

                              <b style="font-size: x-large;">2.About</b>

                              <b style="font-size: x-large;">3.Admin Login </b>  (Admin can add Doctor,Add patient,Delete & Edit also.Also Admin Will have everything under his control)

                              <b style="font-size: x-large;">4.User Login</b>    (User can add Appoinment with Availible Doctor.)

                              <b style="font-size: x-large;">5.Contact</b>
  </p></pre>
</div>
  </div>
  <div class="footer">
    <p><b>Copyright © 2023. All Rights Reserved. ANARUL-HASINA Specialized Hospital Ltd.</b></p>
    <p><b>Designed and Developed by Hasinur Rahman</b></p>

  </div>
  </div>
</body>
</html>



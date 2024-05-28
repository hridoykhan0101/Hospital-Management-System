<html>  
<head>  
    <title>Hospital Management system</title>  
      <style>
   
         body{   
            background: #eee;  
        }  
            #frm{  
			border: solid gray 1px;  
			width:25%;  
			border-radius: 2px;  
			margin: 50px auto;  
			background: #8bb2eafa;  
			padding: 50px;  
		}  
			#btn{  
			color: black;  
            font-weight: bold;  
			padding: 7px;  
			margin-left: 70%;  
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
   
        </style>
   
</head>  
<body> 
    <h1> Admin Login Form </h1>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "addNewDoctor.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type="submit" name="" value="Login" onclick="auth()">  
            </p>  
			
			
        </form>  
    </div>  
   
    <script language = "javascript">
        function auth()
        {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if(email == "admin" && password == "admin")
        {
            window.location.assign('home.html');
        }
        else
        {
            alert("Invalid Informations");
            window.location.assign("logpage.html");
            return;
        }
        }
        </script>
</body>     
</html>  
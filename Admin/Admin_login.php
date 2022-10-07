<?php 
     header('X-Frame-Options:"SAMEORIGIN"'); 
     header('X-Content-Type-Options: nosniff');
     header('X-XSS-Protection:"1; mode=block"');
    //  header('x-powered-by: ZendServer 8.5.0,ASP.NET');
    header('x-powered-by: unset X-Powered-By');
?>
<html>  
<head>  
    <title>Admin Login</title>  
    <link rel = "stylesheet" type = "text/css" href = "../CSS/loginas.css">  
    <style>
    </style> 
</head>  
<body>  
<nav class="link">
        <a href="/IMS/index.php">Back to Home</a>
        </nav>
        <h1>Admin Login page</h1>
    <div id = "form_admin">  
        <h1>Login</h1>  
        <form name="form1" action = "Verify.php" onsubmit = "return confirm()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: &nbsp; </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
    <script>  
            function confirm()  
            {  
                var name=document.form1.user.value;  
                var password=document.form1.pass.value;  
                if(name.length=="" && password.length=="") {  
                    alert("Please enter Name and Password");  
                    return false;  
                }  
                else  
                {  
                    if(name.length=="") {  
                        alert("Please enter name");  
                        return false;  
                    }   
                    if (password.length=="") {  
                    alert("Please enter password");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  
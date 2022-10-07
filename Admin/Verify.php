<?php      
    include('../db/db.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
         $sql = "select * from admin_login where Name= '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
          if (mysqli_num_rows($result)>0) {
              # code...
             echo "<h1><center> Login successful </center></h1>"; 
             header("Location: home.php"); 
          }
          else {
            echo'<script href="#"> alert("Incorrect user information")</script>';
          }
          echo "<a><script>history.go(-1)</script>Click here to go back </a>";
           
?> 
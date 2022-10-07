
<html>
    <head>
    <title>Admin HomePage</title>
    <link href="../CSS/homePage.css" type="text/css" rel="stylesheet">
    <link href="header.css" type="text/css" rel="stylesheet">
    <style>
        #right{
   border: 1px solid black;
   margin-top:50px;
   color:white;
   width:600px;
   height:200px;
   background-color:#2ca089;
}
        </style>
    </head>
     <body>
     <div id="navbar">
      <a class="active" href="Home.html">Home</a>
      <a href="profile.php">Profile</a>
      <a href="internships.php">Internships</a>
      <a href="../Department/home2.php">Department </a>
      <a href="logout.php">Logout</a>
      <a href="">Contact Us</a>
  </div>
         <h1 id="h11">Admin Dashboard</h1>
        <div id="left">
            <h1>Menu</h1>
        <nav class="link">
            
            <a href="profile.php">Profile</a><br>
            <br>
            <a href="internships.php">Internships</a><br>
            <br>
            <a href="../Department/home2.php">Department</a><br>
            <br>
             <a href="generatePdf.php">Generate report</a><br>
             <br>
             <a href="company.php">Company</a><br>

        </nav>
        <br>
    </div>
        <div id="right">
        <?php
            echo"<h1>Welcome to the Admin page </h1>";
            echo"<p>The admin has priviledge to contol the entire system, has responsiblity of managing profile <br>
            facilitating the internship applications and  and is responsible for communication with departments</p>";
        ?>
        <p>The admin has the following priviledes
            <ul>
                <li>manage their account</li>
                <li>upload internships</li>
                <li>view internships</li>
                <li>Delete internships</li>
            </ul>
        </p>
        
        </div>

    </body>
</html>

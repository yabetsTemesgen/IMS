<?php
// include 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
  <link href="../CSS/TableStyling.css" type="text/css" rel="stylesheet">
  <!-- <link href="header.css" type="text/css" rel="stylesheet"> -->
    <style>#navbar a{
					padding:10px;
					color: black;
        			font-size: 19px;
        			text-decoration: none;
					float: left;
					margin-left:50px;
				}
				#navbar a:hover {
        		color: white;
        		background-color: black;
       		 	border-radius:8px;
      			}
      			 .active {
       			 background-color: #2ca089;
       			 border-radius:8px;
        	    color: white;
        		font-style: bold;
     			 }
      </style>
  </head>
<body>
<div id="navbar">
      <a  href="home.php">Home</a>
      <a href="profile.php">Profile</a>
      <a class="active" href="internships.php">Internships</a>
      <a href="../Department/home2.php">Department </a>
      <a href="logout.php">Logout</a>
      
  </div> 
    <h2 align="right">Internships posted by companies</h2>
    <?php
    include('../db/db.php');
    $sql="SELECT * FROM internship";

    $response=mysqli_query($con,$sql);
      if($response){
        echo'<table>
            <tr>
            <th>Name of Company</th>
            <th>Category</th>
            <th>Place</th>
            <th>Duration</th>
            <th>Available Positions</th>
            <th>Posted On</th>
            <th>Dead line</th>
            </tr>';

            while($row=mysqli_fetch_array($response)){
              echo'<tr>
                  <td>'.$row['nameOfCompany'].'</td>
                  <td>'.$row['category'].'</td>
                  <td>'.$row['place'].'</td>
                  <td>'.$row['duration'].'</td>
                  <td>'.$row['positions'].'</td>
                  <td>'.$row['postedOn'].'</td>
                  <td>'.$row['applyBy'].'</td>
                  </tr>';
            }
            echo'</table>';
      }
      else{
        echo"could not get a response from the database".mysqli_error($con);
      }
      mysqli_close($con);
    ?>
     <button class="butIntern"> <a href="add_internship.php"> Add Internship </a> </button>
     <button class="butIntern"> <a href="delete_internship.php"> Delete Internship </a> </button>
</body>
</html>

<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- <style>
h2{
        font-style:italic;
        font-size:40px;
        font-weight:bold;
        color: #2ca089;
      }
    input[type=text],input[type=number],select{
    width:40%;
    padding:12px 20px;
    margin: 8px 0;
    display: inline-block;
    border:1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]{
    width: 10%;
    background-color: #2ca089;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
input[type=submit]:hover{
    background-color: #2ca089;
}
        </style> -->
        </head>
<?php
include('../db/db.php');
if(isset($_POST['submit'])){
$id=$_POST['id'];
$category=$_POST['category'];
$postedOn=$_POST['postedOn'];
$applyBy=$_POST['applyBy'];
$nameOfCompany=$_POST['nameOfCompany'];
$aboutInternship=$_POST['aboutInternship'];
$place=$_POST['place'];
$duration=$_POST['duration'];
$positions=$_POST['positions'];
$whoCanApply=$_POST['whoCanApply'];
$sql="INSERT INTO internship (id,category,postedOn,applyBy,nameOfCompany,aboutInternship, place
      ,duration,positions,whoCanApply
     ) VALUES('$id','$category','$postedOn','$applyBy','$nameOfCompany','$aboutInternship','$place','$duration','$positions','$whoCanApply')";


$query=mysqli_query($con,$sql);
if ($query) {

   header("Location: internships.php"); 
}
else {
  echo'<script href="#"> alert("Internships not added successfully")</script>';
}
}
?>
    <body>
<!--        
         <form action="internship_added.php" method="post">
             <h3>ADD Internship</h3>
            <a href="internships.php">View internships</a>
        <label for="id">ID</label><br>
        <input type="text" id="id" name="id"><br>

        <label for="category">Category</label><br>
        <input type="text" id="category" name="category"> <br>

        <label for="postedOn">Posted On</label> <br>
        <input type="date" id="postedOn" name="postedOn"> <br>

        <label for="applyBy">Apply By</label> <br>
        <input type="date" id="applyBy" name="applyBy"> <br>

        <label for="nameOfCompany">Name Of Company</label><br>
        <input type="text" id="nameOfCompany" name="nameOfCompany"> <br>

        <label for="aboutInternship">About Internship</label><br>
        <input type="text" id="aboutInternship" name="aboutInternship"> <br>

        <label for="place">Place</label><br>
        <input type="text" id="place" name="place"> <br>
        
        <label for="duration">Duration</label><br>
        <input type="text" id="duration" name="duration"> <br>
    
        <label for="positions">Positions</label><br>
        <input type="text" id="positions" name="positions"> <br>

        <label for="whoCanApply">Who Can Apply</label><br>
        <input type="text" id="whoCanApply" name="whoCanApply"> <br>

        <input type="submit" name="submit" value="ADD">
    </form>  -->
    
 
    </body>
    </html> 

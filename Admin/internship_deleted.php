<?php
include('../db/db.php');
$sql="DELETE FROM internship WHERE id='" . $_GET['id'] . "'";
if(mysqli_query($con,$sql)){
    echo '<script>alert("internship deleted successfully")</script>';
    header("Location: internships.php"); 
}else{
    echo "Error deleting record: ".mysqli_error($con);
}
mysqli_close($con);
?>
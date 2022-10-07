
<?php
include('../db/db.php');
$result= mysqli_query($con, "SELECT * FROM internship");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Delete internship</title>
        <link href="../CSS/TableStyling.css" type="text/css" rel="stylesheet">
        <style>
             *{
                margin-top:20px;
            }
            h2{
                text-align:right;
                margin-top:-40px;
                font-size:60px;
            }
         #navbar a{
        color: black;
        padding: 20px;
        font-size: 19px;
        text-decoration: none;
        margin-top: -50px;
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
      <a href="">Contact Us</a>
  </div>
        <h2>Delete Internships</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>PostedOn</th>
                <th>ApplyBy</th>
                <th>Name of company</th>
                <th>About Internship</th>
                <th>Place</th>
                <th>Duration</th>
                <th>Positions</th>
                <th>Who Can Apply</th>
            </tr>
        <?php
        $i=0;
        while($row=mysqli_fetch_array($result)){
?>
        <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['postedOn']; ?></td>
        <td><?php echo $row['applyBy']; ?></td>
        <td><?php echo $row['nameOfCompany']; ?></td>
        <td><?php echo $row['aboutInternship']; ?></td>
        <td><?php echo $row['place']; ?></td>
        <td><?php echo $row['duration']; ?></td>
        <td><?php echo $row['positions']; ?></td>
        <td><?php echo $row['whoCanApply']; ?></td>
        <td><button><a href="internship_deleted.php?id=<?php echo $row['id']; ?>">Delete</a> </button> </td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
    </body>
    </html>

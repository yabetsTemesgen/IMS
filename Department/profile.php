<?php
include('../db/db.php');
?>
<html>
	<head>
	<!-- <link href="header.css" type="text/css" rel="stylesheet"> -->
		<style>
				h1{
					
					text-align:center; 
					font-size:50px;
					color:#2ca089;
				}
				div{
					margin:auto;
					text-align:center;
				}
				button a{
					color:white;
				}button{
				background-color:#2ca089;
				height:40px;
				width:150px;
				border-radius:20px;
				}
				img{
					width: 400px;
					height:200px;
					margin-top:0px;
				
				}
				#navbar a{
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
      <a  href="home2.php">Home</a>
      <a class="active" href="profile.php">Profile</a>
      <a href="../Admin/internships.php">Internships</a>
      <a href="logout.php">Logout</a>
      <a href="">Contact Us</a>
  </div> 
	<h1> Department profile Page</h1>
	<div>
		<img src="adminpic.jpg">
		<p>Click the button below to edit your account </p>
		<br>
		<button><a href="#">Edit Account </a></button>
		<p>Click the button below to change your password </p>
		<br>
		<button><a href="change_password.php">Change Password </a></button>
		<p>Click the button below to delete your account </p>
		<br>
		<button><a href="delete_account.php">Delete Account </a></button>

			</div>
			</body>
			</html>
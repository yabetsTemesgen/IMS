
<!DOCTYPE html>
<html>
    <head>
    <link href="../CSS/FormStyling.css" type="text/css" rel="stylesheet">
    <!-- <link href="header.css" type="text/css" rel="stylesheet"> -->
        <style>
            *{
                margin-top:20px;
            }
            #h2d{
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
       #navbar a:active {
        background-color: #2ca089;
        border-radius:8px;
        color: white;
        font-style: bold;
      }
     
        </style>
      <script>
              function validate(){
                  var id= document.internForm.id.value;
                  var category= document.internForm.category.value;
                  var postedOn= document.internForm.postedOn.value;
                  var applyBy= document.internForm.applyBy.value;
                  var nameOfCompany= document.internForm.nameOfCompany.value;
                  var aboutInternship= document.internForm.aboutInternship.value;
                  var place= document.internForm.place.value;
                  var duration= document.internForm.duration.value;
                  var positions= document.internForm.positions.value;
                  var whoCanApply= document.internForm.whoCanApply.value;
              
                  if(id==null || id==""){
                      alert("Please insert internship ID");
                      id.focus();
                      return false; 
                  }
                  if(category == null || category==""){
                      alert("Please insert Category");
                      category.focus();
                      return false; 
                  }
                  if(postedOn == null || postedOn==""){
                      alert("Please insert the date posted on");
                      postedOn.focus();
                      return false; 
                  }
                 if(applyBy == null || applyBy==""){
                      alert("Please insert the date applied by");
                      applyBy.focus();
                      return false; 
                  }
                 if(nameOfCompany == null || nameOfCompany==""){
                      alert("Please insert the name of company");
                      nameOfCompany.focus();
                      return false; 
                  }
                  if(aboutInternship == null || aboutInternship==""){
                      alert("Please insert the data about the internship");
                      aboutInternship.focus();
                      return false; 
                  }
                  if(place == null || place==""){
                      alert("Please insert the date");
                      place.focus();
                      return false; 
                  }
                  if(duration == null || duration==""){
                      alert("Please insert the duration");
                      duration.focus();
                      return false; 
                  }
                  if(positions == null || positions==""){
                      alert("Please insert the positions");
                      positions.focus();
                      return false; 
                  }
                  if(whoCanApply == null || whoCanApply==""){
                      alert("Please insert the information about who can apply");
                      whoCanApply.focus();
                      return false; 
                  }
                }
        </script>
    
    </head>
     <body id="body">
     <div id="navbar">
      <a class="active" href="home.php">Home</a>
      <a href="profile.php">Profile</a>
      <a href="internships.php">Internships</a>
      <a href="../Department/home2.php">Department </a>
      <a href="logout.php">Logout</a>
      <a href="">Contact Us</a>
  </div>
        <h2 id="h2d">Add new Internship </h2><br><br>
        <form name="internForm" action="internship_added.php" method="post" onsubmit="validate()">
        <!-- <h3>Add internship</h3> -->
        <button> <a href="internships.php"> View Internship </a> </button>
            <label for="id">ID</label><br>
            <input type="text" id="id" name="id"><br>

            <label for="category">Category</label><br>
            <input type="text" id="category" name="category"> <br>

            <label for="postedOn">Posted On</label> <br>
            <input type="date" id="postedOn" name="postedOn"> <br>

            <label for="applyBy">Dead Line</label> <br>
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
        </form>
        
    </body> 
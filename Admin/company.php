<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send Email</title>
<style>
    form{
        text-align:center;
    }
    input[type=text],input[type=number],select,input[type=email]{
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
textarea{
    width:40%;
}
h3{
    color: #2ca089;
    font-family:Montserrat;
    text-align:center;
    font-size:40px;
}
h2{
    color: #2ca089;
    font-family:Montserrat;
    font-size:15px;
}
button{
    width:100px;
    background-color:#2ca089;
    color:white;
    height:30px;
    /* text-align:right; */
    border-radius:20px;
    margin-top:-100px;
    margin-right:auto;
}
button:hover{
    background-color: red;
}
</style>

</head>
<body>
    
    <h3>Fill out the following form to send Email <button onclick="history.go(-1)"><a>GoBack</a></button></h3>
    <!-- <button onclick="history.go(-1)"><a>GoBack</a></button> -->
<form method="post" action="process.php">
<h2>From:</h2>
  <input type="email" name="email1"><br>
<h2>To:</h2>
  <input type="email" name="email"><br>
 <h2>Subject:</h2>
  <input type="text" name="subject"><br><br>
 <textarea rows="8" cols="40" name="message" placeholder="your message">
</textarea> <br>
 <input type="submit" name="btn_send">
               
           </form>
  </body>
</html>

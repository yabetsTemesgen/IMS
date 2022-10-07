<?php
    session_start();
    unset($_SESSION["Name"]);
    unset($_SESSION["Password"]);
    header("Location:admin_login.php");
?>
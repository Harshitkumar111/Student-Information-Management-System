<?php
session_start();

session_destroy();

header("location: Student_login.php");
exit; 
?>
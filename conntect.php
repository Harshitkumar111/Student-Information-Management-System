
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$database="bit2022";


$conn = mysqli_connect($servername,$username,$password,$database);

 if ($conn) {
   
 }
     else{
         die(mysqli_error($conn));
 }
?>
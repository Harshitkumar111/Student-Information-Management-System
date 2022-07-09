<?php
session_start();
include('conntect.php');
if(isset($_SESSION['user_id'])){
 


}else{
$loggedin = false;
$username="";
header('Location:Admin_login_page.php');

}

if(isset($_GET['deleteid'])){


    $student_id=$_GET['deleteid'];
    $quary="delete  from student_information where student_id = '$student_id'";
    $result=mysqli_query($conn,$quary);
    
if($result){
    header('location: Admin_Display_All_Student.php');
}
else{
    die(mysqli_error($conn));
}
}


?>
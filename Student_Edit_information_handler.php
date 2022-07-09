<?php
session_start();

echo $_SESSION['username']; 
 include 'conntect';
if(isset($_SESSION['username'])){

}else{
$loggedin = false;
$username="";
header('Location:Student_login.php');

}

if(isset($_GET['update'])){
    $id=$_GET['update'];

    $quary=" select * from student_information where id='$id' ";
    $result =mysqli_query($conn,$quary);
    $row=mysqli_fetch_assoc($result);


   $first_name =$row['first_name'];
   
}else{
   $first_name =" ";

}
if(isset($_POST['Update'])){
    $first_name=$_POST['first_name'];

     
    $quary= "update student_information set first_name ='$first_name'  where id='$id'";
    $result=mysqli_query($conn,$quary);

    if($result){
     
       header('location:Student_View_information.php');
    }else{
        die(mysqli_error($conn));

        
    }

}
?>
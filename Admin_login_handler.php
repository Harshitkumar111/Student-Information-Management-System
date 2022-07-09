<?php
  include 'conntect.php';
session_start();
if (isset($_SESSION['user_id'])) {
  header("location: Admin_home_page.php");

}else {
    
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
      $user_id=$_POST["user_id"];
      $password=$_POST['password']; 
      $query="Select * from admin_login where user_id ='$user_id' and password='$password' ";
      $result=mysqli_query($conn,$query);
      $num = mysqli_num_rows($result);
      if($num == 1){
                   
        $row=mysqli_fetch_assoc($result);
               if($row['user_id'] == $user_id && $row['password'] == $password) {
                       $login  = true;
                       
                       $_SESSION['loggedin']=true;
                       $_SESSION['user_id']=$row['user_id'];
                       $_SESSION['password']=$row['password'];
                       $_SESSION['last_login_date']=$row['last_login_date'];

                       

                       header("location: Admin_home_page.php");
       

                  }

         }
   


  }else{
   $showError = "Invalid ";

  }
?>
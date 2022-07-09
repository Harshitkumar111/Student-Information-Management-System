
<?php
  include 'conntect.php';
session_start();
if (isset($_SESSION['username'])) {
  header("location: Student_home_page.php");

}else {
    
}

  $login=false;
  $showError=false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
        $student_id=$_POST["st_id"];
        $password1=$_POST['st_pass']; 
        $query="Select * from student_information where student_id ='$student_id' and student_password='$password1'";
        $result=mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);
        if($num == 1){
               
         $row=mysqli_fetch_assoc($result);
                if($row['student_id'] == $student_id && $row['student_password'] == $password1) {
                        $login  = true;
                        
                        $_SESSION['loggedin']=true;
                        $_SESSION['username']=$row['first_name'];
                        $_SESSION['lastname']=$row['last_name'];
                        $_SESSION['id']=$row['id'];
                        $_SESSION['student_id']=$row['student_id'];
                        $_SESSION['last_login_time']=$row['last_login_time'];

                        

                        header("location: Student_home_page.php");
        

                   }

          }
    


   }else{
    $showError = "Invalid ";

   }

?>

<?php
    if($login){
     echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>success</strong>Congratulations! You Are successfully registered. You can use your Login Id and Password to login to your account.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
     ';
    }
  ?>
<?php
    if($showError){
     echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error</strong> '.$showError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
     ';
    }
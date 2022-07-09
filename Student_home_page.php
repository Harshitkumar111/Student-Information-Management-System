
<?php
session_start();

if(isset($_SESSION['username'])){
 


}else{
$loggedin = false;
$username="";
header('Location:Student_login.php');

}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="Style.css" type="text/css"/>
<title>Home Page</title>
</head>
 
<body>

<div class="header">
     <h2 class="welocome">Welocome to Student Information Managment System</h2>

     <div class="Student_home_header">
           <h2 >Welcome :  <?php echo $_SESSION['username']; ?>   <?php echo $_SESSION['lastname'];?> </h2>
           <h2 class="profile_last_vistied" >Last Vistied  <?php   echo $_SESSION['last_login_time'] ?> </h2>
               <nav class="navMenu">
                   <a href="Student_home_page.php">Home</a>
                   <a href="Student_View_information.php">View Profile</a>
                   <a href="Student_Edit_information.php">Edit Profile</a>
                   <a href="Student_change_password.php">Change Password</a>
                   <a href="Student_logout.php">Logout</a>
           </nav>
       </div>
 </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<div class="main-footer">
   <footer>
     <i class="fa-solid fa-copyright txt-footer" >KAT(Harshit kumaur)Pvt Ltd.MAIET</i>

   </footer>
</div>


</body>
</html>
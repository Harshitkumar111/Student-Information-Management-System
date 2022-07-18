<?php
session_start();

if(isset($_SESSION['user_id'])){
 


}else{
$loggedin = false;
$username="";
header('Location:Admin_login_page.php');

}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="Style.css" type="text/css"/>
<title> Admin Home Page</title>
</head>
 
<body>

<div class="header">
     <h2 class="welocome">Welocome to Student Information Managment System</h2>

     <div class="Student_home_header">
           <h2 >Welcome :  <?php echo $_SESSION['user_id']; ?>   </h2>
           <h2 class="profile_last_vistied" >Last Vistied  <?php   echo $_SESSION['last_login_date'] ?> </h2>
               <nav class="navMenu">
                   <a href="Admin_home_page.php">Home</a>
                   <a href="Admin_Display_All_Student.php">Display All Student</a>
                   
                   <a href="Admin_logout.php">Logout</a>
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
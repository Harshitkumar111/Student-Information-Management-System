<?php
session_start();
include 'conntect.php';
     
if(isset($_SESSION['username'])){
        
}else{
$loggedin = false;
$username="";
header('Location:Student_login.php');

}

if(isset($_SESSION['id'])){

  
        $id= $_SESSION['id'];
        
      
      
       $quary= "SELECT * FROM `student_information` WHERE id='$id'";
      
       $result=mysqli_query($conn,$quary);
        $row=mysqli_fetch_assoc($result);
      
     
        
      
      }else{
        $student_id=" ";
      }

if(isset($_POST['update'])){
             
        
        $student_pass2=$_POST['student_pass2'];
        

        $quary="UPDATE `student_information` SET `student_password`='$student_pass2' WHERE id='$id' ";
   $result=mysqli_query($conn,$quary);
        if($result){
         
           header('location:Student_login.php');
        }else{
                die(mysqli_error($conn));
        }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css" type="text/css"/>
    <title>Student_change_password</title>
</head>
<body>



<div class="header" >
     <h2 class="welocome">Welocome to Student  Information Managment System</h2>

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



       <form method="POST" name="form1">
      
           <td colspan="4"><table style=" margin-top:180px;   margin-left: 430px;" width="30%" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#999999">
                            <td colspan="2" class="stylebig">Reset Your Password</td>
                </tr>
        
                <tr bgcolor="#E1E1E1" class="stylesmall">
                        <td width="35%" align="left" class="style7">Login Id : </td>
                        <td width="65%" align="left"><input name="st_id" type="text" id="st_id"></td>
                </tr>
                <tr bgcolor="#E1E1E1" class="stylesmall">
                        <td align="left" class="style7">Old Password:</td>
                        <td align="left"><input name="st_pass" type="password" id="st_pass"></td>
                </tr>
                <tr bgcolor="#E1E1E1" class="stylesmall">
                        <td align="left" class="style7">New Password:</td>
                        <td align="left"><input name="student_pass2" type="password" id="st_pass"></td>
                </tr>
                <tr bgcolor="#E1E1E1">
                        <td colspan="2" align="center">&nbsp;</td>
                </tr>
                <tr bgcolor="#E1E1E1">
                        <td colspan="2" align="center"> <button type="submit" name="update" id="update" >Update</button>
                        <button onClick="self.location='Student_home_page.php'"  >close</button>	</td>
                </tr>
           </table>
          </td>
    
   </form>





<br><br><br>
<div class="main-footer">
   <footer>
     <i class="fa-solid fa-copyright txt-footer" >KAT(Harshit kumaur)Pvt Ltd.MAIET</i>

   </footer>
</div>



</body>
</html>
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="Style.css" type="text/css"/>
  <title>Student_View_information</title>
</head>
<body>
  
<div class="header">
     <h2 class="welocome">Welocome to Student  Information Managment System</h2>

     <div class="Student_home_header">
           <h2 >Welcome :  <?php echo $_SESSION['username']; ?>   <?php echo $_SESSION['lastname'];?> </h2>
           <h2 class="profile_last_vistied" >Last Vistied  <?php   echo $_SESSION['last_login_time'] ?></h2>
               <nav class="navMenu">
                   <a href="Student_home_page.php">Home</a>
                   <a href="Student_View_information.php">View Profile</a>
                   <a href="Student_Edit_information.php">Edit Profile</a>
                   <a href="Student_change_password.php">Change Password</a>
                   <a href="Student_logout.php">Logout</a>
           </nav>
       </div>
 </div>
          <div style="margin-left: 10px; margin-top: 80px;">
              <tr>
              <td width="100%" height="80%" align="center">
                <table width="80%" border="1" cellpadding="2" cellspacing="0" margin-left="5px" bordercolor="#CCCCCC">
              <tr bgcolor="#EEEEEE">
              <td colspan="4" align="center" class="stylemedium"><b>View Information</b></td>
              </tr>
              <tr class="stylesmall">
                  <td>Name  </td>
                  <td><?php echo $row['first_name'] ; ?>   <?php echo $row['last_name'];?></td>
              <tr class="stylesmall">
                  <td>Registration Date </td>
                  <td><?php echo $row['registration_date']; ?></td>


              <tr class="stylesmall">
                  <td>Student Gender</td>
                  <td>  <?php echo $row['gender'];  ?></td>
              
                  <td>Date Of Birth  </td>
                  <td><?php echo $row['date_of_birth'];  ?></td>
              </tr>
              <tr class="stylesmall">
                  <td>Qualification</td>
                  <td><?php echo $row['qualification'];  ?></td>
                  <td>Contact Number</td>
                  <td><?php echo $row['contact_no'];  ?></td>
              </tr>


              
              
              </tr>
              <tr class="stylesmall">
                  <td>Primary Email </td>
                  <td><?php echo $row['email1'];  ?></td>
                  <td>Secondary Email</td>
                  <td><?php echo $row['email2'];  ?></td>
              
              </tr>
              <tr class="stylesmall">
                  <td>Address</td>
                  <td colspan="3"><?php echo $row['address'];  ?></td>
              </tr>
              <tr class="stylesmall">
                  <td> Description</td>
                  <td colspan="3"><?php echo $row['description'];  ?></td>
              </tr>
              
              <tr class="stylesmall">
                 <td colspan="4" align="center" class="stylemedium"> <button onClick="self.location='Student_home_page.php'"  >close</button></td>
               
              </tr>
    </table>

<div   style=" width: 18%; float: right; margin-top: -220px; margin-right:10px; height: 217px; " >
       <img src= <?php echo $row['image'];  ?>  width="100%" height="100%" />
</div>

</div>
<br><br>





<div class="main-footer">
   <footer>
     <i class="fa-solid fa-copyright txt-footer" >KAT(Harshit kumaur)Pvt Ltd.MAIET</i>

   </footer>
</div>
</body>
</html>
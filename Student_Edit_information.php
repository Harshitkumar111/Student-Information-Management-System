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
     $first_name=$_POST['first_name'];
     $last_name=$_POST['last_name'];
     $gender=$_POST['gender'];
     $date_of_birth=$_POST['dob'];
     $email1=$_POST['email1'];
     $email2=$_POST['email2'];
     $contact_no=$_POST['contact_no'];  
     $address=$_POST['address'];
     $description=$_POST['description'];
     $resume=$POST['resume'];

     $quary="UPDATE `student_information` SET `first_name`='$first_name',`last_name`='$last_name',`gender`='$gender' ,`date_of_birth`='$date_of_birth', `email1`='$email1', `email2`='$email2' , `contact_no`='$contact_no',`address`='$address' , `description`='$description', `resume`='$resume' WHERE id='$id'";

     $result=mysqli_query($conn,$quary);
     if($result){
      
        header('location:Student_View_information.php');
 }
else{
  die(mysqli_error($conn));
}

 }


?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="Style.css" type="text/css"/>
<title>Student_Edit_information</title>
</head>
 
<body>

<div class="header">
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

 <form name="form1" method="POST"  >
<table  style=" margin-top:100px;   margin-left: 120px;" width="80%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
<tr bgcolor="#EEEEEE">
<td colspan="4" align="center" class="stylemedium"> Edit Information</td>
</tr>
<tr class="stylesmall">
<td>First Name <span class="stylered">*</span> </td>
<td><input name="first_name" type="text" id="first_name" maxlength="50" value=" <?php echo $row['first_name'] ; ?> " ></td>
<td>Last Name <span class="stylered">*</span> </td>
<td><input name="last_name" type="text" id="last_name" maxlength="30" value=" <?php echo $row['last_name'] ;?> "  ></td>
</tr>
<tr class="stylesmall">
<td>Gender</td>
<td><input name="gender" type="radio" value="Male" 
     <?php
      if($row['gender']== "Male")
      {
        echo "checked";
      }
     
     
     ?>
  

      > Male<input name="gender" type="radio" value="Female"
      <?php
      if($row['gender'] == "Female")
      {
        echo "checked";
      }
     
     
     ?>> Female</td>
 
<td>Date Of Birth <span class="stylered">*</span> </td>
<td><input name="dob" type="text" id="dob" size="10" maxlength="10"  value=" <?php echo $row['date_of_birth']; ?> ">
DD-MM-YYYY</td>
</tr>

<tr class="stylesmall">
<td>Qualification <span class="stylered">*</span> </td>
<td><select name="qualification" id="qualification" >

      <option value=" HigH School " <?php if($row['qualification']=='High School') { echo "selected"; } ?>>High School</option>
      <option  value="Graduate" <?php if($row['qualification']=='Graduate') { echo "selected"; } ?> >Graduate</option>
      <option value=" B.Tech" <?php if($row['qualification']=='B.Tech') { echo "selected"; } ?> >B.Tech</option>
      <option  value="M.Tech " <?php if($row['qualification']=='M.Tech') { echo "selected"; } ?> >M.Tech</option>
      <option  value="Master Degree " <?php if($row['qualification']=='Master Degree') { echo "selected"; } ?> >Master Degree</option>


</select></td>
<td>Contact No</td>
<td><input name="contact_no" type="text" id="contact_no" maxlength="20" value=" <?php echo $row['contact_no'];?> "></td>
</tr>


<tr class="stylesmall">
<td> City</td>
<td><input name="city" type="text" id="city" maxlength="30" value=" <?php echo $row['city']; ?> "></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr class="stylesmall">
<td>Primary Email <span class="stylered">*</span> </td>
<td><input name="email1" type="text" id="email1" maxlength="100" value=" <?php echo $row['email1']; ?> "></td>
<td>Secondary Email</td>
<td><input name="email2" type="text" id="email2" maxlength="100" value=" <?php echo $row['email2']; ?> "></td>
 
</tr>

<tr class="stylesmall">
<td>Address</td>
<td colspan="3"><textarea name="address" cols="45" rows="2" id="address" ><?php echo $row['address']; ?></textarea></td>
</tr>
<tr class="stylesmall">
<td> Description</td>

<td colspan="3"><textarea name="description" cols="45" rows="3" id="description"><?php echo $row['description']; ?></textarea></td>
</tr>

<tr class="stylesmall">
<td>Upload Resume </td>
<td colspan="3"><input name="resume" type="file" > <span
class="stylered">.doc , .txt, .pdf file only</span></td>
</tr>
<tr>
<tr class="stylesmall">
                 <td colspan="4" align="center" class="stylemedium"> <button type="submit" name="update" id="update" >Update</button> &nbsp;
                 <button onClick="self.location='Student_home_page.php'"  >close</button></td>
               
              </tr>
</table>
<br><br>


</form>


<div class="main-footer">
   <footer>
     <i class="fa-solid fa-copyright txt-footer" >KAT(Harshit kumaur)Pvt Ltd.MAIET</i>

   </footer>
</div>


</body>
</html>
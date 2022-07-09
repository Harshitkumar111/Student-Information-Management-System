<?php
session_start();
include('conntect.php');
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="Style.css" type="text/css"/>
<title>Admin_Display_All_Student</title>
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


<br><br><br><br><br><br>



<table class="table" >
  <thead>
    <tr>
      <th scope="col">Student Id</th>
      <th scope="col">Registration</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">City</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php
  
  
  $sql=" select * from student_information";
   $result =mysqli_query($conn,$sql);

    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $student_id=$row['student_id'];
        $first_name=$row['first_name'];
        
        $last_name=$row['last_name'];
        $registration_date=$row['registration_date'];
        $email1=$row['email1'];
        $contact_no=$row['contact_no'];
        $city=$row['city'];

        echo  '<tr> 
        <th scope="row"> '.$student_id.' </th>
        <th>'.$registration_date.' </th>
        <th>'.$first_name.' '.$last_name.' </th>
        <th>'.$email1.' </th>
       
        <th>'.$contact_no.' </th>
        <th>'.$city.' </th>
        <th>  <div class="btn btn-primary "> <a href="Admin_Student_id_delete.php?deleteid='.$student_id.'"   name="deleteid" id"deleteid" class="text-light" >Delete </a></th>

        

        </tr>' ;
      }
    }
  
  
  
  ?>

</table>



<br><br><br><br><br><br>
<div class="main-footer">
   <footer>
     <i class="fa-solid fa-copyright txt-footer" >KAT(Harshit kumaur)Pvt Ltd.MAIET</i>

   </footer>
</div>


</body>
</html>
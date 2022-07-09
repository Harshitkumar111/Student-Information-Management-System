<?php
 

include 'Conntect.php';
if(isset($_POST["first_name"])){

    $target = "image/".basename($_FILES['image']['name']) ;
    $target1 = "resume/".basename($_FILES['resume']['name']) ;
            $student_id = $_POST['st_id'];
            $first_name = $_POST['first_name'];         
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $contact_no = $_POST['contact_no'];
            $qualification = $_POST['qualification'];
            $city = $_POST['city'];
            $email1 = $_POST['email1'];
            $email2 = $_POST['email2'];
            $address = $_POST['address'];
            $description = $_POST['description'];

            $imagename ="image/" .$_FILES["image"]["name"];
            $resumname = "resume/" .$_FILES["resume"]["name"];
            
            $dobdate = date("Y-m-d",strtotime($_POST['dob']));
            $password1=$_POST['st_pass'];
          
          
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target));

                
                if(move_uploaded_file($_FILES['resume']['tmp_name'],$target1));

              
           


              if($password1) {
                $hash = $password1;

                $query="insert into student_information (student_id,student_password,first_name,last_name,gender,date_of_birth,contact_no,qualification,city,email1,email2,address,description,resume,image) value('$student_id','$hash','$first_name','$last_name','$gender','$dobdate','$contact_no','$qualification','$city','$email1','$email2','$address','$description','$resumname','$imagename')";
         
         
                $result=mysqli_query($conn,$query);
            if($result){
                session_start();
                $_SESSION['username']=$first_name;
                $_SESSION['lastname']=$rowlast_name;
                $_SESSION['last_login_time']=$rowlast_login_time;
                header("location: http://localhost/php/project2/Student_logout.php?success=1");
                }else{
                    header("location: http://localhost/php/project2/Student_Registration.php?success=0");
                }
            }else{

                header("location: http://localhost/php/project2/Student_Registration.php?success=0");

            }
        }


?>
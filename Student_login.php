<?php
session_start();
if(isset($_SESSION['username'])){ 
  header('Location:Student_home_page.php');
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Login Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="Style.css" type="text/css"/>

<script type="text/javascript"> function validate()
{
if(document.form1.st_id.value=="")
{
alert("Please enter your login Id."); document.form1.st_id.focus(); return false;
}
if(document.form1.st_pass.value=="")
{
alert("Please enter your password."); document.form1.st_pass.focus(); return false;
}
document.getElementById("Student_login_handler").submit();
}
</script>
</head>

    <div class="header">
     <h2 class="welocome">Welocome to Student  Information Managment System</h2>
 </div>

<body onLoad="javascript:document.form1.st_id.focus()">
<form name="form1" method="POST" action="Student_login_handler.php" id="Student_login_handler" >


<tr>
 
<table width="70%" style="margin-left:180px; margin-top:10px;" >
<tr>
<td width="8%"><a href="index.php" class="stylelink" style="text-decoration:none; font-family: &quot;Times New Roman&quot;, Times, serif;">Home</a></td>
<td width="35%" align="center">&nbsp;</td>
<td width="27%">&nbsp;</td>
<td width="30%" align="right"><a href="Student_Registration.php" class="stylelink" style="text-decoration:none ; font-weight: bold;">New Student Click Here</a></td>
</tr>




<tr>
<td colspan="4"><table width="30%" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
<tr align="center" bgcolor="#999999">
<td colspan="2" class="stylebig">Student Login Here</td>
</tr>
 
<tr bgcolor="#E1E1E1" class="stylesmall">
<td width="35%" align="left" class="style7">Login Id : </td>
<td width="65%" align="left"><input name="st_id" type="text" id="st_id"></td>
</tr>
<tr bgcolor="#E1E1E1" class="stylesmall">
<td align="left" class="style7">Password:</td>
<td align="left"><input name="st_pass" type="password" id="st_pass"></td>
</tr>
<tr bgcolor="#E1E1E1">
<td colspan="2" align="center">&nbsp;

</td>
</tr>
<tr bgcolor="#E1E1E1">
<td colspan="2" align="center"><input name="login" class="style10" type="submit" id="login" value="Login">
<input name="close" type="button" id="close" class="style10" value="Close" onClick="self.location='index.php'">	</td>
</tr>
</table></td>
</tr>
</table>
</tr>


</form>
  
<div class="main-footer">
   <footer>
     <i class="fa-solid fa-copyright txt-footer" >KAT(Harshit kumaur)Pvt Ltd.MAIET</i>

   </footer>
</div>

</body>
 
</html>



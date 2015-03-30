<?php
@session_start();
// store session data
$regno=$_SESSION['reg_no'];
$password=$_SESSION['pass_word'];




include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 

$query="select * from students Where reg_no='$regno' AND pass_word='$password'";
$result=$db->query($query);
$result=$result->fetch();

 
 if ($regno==$result['reg_no'] && $password==$result['pass_word'])
	
	{
	?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

    <head>        <title></title>
    </head>

    <body style="background-color:#ece2a7">
	<a href="studentwelcomepage.php">
Back
 </a>
	    
 
        <center>  <h1><hr>          <b><font color="grey">  update your information</font><hr> </h1></center>		



  
  
          
    
                    <center>
	<form action="updatestudent.php" method="post">				
                         <table bgcolor="#FFE0C0" border="1">

<tr>
    <td>Password: </td>
    
	<td><input type="text" name="pass" value="<?php echo $result['pass_word'];?>"/></td>
  </tr>

<tr>
    <td>Name: </td>
    
	<td><input type="text" name="name"  value="<?php echo $result['reg_no'];?>"/></td>
  </tr>  
  
 
  <center><td> <input type="submit" name="submit" value="submit"/></td></center>
  
  </table>
  </form>
  
  </center>
  
     </body>
	 <?php 
	 }
	
	 ?>
	 <?php
	 if(isset($_POST['submit'])){
	 include_once 'functions.php';
$obj= new database();

 $db=$obj-> connection();
	 $pass=$_POST['pass'];
	 $name=$_POST['name'];

$query = "UPDATE students SET reg_no='$name',pass_word='$pass'  where reg_no='$regno' ";
$db->exec($query);	 
echo "password has been changed successfully";
session_start();
session_destroy();
echo "<script>window.open('studentsignin.php','_self')</script>";	
	 }
	 ?>
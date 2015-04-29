<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
{
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
	
<html>

    <head>  
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
<link rel="stylesheet" type="text/css" href="css/submitbuttonupdate.css">

	<title></title>
    </head>
<!-- this is header menu bar start included here-->
<?php include('adminheader.php'); ?>
  <a class="back" href="studentwelcomepage.php"><font color=" white">Back</font></a>
	    
 
        <center> <h2><b><font color="grey">  Rename your Password</font> </h2></center>		



  
  
          
    
                    <center>
	<form action="updatestudent.php" method="post" style="margin: 1; text-align: center;>				
     
	 <table bgcolor="#FFE0C0" border="1">

<tr>
    <td><h3>Password:</td>
	<td><input id="text3" type="text" name="pass" value="<?php echo $result['pass_word'];?>"/></td>
</tr>
<!--
<tr>
    <td>Name: </td>
    
	<td><input type="text" name="name"  value="<?php echo $result['reg_no'];?>"/></td>
  </tr>  
  -->
 <br><br>
  <center><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input  id="gobutton" type="submit" name="submit" value="submit"/></td></center>
  
  </table>
  </form>
  
  </center>
  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->
     </body>
	 </html>
	 <?php 
	 }
	
	 ?>
	 <?php
	 if(isset($_POST['submit'])){
	 include_once 'functions.php';
$obj= new database();

 $db=$obj-> connection();
	 $pass=$_POST['pass'];
	// $name=$_POST['name'];

$query = "UPDATE students SET pass_word='$pass'  where reg_no='$regno' ";
$db->exec($query);	 
echo "password has been changed successfully";
session_start();
session_destroy();
echo "<script>window.open('signinform.php?updatepass=You have Successfully changed your password.......!','_self')</script>";	
	 }
	 ?>
	 <?php } ?>
<?php
session_start();
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

    <head>        <title>Student Profile information</title>
	    </head>

    <body style="background-color:ece2a7"">
	<a href="studentwelcomepage.php">
Back
 </a>
	 <center>  <h1><hr>          <b><font color="grey"> Student Profile information</font><hr> </h1></center>
	 
	 
	 <center>
	  <table bgcolor="#FFE0C0" border="1">
<tr>
    <td>Name: </td>
    
	<td><?php echo $result['name'];?></td>
  </tr>  

	  
	  <tr>
    <td>Registration No: </td>
    
	<td><?php echo $result['reg_no']; ?></td>
  </tr> 
  
<tr>
    <td>Password: </td>
    
	<td><?php echo $result['pass_word']; ?></td>
  </tr>


<tr>
    <td>Email adress : </td>
    
	<td><?php echo $result['email_adress']; ?></td>
  </tr>  

<tr>
    <td>Contact: </td>
    
	<td><?php echo $result['contact']; ?></td>
  </tr>    
  
   </table>
 
  
  </center>
  
     </body>
	 </html>
	<?php }  ?>
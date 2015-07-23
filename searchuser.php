<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
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
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 
  <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
  <a class="back" href="adminsection.php"><font color=" white">Back</font></a>
	    
 
        <center> <h2><b><font color="grey">Search Specific User</font> </h2></center>		



  
  
          
    
                    <center>
	<form action="searchuseranother.php" method="post" style="margin: 1; text-align: center;>				
     
	 <table bgcolor="#FFE0C0" border="1">
<tr>
    <td>Give User Name: </td>
    
	<td><input id="text3" type="text" name="name"  value=""/></td>
  </tr> 


 
 
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
	 

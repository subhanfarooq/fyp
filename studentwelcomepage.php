<?php
session_start();
// creating session variables
$_SESSION['reg_no']=$_POST['username'];  // session varible name as reg_no its not database name be remember and post(regno) is the form varible
$_SESSION['pass_word']=$_POST['password'];


// making variables and storing in it and using post method	
//$regno=$_POST['username'];
//$password=$_POST['password'];
// this is the ending of post variables
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet"	href="css/mystylestudentsignin.css" />
</head>



<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 <a href='Signinform.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<!-- <a href='index.php'><IMG SRC='images/wb_back.gif' height=40px width=70px ALIGN=left></a>--> 





<!--inlude the header section where banners dropdown menu is placed  -->
<?php include('header.php'); ?>
   
</center><center>





<table width="100%" height="80%" border="2" class="container">
  <tr valign="top">

<!--this is starting of table section -->
<!--this is starting left section -->
    <td width="1%">
	
	<!--FOR password change button rollover start-->
	 <div class="rollover" > <a href="#"></a> </div>
<a href="updatestudent.php" ><img src="images/rp1.jpg" onMouseOver="this.src='images/rp2.jpg'" onMouseOut="this.src='images/rp1.jpg'"  /></a>
<hr> 
<!--FOR view complaint button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="user_view_section.php" ><img src="images/vc1.jpg" onMouseOver="this.src='images/vc2.jpg'" onMouseOut="this.src='images/vc1.jpg'"  /></a>
<hr> 
<!--FOR view profile button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="Studentprofile.php" ><img src="images/vp1.jpg" onMouseOver="this.src='images/vp2.jpg'" onMouseOut="this.src='images/vp1.jpg'"  /></a>
   <hr> 
<!--this is ending of left section -->
		
<!--FOR inserting complaint button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="Studentcomplaint.php" ><img src="images/sc1.jpg" onMouseOver="this.src='images/sc2.jpg'" onMouseOut="this.src='images/sc1.jpg'"  /></a>
 <hr> 
<!--FOR inserting complaint button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="Studenthodcomplaint.php" ><img src="images/hod1.jpg" onMouseOver="this.src='images/hod2.jpg'" onMouseOut="this.src='images/hod1.jpg'"  /></a>
    </td>	
<!--this is ending of left section -->	
	<td width="99%">
	<center>
	<h1 id="h1index"> Welcome to Student Online Complaint Management<center> System </center></h1>
	</center>
	
	
	
</tr>
</table>



</center>
<br><br><br><br><br>
<center>

 
<?php include('footersection.php');?>
<br></center>

</body>
</html> 


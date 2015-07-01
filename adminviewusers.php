<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>        <title>View Users</title>
 <link rel="stylesheet" type="text/css" href="css/admindeleteuser.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<!-- <a href='index.php'><IMG SRC='images/wb_back.gif' height=40px width=70px ALIGN=left></a>--> 
<a class="back" href="adminsection.php">BACK</a>      
</head>
<body>

 


<center><h1>User Information</h1></center>

<center>
<font color="black">
<?php

mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 

$sql = 'SELECT * FROM students';

$query=mysql_query($sql);

?>
<center>
<?php
echo "<div id='view-wrapper'><table bgcolor='white' border='1' align='center'>"; 

echo "<tr>
<th >ID</th>
          <th > Name </th>
	 <th >Registration NO</th>
	  <th >Password</th>         
         <th >Email Adress </th>
		  <th> Date </th> 
		  <th > Contact </th> 
		  
            
	</tr>";
	 $sno = 1;

while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {


 echo "<tr>
      <td> $sno</td>    
	 <td> $row[name]</td>
	 <td> $row[reg_no]</td>
         <td> $row[pass_word]</td>
	 <td> $row[email_adress] </td>
	 <td> $row[date]</td>
	 <td> $row[contact]</td>
	
	</tr>";
	$sno = $sno+1;
 
}
 echo "</table>";
?></center></font>

<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->

 </body> </html>
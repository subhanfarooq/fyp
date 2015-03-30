<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>        <title>View Users</title>
       
</head>
<body style="background-color:#ece2a7">
<a href="adminsection.php">
BACK
 </a>


<center><h1><hr><b><font color="grey" size ="72">User Information</font></b></h1><hr></center>

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
echo "<div class='table'><table bgcolor='white' border='1' align='center'>"; 

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


 </body> </html>
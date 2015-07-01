<!--this is starting header section -->
<p><center><h1 id="h1index">Welcome to Admin Section Account </h1></center></p>

<!--this is ending of header section -->


<table width="100%" height="80%" border="2" ><!--class="container"-->
  <tr valign="top">
<!--this is starting of table section -->

<!--this is starting left section -->
    <td width="1%">
	
	<!--FOR Add user button rollover start-->
<div class="rollover" > <a href="#"></a> </div>
<a href="adminaddusers.php" ><img src="images/Addusers1.jpg" onMouseOver="this.src='images/Addusers2.jpg'" onMouseOut="this.src='images/Addusers1.jpg'"  /></a>

<!--FOR Delete user button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="admindeleteusers.php" ><img src="images/Delusers1.jpg" onMouseOver="this.src='images/Delusers2.jpg'" onMouseOut="this.src='images/Delusers1.jpg'"  /></a>

<!--FOR view profile button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>

<a href="adminviewusers.php" ><img src="images/viewusers1.jpg" onMouseOver="this.src='images/viewusers2.jpg'" onMouseOut="this.src='images/viewusers1.jpg'"  /></a>
    </td>	
<!--this is ending of left section -->
	
	
<!--this is starting of mid section -->
    <td width="50%" valign="top"><br>

	<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM students';
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2>Students Information</h2>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Registration No</th>
					<th>Password</th>
					<th>Email Adress</th>
					<th>Date of Registration</th>
					<th>Contact</th>
					
				</tr>
			<tr>
			<div align="left"></div>
              <?php
			if (mysql_num_rows($query) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='890' border='1'>
  <tr><br>
    <td bgcolor='#FF0000'><font color='#fff'>No Students Mails to You </td>
  </tr>
</table>
";
   
}

else {
			$sno = 1;
			while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
$id = $row['id'];
//$_SESSION['write_compaint']=$row['write_compaint'];
			

	echo "		<td>$sno</td>
					<td>$row[name]</td>
					<td>$row[reg_no]</td>
					<td>$row[pass_word]</td>
					<td>$row[email_adress]</td>
					<td>$row[date]</td>
					<td>$row[contact]</td>
					</tr>";
$sno = $sno+1;
}}
	echo"		</table>
			
		</div>";	
		
		?>
	
</center>
</table>
</center>
<!--this is ending of table section -->
<?php 
		// no of records number at end of the page//
$sql = "SELECT * FROM  students"; 
$query = mysql_query($sql); //run the query
$total_records = mysql_num_rows($query);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo '<span style="color:brown;font:14px Arial"><b>NUmber Of Pages:</b></span>'; 
echo " &nbsp;&nbsp;&nbsp; ";
for ($i=1; $i<=$total_pages; $i++) 

{ 
            
			
            echo "<b><a href='adminsection.php?page=".$i."'>".$i."</a><b> "; 
			echo " &nbsp;&nbsp;&nbsp;";
			
}; 

?>
	
	
	
	
	
    </td>
<!--this is ending of mid section -->	
	
<!--this is starting right section -->
<!--<td width="30%" align="center" valign="top">
    	
    </td>
<!--this is ending of right aside section -->

  </tr>
</table>

<br><br><br><br>
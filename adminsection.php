<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
{
/*
$_SESSION['reg_no']=$_POST['username'];  // session varible name as reg_no its not database name be remember and post(regno) is the form varible
$_SESSION['pass_word']=$_POST['password'];
*/
?>

<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/adminmainpage.css" />

</head>
<body>	

 
	<!-- this is header menu bar start included here-->
<?php include('adminheader.php'); ?>
     <!-- this is header ending -->
<h2><?php echo $_GET[changed]; ?></h2> 
<h2><?php echo $_GET[changedhod]; ?></h2> 


<!--this is starting header section -->
<p><center><h1 id="h1index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Admin Section Account </h1></center></p>

<!--this is ending of header section -->


<table width="100%" height="80%" border="2" ><!--class="container"-->
  <tr valign="top">
<!--this is starting of table section -->

<!--this is starting left section -->
    <td width="1%">
	
	<!--FOR Add user button rollover start-->
<div class="rollover" > <a href="#"></a> </div>
<a href="adminaddusers.php" ><img src="images/Addusers1.jpg" onMouseOver="this.src='images/Addusers22.jpg'" onMouseOut="this.src='images/Addusers1.jpg'"  /></a>

<!--FOR Delete user button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="admindeleteusers.php" ><img src="images/Delusers1.jpg" onMouseOver="this.src='images/Delusers22.jpg'" onMouseOut="this.src='images/Delusers1.jpg'"  /></a>

<!--FOR view profile button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>

<a href="adminviewusers.php" ><img src="images/viewusers1.jpg" onMouseOver="this.src='images/viewusers22.jpg'" onMouseOut="this.src='images/viewusers1.jpg'"  /></a>

 <div class="rollovergraduate" > <a href="#"></a> </div>   
<a href="editmanager.php" ><img src="images/Ed1.jpg" onMouseOver="this.src='images/Ed2.jpg'" onMouseOut="this.src='images/Ed1.jpg'"  /></a>

<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="edithodaccount.php" ><img src="images/Edhod1.jpg" onMouseOver="this.src='images/Edhod2.jpg'" onMouseOut="this.src='images/Edhod1.jpg'"  /></a>

<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="searchuser.php" ><img src="images/search1.jpg" onMouseOver="this.src='images/search2.jpg'" onMouseOut="this.src='images/search1.jpg'"  /></a>


   </td>	
<!--this is ending of left section -->
	

<!--this is starting of mid section -->
    <td width="50%" valign="top">
	
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
$num_rec_per_page=10;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page;  
/*selecting database for fetching the complaints of students  */
$sql = "SELECT * FROM students LIMIT $start_from, $num_rec_per_page"; 
$query=mysql_query($sql); //run the query

?>
<!-- this section is for the numbering or record fetching in limited order-->

	
	
	<center><h2>Students Information</h2> </center>

		<div id="view-wrapper">
		<center>	 </center>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Registration No</th>
					<!--<th>Password</th>  -->
					<th>Email Adress</th>
					<th>Complaint Date</th>
					<th>Contact</th>
					
				</tr>
			<tr>
			<div align="left"></div>
              <?php
			if (mysql_num_rows($query) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='890' border='1'>
  <tr><br>
    <td bgcolor='#FF0000'><font color='#fff'>No Students Registered </td>
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
			
			
		$password=$row[pass_word];
			$ju=md5($password);

	echo "		<td>$sno</td>
					<td>&nbsp;&nbsp;&nbsp;$row[name]</td>
					<td>&nbsp;&nbsp;$row[reg_no]</td>";
				//	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ju</td>   
				echo"	<td>$row[email_adress]</td>
					<td>&nbsp;&nbsp;$row[date]</td>
					<td>&nbsp;&nbsp;&nbsp;$row[contact]</td>
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
echo '<span style="color:brown;font:14px Arial"><b>Number Of Pages:</b></span>'; 
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

<!--this is ending of table section -->


<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->




</body>
</html>

<?php } ?>
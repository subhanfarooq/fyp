<?php
session_start();
?>


<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styletable.css">	

</head>
<body>	

 
	<!-- this is header menu bar start included here-->
<?php include('adminheader.php'); ?>
     <!-- this is header ending -->
<h1 id="h1index"> <center>Welcome to Online Complaint Management System </center></h1>
  <table width="100%" height="100%"  border="1" class="container">
  <tr valign="top">
<!--this is starting left section -->
    

<td width="95%" valign="top">
	
	<!-- called it in style.css with hqindex h1 styling -->
	
<?php

mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");



$a=$_SESSION['reg_no'];
$sql = "SELECT * FROM complaint_types where reg_no='$a'";
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2>View your All Launched Complaints </h2>
			<table>
				<tr>
					<th>ID</th>
					
					
					<th>Date</th>
					<th>Complaint</th>
					<th colspan="3">Actions</th>
				</tr>
			<tr>
			
			<?php
			$sno = 1;
			while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  

$id = $row['id'];
$write_compaint =$row['write_compaint'];
 
	echo "		<td>$sno</td>
					
					<td>$row[date]</td>
					<td>$write_compaint </td>
					<td><a href='view_complaint_complaintmanager.php?view_page=$id' id='edit-btn'>View</a></td>	
					<td><a href='delete_complaint_complaintmanager.php?del_page=$id' id= 'delete-btn'>Delete</a></td>
					<td colspan='6'><center><a href='user_reply.php?reply_page=$id'id= 'delete-btn'>Reply</center></a></td>
				</tr>
				
				
				
				";
$sno = $sno+1;
}
	echo"		</table>
			
		</div>";	
		
		?>
	
	
	
	 </tr>
</table>
<!--this is ending of table section -->




<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->




</body>
</html>


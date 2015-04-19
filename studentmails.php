<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- this syle sheet is for table styling-->
<link rel="stylesheet" type="text/css" href="css/styletable.css">	

<!-- this section start for the see more option-->
<link rel="stylesheet" type="text/css" href="css/seemore.css">

<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">

<!-- this is for the seemore option to view the full and less complaint this is jquery library-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"  src="css/jquery-1.11.1.min.js"></script>
</head>
<!-- this script for the see more option with javascript code made by user its not library-->
<SCRIPT src="css/seemorejavascript.js"></SCRIPT>


<body>	

<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 <a href='Signinform.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<!-- <a href='index.php'><IMG SRC='images/wb_back.gif' height=40px width=70px ALIGN=left></a>--> 

<a class="back" href="hod.php"><font color=" white">Back</a>

     <!-- this is header ending -->
<h1 id="h1index"> <center>Welcome to Student Complaint mails Section </center></h1>
  <table width="100%" height="100%"  border="1" class="container">
  <tr valign="top">
<!--this is starting left section -->
    

<td width="80%" valign="top">
	
	<!-- called it in style.css with hqindex h1 styling -->
	
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM hod_studentmail';
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2>View All Students Complaints</h2>
			<table>
				<tr>
					<th>ID</th>
					<th>Registration No</th>
					<th>Complaint Type</th>
					<th>Department</th>
					<th>Date</th>
					<th>Complaint</th>
					<th colspan="6">Actions</th>
				</tr>
			<tr>
			
			<?php
			$sno = 1;
			while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
$id = $row['id'];
$_SESSION['write_compaint']=$row['write_compaint'];


	echo "		<td>$sno</td>
					<td>$row[reg_no]</td>
					<td>$row[complaint_type]</td>
					<td>$row[department]</td>
					<td>$row[date]</td>
					<td><div class='comment more'>$_SESSION[write_compaint] &nbsp</div></td>
					 <td colspan='3'><center><a href='reply.php?reply_page=$id'id= 'edit-btn'>Reply</center></a></td>
					<td><a href='delete_complaint_complaintmanager.php?del_page=$id' id= 'delete-btn'>Delete</a></td>
					<td colspan='3'><center><a href='forward.php?forwardreply_page=$id' id= 'forward-btn'>Forward</center></a></td>
                   
				</tr>";
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
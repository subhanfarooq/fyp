<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styletablereply.css" />
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>


</head>


<?php include('adminheader.php');?>

<!--inlude the header section where banners dropdown menu is placed  -->
<?php include('header.php'); ?>
   
</center><center>


<h1>Welcome to head of department page<html>
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


 <br><br>

<div style="text-align: left">
<a class="back" href="index.php"><font color=" white">Back</a>
</div>

  <table width="100%" height="100%"  border="1" class="container">
  <tr valign="top">


<td width="80%" valign="top">
	
	<!-- called it in style.css with hqindex h1 styling -->
	
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM hod_reply';
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2>View All Students Complaints forward by Complaint Manager</h2>
			<table>
				<tr>
					<th>ID</th>
					<th>complaint_id</th>
					<th>reg_no</th>
					<th>date</th>
					<th>reply</th>
					
					<th colspan="6">Actions</th>
				</tr>
			<tr>
			
			<?php
			$sno = 1;
			while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
$id = $row['id'];
$_SESSION['reply']=$row['reply'];


	echo "		<td>$sno</td>
					<td>$row[complaint_id]</td>
					<td>$row[reg_no]</td>
					<td>$row[date]</td>
					
					<td><div class='comment more'>$_SESSION[reply] &nbsp</div></td>
					 <td colspan='3'><center><a href='reply.php?reply_page=$id'id= 'edit-btn'>Reply</center></a></td>
					<td><a href='delete_complaint_complaintmanager.php?del_page=$id' id= 'delete-btn'>Delete</a></td>
					<td colspan='3'><center><a href='forward.php?forwardreply_page=$id'id= 'forward-btn'>Forward</center></a></td>
                   
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
</html></h1>

</center>
<br><br><br><br><br>
<center>

 
<?php include('footersection.php');?>
<br></center>

</body>
</html> 

	 
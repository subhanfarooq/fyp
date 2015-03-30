

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charst="utf-8">
	<title>Students DB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<link rel="stylesheet" type="text/css" href="css/styletable.css">	
			<script type="text/javasript" src="http://localhost/student_example/public/js/script.js"></script>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<a href='complaintmanagersection.php'>Back</a>
<?php

mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 

$sql = 'SELECT * FROM complaint_types';
//$sql = 'SELECT LEFT(`write_compaint`,3) FROM complaint_types';
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
					<th colspan="3">Actions</th>
				</tr>
			<tr>
			
			<?php
			$sno = 1;
			while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
//  $comment = substr($row['write_complant'],0,10);
  //echo $comment;
 // substr($message, start, length);
//$jun = substr($row['write_compaint'],0,5);
$id = $row['id'];
$reg=$row['reg_no'];
$write_compaint = substr($row['write_compaint'],0,17);
 
	echo "		<td>$sno</td>
					<td>$row[reg_no]</td>
					<td>$row[complaint_type]</td>
					<td>$row[department]</td>
					<td>$row[date]</td>
					<td>$write_compaint &nbsp;.......</td>
					<td><a href='reply_complaint_complaintmanager.php?rep_page=$reg' id= 'delete-btn'>Reply</a></td>
					<td><a href='view_complaint_complaintmanager.php?view_page=$id' id='edit-btn'>View</a></td>	
					
				</tr>";
$sno = $sno+1;
}
	echo"		</table>
			
		</div>";
//echo $_GET['deleted'];	
		
		
		?>
	</body>	
	</html>
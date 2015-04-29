<?php

mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

//$_SESSION['reg_no']

$a=$_SESSION['reg_no'];
$sql = "SELECT * FROM  hod_reply ";
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2>View your All Launched Complaints for the complaint manager </h2>
			<table>
				<tr>
					<th>ID</th>
					<th>complaint type	</th>
					<th>Department</th>
					<th>Date</th>
					<th>Complaint</th>
					<th colspan="3">Actions</th>
				</tr>
		    <tr>
		      <div align="left"></div>
              <?php
			if (mysql_num_rows($query) == 0)
			 {
    echo "<table width='400' border='1'>
  <tr>
    <td>No Record found</td>
  </tr>
</table>
";
    exit;
}

else {
			$sno = 1;
			while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
  $id = $row['id'];
$write_compaint =$row['write_compaint'];

echo "		<td>$sno</td>
					<td>$row[complaint_type]</td>
					<td>$row[department]</td>
					<td>$row[date]</td>
					<td><div class='comment more'>$write_compaint &nbsp</div></td>
					<td><a href='view_complaint_complaintmanager.php?view_page=$id' id='edit-btn'>View</a></td>	
					<td><a href='deleteownuser.php?delownuser=$id' id= 'delete-btn'>Delete</a></td>";
					
					//<td colspan='6'><center><a href='user_reply.php?reply_page=$id'id= 'delete-btn'>Reply</center></a></td>
				echo"</tr>";
$sno = $sno+1;
}
	echo"</table></div>";	
	}
		
		?>

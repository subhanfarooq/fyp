<html>
<head>

</center><center>
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

 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 
  <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<body>	


 <br><br>

<div style="text-align: left">
<a class="back" href="hod.php"><font color=" white">Back</font></a>
</div>

<!-- this is for displaying pagination records -->
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
$num_rec_per_page=6;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page;  
/*selecting database for fetching the complaints of students  */
$sql = "SELECT * FROM  hod_forwardreply_by_compmang LIMIT $start_from, $num_rec_per_page"; 
$query=mysql_query($sql); //run the query

?>




<h1>View All Students Complaints forward by Complaint Manager<html>

<h2><?php echo $_GET[deleted]; ?></h2> 
  
  <table width="75%" height="100%"  border="1" class="container">
  <tr valign="top">


<td width="80%" valign="top">
	
	<!-- called it in style.css with hqindex h1 styling -->
	
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM  hod_forwardreply_by_compmang';
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2></h2>
			<table>
				<tr>
					<th>ID</th>
					<th>Student id</th>
					<th>Reg no</th>
					<th>Date</th>
					<th>Reply</th>
					
					<th colspan="8">Actions</th>
				</tr>
			<tr>
			<div align="left"></div>
              <?php
			if (mysql_num_rows($query) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='635' border='1'>
  <tr>
    <td bgcolor='#FF0000'><font color='#fff'>No Forward Mails by you</td>
  </tr>
</table>
";
   
}

else {
			$sno = 1;
			while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
$id = $row['id'];
$_SESSION['reply']=$row['reply'];


	echo "		<td>$sno</td>
					<td>$row[std_id]</td>
					<td>$row[reg_no]</td>
					<td>$row[date]</td>
					
					<td><div class='comment more'>$_SESSION[reply] &nbsp</div></td>
					 <td colspan='3'><center><a href='reply_back_compmanger.php?reply_back_compmang=$id'id= 'edit-btn'>Reply</center></a></td>
					<td><a href='deleteforward_complaints_bymangcomplaint.php?del_com=$id' id= 'delete-btn'>Delete</a></td>
					<td colspan='3'><center><a href='forward.php?forwardreply_page=$id'id= 'forward-btn'>Forward</center></a></td>
                    <td colspan='3'><center><a href='view_comp_&_hodmail.php?reply_page=$id'id= 'view-btn'>View</center></a></td>
				</tr>";
$sno = $sno+1;
}}
	echo"		</table>
			
		</div>";	
		
		?>
	
	
	
	 </tr>
</table>
</center>
<!--this is ending of table section -->
<?php 
		// no of records number at end of the page//
$sql = "SELECT * FROM complaint_types"; 
$query = mysql_query($sql); //run the query
$total_records = mysql_num_rows($query);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

//echo "<a href='pagination.php?page=1'>".'|<'."</a> "; // Goto 1st page 

echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo '<span style="color:brown;font:14px Arial"><b>NUmber Of Pages:</b></span>'; 
echo " &nbsp;&nbsp;&nbsp; ";
for ($i=1; $i<=$total_pages; $i++) 

{ 
            
			
            echo "<b><a href='forwardmail.php?page=".$i."'>".$i."</a><b> "; 
			echo " &nbsp;&nbsp;&nbsp;";
			
}; 
//echo "<a href='pagination.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>




<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->


</body>
</html> 

	 
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
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- this syle sheet is for table styling-->
<link rel="stylesheet" type="text/css" href="css/styletableforcomplaintmanagerhod.css">	

<!-- this section start for the see more option-->
<link rel="stylesheet" type="text/css" href="css/seemore.css">
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
 <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<!-- <a href='index.php'><IMG SRC='images/wb_back.gif' height=40px width=70px ALIGN=left></a>--> 



<h2><?php echo $_GET[forward]; ?></h2> 
<h2><?php echo $_GET[student]; ?></h2> 
<h2><?php echo $_GET[deleted]; ?></h2> 
<br><br>
<a href='helpcommang.php' title="help"><IMG SRC='images/help_and_support.gif' height=40px width=40px ALIGN=RIGHT></a>
     <!-- this is header ending -->
<h1 id="h1index"> <center>Welcome to Complaint Manager Section </center></h1>
  <table width="100%" height="100%"  border="1" class="container">
  <tr valign="top">
<!--this is starting left section -->
    <td width="5%">
	
	 <div class="rollover" > <a href="#"></a> </div>
<a href="inboxcomplaintmanager.php" ><img src="images/inbox1.jpg" onMouseOver="this.src='images/inbox3.jpg'" onMouseOut="this.src='images/inbox1.jpg'"  /></a>
<hr> 
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="replycomplaint_compllaintmanager.php" ><img src="images/reply1.jpg" onMouseOver="this.src='images/reply2.jpg'" onMouseOut="this.src='images/reply1.jpg'"  /></a>
<hr>
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="hodmailtocomplaintmanager.php" ><img src="images/hodmail1.jpg" onMouseOver="this.src='images/hodmail2.jpg'" onMouseOut="this.src='images/hodmail1.jpg'"  /></a>

    </td>

<td width="80%" valign="top">
	
	
	
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
$num_rec_per_page=5;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page;  
/*selecting database for fetching the complaints of students  */
$sql = "SELECT * FROM complaint_types LIMIT $start_from, $num_rec_per_page"; 
$query=mysql_query($sql); //run the query

?>
<!-- this section is for the numbering or record fetching in limited order-->


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
					<th colspan="8">Actions</th>
				</tr>
			<tr>
			<div align="center"></div>
              <?php
			if (mysql_num_rows($query) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='855' border='1'>
  <tr><br>
    <td bgcolor='#FF0000'><font color='#fff'>No Complaint by Any Students!!!!!!!!!!!!</td>
  </tr>
</table>
";
   
}

else {
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
					<td colspan='3'><center><a href='viewforwordmails.php?forwordmails=$id' id= 'view-btn'>View</center></a></td>
                   
				</tr>";
$sno = $sno+1;
}}
	echo"		</table>
			
		</div>";	
		
		?>

	

	
	 </tr>
</table>
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
            
			
            echo "<b><a href='complaintmanagersection.php?page=".$i."'>".$i."</a><b> "; 
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

<?php } ?>
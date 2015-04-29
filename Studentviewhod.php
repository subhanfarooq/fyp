<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
{
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
<link rel="stylesheet" type="text/css" href="css/styletable.css">	
<!-- this section start for the see more option-->
<link rel="stylesheet" type="text/css" href="css/seemore.css">
<!-- this is for the seemore option to view the full and less complaint this is jquery library-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"  src="css/jquery-1.11.1.min.js"></script>
<SCRIPT src="css/seemorejavascript.js"></SCRIPT>
</head>



<body>
<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<!-- <a href='index.php'><IMG SRC='images/wb_back.gif' height=40px width=70px ALIGN=left></a>--> 





<!--inlude the header section where banners dropdown menu is placed  -->
<a class="back" href="studentwelcomepage.php"><font color=" white">&nbsp;&nbsp;Back</font></a>
   
</center>

<?php
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");



$b=$_SESSION['reg_no'];
$sql1 = "SELECT * FROM  hod_studentmail where reg_no='$b'";
$query1=mysql_query($sql1);

?>

		<div id="view-wrapper">
			<h2>View your All Launched Complaints for the Head of department </h2>
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
			if (mysql_num_rows($query1) == 0)
			 {
    echo "<table width='735' border='1'>
  <tr>
    <td>You have not send any complaint to Complaint Manager</td>
  </tr>
</table>
";
   
}

else {
			$sno = 1;
			while($row1 = mysql_fetch_assoc($query1))  //Fetch a result row as an associative array
  {
  

$id = $row1['id'];
$write_compaint =$row1['write_compaint'];
 
	echo "		<td>$sno</td>
					<td>$row1[complaint_type]</td>
					<td>$row1[department]</td>
					<td>$row1[date]</td>
					<td><div class='comment more'>$write_compaint &nbsp</div></td>
					<td><a href='view_complaint_of_hod.php?view_page_of_hod=$id' id='edit-btn'>View</a></td>	
					<td><a href='delete_hodsendmail.php?del_pagehof=$id' id= 'delete-btn'>Delete</a></td>";
					
					
				
				echo"</tr>
				
				
				
				";
$sno = $sno+1;
}}
echo "</div>";
?>
</tr>


</table>

<br><br><br><br><br>
<center>

 
<?php include('footersection.php');?>
<br></center>

</body>
</html> 
<?php } ?>
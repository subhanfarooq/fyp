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
<link rel="stylesheet" type="text/css" href="css/styletablereply.css" />
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/slider.css" />

<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- this syle sheet is for table styling-->
<link rel="stylesheet" type="text/css" href="css/styletableforhod.css">	

<!-- this section start for the see more option-->
<link rel="stylesheet" type="text/css" href="css/seemore.css">

<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">

<!-- this is for the seemore option to view the full and less complaint this is jquery library-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"  src="css/jquery-1.11.1.min.js"></script>
</head>
<!-- this script for the see more option with javascript code made by user its not library-->
<SCRIPT src="css/seemorejavascript.js"></SCRIPT>
<script type="text/javascript" src="jquery-1.11.1.min (1).js"></script>

<script>
        tinymce.init({selector:'textarea'});
</script>


</head>


<?php include('adminheader.php');?>

<!--inlude the header section where banners dropdown menu is placed  -->
<?php include('header.php'); ?>
   
</center><center>
<!--<div style="text-align: left">
<a class="back" href="index.php"><font color=" white">Back</font></a>
</div>
-->
<h2><?php echo $_GET[Succseefullaunch]; ?></h2> 
<h2><?php echo $_GET[successful]; ?> </h2> 
<h2><font color="red"><?php echo $_GET[deleted]; ?> </font></h2> 

<h1><font color="black">Welcome to Head of department page</font></h1>
<body>	

  <table width="100%" height="100%"  border="1" class="container">
  <tr valign="top">
<!--this is starting left section -->
    <td width="5%">
	<!--
	 <div class="rollover" > <a href="#"></a> </div>
<a href="studentmails.php" ><img src="images/studentsmail1.jpg" onMouseOver="this.src='images/studentsmail2.jpg'" onMouseOut="this.src='images/studentsmail1.jpg'"  /></a>
<hr> 
-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="forwardmail.php" ><img src="images/forwardmail1.jpg" onMouseOver="this.src='images/forwardmail2.jpg'" onMouseOut="this.src='images/forwardmail1.jpg'"  /></a>
    </td>

<td width="80%" valign="top">
<center>
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM hod_studentmail';
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2>Students Complaints</h2>
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
$_SESSION['write_compaint']=$row['write_compaint'];


	echo "		<td>$sno</td>
					<td>$row[reg_no]</td>
					<td>$row[complaint_type]</td>
					<td>$row[department]</td>
					<td>$row[date]</td>
					<td><div class='comment more'>$_SESSION[write_compaint] &nbsp</div></td>
					 <td colspan='3'><center><a href='hod_reply_student.php?hod_reply_page_to_std=$id'id= 'edit-btn'>Reply</center></a></td>
					<td><a href='delete_page_of_student_by_hod.php?del_page_of_std_by_hod=$id' id= 'delete-btn'>Delete</a></td>
					<td colspan='3'><center><a href='nil.php?forwardreply_page=$id' id= 'forward-btn'>Forward</center></a></td>
                    <td colspan='3'><center><a href='viewstudenthod.php?viewstdmail=$id' id= 'view-btn'>View</center></a></td>
				</tr>";
$sno = $sno+1;
}}
	echo"		</table>
			
		</div>";	
		
		?>
	
</center>
</table>
<!--this is ending of table section -->




<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->




</body>
</html>





	 <?php } ?>
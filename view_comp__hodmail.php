<?php session_start();
if(!isset($_SESSION['reg_no']))
{
// this is the location if the session is destroyed// 
header("Location:signinform.php");
}

// if the session is not destroyed so it will go to redirect the page view_complaint_complaintmamanager.php//
else
{
//cheking the get variable comming from the studentwelcomepage.php //
if(isset($_GET['reply_page']))
{

?>
<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styletable.css">	
<!-- this section start for the see more option-->
<link rel="stylesheet" type="text/css" href="css/seemore_viewcmmail_by_student.css">
<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">

<!-- this is for the seemore option to view the full and less complaint this is jquery library-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"  src="css/jquery-1.11.1.min (1).js"></script>
</head>
<!-- this script for the see more option with javascript code made by user its not library-->
<SCRIPT src="css/seemorejavascript.js"></SCRIPT>
	
</head>
<body>	

 
<!-- this is header menu bar start included here-->
       <?php include('adminheader.php'); ?>
<!-- this is header ending -->


<!--inlude the header section where banners dropdown menu is placed  -->
<a class="back" href="forwardmail.php"><font color=" white">&nbsp;&nbsp;Back</font></a>

<h1 id="h1index"> <center>Complaint Manager forward complaint to You  </center></h1>

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
					
					<td><a href='deleteforward_complaints_bymangcomplaint.php?del_com=$id' id= 'delete-btn'>Delete</a></td>
					<td colspan='3'><center><a href='forward.php?forwardreply_page=$id'id= 'forward-btn'>Forward</center></a></td>
                   
				</tr>";
$sno = $sno+1;

}
	echo"		</table>
			
		</div>";	
	}	}
	


	
		?>
		
	<?php	
	
	
// this is the msg of complaint manager and fetching it 
$query1="select * from   hod_forwardreply_to_compmang where com_mang_id='$id'";
$result=mysql_query($query1);

//$reply=$result['reply'];
	?>
		<br>
	<!-- this is retreiving of complaint manager mail from table reply-->
<div id="view-wrapper">
		<h2>	HOD mail or Your mail to the Student and Complaint Manager</h2>
			<table>
				<tr>
				    <th>ID</th>
				    <th>Date of Response</th>
					<th>Complaint Manager Mail</th>
					<th colspan="3">Action</th>
				</tr>
			<tr>
			
			
<div align="left"></div>
              <?php
			if (mysql_num_rows($result) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='610' border='1'>
  <tr>
    <td bgcolor='#FF0000'><font color='#fff'>No Forward Mails by you</td>
  </tr>
</table>
";
   
}

else {
$sno = 1;


while($row1= mysql_fetch_array($result))
{


 
	echo "		<td>$sno</td>
				<td> $row1[date]</td>
				<td><div class='comment more'> $row1[reply]</div></td>
				<td><a href='delete_own_hodmail.php?del_own_hodmail=$id' id= 'delete-btn'>Delete</a></td>
				</tr>
				";
				
$sno = $sno+1;




}
}
	echo"		</table>
			
		</div>";	
	}	
		//<div>$post_content<a id='rmlink' href='details.php?post=$post_id'>Read More</a></div><br>
		?>	 
	


<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->




</body>
</html>



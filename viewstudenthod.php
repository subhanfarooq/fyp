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
if(isset($_GET['viewstdmail']))
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
<a class="back" href="hod.php"><font color=" white">&nbsp;&nbsp;Back</font></a>

<h1 id="h1index"> <center>Specific User  </center></h1>

<?php  
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

if(isset($_GET[viewstdmail]))
{
$id=$_GET['viewstdmail'];


// this is the msg of user to see its own msg
$query="select * from hod_studentmail where id='$id'";
$run_post=mysql_query($query);



?>
<div id="view-wrapper">
			<h2>Student Mail</h2>
			<table>
				<tr>
					<th>ID</th>
					<th>Your Registration No</th>
					<th>Date of Lanch</th>
					<th>Your complaint</th>
					<th colspan="3">Actions</th>
				</tr>
			<tr>		

<?php
$sno = 1;
while($row= mysql_fetch_array($run_post))
{
$id = $row['id'];

 
	echo "		<td>$sno</td>
					<td>$row[reg_no]</td>
					
					
					<td>$row[date]</td>
					<td><div class='comment more'>$row[write_compaint]</div></td>
					<td><a href='delete_complaint_complaintmanager.php?del_page=$id' id= 'delete-btn'>Delete</a></td>";
					//<td><a class='lightbox' href='reply_user.php?reply_page=$id' id='edit-btn'>Reply</a></td>	
	echo"
				</tr>
				
				";
$sno = $sno+1;





}
	echo"		</table>
			
		</div>";	
	}	
		
		?>
		
		
		<br>
	<!-- this is retreiving of complaint manager mail from table reply-->
<div id="view-wrapper">
		<h2>	HOD mail or Your mail</h2>
			<table>
				<tr>
				    <th>ID</th>
				    <th>Date of Response</th>
					<th>Complaint Manager Mail</th>
					<th colspan="3">Action</th>
				</tr>
			<tr>
			
			

<?php
$sno = 1;

// this is the msg of complaint manager and fetching it 
$query1="select * from  hod_reply where complaint_id='$id'";
$result=mysql_query($query1);

//$reply=$result['reply'];

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

<?php } ?>

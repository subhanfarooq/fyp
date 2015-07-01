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
if(isset($_GET['forwordmails']))
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

 
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 
  <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>


<!--inlude the header section where banners dropdown menu is placed  -->
<a class="back" href="complaintmanagersection.php"><font color=" white">&nbsp;&nbsp;Back</font></a>



<?php  
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");


$id=$_GET['forwordmails'];


// this is the msg of user to see its own msg
$query="select * from  hod_forwardreply_by_compmang where std_id='$id'";
$run_post=mysql_query($query);



?>
<div id="view-wrapper">
			<h2>Your Mail</h2>
			<table>
				<tr>
					<th>ID</th>
					<th>Com_mang ID</th>
					<th>Student ID</th>
					<th>Registration No</th>
					<th>Date</th>
					<th>Complaint</th>
					<th colspan="3">Actions</th>
				</tr>
			<div align="left"></div>
              <?php
			if (mysql_num_rows($run_post) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='890' border='1'>
  <tr><br>
    <td bgcolor='#FF0000'><font color='#fff'>No Forward Mails by you</td>
  </tr>
</table>
";
   
}

else {
$sno = 1;
while($row= mysql_fetch_array($run_post))
{
$id = $row['id'];

 
	echo "		<td>$sno</td>
	            <td>$row[id]</td>
					<td>$row[std_id]</td>
					
					
					<td>$row[reg_no]</td>
					<td>$row[date]</td>
					<td><div class='comment more'>$row[reply]</div></td>
					<td><a href='delete_mang_ownforward_msg.php?del_pag=$id' id= 'delete-btn'>Delete</a></td>";
					//<td><a class='lightbox' href='reply_user.php?reply_page=$id' id='edit-btn'>Reply</a></td>	
	echo"
				</tr>
				
				";
$sno = $sno+1;


}}
	echo"		</table>
			
		</div>";	
	}	
		
		?>
		<br><br>
<?php  
// this is the msg of complaint manager and fetching it 
$query1="select * from hod_forwardreply_to_compmang where com_mang_id='$id'";
$result=mysql_query($query1);

?>		
		
		<div id="view-wrapper">
		<h2>	Head of Department response mail</h2>
			<table>
				<tr>
				    <th>ID</th>
				    <th>compl_mang_id</th>
					 <th>Std_id</th>
					 <th>Reg_no</th>
					 <th>date</th>
					<th>Head of Department Mail</th>
					<th colspan="3">Actions</th>
				</tr>
			<div align="left"></div>
              <?php
			if (mysql_num_rows($result) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='890' border='1' >
  <tr><br>
    <td bgcolor='#FF0000'><font color='#fff'>No mails by Head of Department</td>
  </tr>
</table>
";
   
}

else {
$sno = 1;


//$reply=$result['reply'];

while($row1= mysql_fetch_array($result))
{


	echo "		<td>$sno</td>
	            <td> $row1[com_mang_id]</td>
				<td> $row1[std_id]</td>
				<td> $row1[reg_no]</td>
				<td> $row1[date]</td>
				<td><div class='comment more'> $row1[reply]</div></td>
				<td><a href='delete_complaint_complaintmanager.php?del_page=$id' id= 'delete-btn'>Student Send</a></td>
				</tr>
				";
				
$sno = $sno+1;





}}
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



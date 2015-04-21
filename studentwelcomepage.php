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
<link rel="stylesheet"	href="css/mystylestudentsignin.css" />
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
<a class="back" href="index.php"><font color=" white">&nbsp;&nbsp;Back</font></a>
   
</center>

<!-- displaying only name of the student -->
<?php
$regno=$_SESSION['reg_no'];
$password=$_SESSION['pass_word'];


include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 

$query="select * from students Where reg_no='$regno' AND pass_word='$password'";
$result=$db->query($query);
$result=$result->fetch();

 
 if ($regno==$result['reg_no'] && $password==$result['pass_word'])
	
	{
	?>
	<center><FONT COLOR=black   SIZE=5> Hello 
	
	<?php
	echo $result['name'];
	
	
	}?>
	</font></center>
	<!-- this is the ending section of php name display -->
	
	
<center>


<center>
	<h1 id="h1index"> Welcome to Student Section </h1>
	</center>

<h2><?php echo $_GET[Succseefullaunch]; ?></h2> 
<h2><?php echo $_GET[deletedhod]; ?></h2> 

<table width="100%" height="80%" border="2" class="container">
  <tr valign="top">

<!--this is starting of table section -->
<!--this is starting left section -->
    <td width="1%">
	
	<!--FOR password change button rollover start-->
	 <div class="rollover" > <a href="#"></a> </div>
<a href="updatestudent.php" ><img src="images/rp1.jpg" onMouseOver="this.src='images/rp2.jpg'" onMouseOut="this.src='images/rp1.jpg'"  /></a>
<hr> 
<!--FOR view complaint button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="user_view_section.php" ><img src="images/vc1.jpg" onMouseOver="this.src='images/vc2.jpg'" onMouseOut="this.src='images/vc1.jpg'"  /></a>
<hr> 
<!--FOR view profile button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="Studentprofile.php" ><img src="images/vp1.jpg" onMouseOver="this.src='images/vp2.jpg'" onMouseOut="this.src='images/vp1.jpg'"  /></a>
   <hr> 
<!--this is ending of left section -->
		
<!--FOR inserting complaint button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="Studentcomplaint.php" ><img src="images/sc1.jpg" onMouseOver="this.src='images/sc2.jpg'" onMouseOut="this.src='images/sc1.jpg'"  /></a>
 <hr> 
<!--FOR inserting complaint button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="Studenthodcomplaint.php" ><img src="images/hod1.jpg" onMouseOver="this.src='images/hod2.jpg'" onMouseOut="this.src='images/hod1.jpg'"  /></a>
    </td>	
<!--this is ending of left section -->	
	<td width="99%">
	
		
<?php

mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

//$_SESSION['reg_no']

$a=$_SESSION['reg_no'];
$sql = "SELECT * FROM complaint_types where reg_no='$a'";
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
			
			<?php
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
				echo"</tr>
				
				
				
				";
$sno = $sno+1;
}
	echo"		</table>
			
		</div>";	
		
		?>
		<br><br><br><br>
	<hr>
	
	<!-- now the head of department section start where the user launch his/her complaint and see it -->
	
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
			
			<?php
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
					
					//<td colspan='6'><center><a href='user_reply.php?reply_page=$id'id= 'delete-btn'>Reply</center></a></td>
				
				echo"</tr>
				
				
				
				";
$sno = $sno+1;
}
	echo"		</table>
			
		</div>";	
		
		?>
	
</tr>


</table>



</center>
<br><br><br><br><br>
<center>

 
<?php include('footersection.php');?>
<br></center>

</body>
</html> 




<?php } ?>

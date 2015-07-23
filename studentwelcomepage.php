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
<!-- <link rel="stylesheet"	href="css/mystylestudentsignin.css" />-->
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
 <!-- this is loogut button -->
 <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
 
<!-- this is help section page start-->
<a href='helpstd.php' title="help"><IMG SRC='images/help_and_support.gif' height=40px width=40px ALIGN=RIGHT></a>


<?php
$regno=$_SESSION['reg_no'];
$password=$_SESSION['pass_word'];

// displaying only name of the student that why we call it from database 
include_once 'function/functions.php';
$obj= new database();
$db=$obj-> connection();

$query="select * from students Where reg_no='$regno' AND pass_word='$password'";
$result=$db->query($query);
$result=$result->fetch();
 
if ($regno==$result['reg_no'] && $password==$result['pass_word'])	
	{
	?>
	<!-- this div is called in styletable.css -->
	<!-- div start using for displaying username for welcome page on studentwelcomepage.php -->
	<div id="boxforstudent">
	<font COLOR=black   SIZE=3> Hi,&nbsp; <?php echo $result['name'];
	
	}?>
	</font>
	</div>
	</center>
	<!-- this is the ending section of php name display -->

<center>
	<h1 id="h1index"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Student Section </h1>
</center>
<center>
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
<!--FOR view complaint button rollover start
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="user_view_section.php" ><img src="images/vc1.jpg" onMouseOver="this.src='images/vc2.jpg'" onMouseOut="this.src='images/vc1.jpg'"  /></a>
-->


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
  <hr> 
<!--FOR inserting complaint button rollover start-->
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="Studentviewhod.php" ><img src="images/vhod1.jpg" onMouseOver="this.src='images/vhod2.jpg'" onMouseOut="this.src='images/vhod1.jpg'"  /></a>
   </td>	
<!--this is ending of left section -->	
	<td width="99%">
	
		
<?php

mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

//$_SESSION['reg_no']
$num_rec_per_page=6;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page;  
$a=$_SESSION['reg_no'];
$sql = "SELECT * FROM complaint_types where reg_no='$a' LIMIT $start_from, $num_rec_per_page";
$query=mysql_query($sql);

?>

		<div id="view-wrapper">
			<h2>View your All Launched Complaints for the Complaint Manager </h2>
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
			<div align="center"></div>
              <?php
			if (mysql_num_rows($query) == 0)
			 {
    echo "<table bgcolor='#DC143C' width='730' border='2'>
  <tr><br>
    <td bgcolor='#FF0000'><font color='#fff'>No Complaint  launched by you!!!!!!!!!!!!</td>
  </tr>
</table>
";
   
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
				echo"</tr>
				
				
				
				";
$sno = $sno+1;
}}
	echo"		</table>
			
		</div>";	
		
		?>
	

	</table>
			
		</div>
		
	
</tr>


</table></center>
<?php 
$a=$_SESSION['reg_no'];
		// no of records number at end of the page//
$sql = "SELECT * FROM complaint_types where reg_no='$a'"; 
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
            
			
            echo "<b><a href='studentwelcomepage.php?page=".$i."'>".$i."</a><b> "; 
			echo " &nbsp;&nbsp;&nbsp;";
			
}; 
//echo "<a href='pagination.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>



<br><br><br><br><br>
<center>

 
<?php include('footersection.php');?>
<br></center>

</body>
</html> 




<?php } ?>

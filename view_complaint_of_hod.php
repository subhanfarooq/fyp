<?php
if(isset($_GET[view_page_of_hod]))
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
<script type="text/javascript"   src="css/jquery-1.11.1.min (1)"></script>
</head>
<!-- this script for the see more option with javascript code made by user its not library-->
<SCRIPT src="css/seemorejavascript.js"></SCRIPT>
	
</head>
<body>	

 
	<!-- this is header menu bar start included here-->
<?php include('adminheader.php'); ?>
     <!-- this is header ending -->
	 
<!--inlude the header section where banners dropdown menu is placed  -->
<a class="back" href="Studentviewhod.php"><font color=" white">&nbsp;&nbsp;Back</font></a>



<?php  
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

$id=$_GET['view_page_of_hod'];

// this is the msg of user to see its own msg
$query="select * from  hod_studentmail where id='$id'";
$run_post=mysql_query($query);
?>

<div id="view-wrapper">
			<h2>Your Mail</h2>
			<table>
				<tr>
					<th>ID</th>
					<th>Your Registration No</th>
					<th>Date of Lanch</th>
					<th>Your complaint</th>
					<th colspan="3">Actions</th>
				</tr>
			<div align="left"></div>
              <?php
			if (mysql_num_rows($run_post) == 0)
			 {
    echo "<table width='500' border='1'>
  <tr>
    <td>You Have not launched any mail please launch the mail !!!</td>
  </tr>
   </table>
";

}

else {
$sno = 1;
while($row= mysql_fetch_array($run_post))
{
//$id = $row['id'];

 
	echo "		<td>$sno</td>
					<td>$row[reg_no]</td>
					
					
					<td>$row[date]</td>
					<td><div class='comment more'>$row[write_compaint]</div></td>
					<td><a href='delete_complaint_complaintmanager.php?del_page=$id' id= 'delete-btn'>Delete</a></td>
					<td><a class='lightbox' href='reply_user.php?reply_page=$id' id='edit-btn'>Reply</a></td>	
					
				</tr>
				
				";
$sno = $sno+1;

}}
echo"</table></div>";	
?>
		
		
<br>
<br>
<?php
// this is the msg of complaint manager and fetching it 
$query1="select * from  hod_reply where complaint_id='$id'";
$result=mysql_query($query1);

//$reply=$result['reply'];
?>
	<!-- this is retreiving of complaint manager mail from table reply-->
<div id="view-wrapper">
		<h2>	Head Of Department Mail Response</h2>
			<table>
				<tr>
				    <th>ID</th>
				    <th>Date of Response</th>
					<th colspan="3">Complaint Manager Mail</th>
				</tr>
			
<div align="left"></div>
              <?php
			if (mysql_num_rows($result) == 0)
			 {
    echo "<table width='500' border='1'>
  <tr>
    <td>You Have no mail from Head of department</td>
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
				</tr>
				";
				
$sno = $sno+1;





}
	echo"		</table>
			
		</div>";	
	}	}
		
		?>	 



<br><br><br><br><br><br><br><br><br><br><br><br>

<?php include('footersection.php');?>
<br></center>

</body>
</html> 
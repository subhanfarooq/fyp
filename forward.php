<?php
session_start();
// store session data
$regno=$_SESSION['reg_no'];
//echo $regno;   //it will display hod name kamranghani
$password=$_SESSION['pass_word'];

// it is the page of complaint manager section for forwarding the msg of the student  and after pressing forwording msg 
//you have to fill the form and the form submission goes to forwardpost.php

 $id=$_GET['forwardreply_page'];
$_SESSION['forward_id']=$_GET['forwardreply_page'];  //that is the get variable fetching from user_view_section


include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 
// complaint_types is the table where student complaint has been store//
$query="select * from complaint_types Where id='$id'";
$result=$db->query($query);
$result=$result->fetch();


	?>
	
	
	
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styletablereply.css" />
<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>


</head>


<?php include('adminheader.php');?>

<a class="back" href="complaintmanagersection.php"><font color=" white">Back</font></a>
   
</center><center>


<!--this is starting of mid section -->
    <td width="75%" valign="top"><br>
<center>
<form action="forwardpost.php" method="post">
<table width="800" align="center" border="2">
<tr>
<td colspan="6"><h1><center>Forward the Mail to Head of Department:</center><h1></td>
</tr>

<tr>
<td align="right"><strong>Registration No:</strong></td>
<td><input type="hidden" name="regno"  value="<?php echo $result['reg_no'];?>" size="60"><center><strong><?php echo $result['reg_no'];?></strong></center> </td>
</tr>




<tr>
<td align="right"><strong>Select Date of reply:</strong></td>
<td><center><input type="date" name="date" size="60"></center></td>
</tr>



<tr>
<td align="right"><strong>Write reply:</strong></td>
<td><textarea name="writecomplaint" value="" rows="20" cols="80"><?php echo $result['write_compaint'];?></textarea></td>
</tr>

<tr>
<td colspan="6" align="center"><input id="shiny" type="submit" name="submit" value="Sent Complaint"/>
</tr>


</center>
    </td>
	</table>
<!--this is ending of mid section -->	
</form>

</center>
<br><br><br><br><br>
<center>

 
<?php include('footersection.php');?>
<br></center>

</body>
</html> 

	 
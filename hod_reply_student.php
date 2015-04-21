<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
{
//echo $regno=$_SESSION['reg_no'];
//$password=$_SESSION['pass_word'];

// $regno; 

$id=$_GET['hod_reply_page_to_std'];
$_SESSION['hod_reply_page']=$_GET['hod_reply_page_to_std'];  //that is the get variable fetching from complaintmanagersection.php
//$_SESSION[hod_reply_page];

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 

$query="select * from hod_studentmail Where id='$id'";
$result=$db->query($query);
$result=$result->fetch();

 $result['reg_no'];
	?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styletablereply.css" />
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>


</head>


<?php include('adminheader.php');?>

<!--inlude the header section where banners dropdown menu is placed  -->
<?php include('header.php'); ?>
   
</center><center>


<!--this is starting of mid section -->
    <td width="75%" valign="top"><br>
<center>
<form action="hod_reply_studentpost.php" method="post">
<table width="700" align="center" border="2">
<tr>
<td colspan="6"><h1><center>Complaint Mail:</center><h1></td>
</tr>

<tr>
<td align="right"><strong>Registration No:</strong></td>
<td><center><b><input type="hidden" name="regno"  value="<?php echo $result['reg_no'];?>" size="60"><?php echo $result['reg_no'];?></b></center></td>
</tr>



<tr>
<td align="right"><strong>Select Date of reply:</strong></td>
<td><center><input type="date" name="date" size="60"></center></td>
</tr>



<tr>
<td align="right"><strong>Write reply:</strong></td>
<td><textarea name="writecomplaint" rows="20" cols="80"></textarea></td>
</tr>

<tr>
<td colspan="6" align="center"><input id="shiny" type="submit" name="submit" value="Sent Complaint"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="resetbutton" type="reset"></td>
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



<?php } ?>


	 
<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
{
$regno=$_SESSION['reg_no'];
$password=$_SESSION['pass_word'];

// $regno;  //subhan as complaint manager

$id=$_GET['reply_page'];
$_SESSION['reply_id']=$_GET['reply_page'];  //that is the get variable fetching from complaintmanagersection.php
//echo $_SESSION[reply_id];

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 

$query="select * from complaint_types Where id='$id'";
$result=$db->query($query);
$result=$result->fetch();

//$result['reg_no'];
	?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styletablereply.css" />
<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>


</head>

 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 
  <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<a class="back" href="complaintmanagersection.php"><font color=" white">Back</font></a>
<!--inlude the header section where banners dropdown menu is placed  -->

   
</center><center>


<!--this is starting of mid section -->
    <td width="75%" valign="top"><br>
<center>
<form action="replypost.php" method="post">
<table width="800" align="center" border="2">
<tr>
<td colspan="6"><h1><center>Complaint mail to Student:</center><h1></td>
</tr>

<tr>
<td align="right"><strong>Registration No:</strong></td>
<td><center><strong><?php echo $result['reg_no'];?></strong></center></td>
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
<td colspan="6" align="center"><input id="shiny" type="submit" name="submit" value="Sent Complaint"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input id="resetbutton" type="reset"></td>
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


	 
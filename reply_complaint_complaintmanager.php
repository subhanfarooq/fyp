<!--<td><a href='reply_complaint_complaintmanager.php?rep_page=$id' id= 'delete-btn'>Reply</a></td>-->
<?php
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

// making new varible name as $rep_page
$rep_page=$_GET['rep_page'];
//here del_page is the get variable in inboxcomplaintmanager.php
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
<form action="reply_complaint_complaintmanager.php" method="post">
<table width="700" align="center" border="2">
<tr>
<td colspan="6"><h1><center>Complaint Mail:</center><h1></td>
</tr>

<tr>
<td align="right"><strong>Registration No:</strong></td>
<td><input type="hidden" name="regno"  value="<?php echo $result['reg_no'];?>" size="60"><center><strong><?php echo $rep_page;?></strong></center> </td>
</tr>

<tr>
<td align="right"><strong>Complaint Type</strong></td>
<td align="center"><input type="radio" name="complainttype" value="Academic"/> Academic<input type="radio" name="complainttype" value="Maintenance"/> Maintenance</td>

</td>
</tr>

<tr>
<td align="right"><strong>Status of Complaint:</strong></td>
<td><center><input type="radio" name="st_of_com" value="Working" />In Process <input type="radio" name="st_of_com" value="not Processed"/> Pending</center></td>
</tr>

<tr>
<td align="right"><strong>Subject of Complaint:</strong></td>
<td><center><input type="text" name="sub_of_com" /></center></td>
</tr>

<tr>
<td align="right"><strong>Reply Back:</strong></td>
<td><textarea name="writecomplaint" rows="20" cols="80"></textarea></td>
</tr>

<tr>
<td colspan="6" align="center"><input id="shiny" type="submit" name="submit" value="Sent Complaint Response"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="resetbutton" type="reset"></td>
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


<?php
$id=$_POST['id'];
$regno=$_POST['regno'];
$comptype=$_POST['complainttype'];
$status=$_POST['st_of_com'];
$subject=$_POST['sub_of_com'];
$replyofcomp=$_POST['writecomplaint'];

$query="insert in to  complaint_manager_mail value ('','reg_no','complaint_type','status_of_complaint','subject_of_complaint','reply_of_complaint') WHERE ='$rep_page'";
//value ('','$registrationno','$com_type','$dep','$date','$wri_com')";

echo"Successfuly send mail";
// here above line we have again create another GET variable name is deleted we call it any where

?>
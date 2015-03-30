<?php
session_start();
	//echo $id=$_POST[''];
    echo $comid=$_SESSION['reply_id'];
	echo $date=$_POST['date'];
	echo $writecomplaint=$_POST['writecomplaint'];

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 
$query =  "INSERT INTO reply value ('','$comid','$date','$writecomplaint')";
 
$db->exec($query);	 
echo "Complaint has been successfully launched";
echo "<script>window.open('complaintmanagersection.php','_self')</script>";

 ?>



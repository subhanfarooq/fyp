<?php
session_start();
	
    $comid=$_SESSION['forward_id'];
	$reg_no=$_POST['regno'];
	 $date=$_POST['date'];
	 $writecomplaint=$_POST['writecomplaint'];

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 
$query =  "INSERT INTO  hod_forwardreply_by_compmang value ('','$comid','$reg_no','$date','$writecomplaint')";
 
$db->exec($query);	 
echo "Complaint has been successfully launched";
echo "<script>window.open('complaintmanagersection.php','_self')</script>";

 ?>



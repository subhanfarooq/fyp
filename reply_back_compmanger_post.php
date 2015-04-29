<?php
session_start();
	
 $com_mang_id=$_SESSION['forward_id_mail'];
//echo "<br>";
$reg_no=$_POST['regno'];
//echo "<br>";
$student_id=$_POST['com_mang'];
//echo "<br>";
 $date=$_POST['date'];
//echo "<br>";
 $writecomplaint=$_POST['writecomplaint'];

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 
$query =  "INSERT INTO hod_forwardreply_to_compmang value ('','$com_mang_id','$student_id','$reg_no','$date','$writecomplaint')";
 
$db->exec($query);	 

echo "<script>window.open('hod.php?successful=successful reply to complaint manager.......!','_self')</script>";

 ?>



	
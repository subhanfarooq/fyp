<?php
session_start();
	
     $comid=$_SESSION['hod_reply_page'];
     $reg=$_POST['regno'];
	 $date=$_POST['date'];
	 $writecomplaint=$_POST['writecomplaint'];

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 
echo $query =  "INSERT INTO  hod_reply value ('','$comid','$reg','$date','$writecomplaint')";
 
$db->exec($query);	 
echo "<script>window.open('hod.php?Succseefullaunch=You have Successfully launch the mail.......!','_self')</script>";

 ?>


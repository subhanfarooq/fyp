<!-- this is next section where variables are made-->	 
<?php
	if(isset($_POST['submit'])){
	
	
	// we are including function file from function folder where we have made the data base and use use it here
include_once 'function/functions.php';
//this is the ending of include folder

// making a variable object for database 
$obj= new database();

 $db=$obj-> connection();
// now we are calling the connection from function file


// making variables and storing in it and using post method	
// complaint_types   reg_no complaint_type department date write_complaint
//regno complainttype department writecomplaint
 $registrationno=$_POST['regno'];
 $com_type=$_POST['complainttype'];
 $dep=$_POST['department'];
 $date=$_POST['date'];
 $wri_com=$_POST['writecomplaint'];

// this is the ending of post variables



 //Selection data from data base so we using sql database
$query =  "INSERT INTO complaint_types value ('','$registrationno','$com_type','$dep','$date','$wri_com')";
 
$db->exec($query);	 
echo "<script>window.open('studentwelcomepage.php?Succseefullaunch=You have Successfully launch the mail.......!','_self')</script>";
}
?>
